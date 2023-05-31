<?php
/**
 * Template Name: Completed Projects
 */
get_header();


$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

var_dump($user_id);

if ($user_id > 0) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'projects';

    $project_data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE employee_id = %d", $user_id));
}

?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">Project</th>
      <th scope="col">Status</th>
      <th scope="col">Completion Date</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
