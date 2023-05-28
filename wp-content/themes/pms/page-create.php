<?php 
/**
 * Template Name: Create Page
 */
 get_header(); 
?>
<section style="background-color: #DBDFEA; overflow-y:hidden;height:94vh; ">
  <div class="container py-5 h-auto">
    <div class="row d-flex justify-content-center align-items-center h-auto">
      <div class="col col-xl-10" style="width:40vw;">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
            <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
              <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8" style="height:80vh; width:40vw; ">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="" method="POST">

                    <h2 class="fw-bold d-flex align-items-end d-flex justify-content-center align-items-center">Create Ticket</h2>

                    <div class="form-outline mb-3">
                      <label class="form-label" for="form2Example17 " style="font-weight:600;">Ticket Id:</label>
                      <input type="text" id="form2Example17" class="form-control form-control-md" placeholder="Enter ticket Id" name="employee_id"  />
                    </div>


                    <div class="form-outline mb-3">
                      <label class="form-label" for="form2Example27" style="font-weight:600;">Task</label>
                      <input type="text" id="form2Example27" class="form-control form-control-md" placeholder="Enter task" name="password"  />
                    </div>

                    <div class="form-outline mb-3">
                      <label class="form-label" for="form2Example27" style="font-weight:600;">Assignee:</label>
                      <input type="text" id="form2Example27" class="form-control form-control-md" placeholder="Assignee name" name="password"  />
                    </div>

                    <div class="form-outline mb-3">
                      <label class="form-label" for="form2Example27" style="font-weight:600;">Date of Issue:</label>
                      <input type="date" id="form2Example27" class="form-control form-control-md"  name="password"  />
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
</section>

<?php get_footer(); ?>