<?php
$page_title = 'Посетителям';
$page = 'visitors';
include 'parts/header.php';
?>

    <section id="visitors-banner" class="top-page-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">
                <img src="img/pages/visitors-title.png" alt="Посетителям" class="wow bounceIn" data-wow-delay=".7s">
            </div>
        </div>
    </section>


    <section class="visitors-whours wow fadeInUpBig" data-wow-delay=".8s">
        <div class="container text-center">
            <h2 class="text-green">Время работы выставки</h2>
            <hr class="bg-green">
            <?php include 'parts/shedule-visit.php'; ?>
        </div>
    </section>


    <section class="visitors-plan bg-lgrey">
        <div class="container text-center">
            <h2 class="text-green">План выставки</h2>
            <hr class="bg-green">
            <?php include 'parts/inter-plan.php'; ?>
        </div>
    </section>


    <section class="main-participants">
        <div class="container text-center">
            <h2 class="text-green">Наши участники</h2>
            <hr class="bg-green">
            <?php include 'parts/our-participants.php' ?>
        </div>
    </section>


    <section class="business_prog">
        <div class="container text-center">
            <h2 class="text-white">Деловая программа</h2>
            <hr class="bg-white">
            <a href="#" class="btn btn-white pd10x30">СМОТРЕТЬ ПРОГРАММУ</a>

            <?php include 'parts/business-program.php' ?>
        </div>
    </section>

    <section class="visitors-reg">
        <div class="container text-center">
            <div class="visitors-block mt40">
                <img src="img/pages/visitors-reg-bg.jpg" alt="" width="100%">

                <div class="btn-block">
                    <h2 class="text-green">Зарегистрироваться <br>как посетитель</h2>
                    <hr class="bg-green">
                    <a href="visitor-reg.php" class="btn btn-yellow">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                </div>

            </div>
        </div>
    </section>

    <?php include 'parts/hotels.php' ?>

    <section class="visitors-map">
        <div class="container text-center">
            <h2 class="text-green">Карта проезда</h2>
            <?php include 'parts/map.php' ?>
        </div>
    </section>

    </div>
    </div>

    <?php include 'parts/footer.php'; ?>

    <?php include 'parts/fixed-btn.php'; ?>

    </body>

    </html>