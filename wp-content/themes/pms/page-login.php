<?php
/*
Template Name: Login Page
*/
// if (is_user_logged_in()) wp_redirect(home_url());

// if (isset($_POST['login'])) {

//     // Sanitize and validate user input
//     $email = sanitize_text_field($_POST['email']);
//     $password = sanitize_text_field($_POST['password']);

//     $user_verify = wp_signon([
//         'user_login' => $email,
//         'user_password' => $password,
//         'remember' => true,
//     ]);

//     if (is_wp_error($user_verify)) {
//         $error_msg = $user_verify->get_error_message();
//     }
// }
?>

<?php get_header(); ?>

<div class="form-container">

    <form action="" method="POST">
        <div class="form">
            <h2>Login</h2>

            <div class="input1">
                <label for="employee-number">Employee number:</label>
                <input type="int" placeholder="Enter employee number" name="employee-number" required>
            </div>
            <div class="input1">
                <label for="">Password:</label>
                <input type="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="Login" class="btnreg" name="login">Login</button>

            <p class="form-alt">
                Don't have an account? <a href="<?php echo site_url('/register') ?>">Signup here</a>
            </p>
        </div>

    </form>
</div>
<?php
get_footer();
?>