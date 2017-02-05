<?php
$page_title = 'Участники';
$page = 'participants';
include 'parts/header.php';
?>

    <section id="participants-banner" class="top-page-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">
                <img src="img/pages/participants-title.png" alt="Участникам" class="wow bounceIn" data-wow-delay=".7s">
            </div>
        </div>
    </section>


    <section class="visitors-whours wow fadeInUpBig" data-wow-delay=".8s">
        <div class="container text-center">
            <h2 class="text-green">Время работы выставки</h2>
            <hr class="bg-green">

            <?php include 'parts/shedule-part.php'; ?>

            <div class="col-xs-12">
                <div class="row reg-block mt40">
                    <img src="img/pages/participants-reg-block-bg.jpg" alt="">
                    <div class="btn-block">
                        <div class="col-sm-6 text-center">
                            <a href="participant-reg.php" class="btn btn-yellow pd10x30 mt15">ОТПРАВИТЬ ЗАПРОС НА УЧАСТИЕ</a>
                        </div>
                        <div class="col-sm-6 text-center">
                            <a data-fancybox data-src="attached/agro_presentaion_ru.pdf" href="javascript:;" class="btn btn-yellow-tr pd10x30 mt15">ПРЕЗЕНТАЦИЯ ВЫСТАВКИ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="business_prog mt40 participants-prog">
        <div class="container text-center" style="padding-bottom: 20px">
            <h2 class="text-white">График заезда</h2>
            <hr class="bg-white">
            <a href="#" class="btn btn-white pd10x30">СКАЧАТЬ ГРАФИК <i class="icon-download"></i></a>
            <div class="container row business_tabs">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation" class="active">
                        <a data-toggle="tab" href="#p1">
                            ОТКРЫТАЯ ПЛОЩАДКА</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#p1">
                            1 павильон</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#p2">
                            2 павильон</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#p3">
                            3 павильон</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#p4">
                            6 павильон</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#p5">
                            8 павильон</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#p6">
                            9-А павильон</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="p1" class="tab-pane fade in active">
                        <ul class="list-unstyled list-inline">
                            <li><a href="">номер стенда</a></li>
                            <li></li>
                            <li><a href="">название компании</a></li>
                            <li></li>
                            <li><a href="">время заезда</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="participants-blocks">
        <div class="container text-center">

            <h2 class="text-green">Застройщики</h2>
            <hr class="bg-green">

            <div class="col-xs-4">
                <a href="">
                    <div class="content">
                        <img src="img/pages/participants-zasrt-logo1.jpg" alt="ОСТОВ" width="100%">
                    </div>
                </a>
            </div>

            <div class="col-xs-4">
                <a href="">
                    <div class="content">
                        <img src="img/pages/participants-zasrt-logo2.jpg" alt="ОСТОВ" width="100%">
                    </div>
                </a>
            </div>

            <div class="col-xs-4">
                <a href="">
                    <div class="content">
                        <img src="img/pages/participants-zasrt-logo1.jpg" alt="ОСТОВ" width="100%">
                    </div>
                </a>
            </div>
        </div>
    </section>-->


    <!--<section class="participants-blocks2">
        <div class="container text-center">
            <h2 class="text-green">Экспедиторы</h2>
            <hr class="bg-green">
            <div class="col-xs-6 col-md-4 col-md-offset-2 ">
                <a href="">
                    <div class="content">
                        <img src="img/pages/participants-exp-logo1.jpg" alt="SATURN" width="100%">
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="">
                    <div class="content">
                        <img src="img/pages/participants-exp-logo2.jpg" alt="EXPRESS MOTO" width="100%">
                    </div>
                </a>
            </div>
        </div>
    </section>-->

    <?php include 'parts/hotels.php'; ?>

    <section class="visitors-map">
        <div class="container text-center">
            <h2 class="text-green">Карта проезда</h2>
            <?php include 'parts/map.php'; ?>
        </div>
    </section>


    </div>
    </div>

    <?php include 'parts/footer.php'; ?>

    <?php include 'parts/fixed-btn.php'; ?>

    </body>

    </html>