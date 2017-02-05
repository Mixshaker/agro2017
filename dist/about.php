<?php
$page_title = 'О выставке';
$page = 'about';
$css_link = '<link rel="stylesheet" href="css/chartis/chartist.css">
              <link rel="stylesheet" href="css/myCharlist.css">';
include 'parts/header.php';
?>

    <section id="about-banner" class="top-page-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">
                <img src="img/pages/about-title.png" alt="О выставке" class="wow bounceIn" data-wow-delay=".7s">
            </div>
        </div>
    </section>

    <section>
        <div class="container wow fadeInUpBig" data-wow-delay=".8s">
            <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
                <h3 class="font-regular lh14 text-justify"><b>Выставка «Агро-2017»</b> &mdash; крупнейшая агропромышленная выставка в Украине и Восточной Европе. Выступает эффектив&shy;ной платформой для совершенство&shy;вания производства, внедрения инноваций, презентаций новинок во всех сферах
                    АПК Украины. Бизнес мероприятие, предоставляющее возможность для сотрудничества со странами &ndash; лидерами мирового аграрного сектора, а также уникальной площадкой для диалога между частным бизнесом и государством, ассоциациями и
                    ино&shy;странными представителями.
                </h3>
                <h3 class="font-regular lh14 text-justify"><b>Особое внимание предоставляется:</b> новинкам сельскохозяйственной техники и оборудованию, высокопроизводительным породам домашних животных, современным агротехнологиям во всех отраслях сельского хозяйства.</h3>
            </div>
            <div class="col-sm-12 text-center mt40">
                <a href="attached/agro_presentaion_ru.pdf" class="btn btn-yellow-tr pd10x30">ПРЕЗЕНТАЦИЯ</a>
            </div>
        </div>
    </section>


    <section class="visitors-whours">
        <div class="container text-center">
            <h2 class="text-green">Время работы выставки</h2>
            <hr class="bg-green">

            <div class="container">
                <div class="col-xs-6 col-sm-4 col-sm-offset-2 text-center">
                    <a href="#visit" class="btn btn-green pd10x30 mt15">ПОСЕТИТЕЛЯМ</a>
                </div>
                <div class="col-xs-6 col-sm-4 text-center">
                    <a href="#part" class="btn btn-green-tr pd10x30 mt15">УЧАСТНИКАМ</a>
                </div>
            </div>

            <div id="visit">
                <?php include 'parts/shedule-visit.php' ?>
            </div>

            <div id="part">
                <?php include 'parts/shedule-part.php' ?>
            </div>

        </div>
    </section>


    <section class="visitors-plan">
        <div class="container text-center">
            <h2 class="text-green">План выставки</h2>
            <hr class="bg-green">

            <?php include 'parts/inter-plan.php'; ?>

        </div>
    </section>


    <section class="main-expo">

        <?php include 'parts/theme-expo.php'; ?>

    </section>


    <section class="main-participants">
        <div class="container text-center">
            <h2 class="text-green">Наши участники</h2>
            <hr class="bg-green">

            <?php include 'parts/our-participants.php'; ?>

        </div>
    </section>


    <section class="statistic bg-lgrey">
        <div class="container text-center">
            <h2 class="text-green">Статистика</h2>
            <hr class="bg-green">


            <div class="container">
                <div class="col-xs-6 col-sm-4 col-sm-offset-2 text-center">
                    <a href="#visit1" class="btn btn-green pd10x30">ПОСЕТИТЕЛЕЙ</a>
                </div>
                <div class="col-xs-6 col-sm-4 text-center">
                    <a href="#part1" class="btn btn-green-tr pd10x30">УЧАСТНИКОВ</a>
                </div>
            </div>

            <div class="container mt40" id="visit1">
                <div class="col-xs-12 pb15">
                    <h3 class="font-medium">Статус зарегистрированных посетителей</h3>
                </div>

                <div class="col-sm-6 text-center grafic-left">
                    <div class="ct-chart ct-perfect-fourth" id="graf1"></div>
                </div>
                <div class="col-sm-6 mt40 text-left grafic-right">
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(24,118,210)"></div>
                        <p class="text">Владелец/Руководитель</p>
                        <p class="number text-grey">6008</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(142,193,75)"></div>
                        <p class="text">Руководитель подразделения</p>
                        <p class="number text-grey">3534</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(84,138,46)"></div>
                        <p class="text">Менеджер</p>
                        <p class="number text-grey">3357</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(252,215,53)"></div>
                        <p class="text">Специалист</p>
                        <p class="number text-grey">2827</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(3,169,244)"></div>
                        <p class="text">Неопределенный</p>
                        <p class="number text-grey">1415</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(255,143,0)"></div>
                        <p class="text">Студент</p>
                        <p class="number text-grey">530</p>
                    </div>
                </div>
            </div>

            <div class="container mt40" id="part1">
                <div class="col-xs-12 pb15">
                    <h3 class="font-medium">Количество экспонентов по основным направлениям выставки</h3>
                </div>

                <div class="col-sm-6 text-center">
                    <div class="ct-chart ct-perfect-fourth" id="graf2"></div>
                </div>
                <div class="col-sm-6 text-left mt25">
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(24,118,210)"></div>
                        <p class="text">Експоагротех</p>
                        <p class="number text-grey">417</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(255,143,0)"></div>
                        <p class="text">Растениеводство и агрохимия</p>
                        <p class="number text-grey">290</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(206,92,15)"></div>
                        <p class="text">Animal'Ex</p>
                        <p class="number text-grey">235</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(84,138,46)"></div>
                        <p class="text">Агротранспорт и логистика</p>
                        <p class="number text-grey">144</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(255,179,0)"></div>
                        <p class="text">Agro Build-Expo</p>
                        <p class="number text-grey">121</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(142,193,75)"></div>
                        <p class="text">Hi-Tech Agro</p>
                        <p class="number text-grey">101</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(252,215,53)"></div>
                        <p class="text">Биотопливо</p>
                        <p class="number text-grey">65</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(45,124,49)"></div>
                        <p class="text">Органик</p>
                        <p class="number text-grey">48</p>
                    </div>
                    <div class="grafic-element">
                        <div class="color" style="background: rgb(3,169,244)"></div>
                        <p class="text">FishExpo</p>
                        <p class="number text-grey">20</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="statistic">
        <div class="container text-center">
            <div class="col-xs-12">
                <h3 class="font-medium">Интерес посетителей к разделам выставок</h3>
            </div>

            <div class="col-sm-10 col-sm-offset-1 text-center">
                <img src="img/pages/about-statistic2.png" alt="" width="100%">
            </div>
        </div>
    </section>


    <section class="bg-lgrey">
        <div class="container text-center">
            <div class="col-xs-6 col-sm-4 col-sm-offset-2 text-center">
                <a href="#photo" class="btn btn-green pd10x30">ФОТОГАЛЕРЕЯ</a>
            </div>
            <div class="col-xs-6 col-sm-4 text-center">
                <a href="#video" class="btn btn-green-tr pd10x30">ВИДЕОБЛОГ</a>
            </div>
        </div>

        <div class="container-fluid">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-xs-12" id="photo">

                            <div class="col-xs-2">
                                <a href="img/photo/00.jpg" data-fancybox="images">
                                    <img src="img/photo/00.jpg" alt="">
                                </a>
                                <a href="img/photo/07.jpg" data-fancybox="images">
                                    <img src="img/photo/07.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/photo/01.jpg" data-fancybox="images">
                                    <img src="img/photo/01.jpg" alt="">
                                </a>
                                <a href="img/photo/02.jpg" data-fancybox="images">
                                    <img src="img/photo/02.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/photo/03.jpg" data-fancybox="images">
                                    <img src="img/photo/03.jpg" alt="">
                                </a>
                                <a href="img/photo/08.jpg" data-fancybox="images">
                                    <img src="img/photo/08.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/photo/04.jpg" data-fancybox="images">
                                    <img src="img/photo/04.jpg" alt="">
                                </a>
                                <a href="img/photo/05.jpg" data-fancybox="images">
                                    <img src="img/photo/05.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/photo/06.jpg" data-fancybox="images">
                                    <img src="img/photo/06.jpg" alt="">
                                </a>
                                <a href="img/photo/09.jpg" data-fancybox="images">
                                    <img src="img/photo/09.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/photo/10.jpg" data-fancybox="images">
                                    <img src="img/photo/10.jpg" alt="">
                                </a>
                                <a href="img/photo/11.jpg" data-fancybox="images">
                                    <img src="img/photo/11.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="container-fluid">
            <div class="col-xs-12" id="photo">
                <div class="col-sm-2">
                    <a href="img/photo/00.jpg" data-fancybox="images">
                        <img src="img/photo/00.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="img/photo/01.jpg" data-fancybox="images">
                        <img src="img/photo/01.jpg" alt="">
                    </a>
                    <a href="img/photo/02.jpg" data-fancybox="images">
                        <img src="img/photo/02.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="img/photo/03.jpg" data-fancybox="images">
                        <img src="img/photo/03.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="img/photo/04.jpg" data-fancybox="images">
                        <img src="img/photo/04.jpg" alt="">
                    </a>
                    <a href="img/photo/05.jpg" data-fancybox="images">
                        <img src="img/photo/05.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="img/photo/06.jpg" data-fancybox="images">
                        <img src="img/photo/06.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>-->

            <div class="container" id="video">
                <div class="col-xs-12">
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/watch?v=ib_1FL0yUvY&t=5s" data-fancybox>
                            <img src="img/pages/about-video.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/watch?v=4TT5T0NDiwc" data-fancybox>
                            <img src="img/pages/about-video.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/watch?v=QCiJJMUu2G4" data-fancybox>
                            <img src="img/pages/about-video.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/watch?v=ib_1FL0yUvY&t=5s" data-fancybox>
                            <img src="img/pages/about-video.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/watch?v=4TT5T0NDiwc" data-fancybox>
                            <img src="img/pages/about-video.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/watch?v=QCiJJMUu2G4" data-fancybox>
                            <img src="img/pages/about-video.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 text-center mt40">
                    <a href=""><i class="icon-left-open text-green"></i></a>
                    <a href=""><i class="icon-right-open text-green"></i></a>
                </div>
            </div>

    </section>


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

    <script src="css/chartis/chartist.min.js"></script>
    <script src="js/chartist.js"></script>

    <script>
        $(function() {
            // график
            $('#part').hide();

            $("a[href='#part']").on('click', function() {
                $('#visit').slideUp(400);
                $('#part').slideDown(400);
            });

            $("a[href='#visit']").on('click', function() {
                $('#part').slideUp(400);
                $('#visit').slideDown(400);
            });

            // статистика
            $('#part1').hide();

            $("a[href='#part1']").on('click', function() {
                $('#visit1').slideUp(400);
                $('#part1').slideDown(400);
            });

            $("a[href='#visit1']").on('click', function() {
                $('#part1').slideUp(400);
                $('#visit1').slideDown(400);
            });

            // статистика
            $('#video').hide();

            $("a[href='#video']").on('click', function() {
                $('#photo').slideUp(400);
                $('#video').slideDown(400);
            });

            $("a[href='#photo']").on('click', function() {
                $('#video').slideUp(400);
                $('#photo').slideDown(400);
            });

        });
    </script>
    </body>

    </html>