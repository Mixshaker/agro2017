<?php
$page_title = 'Регистрация участника. Шаг 2';
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

            <h3>Шаг 2. Условия участия</h3>

            <small class="font-italic">Поля, отмеченные значком (*), обязательны для заполнения.</small>

            <form class="partner-error" method="POST" action="">

                <div class="alert alert-info" role="alert">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Рога и копыта интернешенал</p>
                            <p>site.com.ua</p>
                            <br />
                            <a href="participant-reg.php"><i class="fa fa-fw fa-arrow-left" aria-hidden="true"></i> Редактировать</a>
                        </div>
                        <div class="col-sm-6">
                            <p>Колода Николай Николаевич,зам директора</p>
                            <p>+38 (066) 684-7896</p>
                            <p>koloda.n@rk.ua</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="section">Раздел выставки*</label>
                    <select class="form-control" id="section" data-validation="required">
                        <option disabled selected>Выберите из списка:</option>
                        <option>Агро</option>
                        <option>Генетика</option>
                        <option>Транспорт</option>
                        <option>Химия</option>
                    </select>
                </div>

                <div class="form-group">
                    <select multiple class="form-control select2" id="podsection" data-validation="required" disabled>
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
                    <select class="form-control" id="org_pr_form" data-validation="required">
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
                    <p>При регистрации Вы <b>даете согласие</b> на хранение и обработку персональных данных согласно <em>Закону Украины "О защите персональных данных"</em>. Персональные данные являются конфиденциальными и будут использованы только для улучшения
                        взаимодействия компании и организатора-распорядителя &ndash; ТД "ПромФинИнвест".</p>
                </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-green" value="Зарегистрироваться">
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

            // Если выбран пакет участника, Нерезидент блокируется
            // $('#org_pr_form').change(function(){
            //     if ($('#org_pr_form').val() != 'noselect'){
            //         $('#rez').prop('checked', true);
            //         $('#norez').prop('disabled', true);
            //     } else {
            //         $('#norez').prop('disabled', false);
            //     }
            // });
            $('input[name="rez"]').change(function() {
                if ($('#norez').is(':checked') == true) {
                    $('#org_pr_form').val('').prop('disabled', true);
                } else {
                    $('#org_pr_form').val('Выберите из списка:').prop('disabled', false);
                }
            });

        });
    </script>
    </body>

    </html>