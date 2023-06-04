<?php
/**
 * Template Name: Completed Projects
 */
get_header();

$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

global $wpdb;
$table_name = $wpdb->prefix . 'projects';
$projects = $wpdb->get_results("SELECT * FROM $table_name WHERE project_status = 1 AND assignee = 'user_nicename' ");
var_dump($projects);
?>
<div style="background-color:#DBDFEA;height:88vh" ;>
  <div style="display:flex;justify-content:center;font-size:40px;color:#000000;">
    <?php
    $timezone = new DateTimeZone('Africa/Nairobi');
    $date = new DateTime('now', $timezone);
    $current_hour = $date->format('G');



    $period = '';



    if ($current_hour >= 5 && $current_hour < 12) {
      $period = 'morning';
    } elseif ($current_hour >= 12 && $current_hour < 18) {
      $period = 'afternoon';
    } else {
      $period = 'evening';
    }



    echo 'Good ' . $period. '!'  ;
    ?>
  </div>
  <table class="table table-striped" style="width:80%;margin-left:10%;background-color:#fff;margin-top:20px;border-radius:3px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)
">
    <thead>
      <tr>
        <th scope="col">Assignee</th>
        <th scope="col">Project</th>
        <th scope="col">Status</th>
        <th scope="col">Completion Date</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($projects as $project) { ?>
        <tr>
          <td>
            <?php echo $project->assignee; ?>
          </td>
          <td>
            <?php echo $project->project; ?>
          </td>
          <td>
            <?php echo ($project->project_status == 0 ? 'pending' : '<span style="color:#218B22;">completed</span>'); ?>
          </td>
          <td>
            <?php echo $project->due_date; ?>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>