<?php

/**
 * Template Name: Edit Page
 */

get_header();

// $response = wp_remote_get('http://localhost/may-project/wp-json/may-project/v1/projects/');
// $projects = json_decode($response['body']);
// echo '<pre>';

// var_dump($projects);

// echo '</pre>';
?>

<section style="background-color: #DBDFEA; overflow-y:hidden;height:94vh; ">
  <div class="container py-5 h-auto">
    <div class="row d-flex justify-content-center align-items-center h-auto">
      <div class="col col-xl-10" style="width:40vw;">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
            <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
              <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8"
                style="height:80vh; width:40vw; ">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="" method="POST">

                    <?php //while ($projects) { ?>
                      <h2 class="fw-bold d-flex align-items-end d-flex justify-content-center align-items-center">Edit
                        Project</h2>

                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example17 " style="font-weight:600;">Employee Id:</label>
                        <input type="text" id="form2Example17" class="form-control form-control-md"
                          value="<?php echo $projects->employee_id ?>" placeholder="Enter project Id" name="employee_id" />
                      </div>


                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example27" style="font-weight:600;">Project</label>
                        <input type="text" id="form2Example27" class="form-control form-control-md"
                          placeholder="Enter task" name="project" />
                      </div>

                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example27" style="font-weight:600;">Assignee:</label>
                        <input type="text" id="form2Example27" class="form-control form-control-md"
                          placeholder="Assignee name" name="assignee" />
                      </div>

                      <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example27" style="font-weight:600;">Due Date:</label>
                        <input type="date" id="form2Example27" class="form-control form-control-md" name="due_date" />
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

<?php get_footer(); ?>