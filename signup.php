<div class="row justify-content-center">
    <div class="col-sm-8 col-md-5 col-lg-5">
      <form action='register.php' method='post'>
        <fieldset>
            <legend>Sign Up to MyService</legend>
            <div class="form-group">
                    <input type="text" class="form-control" 
                    name="name" id="inputName" placeholder="Name">
                    <input type="text" class="form-control" 
                    name="lastName" id="inputLastName" placeholder="Last Name">
            </div>
            <div class="form-group has-success has-danger">
                <label for="signupEmail" class="form-label mt-4">Email</label>
                <input type="email" class="form-control" id="signupEmail" 
                    aria-describedby="emailHelp" placeholder="example@mail.com" 
                    name='signupUser' required>
                <small id="emailHelp" class="form-text text-muted">
                    Your email address will be your username.
                </small>
                <div class="invalid-feedback">Oops! Invalid email address.</div>
            </div>
            <div class="form-group has-success has-danger">
                <label for="signupEmailConfirm" class="form-label mt-4">
                    Confirm Email
                </label>
                <input type="email" class="form-control" id="signupEmailConfirm" 
                    aria-describedby="emailHelp" placeholder="example@mail.com" 
                    name='signupUserConfirm' required>
                <div class="invalid-feedback">Heads up! Email addresses do not match.</div>
            </div>
            <div class="form-group">
                <label for="RegisterPassword" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="signupPassword" 
                placeholder="Password" name='signupPassword' required>
                <ul class="passwordValidation">
                    <li class="length">Must be at least 8 character long.</li>
                    <li class="lowercase">Must contain a lowercase.</li>
                    <li class="uppercase">Must contain an uppercase.</li>
                    <li class="number">Must contain a number.</li>
                    <li class="charSpecial">Must contain a special character.</li>                   
                </ul>
            </div>
            <div class="form-group has-success has-danger" id="signupPassConfirmation">
                <label for="RegisterPassword" class="form-label mt-4">
                    Confirm Password
                </label>
                <input type="password" class="form-control" id="signupPasswordConfirm" 
                placeholder="Same Password" name='signupPasswordConfirm' required>
                <div class="invalid-feedback">Heads up! Passwords do not match.</div>
            </div>
            <div>
                <input type="checkbox" name="readTermCond" id="readTermCond" required>
                <label for="readTermCond">
                    I have read the <a href="">Terms and Conditions</a>
                </label>
            </div>
            <div>    
                <input type="checkbox" name="acceptTC" id="acceptTC" required>
                <label for="acceptTC">I accept the Terms and Conditions</label>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary disabled" id="signupBtn" 
                name="signup" value="Sign Up">
            </div>
        </fieldset>
      </form>
    </div>
</div>
