<?php
/**
 * Template Name: Completed Projects
 */
get_header();

?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Project</th>
      <th scope="col">Status</th>
      <th scope="col">Completion Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $response = wp_remote_get('http://localhost/may-project/wp-json/pms/v1/projects/{employee_id}');
    if (!is_wp_error($response) && $response['response']['code'] === 200) {
        $projects = json_decode($response['body']);
        $count = 1;
        foreach ($projects as $project) {
            ?>
            <tr>
              <th scope="row"><?php echo $count; ?></th>
              <td><?php echo $project->employee_id; ?></td>
              <td><?php echo $project->project; ?></td>
              <td><?php echo $project->project_status; ?></td>
              <td><?php echo $project->completion_date; ?></td>
            </tr>
            <?php
            $count++;
        }
    } else {
        echo '<tr><td colspan="5">Failed to retrieve project data.</td></tr>';
    }
    ?>
  </tbody>
</table>
