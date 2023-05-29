<?php

/**
 * Template Name: Main Page
 */
get_header(); ?>

<div class="main_cont">
    <div class=" card-cont">
        <div class="username">
            <h2>Username</h2>
        </div>
        <div class="card-body card-details">

            <p class="card-text">Ticket ID: ABC123</p>
            <p class="card-text">Task: Complete Project X</p>
            <p class="card-text">Due Date: May 31, 2023</p>
            <div class="button-cont">
                <input type="button" value="Mark Done">
            </div>

        </div>
    </div>
</div>





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

    .username {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #DCDFEA;
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
        padding: 0px 20px;
        margin-top: 15px;
        width: 50%;
        border-radius: 12px;
    }

    .card-cont:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }


    p {
        font-size: 18px;
    }

    .card-details {
        width: 100%;
        background-color: #FFFDFD;
        border: 1px solid #313131;
        margin: 10% 20%;
        padding:3.5rem;
        border-radius: 15px;
    }

    .button-cont {
        width: 100%;
        padding: 20px 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input[type="button"] {

        display: flex;
        justify-content: center;
        width: 25%;
        border-radius: 10px;
        background-color: #313131;
        color: #ffffff;
        font-size: 20px;
        text-align: center;

    }

    input[type="button"]:hover {
        background-color: #DCDFEA;
        color: #313131;
    }
</style>

<?php get_footer() ?>