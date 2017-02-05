<?php
$page_title = 'Участники Агро-2017';
include 'parts/header.php';
?>

    <!-- <link rel="stylesheet" href="css/partlist.css"> -->

    <section id="partlist-banner" class="top-page-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">
                <img src="img/pages/listpart-title.png" alt="Участники АГРО-2017" class="wow bounceIn" data-wow-delay=".7s">
            </div>
        </div>
    </section>

    <section class="expo-list-section">
        <div class="container between-ad text-center">

            <?php include 'parts/ad-blocks.php'; ?>

            <a href="#" class="btn btn-yellow pd10x30 mt15">ПЕРЕЙТИ В КАТАЛОГ</a>

            <div class="row text-center mt40">
                <div class="col-sm-10 col-sm-offset-1">

                    <?php include 'parts/partlist-search.php'; ?>

                    <h4 class="font-regular mt40">Страница наполняется</h4>
                    <!--<div id="table-list">
                        <table class="table text-left">
                            <tr>
                                <td><a href="" class="font-medium text-green link-uline-dash">AGCO INTERNATIONAL GMBH</a></td>
                                <td><a href="" class="text-yellow"><i class="icon-location"></i>Стенд на карте</a></td>
                                <td class="text-right"><a href="" class="text-yellow">Назначить встречу <i class="icon-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="" class="font-medium text-green link-uline-dash">AQUACULTURE UKRAINE</a></td>
                                <td><a href="" class="text-yellow"><i class="icon-location"></i>Стенд на карте</a></td>
                                <td class="text-right"><a href="" class="text-yellow">Назначить встречу <i class="icon-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="" class="font-medium text-green link-uline-dash">AGCO INTERNATIONAL GMBH</a></td>
                                <td><a href="" class="text-yellow"><i class="icon-location"></i>Стенд на карте</a></td>
                                <td class="text-right"><a href="" class="text-yellow">Назначить встречу <i class="icon-right"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="" class="font-medium text-green link-uline-dash">АГРОТЕХ, ОРІХІВСЬКИЙ ЗАВОД <br>СІЛЬСЬКОГОСПОДАРСЬКИХ МАШИН, ТОВ</a></td>
                                <td><a href="" class="text-yellow"><i class="icon-location"></i>Стенд на карте</a></td>
                                <td class="text-right"><a href="" class="text-yellow">Назначить встречу <i class="icon-right"></i></a></td>
                            </tr>
                        </table>
                    </div>-->
                </div>
            </div>
        </div>
    </section>


    </div>
    </div>


    <?php include 'parts/footer.php'; ?>

    <?php include 'parts/fixed-btn.php'; ?>

    <script src="js/jquery.slimscroll.min.js"></script>

    <script>
        $(function() {

            $('#table-list').slimScroll({
                height: '870px',
                size: '8px',
                color: '#F5AA16',
                alwaysVisible: true,
                distance: '0px',
                railVisible: true,
                railColor: '#eee',
                wheelStep: 15
            });
        });
    </script>
    </body>

    </html>