<?php

/**
 * Template Name: Edit Page
 */

get_header();

$employee_id = $_GET['employee_id'];


$endpoint = "http://localhost/may-project/wp-json/pms/v1/project/$employee_id";

$response = wp_remote_get($endpoint);

$projects = json_decode(wp_remote_retrieve_body($response));
if (!is_wp_error($response) && $response['response']['code'] === 200) {
    $projects = json_decode($response['body']);
  }

?>

<section style="background-color: #DBDFEA; overflow-y:hidden;height:88vh; ">
  <div class="container py-3 h-auto">
    <div class="row d-flex justify-content-center align-items-center h-auto">
      <div class="col col-xl-10" style="width:40vw;">
        <div class="card" style="border-radius: 1rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
          <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
            <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
              <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8"
                style="height:80vh; width:40vw; ">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="" method="POST">
                      <h2 class="fw-bold d-flex align-items-end d-flex justify-content-center align-items-center">Edit
                        Project</h2>

                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example17 " style="font-weight:600;">Employee Id:</label>
                        <input type="text" id="form2Example17" class="form-control form-control-md"
                          value="<?php  echo $projects->employee_id ?>" placeholder="Enter project Id" name="employee_id" />
                      </div>


                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example27" style="font-weight:600;">Project</label>
                        <input type="text" id="form2Example27" class="form-control form-control-md"
                          placeholder="Enter task" value="<?php  echo $projects->project ?>"  name="project" />
                      </div>

                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example27" style="font-weight:600;">Assignee:</label>
                        <input type="text" id="form2Example27" value="<?php  echo $projects->assignee ?>"  class="form-control form-control-md"
                          placeholder="Assignee name" name="assignee" />
                      </div>

                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example27" style="font-weight:600;">Due Date:</label>
                        <input type="date" id="form2Example27" class="form-control form-control-md" value="<?php  echo $projects->due_date ?>"  name="due_date" />
                      </div>

                      <div class="pt-1 mb-4 w-100 d-flex justify-content-center align-items-center">
                        <button class="btn btn-dark btn-lg btn-block w-50 " type="submit" name="updatebtn">Update</button>
                      </div>
                      <?php //} ?>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php

if (isset($_POST['updatebtn'])) {
  $employee_id = $_POST['employee_id'];
  $project = $_POST['project'];
  $assignee = $_POST['assignee'];
  $due_date = $_POST['due_date'];
  
  global $wpdb;
  $table_name = $wpdb->prefix . 'projects';

  $updated_project =array(
      'employee_id' => $employee_id,
      'project' => $project,
      'assignee' => $assignee,
      'due_date' => $due_date,
   );

$response = wp_remote_post("http://localhost/may-project/wp-json/pms/v1/project", array(
  'method' => 'POST',
  'headers' => array('Content-Type' => 'application/json'),
  'body' => wp_json_encode($updated_project),
));

$projects = $updated_project;
}

?>



<?php get_footer(); ?>