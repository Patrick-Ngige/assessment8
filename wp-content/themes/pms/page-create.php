<?php
/**
 * Template Name: Create Page
 */
get_header();

if (isset($_POST['createbtn'])) {
    $employee_id = $_POST['employee_id'];
    $project = $_POST['project'];
    $assignee = $_POST['assignee'];
    $due_date = $_POST['due_date'];

    global $wpdb;
    $table_name = $wpdb->prefix . 'projects';

    $created_project = array(
        'employee_id' => $employee_id,
        'project' => $project,
        'assignee' => $assignee,
        'due_date' => $due_date,
    );

    $response = wp_remote_post('http://localhost/may-project/wp-json/pms/v1/projects', array(
        'method' => 'POST',
        'headers' => array('Content-Type' => 'application/json'),
        'body' => wp_json_encode($created_project),
    )
    );

}



?>

<?php  

global $wpdb;
$table = $wpdb->prefix.'users';

$names = $wpdb->get_col("SELECT user_nicename FROM $table ");

?>

<section style="background-color: #DBDFEA; overflow-y:hidden;height:90vh; ">
    <div class="container py-5 h-auto">
        <div class="row d-flex justify-content-center align-items-center h-auto">
            <div class="col col-xl-10" style="width:40vw;">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 "
                        style="width:40vw;">
                        <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 "
                            style="width:40vw;">
                            <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8"
                                style="height:80vh; width:40vw; ">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="POST">

                                        <h2
                                            class="fw-bold d-flex align-items-end d-flex justify-content-center align-items-center">
                                            Create Project</h2>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example17 "
                                                style="font-weight:600;">Employee Id:</label>
                                            <input type="text" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Enter project Id" name="employee_id" />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example27"
                                                style="font-weight:600;">Project:</label>
                                            <input type="text" id="form2Example27" class="form-control form-control-md"
                                                placeholder="Enter project task" name="project" />
                                        </div>

                                        <div>
                                            <label>Assignee: </label><br>

                                            <select class="form-select" aria-label="Default select example"
                                                name="assignee">
                                                <option selected></option>

                                                <?php foreach ($names as $username) { ?>
                                                    <option>
                                                        <?php echo $username ?>
                                                    </option>
                                                <?php } ?>
                                            </select>

                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example27" style="font-weight:600;">Due
                                                date:</label>
                                            <input type="date" id="form2Example27" class="form-control form-control-md"
                                                name="due_date" />
                                        </div>

                                        <div class="pt-1 mb-4 w-100 d-flex justify-content-center align-items-center">
                                            <button class="btn btn-dark btn-lg btn-block w-50 " type="submit"
                                                name="createbtn">Create</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>