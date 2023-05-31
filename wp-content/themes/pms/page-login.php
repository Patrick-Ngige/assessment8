<?php
/*
Template Name: Login Page
*/

$error_message = '';

// Function to track login attempts
function track_login_attempts($username, $password) {
    if (!session_id()) {
        session_start();
    }

    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
    }

    $_SESSION['login_attempts']++;

    // Check if maximum login attempts reached
    if ($_SESSION['login_attempts'] >= 3) {
        
        if (isset($_SESSION['login_attempt_time']) && time() - $_SESSION['login_attempt_time'] < 60) {
            
            wp_die('Too many login attempts. Please try again after 1 minute.');
        }

        // Reset login_attempts session variable
        $_SESSION['login_attempts'] = 0;
    }

    $_SESSION['login_attempt_time'] = time();
}

add_action('wp_authenticate', 'track_login_attempts', 1, 2);

if (is_user_logged_in()) {
    $user = wp_get_current_user();
    $user_roles = $user->roles;

    if (in_array('administrator', $user_roles)) {
        wp_redirect('http://localhost/may-project/view-project/');
        exit;
    } elseif (in_array('contributor', $user_roles)) {
        wp_redirect('http://localhost/may-project/view-project/');
        exit;
    } elseif (in_array('subscriber', $user_roles)) {
        wp_redirect('http://localhost/may-project/main/');
        exit;
    }
}

if (isset($_POST['login'])) {
    $employee_id = $_POST['email'];
    $user_password = $_POST['password'];

    // Call the track_login_attempts function passing the username and password
    track_login_attempts($employee_id, $user_password);

    $user = get_user_by('email', $employee_id);

    if (!$user) {
        $error_message = "Invalid user email.";
    } elseif (!wp_check_password($user_password, $user->user_pass, $user->ID)) {
        $error_message = "Invalid password.";
    } else {
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        do_action('wp_login', $user->user_login, $user);

        $user_roles = $user->roles;
        $redirect_url = '';

        if (in_array('administrator', $user_roles)) {
            $redirect_url = 'http://localhost/may-project/view-project/';
        } elseif (in_array('contributor', $user_roles)) {
            $redirect_url = 'http://localhost/may-project/view-project/';
        } elseif (in_array('subscriber', $user_roles)) {
            $redirect_url = 'http://localhost/may-project/main/';
        }

        $redirect_url .= '?user_id=' . $user->ID;

        wp_redirect($redirect_url);
        exit;
    }
}
?>

<?php wp_head();?>

<div class="form-container">
    <form class="form-inside" action="" method="POST">
        <div class="form">
            <h2>Login</h2>

            <?php if ($error_message): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <div class="input1">
                <label for="employee-number">Employee email:</label>
                <input type="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="input1">
                <label for="">Password:</label>
                <input type="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" class="btnreg" name="login">Login</button>
        </div>
    </form>
</div>

<?php get_footer(); ?>
