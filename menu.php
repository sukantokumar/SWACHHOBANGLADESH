<?php

session_start();
?>


<header class="nav-bg-color d-flex justify-content-between">
    <section class="nav-bg-color d-flex justify-content-between container header-section">
        <div >
            <img src="images/Logo.png" alt="">
        </div>
        <div>
            <ul class="nav header-menu">
                <li class="nav-item">
                    <a class="nav-link active text-success" aria-current="page" href="index">Home</a>
                </li>
                <?php  if(isset($_SESSION["username"])){
                ?>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="dashboard">Dashboard</a>
                </li>
                <?php
                }
                ?>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="events">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="media">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($_SESSION["username"])){
                        ?>

                        <a href="logout">
                            <button type="button" class="login-btn btn  top-0 end-0">Logout</button>
                        </a>
                        <?php
                    }else{
                        ?>
                        <a href="login">
                            <button type="button" class="login-btn btn  top-0 end-0">Login</button>
                        </a>
                        <?php
                    }

                    ?>
                </li>
            </ul>
        </div>

    </section>
</header>
