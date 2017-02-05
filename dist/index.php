<?php
$page_title = 'Главная';
include 'parts/header.php';
?>

    <section id="main-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">
                <h2 class="wow fadeInDown" data-wow-delay="1s">Крупнейшая агропромышленная выставка Украины</h2>
                <br>
                <div class="col-xs-12 col-sm-6 col-md-3 slogan wow zoomIn" data-wow-delay="1.2s">
                    <h1>53 тыс.</h1>
                    посетителей
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 slogan wow zoomIn" data-wow-delay="1.4s">
                    <h1>25 тыс. м<sup>2</sup></h1>
                    площадь выставки
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 slogan wow zoomIn" data-wow-delay="1.6s">
                    <h1>1200</h1>
                    участников
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2 slogan wow zoomIn" data-wow-delay="1.8s">
                    <h1>15</h1>
                    стран
                </div>
            </div>
        </div>
    </section>


    <section class="bg-lgrey">
        <div class="main-presentation">
            <a data-fancybox href="https://www.youtube.com/watch?v=ib_1FL0yUvY">
                <img src="img/main-presentation.jpg" alt="">

                <div class="present-content">
                    <a data-fancybox href="https://www.youtube.com/watch?v=ib_1FL0yUvY" class="btn btn-yellow">Смотреть <i class="icon-right-arr"></i></a>
                </div>
            </a>
        </div>
        <div id="trigger1"></div>
    </section>


    <section class="main-expo" id="pin1">

        <?php include 'parts/theme-expo.php'; ?>

        <div class="plan">
            <div class="container text-center">
                <h2 class="text-green" id="two">План выставки</h2>
                <div class="plan-block mt40" id="two1">
                    <img src="img/plan.png" alt="" width="100%" id="three">
                    <div class="btn-block" id="four">
                        <a href="#" class="btn btn-yellow" id="five">ПЕРЕЙТИ НА ИНТЕРАКТИВНЫЙ ПЛАН</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-participants">
        <div class="container text-center">
            <h2 class="text-green">Наши участники</h2>
            <hr class="bg-green">

            <?php include 'parts/our-participants.php'; ?>
            <div id="trigger2"></div>
        </div>
    </section>



    <section class="business_prog">
        <div class="container text-center fadeInLeft wow">
            <h2 class="text-white">Деловая программа</h2>
            <hr class="bg-white">
            <a href="business.php" class="btn btn-white pd10x30">СМОТРЕТЬ ПРОГРАММУ</a>

            <?php include 'parts/business-program.php'; ?>

        </div>
    </section>


    <section class="main-partners" id="i2">
        <div class="container text-center">

            <h2 class="text-green">Наши партнеры</h2>
            <hr class="bg-green">

            <?php include 'parts/our-partners.php'; ?>

        </div>
    </section>


    <section class="main-news">
        <div class="container">

            <h2 class="text-white text-center">Новости</h2>
            <hr class="bg-white">
            <div class="news-container">

                <div id="carousel-news" class="carousel slide" data-ride="carousel" data-interval="3000">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="news-img">
                                <img src="img/pages/news-img1.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <h3>Как проходит подготовка к выставке на ВДНХ </h3>
                                <p>Более 25 тыс. кв. м. выставочной площади отведено под демонстрацию лучших технологий сотен отечественных и иностранных компаний-участников. Ежегодно количество посетителей «Агро» ​превышает 50 000 человек. Для профессионалов
                                    ​АПК​,​ «Агро - 2017» - это отличная возможность обмена опытом на деловом уровне, благодаря насыщенной научной программе: интерактивным брифингам, семинарам, конференциям, круглым столам.</p>
                                <a href="news.php#n1" class="text-yellow read-more">Читать далее <i class="icon-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="news-img">
                                <img src="img/pages/news-img2.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <h3>Кабинет министров Украины компенсирует покупку техники</h3>
                                <p>В 2017 г. Кабинет министров Украины компенсирует покупку техники для аграриев на сумму 550 млн грн. Об этом сообщил премьер-министр Украины Владимир Гройсман, пишет «РБК-Украина». Он отметил, что в бюджете предусмотрены
                                    программы общей поддержки аграриев. Напомним, что аграрии за девять месяцев 2016 г. приобрели 6,9 тыс. единиц техники на сумму около 7,2 млрд грн.</p>
                                <a href="news.php#n2" class="text-yellow read-more">Читать далее <i class="icon-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="news-img">
                                <img src="img/pages/news-img3.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <h3>Уряд схвалив законопроект щодо удосконалень механізмів Державного земельного кадастру</h3>
                                <p>Сьогодні на засіданні Кабінету Міністрів України було схвалено проект Закону України «Про внесення змін до Закону України „Про Державний земельний кадастрˮ щодо порядку оскарження рішень, дій або бездіяльності у сфері ведення
                                    Державного земельного кадастру». «Проект було розроблено відповідно до кращих практик якісного та ефективного регулювання, відображених Групою Світового банку.</p>
                                <a href="news.php#n3" class="text-yellow read-more">Читать далее <i class="icon-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-news" data-slide-to="1"></li>
                        <li data-target="#carousel-news" data-slide-to="2"></li>
                        <!--<li data-target="#carousel-news" data-slide-to="3"></li>-->
                    </ol>
                </div>

            </div>

            <a href="news.php" class="text-white pull-right see-all">ВСЕ НОВОСТИ <i class="icon-right"></i></a>
        </div>
    </section>

    <section class="causes">
        <div class="container">
            <h2 class="text-green">5 причин, по которым вам необходимо</h2>
            <hr class="bg-green">

            <div class="row">
                <div class="col-xs-6 text-right">
                    <a href="#visit" class="btn btn-green">ПОСЕТИТЬ</a>
                </div>
                <div class="col-xs-6 text-left">
                    <a href="#part" class="btn btn-green-tr">УЧАСТВОВАТЬ</a>
                </div>
            </div>
            <div class="list-causes wow flipInX" data-wow-delay=".3s" id="visit">
                <img src="img/5cause.png" alt="5 причин" class="hidden-xs">
                <ul class="list-unstyled text-left">
                    <li>
                        <h3 class="font-medium">единственная в Украине многопрофильная выставка в области сельского хозяйства;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">со специализированным оборудованием для: полевых культур, домашних животных, овощеводства, садоводства, рыболовства;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">Возможность ознакомиться с инновационными технологиями, автоматизацией управ&shy;ления и контроля в сельском хозяйстве, внедрением энергосберегающих ресурсов;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">более чем 30 научно-практичных мероприятий (конференции, круглые столы, симпозиумы, брифинги);</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">презентации и дегустации разнообразной продукции, показ племенных лошадей и крупного рогатого скота.</h3>
                    </li>
                </ul>
            </div>

            <div class="list-causes" id="part">
                <img src="img/5cause2.png" alt="5 причин" class="hidden-xs">
                <ul class="list-unstyled text-left">
                    <li>
                        <h3 class="font-medium">единственное международное событие в Украине, охватывающее все сферы агропромышленного комплекса;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">развиваться в окружении мировых лидеров;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">оптимизировать и мотивировать ваши внутренние и внешние сети: отдел продаж, дилеров, дистрибьюторов;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">Агро - это успешная платформа для реализации продукции, заключения долгосрочных партнерских отношений;</h3>
                    </li>
                    <li>
                        <h3 class="font-medium">комплекс мероприятий с технической состовляющей: практические семинары, конференции, презентации, демонстрации, круглые столы.</h3>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    </div>
    </div>

    <footer class="container-fluid footer-main">
        <div class="row">
            <div class="container prefooter">
                <div class="col-sm-12 col-md-6">
                    <h3><i class="icon-phone"></i> +3 8 044 220 11 45</h3>
                    <i class="icon-mail-alt"></i> info@argoexpo.com.ua
                </div>
                <div class="col-sm-12 col-md-6">
                    <table>
                        <tr>
                            <td style="width:50px; text-align:center"><i class="icon-location"></i></td>
                            <td>Офис организаторов <br> ООО ТД “ПромФинИнвест”: <br> Киев, ул. Анри Барбюса, 5-В, оф. 152</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a data-fancybox href="https://www.google.com/maps/d/embed?mid=11HqWqjbSJa6SaZ5_DCuNzTLNp0M" class="btn btn-white-tr"> <i class="icon-search"></i> Как доехать?</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-12">
                    <hr class="hr-thin-med bg-lgrey">
                </div>
            </div>

            <div class="container">
                <div class="pull-left">
                    <a href="partners.php#download_materials" class="btn btn-white-tr">Материалы для скачивания</a>
                    <a href="#" class="link-uline">Условия использования информации</a>
                </div>

                <div class="pull-right">
                    <a href="#" class="foot-menu"><b>FAQ</b></a>
                    <a href="#" class="foot-menu"><b>КАРТА САЙТА</b></a>
                    <span class="foot-menu"></span>
                    <a href="https://www.facebook.com/agroexpo.in.ua/" target="_blank"><i class="icon-fb"></i></a>&nbsp;
                    <a href="https://www.youtube.com/channel/UCaYzzjf1lBnCY0seVQCtEHw"><i class="icon-youtube"></i></a>
                </div>
                <div class="col-xs-12 copy">
                    &reg; Агро–2017. Все права защищены
                </div>
            </div>
        </div>
    </footer>


    <?php include 'parts/fixed-btn.php'; ?>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>

    <!-- animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/anima/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/anima/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/anima/animation.gsap.min.js"></script>


    <script>
        $(function() {
            // SCROLL ANIMATION
            new WOW().init();

            // Fancybox
            $('[data-fancybox]').fancybox({
                youtube: {
                    showinfo: 0
                }
            });


            // Init ScrollMagic
            var ctrl = new ScrollMagic.Controller({
                globalSceneOptions: {
                    triggerHook: 'onLeave'
                }
            });

            var sw = window.innerWidth;
            var kw = sw / 1920;
            var id1 = document.getElementById("one");
            var id2 = document.getElementById("two");
            var id21 = document.getElementById("two1");
            var id3 = document.getElementById("three");
            var id4 = document.getElementById("four");
            var id5 = document.getElementById("five");
            // Create scene

            if (sw > 991 && sw < 1200) {
                kw = 0.7;
            } else if (sw > 766 && sw < 992) {
                kw = 0.6;
            } else if (sw > 641 && sw < 767) {
                kw = 0.55;
            } else if (sw < 640) {
                kw = 0.47;
            }

            new ScrollMagic.Scene({
                    triggerElement: "#trigger1",
                    duration: 800 * kw
                })
                .setPin("#pin1")
                .addTo(ctrl);


            // set start offset
            var top1 = 700 * kw;

            var tween = new TimelineMax()
                .to(id1, 1, {
                    top: "-=" + top1
                });

            new ScrollMagic.Scene({
                    triggerElement: "#trigger1",
                    duration: 250 * kw
                })
                .setTween(tween)
                .addTo(ctrl);


            var tween2 = TweenMax.to([id2, id21], 0.15, {
                css: {
                    opacity: 1
                }
            });

            new ScrollMagic.Scene({
                    triggerElement: "#trigger1",
                    offset: 200 * kw,
                    duration: 100 * kw
                })
                .setTween(tween2)
                .addTo(ctrl);


            var tween3 = TweenMax.to(id3, 0.15, {
                css: {
                    opacity: 1
                }
            });

            new ScrollMagic.Scene({
                    triggerElement: "#trigger1",
                    offset: 300 * kw,
                    duration: 150 * kw
                })
                .setTween(tween3)
                .addTo(ctrl);


            var tween4 = TweenMax.to(id4, 0.15, {
                css: {
                    height: "30%"
                }
            });

            new ScrollMagic.Scene({
                    triggerElement: "#trigger1",
                    offset: 450 * kw,
                    duration: 150 * kw
                })
                .setTween(tween4)
                .addTo(ctrl);

            var tween5 = TweenMax.to(id5, 0.1, {
                css: {
                    opacity: 1
                }
            });

            new ScrollMagic.Scene({
                    triggerElement: "#trigger1",
                    offset: 550 * kw,
                    duration: 150 * kw
                })
                .setTween(tween5)
                .addTo(ctrl);
            // SCROLL ANIMATION END

            // 5 причин
            $('#part').hide();

            $("a[href='#part']").on('click', function() {
                $('#visit').slideUp(400);
                $('#part').slideDown(400);
            });

            $("a[href='#visit']").on('click', function() {
                $('#part').slideUp(400);
                $('#visit').slideDown(400);
            });


        });
    </script>

    </body>

    </html>