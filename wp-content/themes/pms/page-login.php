<?php
/*

Template Name: Login Page
*/
?>

<?php get_header(); ?>

<div class="form-container">
    <div class="regcover">
        
        <form action="" method="POST">
            <div class="form">
                <h2>Login</h2>

                <div class="input1">
                    <label for="employee-number">Employee number:</label>
                    <div class="icons1">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="int" placeholder="Enter employee number" name="employee-number" required>
                    </div>
                </div>
                <div class="input1">
                    <label for="">Password:</label>
                    <div class="icons1">
                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="password" placeholder="Enter password" name="password" required>
                    </div>
                </div>
                <button type="Login" class="btnreg" name="login">Login</button>

                <p class="form-alt">
                    Don't have an account? <a href="<?php echo site_url('/register') ?>">Sign up here</a>
                </p>
            </div>

        </form>
    </div>
</div>
<?php
get_footer();
?>