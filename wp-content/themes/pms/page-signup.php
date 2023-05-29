<?php
/*
Template Name: Sign up Page
*/
?>
<?php

if (isset($_POST['signup'])) {
  // Fetch user inputs
  $username = $_POST['username'];
  $employee_id= $_POST('employee_id');
  $email = $_POST['email'];
  $password = $_POST['password'];
 

  // Validate user inputs
  $errors = array();

  if (empty($username)) {
    $errors['full_name'] = 'Please enter a username';
  }

  if (empty($email)) {
    $errors['email'] = 'Please enter an email address';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address';
  }

  if (empty($password)) {
    $errors['password'] = 'Please enter a password';
  }



  // Create new user if there are no errors
  if (empty($errors)) {
    $user_id = wp_create_user($username, $password, $email,$employee_id);
    if (is_wp_error($user_id)) {
      var_dump($user_id);
      echo '<p class="signup-error">An error occurred while creating your account. Please try again later.</p>';
    }
  } else {
    // Display errors
    foreach ($errors as $error) {
      echo '<p class="signup-error">' . $error . '</p>';
    }
  }
}
?>

<?php wp_head();?>

<div class="form-container">

    <form class="form-inside" method="POST" action="">
        <div class="form">
            <h2>Sign Up</h2>

            <div class="input1">
                <label for="employee_id">Employee id:</label>
                <input type="int" placeholder="Enter employee_id" name="employee_id" id="employee_id" required>
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
                Already have an account? <a style="color:blue" href="<?php echo site_url('/login') ?>"><u>Login</u></a>
            </p>
        </div>
    </form>
</div>

<?php get_footer(); ?>