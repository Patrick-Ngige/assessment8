<?php
/*
Template Name: Sign up Page
*/
?>

<?php get_header(); ?>

<div class="form-container">
    <div class="regcover">

        <form method="POST" action="">
            <div class="form">
                <h2>Sign Up</h2>

                <div class="input1">
                    <label for="employee-number">Employee number:</label>
                    <div class="icons1">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="int" placeholder="Enter employee number" name="employee-number" id="employee-number" required>
                    </div>
                </div>
                <div class="input1">
                    <label for="username">Username:</label>
                    <div class="icons1">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="string" placeholder="Enter username" name="username" required>
                    </div>
                </div>
                <div class="input1">
                    <label for="email">Email Address:</label>
                    <div class="icons1">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" placeholder="Enter email address" name="email" required>
                    </div>
                </div>
                <div class="input1">
                    <label for="password">Password:</label>
                    <div class="icons1">
                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="password" placeholder="Enter password" name="password" required>
                    </div>
                </div>
                <button class="btnreg" type="Signup" name="signup">Register</button>

                <p class="form-alt">
                    Already have an account? <a href="<?php echo site_url('/login') ?>">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>