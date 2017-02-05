<?php
$page_title = '«Агротранспорт и логистика»';
include 'parts/header.php';
?>

    <section id="expo1-banner" class="top-page-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">

                <div class="b-title">
                    <h1 class="text-yellow">
                        <?php echo $page_title; ?>
                    </h1>
                    <!-- <span>&nbsp;</span> -->
                </div>

            </div>
        </div>
    </section>


    <div class="container between-ad">

        <?php include 'parts/ad-blocks.php'; ?>

        <section class="expo-review">
            <div class="row">
                <div class="col-xs-3 col-xs-offset-0 col-sm-2 col-sm-offset-1">
                    <img src="img/logo/autotrans.png" alt="«Агротранспорт и логистика»" class="mt15">
                </div>
                <div class="col-xs-9 col-sm-8">
                    <h4 class="font-regular">Экспозиция выставки <b>«Агротранспорт и логистика»</b> - сфокусирована на демонстрации развития и оптимизации взаимодействия производственного, перерабатывающего и потребительского секторов АПК, которые тесно переплетаются различными
                        видами внутренних связей: транспортными, логистическими, технологическими, информационными, финансовыми и т.п.</h4>
                </div>
            </div>
        </section>

        <section class="expo-theme">
            <h2 class="text-green text-center">Тематика выставки</h2>

            <div class="col-sm-10 col-sm-offset-1 expo-border">
                <ul class="text-green">
                    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-1">
                        <li><i class="icon-doc-text"></i> <span>Мобильные погрузчики;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Техника для перевозки грузов;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Контейнеры;</span></li>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-1">
                        <li><i class="icon-doc-text"></i> <span>Упаковочное оборудование и материалы;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Лабораторное и взвешивающее оборудование;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Программное обеспечение.</span></li>
                    </div>
                </ul>
            </div>
        </section>

        <!--<section class="expo-list-section">
            <div class="row text-center">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2 class="text-green">Список участников:</h2>
                    <hr class="bg-green">
                    <div id="table-list">
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
                                <td><a href="" class="font-medium text-green link-uline-dash">AQUACULTURE UKRAINE</a></td>
                                <td><a href="" class="text-yellow"><i class="icon-location"></i>Стенд на карте</a></td>
                                <td class="text-right"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>-->
    </div>


    </div>
    </div>


    <?php include 'parts/footer.php'; ?>

    <?php include 'parts/fixed-btn.php'; ?>

    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
        $(function() {

            $('#table-list').slimScroll({
                height: '300px',
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