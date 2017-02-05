<?php
$page_title = 'Деловая программа';
include 'parts/header.php';
?>

    <section id="business-banner" class="top-page-banner">
        <div class="container">

            <?php include 'parts/top-banner.php'; ?>

            <div class="banner-title">
                <img src="img/pages/business-title.png" alt="Деловая программа" class="wow bounceIn" data-wow-delay=".7s">
            </div>
        </div>
    </section>


    <section class="business_prog business_prog_nobg wow fadeInUpBig" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row business_tabs">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation" class="active">
                        <a data-toggle="tab" href="#day1">
                            <h3>1 день</h3>07.06.2017</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#day2">
                            <h3>2 день</h3>08.06.2017</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#day3">
                            <h3>3 день</h3>09.06.2017</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#alldays">
                            <h3>Все мероприятия</h3>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div id="day1" class="tab-pane fade in active">
                        <ul class="list-unstyled list-inline">
                            <li class="active"><a data-toggle="tab" href="#day1p1">1 павильон</a></li>
                            <li><a data-toggle="tab" href="#day1p2">2 павильон</a></li>
                            <li><a data-toggle="tab" href="#day1p8">8 павильон</a></li>
                            <li><a data-toggle="tab" href="#day1p19">19 павильон</a></li>
                            <li><a data-toggle="tab" href="#day1pk">Конференц-зал
              <br>BUILD-EXPO</a></li>
                        </ul>
                        <div class="tab-content">
                            <article class="text-left mt40">
                                <div class="col-sm-4 col-md-3 text-center">
                                    <img src="img/pages/business-ava2.png" alt="">
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <i class="icon-clock text-yellow"></i>
                                    <h3 class="text-green font-medium">Деловая программа в процессе формирования</h3>
                                    <hr class="hr-thin-med bg-grey">
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
                <!-- tab-content -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--   <section>
    <div class="text-center">
      <a href="" class="btn btn-yellow-tr pd10x20 mt40"><i class="icon-download text-yellow"></i> СКАЧАТЬ ВСЮ ПРОГРАММУ</a>
    </div>
  </section> -->
    </div>
    </div>

    <?php include 'parts/footer.php'; ?>

    <?php include 'parts/fixed-btn.php'; ?>

    </body>

    </html>