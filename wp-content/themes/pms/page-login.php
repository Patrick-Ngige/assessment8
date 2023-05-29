<?php
/*
Template Name: Login Page
*/
?>

<?php
if (is_user_logged_in()) {
  $user = wp_get_current_user();
  $user_roles = $user->roles;

  if (in_array('administrator', $user_roles)) {
    wp_redirect('http://localhost/may-project/wp-admin/index.php');
    exit;
  } elseif (in_array('contributor', $user_roles)) {
    wp_redirect('http://localhost/may-project/wp-admin/admin.php?page=events');
    exit;
  } elseif (in_array('subscriber', $user_roles)) {
    wp_redirect('http://localhost/may-project/');
    exit;
  }
}

if (isset($_POST['login'])) {
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];

  $user = get_user_by('email', $user_email);

  if (!$user) {
    echo "Invalid user email.";
    exit;
  }

  if (wp_check_password($user_password, $user->user_pass, $user->ID)) {
    wp_set_current_user($user->ID);
    wp_set_auth_cookie($user->ID);
    do_action('wp_login', $user->user_login, $user);

    $user_roles = $user->roles;

    if (in_array('administrator', $user_roles)) {
      wp_redirect('http://localhost/may-project/wp-admin/index.php');
      exit;
    } elseif (in_array('contributor', $user_roles)) {
      wp_redirect('http://localhost/may-project/wp-admin/admin.php?page=events');
      exit;
    } elseif (in_array('subscriber', $user_roles)) {
      wp_redirect('http://localhost/may-project/');
      exit;
    }
  } else {
    echo "Invalid password.";
    exit;
  }
}
?>

<?php get_header(); ?>

<div class="form-container">

    <form class="form-inside" action="" method="POST">
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
                Don't have an account? <a style="color:blue" href="<?php echo site_url('/signup') ?>"><u>Signup here</u></a>
            </p>
        </div>

    </form>
</div>
<?php
get_footer();
?>