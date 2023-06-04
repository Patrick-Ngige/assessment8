<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="margin-top:-47px;padding-top:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
        <a class="navbar-brand logo" href="#">PMS</a>

        <!-- Collapsed Hamburger Menu for Small Screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                // Check user roles and display relevant navbar items
                if (current_user_can('contributor', 'Pm')) {
                    // Contributor Role
                    ?>
                    <li class="nav-item completed">
                        <a class="nav-link completed-text" style="color:black;font-weight:700;" href="http://localhost/may-project/view-project/">View
                            Projects</a>
                    </li>
                    <li class="nav-item completed">
                        <a class="nav-link completed-text" href="http://localhost/may-project/create-ticket/">Create
                            Project</a>
                    </li>
                    <li class="nav-item completed">
                        <a class="nav-link completed-text" href="http://localhost/may-project/signup">Create Employee</a>
                    </li>
                    <?php
                } else if (current_user_can('manage_options')) {
                    // Subscriber Role
                    ?>
                        <li class="nav-item completed">
                            <a class="nav-link completed-text" href="http://localhost/may-project/view-project/">View
                                Projects</a>
                        </li>
                        <li class="nav-item completed">
                            <a class="nav-link completed-text" href="http://localhost/may-project/create-ticket/">Create
                                Project</a>
                        </li>
                        <li class="nav-item completed">
                            <a class="nav-link completed-text" href="http://localhost/may-project/signup">Create
                                Employee</a>
                        </li>
                        <li class="nav-item completed">
                            <a class="nav-link completed-text" href="http://localhost/may-project/wp-admin/">Admin
                                Panel</a>
                        </li>
                    <?php
                } else if (current_user_can('subscriber')) {
                    // Subscriber Role
                    ?>
                            <li class="nav-item completed">
                                <a class="nav-link completed-text" href="http://localhost/may-project/completed-projects/">Completed
                                    Projects</a>
                            </li>
                            <li class="nav-item completed">
                                <a class="nav-link completed-text"
                                    href="http://localhost/may-project/main/?user_id=<?php echo $user_id; ?>">Active</a>
                            </li>

                    <?php
                }
                ?>
                <li class="nav-item logout">
                    <a class="nav-link logout-text pulse" href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

    .completed {
        border-radius: 5px;
        padding: 2px;
        margin: 6px 8px;
        color: aqua;
        font-weight: 400;
    }

    .completed:hover {
        text-decoration: wavy, underline;
        font-weight: 600;
        color: #fff !important; /* Updated font color to white */
        background-image: linear-gradient(to right, transparent, #008000);
        background-position: 0 0;
        background-repeat: no-repeat;
        background-size: 150% 100%;
        animation: slideBackground 10s linear infinite;
    }

    @keyframes slideBackground {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: 100% 0;
        }
    }

    .logo {
        font-size: 36px;
        font-family: 'Dancing Script', cursive;
        font-weight: 700;
        padding-left: 50px;
    }

    .logout {
        /* background-color: #FC0808; */
        border-radius: 5px;
        padding: 2px;
        margin: 6px 8px;
        color: #FC0808;
        font-weight: 600;
    }
    
    .logout:hover {
        text-decoration: wavy, underline;
        font-weight: 600;
        color: #fff; /* Updated font color to white */
        background-image: linear-gradient(to right, transparent, #FC0808);
        background-position: 0 0;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        animation: slideBackground 10s linear infinite;
    }

    @keyframes slideBackground {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: 50% 0;
        }
    }
</style>


