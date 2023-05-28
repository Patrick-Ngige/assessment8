<?php
/*
Template Name: Sign up Page
*/
?>

<?php get_header(); ?>

<div class="form-container">

    <form method="POST" action="">
        <div class="form">
            <h2>Sign Up</h2>

            <div class="input1">
                <label for="employee-number">Employee number:</label>
                <input type="int" placeholder="Enter employee number" name="employee-number" id="employee-number" required>
            </div>
            <div class="input1">
                <label for="username">Username:</label>
                <input type="string" placeholder="Enter username" name="username" required>
            </div>
            <div class="input1">
                <label for="email">Email Address:</label>
                <input type="email" placeholder="Enter email address" name="email" required>
            </div>
            <div class="input1">
                <label for="password">Password:</label>
                <input type="password" placeholder="Enter password" name="password" required>
            </div>
            <button class="btnreg" type="Signup" name="signup">Signup</button>

            <p class="form-alt">
                Already have an account? <a href="<?php echo site_url('/login') ?>">Login</a>
            </p>
        </div>
    </form>
</div>

<?php get_footer(); ?>