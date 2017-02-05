<!DOCTYPE html>
<html>
<head>
  <title><?php echo $page_title;?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='img/AGRO.ico' type='image/x-icon'>
  <link rel="stylesheet" href="css/font-gotham.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/agro.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/jquery.validator.min.css">

  <?php echo $css_link; ?>
</head>
<body>
<div class="container-fluid content-block">
  <div class="row">
    <header id="totop">
        <div class="container">
        <div class="pull-left">
          <div class="select-style" id="lang">
            <select name="lang">
              <option value="ru">RU</option>
              <option value="ua">UA</option>
              <option value="en">EN</option>
            </select>
          </div>
        </div>

        <div class="pull-right">
          <a href="https://www.facebook.com/agroexpo.in.ua/" target="_blank"><i class="icon-fb"></i></a>&nbsp;
          <a href="https://www.youtube.com/channel/UCaYzzjf1lBnCY0seVQCtEHw" target="_blank"><i class="icon-youtube"></i></a>&nbsp;
          <a href="#"><i class="icon-search"></i></a> &nbsp;
          <span class="login-head"><a href="#"><span class="hidden-xs">Вход в личный кабинет</span> <i class="icon-login"></i></a></span>
        </div>
      </div>
    </header>

    <nav id="main-menu" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

      <?php $class='class="active"'; ?>

        <div class="collapse navbar-collapse wow bounceInRight" data-wow-delay=".3s" id="navbar-collapse">
          <ul class="nav navbar-nav text-center">
            <li><a href="about.php" <?php if ($page == "about") {echo $class;} ?> >О ВЫСТАВКЕ</a></li>
            <li><a href="visitors.php" <?php if ($page == "visitors") {echo $class;} ?> >ПОСЕТИТЕЛЯМ</a></li>
            <li><a href="participants.php" <?php if ($page == "participants") {echo $class;} ?> >УЧАСТНИКАМ</a></li>
            <li><a href="partners.php" <?php if ($page == "partners") {echo $class;} ?> >ПАРТНЕРЫ</a></li>
            <li><a href="contacts.php" <?php if ($page == "contacts") {echo $class;} ?> >КОНТАКТЫ</a></li>
          </ul>
        </div>
      </div>
    </nav>
