<?php
if (!isset($_GET['status'])){
    header('Location:./index.php');
} else {
    $status = $_GET['status'];
    
    require_once 'parts/header.php';

    if($status == 'success'){  ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Welcome back <?php echo $_SESSION['name'];?> !</strong> You're logged in.
        </div>
<?php    }
} ?>
<div class="row center-sm center-md center-lg">
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img src="./imgs/connected.svg" alt="connection image" id="connectedSVG">
    </div>
</div>
<div class="container">
    <button type="button" class="btn btn-danger">
        <a href="./logout.php">Log Out</a>

    </button>
</div>
<?php
require_once 'parts/footer.php';
?>