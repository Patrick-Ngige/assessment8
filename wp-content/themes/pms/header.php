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

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:-60px;">
        <a class="navbar-brand logo" href="#">PMS</a>

        <!-- Collapsed Hamburger Menu for Small Screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                // Check user roles and display relevant navbar items
                if (current_user_can('contributor')) {
                    // Contributor Role
                ?>
                    <li class="nav-item completed">
                        <a class="nav-link completed-text" href="http://localhost/may-project/view-tickets/">View Tickets</a>
                    </li>
                    <li class="nav-item completed">
                        <a class="nav-link completed-text" href="http://localhost/may-project/create-ticket/">Create Ticket</a>
                    </li>
                <?php
                } elseif (current_user_can('subscriber')) {
                    // Subscriber Role
                ?>
                    <li class="nav-item completed">
                        <a class="nav-link completed-text" href="#">Completed Projects</a>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item logout">
                    <a class="nav-link logout-text" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

        .completed {
            background-color: #008000;
            border-radius: 5px;
            padding: 4px;
            margin: 4px 8px;

        }
        .completed:hover{
            background-color:#228B22 ;
            color:#ffffff;
        }

        .logo {
            font-size: 36px;
            font-family: 'Dancing Script', cursive;
            font-weight: 700;
            padding-left: 50px;
        }

        .completed-text {
            color: #ffffff;
        }
        .completed-text:hover {
            color: #ffffff;
        }

        .logout {
            background-color:	#FC0808;
            border-radius: 5px;
            padding: 4px;
            margin: 4px 15px;
        }
        .logout:hover{
            background-color:	#EE4B2B ;
        }
        .logout-text {
            color: #ffffff;
        }
        .logout-text:hover {
            color: #ffffff;
        }
    </style>