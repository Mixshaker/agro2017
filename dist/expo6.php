<?php
$page_title = '«ANIMAL`EX»';
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
                    <img src="img/logo/animalex.png" alt="«ANIMAL`EX»" class="mt15">
                </div>
                <div class="col-xs-9 col-sm-8">
                    <h4 class="font-regular"><b>«ANIMAL`EX»</b> выставка посвящена оборудованию для животноводства и содержанию с / х животных (КРС, лошади, овцы, козы, птицы и т.д.). Здесь демонстрируется интеллектуальное оборудование для смешанного кормления скота, полиферментные
                        препараты и другие добавки для производства кормов и премиксов, технологии и биологические препараты для консервирования кормов, экспресс-тесты для анализа микро- токсинов в кормах, защитная одежда для персонала, широкий спектр
                        витаминов и смесей кормов, вакцин для сельскохозяйственных животных.</h4>
                </div>
            </div>
        </section>

        <section class="expo-theme">
            <h2 class="text-green text-center">Тематика выставки</h2>

            <div class="col-sm-10 col-sm-offset-1 expo-border">
                <ul class="text-green">
                    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-1">
                        <li><i class="icon-doc-text"></i> <span>Строительство, реконструкция сооружений для скота и птицы;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Ветеринария;</span></li>

                        <li><i class="icon-doc-text"></i> <span>Генетика;</span></li>

                        <li><i class="icon-doc-text"></i> <span>Экологически чистые продукты и технологии;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Кормовая промышленность;</span></li>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-1">
                        <li><i class="icon-doc-text"></i> <span>Лабораторное и измерительное оборудование;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Оборудование для содержания скота и птицы;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Птицеводство;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Санитария и гигиена;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Животноводство;</span></li>
                        <li><i class="icon-doc-text"></i> <span>Утилизация.</span></li>
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