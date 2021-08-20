<?php
$regexPassword = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d@$!%*?#&])[A-Za-z\d@$!%*?#&]{8,}$/";
if(isset($_POST["signup"])){
    if(!empty($_POST["signupUser"]) && !empty($_POST["signupPassword"]) &&
    preg_match($regexPassword,$_POST["signupPassword"]) &&
    ($_POST["signupPassword"]==$_POST["signupPasswordConfirm"]) ){
        // retrieve form input from registered user 
        $name = addslashes($_POST['name']);
        $lastName = addslashes($_POST['lastName']);
        $email = addslashes($_POST['signupUser']);
        $password = addslashes($_POST['signupPassword']);
        $token = uniqid();

        try {
            // connects to db in mysql
            $dbh = new PDO('mysql:host=localhost;dbname=tuto_login', 'root', '');
            // prepares sql query
            $sth = $dbh->prepare("INSERT INTO `login`( `nom`, `prenom`, `email`, `password`, `token`, `validation`, `confirmation`, `date_creation`) 
            VALUES (:lastName,:name, :email, :password,:token,'0','0',NOW())");
            // sets the variable values to pass in the sql query
            $sth->bindParam(':lastName',$lastName);
            $sth->bindParam(':name',$name);
            $sth->bindParam(':email',$email);
            $sth->bindParam(':password',$password);
            $sth->bindParam(':token',$token);
            // executes the prepared statement 
            $sth->execute();
            // closes sessions
            $sth = null;
            $dbh = null;
            // heads to page with status registered
            header('Location:index.php?status=registered');
        } catch (PDOException $e){
            // prints error caught at the PDO connection
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }    
    } else {
        header('Location:index.php?status=error');    
    } 
} else {
    header('Location:index.php');
}