<?php
$page_title = 'Регистрация участника';
$css_link = '
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="plugins/iCheck/flat/grey.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">
<link rel="stylesheet" href="css/reg.css">
';
include 'parts/header.php';
?>

    <section class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <h2 class="text-center text-green">Регистрация участника</h2>
            <hr class="bg-green">

            <small class="font-italic font13">Поля, отмеченные значком (*), обязательны для заполнения.</small>

            <form id="steps" method="POST" action="">
                <fieldset id="first">

                    <h3>Шаг 1. Контактные данные</h3>

                    <div class="form-group">
                        <label for="comp_name">Название компании (имя ФОП)*</label>
                        <input type="text" class="form-control ntSaveForms" name="comp_name" id="comp_name" placeholder="Введите название" data-validation="required length" data-validation-length="3-60" data-validation-error-msg-required="Введите название компании">
                    </div>

                    <div class="form-group">
                        <label for="site">Ваш сайт*</label>
                        <input type="url" class="form-control ntSaveForms" name="site" id="site" placeholder="http://site.com" data-validation="required url" data-validation-error-msg-required="Введите сайт">
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
                        <input type="text" class="form-control ntSaveForms" name="fio" id="fio" placeholder="Введите ФИО" data-validation="required length custom" data-validation-length="2-50" data-validation-regexp="^([a-zA-Zа-яА-Я ]+)$">
                    </div>

                    <div class="form-group">
                        <label for="post">Должность</label>
                        <input type="text" class="form-control ntSaveForms" name="post" id="post" placeholder="Введите должность ответственного лица">
                    </div>

                    <div class="form-group">
                        <label for="tel">Телефон*</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-phone"></i></span>
                            <input type="tel" class="form-control phone ntSaveForms" name="tel" id="tel" placeholder="(___) ___-____" data-validation="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mail">Email*</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-envelope-o"></i></span>
                            <input type="email" class="form-control ntSaveForms" name="mail" id="mail" placeholder="Введите свой email" data-validation="email required">
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
                        <input type="button" class="btn btn-green-tr next_btn" value="Далее">
                    </div>
                </fieldset>

                <fieldset id="second">

                    <h3>Шаг 2. Условия участия</h3>

                    <div class="alert alert-info" role="alert">
                        <div class="row">
                            <div class="col-sm-6">
                                <p id="pre_comp"></p>
                                <p id="pre_site"></p>
                                <br />
                                <span class="pre_btn font13"><i class="fa fa-fw fa-arrow-left" aria-hidden="true"></i> Редактировать</span>
                            </div>
                            <div class="col-sm-6">
                                <p id="pre_fio"></p>
                                <p id="pre_tel"></p>
                                <p id="pre_mail"></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="section">Раздел выставки*</label>
                        <select class="form-control ntSaveForms" id="section" data-validation="required">
							<option disabled selected>Выберите из списка:</option>
                            <option>Агро</option>
                            <option>Генетика</option>
                            <option>Транспорт</option>
							<option>Химия</option>
						</select>
                    </div>

                    <div class="form-group">
                        <select multiple class="form-control select2 ntSaveForms" id="podsection" style="width:100%" data-validation="required" data-placeholder="Выберите:" disabled>
                        <option>Агротехника</option>
                        <option>Агротранспорт</option>
                        <option>Агроиндустриальное строительство</option>
                        <option>Агрохимия</option>
                    </select>
                    </div>

                    <div class="form-group">

                        <label>Вид участия*</label>
                        <div class="checkbox icheck">
                            <label><input type="checkbox" name="kind_part[]" id="open-sq" data-validation="checkbox_group" data-validation-qty="min1">
  							Открытая площадь (улица)</label>
                        </div>

                        <div class="checkbox icheck">
                            <label><input type="checkbox" name="kind_part[]" id="close_sq">
  							Закрытая площадь (павильон)</label>
                        </div>

                        <div class="checkbox icheck">
                            <label><input type="checkbox" name="kind_part[]" id="in_abs">
  						Заочное участие</label>
                        </div>
                    </div>

                    <div class="btn-radio">
                        <div class="btn-radio-item">
                            <input type="radio" name="rez" value="" id='rez' checked>
                            <label for="rez">Резидент</label>
                        </div>

                        <div class="btn-radio-item">
                            <input type="radio" name="rez" id='norez' value="">
                            <label for="norez">Нерезидент</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_pr_form">Пакет участника*</label>
                        <select class="form-control ntSaveForms" id="org_pr_form" data-validation="required">
						<option selected disabled value="noselect">Выберите из списка:</option>
                        <option>Пакет 1</option>
                        <option>Пакет 2</option>
                        <option>Пакет 3</option>
						<option>Пакет 4</option>
					</select>
                    </div>

                    <div class="bs-callout bs-callout-limegreen">
                        <h4>Условия регистрации</h4>
                        <p>Заполняя этот запрос, компания декларирует своё намерение участвовать в выставке "АГРО-2017".</p>
                        <p>При регистрации Вы <b>даете согласие</b> на хранение и обработку персональных данных согласно <em>Закону Украины "О защите персональных данных"</em>. Персональные данные являются конфиденциальными и будут использованы только для
                            улучшения взаимодействия компании и организатора-распорядителя &ndash; ТД "ПромФинИнвест".</p>
                    </div>
                    <div class="text-right">
                        <input type="submit" class="btn btn-green" value="Зарегистрироваться">
                    </div>
                </fieldset>
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
            $('#site_checkbox').on('ifChecked', function() {
                $('#site').val('сайт отсутствует').prop('disabled', true);
            });
            $('#site_checkbox').on('ifUnchecked', function() {
                $('#site').val('').prop('disabled', false);
            });

            // Если выбран пакет участника, Нерезидент блокируется
            $('input[name="rez"]').change(function() {
                if ($('#norez').is(':checked') == true) {
                    $('#org_pr_form').val('').prop('disabled', true);
                } else {
                    $('#org_pr_form').val('Выберите из списка:').prop('disabled', false);
                }
            });

            // вывод 1го шага на 2ом
            $('.next_btn').click(function() {
                var comp = $('#comp_name').val();
                $('#pre_comp').text(comp);
                var fio = $('#fio').val();
                $('#pre_fio').text(fio);
                var tel = $('#tel').val();
                $('#pre_tel').text(tel);
                var mail = $('#mail').val();
                $('#pre_mail').text(mail);
                var site = $('#site').val();
                $('#pre_site').text(site);

            });

            //  2 steps
            $(".next_btn").on('click', function() { //Function runs on NEXT button click 

                $('#second').fadeIn('slow');
                $('#first').css({
                    'display': 'none'
                });
                $('.active').next().addClass('active');
            });

            $(".pre_btn").click(function() { //Function runs on PREVIOUS button click 
                $('#first').fadeIn('slow');
                $('#second').css({
                    'display': 'none'
                });
                $('.active:last').removeClass('active');
            });

        });
    </script>
    </body>

    </html>