<?php
$page_title = 'Регистрация участника. Шаг 1';
$css_link = '
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="plugins/iCheck/flat/grey.css">
<link rel="stylesheet" href="css/reg.css">
';
include 'parts/header.php';
?>

    <section class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <h2 class="text-center text-green">Регистрация участника</h2>
            <hr class="bg-green">

            <h3>Шаг 1. Контактные данные</h3>

            <small class="font-italic">Поля, отмеченные значком (*), обязательны для заполнения.</small>

            <form class="partner-error" method="POST" action="">

                <div class="form-group">
                    <label for="comp_name">Название компании (имя ФОП)*</label>
                    <input type="text" class="form-control" name="comp_name" id="comp_name" placeholder="Введите название" data-validation="required length" data-validation-length="3-60" data-validation-error-msg-required="Введите название компании">
                </div>

                <div class="form-group">
                    <label for="site">Ваш сайт*</label>
                    <input type="text" class="form-control" name="site" id="site" placeholder="http://site.com" data-validation="required url" data-validation-error-msg-required="Введите сайт">
                </div>

                <div class="form-group">
                    <div class="checkbox icheck">
                        <label>
                  <input type="checkbox" name="site_checkbox" id="site_checkbox">
                  Сайт отсутствует
                </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="fio">ФИО ответственного лица*</label>
                    <input type="text" class="form-control" name="fio" id="fio" placeholder="Введите ФИО" data-validation="required length custom" data-validation-length="2-50" data-validation-regexp="^([a-zA-Zа-яА-Я ]+)$">
                </div>

                <div class="form-group">
                    <label for="post">Должность</label>
                    <input type="text" class="form-control" name="post" id="post" placeholder="Введите должность ответственного лица">
                </div>

                <div class="form-group">
                    <label for="tel">Телефон*</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-fw fa-phone"></i></span>
                        <input type="tel" class="form-control phone" name="tel" id="tel" placeholder="(___) ___-____" data-validation="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mail">Email*</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-fw fa-envelope-o"></i></span>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="Введите свой email" data-validation="email required">
                    </div>
                </div>

                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4><i class="fa fa-fw fa-info"></i> Уважаемый участник</h4>
                    Если Вы ранее регистрировались и желаете изменить какие-то данные участия, услуги или хотите принять участие в других разделах выставки, изменить вид участия, Вы можете сделать все это в своем личном кабинете.
                    <div class="text-center">
                        <a href="sign-in.php" class="btn btn btn-green">Войти в личный кабинет</a>
                    </div>
                </div>

                <div class="text-right">
                    <input type="submit" class="btn btn-green-tr" value="Далее">
                </div>

            </form>

        </div>
    </section>

    </div>
    </div>

    <?php include 'parts/footer.php'; ?>

    <?php include 'client/parts/after-footer.php'; ?>

    <script>
        $(function() {

            $('.icheck').iCheck({
                checkboxClass: 'icheckbox_flat-grey'
            });

            // Если сайт отсутствует
            // Если сайт отсутствует
            $('#site_checkbox').on('ifChecked', function() {
                $('#site').val('сайт отсутствует').prop('disabled', true);
            });
            $('#site_checkbox').on('ifUnchecked', function() {
                $('#site').val('').prop('disabled', false);
            });


        });
    </script>
    </body>

    </html>