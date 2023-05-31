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

  $user = get_user_by('email', $employee_id);

  if (!$user) {
      echo "Invalid user email.";
      exit;
  }

  if (wp_check_password($user_password, $user->user_pass, $user->ID)) {
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
  } else {
      echo "Invalid password.";
      exit;
  }
}
?>

<?php wp_head();?>

<div class="form-container">

    <form class="form-inside" action="" method="POST">
        <div class="form">
            <h2>Login</h2>

            <div class="input1">
                <label for="employee-number">Employee email:</label>
                <input type="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="input1">
                <label for="">Password:</label>
                <input type="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="Login" class="btnreg" name="login">Login</button>
        </div>

    </form>
</div>
<?php
get_footer();
?>