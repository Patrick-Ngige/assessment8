<?php

/**
 * Template Name: Main Page
 */
get_header(); ?>


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






<style>
    @import url('https://fonts.googleapis.com/css?family=PT+Serif+Caption:400');

    body {
        font-family: 'PT Serif Caption', serif;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #DCDFEA;
        height: 100vh;
    }

    .main-cont {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .username {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #DCDFEA;
        width: 100%;
        margin: 8px 5px;
        border-radius: 30px;
    }

    .card-cont {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #F8F9FB;
        padding:0px 20px;
        width: 50%;
        border-radius: 12px;
    }



    p {
        font-size: 18px;
    }

    .card-details {
        width: 100%;
        background-color: #FFFDFD;
        margin: 10% 20%;
        padding: 10px;
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
        width: 50%;
        border-radius: 10px;
        background-color: #313131;
        color: #ffffff;
        font-size: 20px;
        text-align: center;

    }
</style>

<?php get_footer() ?>