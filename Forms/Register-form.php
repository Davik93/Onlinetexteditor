<h1 class="title">Some Title</h1>
<div class="reg-form-container">
    <div class="reg-form-second-container">
        <h1>Sign up</h1>
        <form class="reg-form" action="" method="post">
            <div class="reg-form-input-text-holder">
                Username:<br> <input class="reg-input" type="text" name="username" /> <br />
                Password:<br> <input class="reg-input" type="password" name="password" /> <br />
                Password again:<br> <input class="reg-input" type="password" name="passwordAgain" /> <br />
                Email:<br> <input class="reg-input" type="text" name="email" /> <br />
            </div>
            <div class="error-holder">
                <?php
                output_errors($errors);
                ?>
            </div>
            <div class="reg-form-btn-holder">
                <input class="form-btn" type="submit" value="Sign up" />
            </div>
        </form>
    </div>
</div>