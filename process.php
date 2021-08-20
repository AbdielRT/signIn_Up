<?php
// Check if login attemp via our login form
if(isset($_POST["login"])){
    if(!empty($_POST["user"]) && !empty($_POST["password"])){
        $user = addslashes($_POST['user']);
        $password = addslashes($_POST['password']);

        try {
            // connect to sql database
            $dbh = new PDO('mysql:host=localhost;dbname=tuto_login', 'root', '');
            // prepare sql query
            $sth = $dbh->prepare("SELECT * FROM login WHERE email ='$user' AND password = '$password' ");
            // execute sql query
            $sth->execute();
            // stock query result in an associative array
            $identifiers = $sth->fetch(PDO::FETCH_ASSOC);

            $sth = null;
            $dbh = null;
            // if user and password correct => successful sql query => no empty ass_array => true
            if ($identifiers){
                // initialises a session
                session_start();
                $_SESSION['idUser'] = $identifiers['id'];
                $_SESSION['name'] = $identifiers['prenom'];
                $_SESSION['lastName'] = $identifiers['nom'];

                header('Location:./dashboard.php?status=success');
            } else {
                header('Location:./index.php?status=error');
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }


    }
}