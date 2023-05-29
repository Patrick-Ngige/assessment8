<?php

/**
 * Template Name: View Page
 */

//get_header();

// $data = url ('http://localhost/may-project/wp-json/may-project/v1/projects/');

?>
<div style="background-color:#DCDFEA;width:100vw;height:94vh;">
    <div style="padding:1rem;">
        <table class="table align-middle mb-0 bg-white table-hover "
            style="width:80%;margin-left:10%;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;margin-top:3%;">
            <thead class="bg-light">
                <tr style="font-size:large">
                    <th>Assignee</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                                alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="  text-dark  ">Pending</span>
                    </td>
                    <td>Senior</td>
                    <td>
                    <form method="POST">
                            <input type="hidden" name="ticket_id" value="<?php //echo $result->ticket_id; ?>" />
                            <input type="submit" name="delete" value="Delete"
                                style="background-color: #fd434c;color:white; border-radius:3px;padding:5px;border:none;" />
                            <a href="<?php //echo esc_url(add_query_arg('ticket_id', '$result->ticket_id', 'http://localhost/may-project/edit-ticket/'))
                                ?>" style="background-color: #006b0c;color:white; border-radius:3px;text-decoration:none;padding:5px;border: #006b0c;border-radius:3px;">Update</a>
               
                </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- <div class="d-flex align-items-center"> -->
                            <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                                alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
                        <span class="  text-dark  ">Completed</span>
                    </td>
                    <td>Junior</td>
                    <td>
                    <form method="POST">
                            <input type="hidden" name="ticket_id" value="<?php //echo $result->ticket_id; ?>" />
                            <input type="submit" name="delete" value="Delete"
                                style="background-color: #fd434c;color:white; border-radius:3px;padding:5px;border:none;" />
                            <a href="<?php //echo esc_url(add_query_arg('ticket_id', '$result->ticket_id', 'http://localhost/may-project/edit-ticket/'))
                                ?>" style="background-color: #006b0c;color:white; border-radius:3px;text-decoration:none;padding:5px;border: #006b0c;border-radius:3px;">Update</a>
               
                </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                                style="width: 45px; height: 45px" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="  text-dark  ">Pending</span>
                    </td>
                    <td>Senior</td>
                    <td>

                        <form method="POST">
                            <input type="hidden" name="ticket_id" value="<?php //echo $result->ticket_id; ?>" />
                            <input type="submit" name="delete" value="Delete"
                                style="background-color: #fd434c;color:white; border-radius:3px;padding:5px;border:none;" />
                            <a href="<?php //echo esc_url(add_query_arg('ticket_id', '$result->ticket_id', 'http://localhost/may-project/edit-ticket/'))
                                ?>" style="background-color: #006b0c;color:white; border-radius:3px;text-decoration:none;padding:5px;border: #006b0c;border-radius:3px;">Update</a>
               
                </form>
                
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php //get_footer(); ?>