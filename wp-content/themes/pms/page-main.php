<?php

/**
 * Template Name: Main Page
 */
get_header();

$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

if ($user_id > 0) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'projects';

    $project_data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE employee_id = %d", $user_id));

    if ($project_data && $project_data->project_status == 'pending') {
        $username = $project_data->assignee;
        $ticket_id = $project_data->employee_id;
        $task = $project_data->project;
        $due_date = $project_data->due_date;
?>
        <div class="main_cont">
            <div class="card-cont">
                <div class="username">
                    <h2><?php echo $username; ?></h2>
                </div>
                <div class="card-body card-details">
                    <p class="card-text">Project ID: <?php echo $ticket_id; ?></p>
                    <p class="card-text">Task: <?php $nbps;
                                                echo  $task; ?></p>
                    <p class="card-text ">Due Date: <u class="due"><?php echo $due_date; ?></u></p>
                    <form method="POST" class="button-cont">
                        <input type="hidden" name="id" value="<?php echo $project_data->employee_id ?>">
                        <button type="submit" name="mark-done" value=""style="padding:15px" >Mark Done</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    } else {
       
    ?>
        <div class="main_cont">
            <div class="card-cont">
                <div class="username">
                    <h2><?php echo $project_data->assignee; ?></h2>
                </div>
                <div class="card-body card-details">
                    <p class="no-project">No project assigned</p>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo '<p class="no-project">No user ID provided in the URL.</p>';
}

?>
<?php
global $wpdb;
$table_name = $wpdb->prefix . 'projects';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id = $_POST["id"];
    var_dump($id);
    $wpdb->update($table_name, array("project_status" => 1), array("id" => $id));
}
echo "
<script>
window.reload();
</script>
";
?>


<style>
    @import url('https://fonts.googleapis.com/css?family=PT+Serif+Caption:400');

    body {
        font-family: 'PT Serif Caption', serif;
    }

    .main_cont {
        width: 100%;
        display: flex;
        background-color: #DCDFEA;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 92vh;
    }

    .due {
        text-decoration: underline;
        color: red;
    }

    .username {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #DCDFEA;
        padding: 12px;
        width: 100%;
        margin: 20px 5px;
        border-radius: 30px;
    }

    .card-cont {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #F8F9FB;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        padding: 0px 100px;
        margin-top: 15px;
        width: 50%;
        border-radius: 12px;
    }

    .card-cont:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    p {
        font-size: 28px;
    }

    h2 {
        font-size: 44px;
    }

    .card-details {
        width: 100%;
        background-color: #FFFDFD;
        border: 1px solid #CDCDCD;
        margin: 10% 20%;
        padding: 5rem;
        border-radius: 15px;
    }

    .no-project {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 42px;
        font-weight: 700;
        color: red;
    }

    .button-cont {
        width: 100%;
        padding: 20px 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    button{
        display: flex;
        justify-content: center;
        width: 50%;
        border-radius: 10px;
        background-color: #228B22;
        color: #ffffff;
        font-size: 20px;
        text-align: center;
    }

   button:hover {
        background-color: #008000;
        color: #ffffff;
    }
</style>
<?php get_footer(); ?>