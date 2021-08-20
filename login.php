<?php 
    // verifies if there's a status in the url
    if (isset($_GET['status'])){
        $status = $_GET['status'];
        
        if($status === 'error'){ ?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Oh snap!</strong> Try again.
            </div>
<?php
        } elseif ($status === 'registered') { ?>
            <div class="alert alert-dismissible alert-info">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Well done!</strong> Now you can log in.
            </div>
<?php
        }
    }


?>

<div class="row justify-content-center">
    <div class="col-sm-8 col-md-4 col-lg-4">
      <form action='process.php' method='post'>
        <fieldset>
            <legend>Log In to MyService</legend>
            <div class="form-group">
                <label for="InputUser" class="form-label mt-4">User</label>
                <input type="email" class="form-control" id="InputUser" 
                    aria-describedby="emailHelp" placeholder="example@mail.com" name='user' required>
                <small id="emailHelp" class="form-text text-muted">Your username is your registered email address.</small>
            </div>
            <div class="form-group">
                <label for="InputPassword" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="InputPassword" placeholder="Password" name='password' required>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary" id='btn-login' name="login" value="Log In">
            </div>
        </fieldset>
      </form>
    </div>
</div>
