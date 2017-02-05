<?php
$page_title = '«ЕкспоАгроТех»';
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
                    <img src="img/logo/expoagrotech.png" alt="«ЕкспоАгроТех»" class="mt15">
                </div>
                <div class="col-xs-9 col-sm-8">
                    <h4 class="font-regular">Один из самых больших разделов выставки, экспозиция <b>«ЕкспоАгроТех»</b> - агротехника и запасные части для земледелия, растениеводства, мелиорации, животноводства, птицеводства, производства кормов, пищевой и перерабатывающей промышленности,
                        утилизации, приусадебного хозяйства.</h4>
                </div>
            </div>
        </section>

        <section class="expo-theme">
            <h2 class="text-green text-center">Тематика выставки</h2>

            <div class="col-sm-10 col-sm-offset-1 expo-border">
                <ul class="text-green">
                    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-1">
                        <li><i class="icon-doc-text"></i> <span>Тракторы;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Машины для обработки почвы;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Посевная техника;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Техника для внесения удобрений;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Техника и оборудование для орошения и водоотвода;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Техника и оборудование для уборки урожая, комбайны;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Оборудование для переработки и хранения урожая;</span></li>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-1">
                        <li><i class="icon-doc-text"></i> <span>Запчасти для техники и оборудования;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Средства малой механизации;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Оборудование для лабораторий, измерительные приборы;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Машины и оборудование для плодоовощных и бахчевых культур;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Садовый и огородный инвентарь;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Ремонт.</span></li>
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