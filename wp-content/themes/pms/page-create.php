<?php
/**
 * Template Name: Create Page
 */
get_header();

if (isset($_POST['createbtn'])) {
    // Get project data from the form submission
    $project_id = $_POST['project_id'];
    $project_task = $_POST['project_task'];
    $assignee = $_POST['assignee'];
    $due_date = $_POST['due_date'];

    // Prepare the request data
    $request_data = array(
        'title' => $project_id,
        'description' => $project_task,
        // Include other project-related data as needed
    );

    // Send the request to the create project endpoint
    $response = wp_remote_post('http://localhost/may-project/wp-json/may-project/v1/projects', array(
        'method' => 'POST',
        'headers' => array(
            'Content-Type' => 'application/json',
        ),
        'body' => json_encode($request_data),
    ));

    // Handle the response
    if (is_wp_error($response)) {
        echo 'Error creating project: ' . $response->get_error_message();
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $response_body = wp_remote_retrieve_body($response);

        if ($response_code === 200) {
            $project_data = json_decode($response_body, true);
            // Display success message or redirect to the created project page
        } else {
            // Display error message or handle the specific response codes accordingly
        }
    }
}

?>

<section style="background-color: #DBDFEA; overflow-y:hidden;height:90vh; ">
    <div class="container py-5 h-auto">
        <div class="row d-flex justify-content-center align-items-center h-auto">
            <div class="col col-xl-10" style="width:40vw;">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
                        <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
                            <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8" style="height:80vh; width:40vw; ">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="POST">

                                        <h2 class="fw-bold d-flex align-items-end d-flex justify-content-center align-items-center">Create Project</h2>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example17 " style="font-weight:600;">Project Id:</label>
                                            <input type="text" id="form2Example17" class="form-control form-control-md" placeholder="Enter project Id" name="project_id" />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example27" style="font-weight:600;">Project task:</label>
                                            <input type="text" id="form2Example27" class="form-control form-control-md" placeholder="Enter project task" name="project_task" />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example27" style="font-weight:600;">Assignee:</label>
                                            <input type="text" id="form2Example27" class="form-control form-control-md" placeholder="Assignee name" name="assignee" />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example27" style="font-weight:600;">Due date:</label>
                                            <input type="date" id="form2Example27" class="form-control form-control-md" name="due_date" />
                                        </div>

                                        <div class="pt-1 mb-4 w-100 d-flex justify-content-center align-items-center">
                                            <button class="btn btn-dark btn-lg btn-block w-50 " type="submit" name="createbtn">Create</button>
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
