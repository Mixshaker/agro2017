<?php
$page_title = 'Регистрация посетителя';
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

            <h2 class="text-center text-green">Регистрация посетителя</h2>
            <hr class="bg-green">

            <small class="font-italic font13">Поля, отмеченные значком (*), обязательны для заполнения.</small>

            <form id="steps" method="POST" action="">

                <fieldset id="first">

                    <h3>Шаг 1.</h3>

                    <div class="form-group">
                        <label for="mail">Email*</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-envelope-o"></i></span>
                            <input type="email" class="form-control ntSaveForms" name="mail" id="mail" placeholder="Введите свой email" data-validation="email required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль*</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                            <input type="password" class="form-control" name="pass_confirmation" data-validation="length required" data-validation-length="min8" id="password" placeholder="Введите пароль">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass">Повторите пароль*</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                            <input type="password" class="form-control" name="pass" data-validation="confirmation required" id="pass" placeholder="Подтвердите пароль">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lname">Фамилия*</label>
                        <input type="text" class="form-control ntSaveForms" name="lname" id="lname" placeholder="Введите фамилию" data-validation="required length custom" data-validation-length="2-50" data-validation-regexp="^([a-zA-Zа-яА-Я]+)$">
                    </div>


                    <div class="form-group">
                        <label for="name">Имя*</label>
                        <input type="text" class="form-control ntSaveForms" name="name" id="name" placeholder="Введите имя" data-validation="required length custom" data-validation-length="2-50" data-validation-regexp="^([a-zA-Zа-яА-Я]+)$">
                    </div>

                    <div class="form-group">
                        <label for="fname">Отчество</label>
                        <input type="text" class="form-control ntSaveForms" name="fname" id="fname" placeholder="Введите отчество" data-validation="length custom" data-validation-length="2-50" data-validation-regexp="^([a-zA-Zа-яА-Я]+)$">
                    </div>

                    <div class="form-group">
                        <label for="comp_name">Название компании (имя ФОП)*</label>
                        <input type="text" class="form-control ntSaveForms" name="comp_name" id="comp_name" placeholder="Введите название" data-validation="required length" data-validation-length="3-60" data-validation-error-msg-required="Введите название компании">
                    </div>

                    <div class="form-group">
                        <label for="post">Должность</label>
                        <select class="form-control" id="post">
                            <option selected disabled value="noselect">Неопределенный</option>
                            <option>Директор/Собственник</option>
                            <option>Руководитель отдела</option>
                            <option>Менеджер</option>
                            <option>Специалист</option>
                            <option>Частный предприниматель</option>
                            <option>Студент</option>
					    </select>
                    </div>

                    <div class="form-group">
                        <label for="tel">Контактный телефон</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fw fa-phone"></i></span>
                            <input type="text" class="form-control phone ntSaveForms" name="tel" id="tel" placeholder="(___) ___-____">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="site">Сайт</label>
                        <input type="text" class="form-control ntSaveForms" name="site" id="site" placeholder="http://site.com">
                    </div>

                    <div class="form-group">
                        <div class="checkbox icheck">
                            <label>
                            <input type="checkbox" name="dont_take_news" id="dont_take_news">
                            Вы собираетесь получать новости и сообщения об АГРО для своей деятельности. Если не хотите их получать, поставьте галочку.
                            </label>
                        </div>
                    </div>

                    <div class="text-right">
                        <input type="button" class="btn btn-green-tr next_btn" value="Далее">
                    </div>

                </fieldset>

                <fieldset id="second">

                    <h3>Шаг 2.</h3>
                    <div class="pre_btn font14 mt20"><i class="fa fa-fw fa-arrow-left" aria-hidden="true"></i> Вернуться к шагу 1</div>

                    <div class="form-group">
                        <label for="activity">Вид деятельности (выберите или напишите свой):</label>
                        <select multiple class="form-control select2" id="activity" style="width:100%">
                            <optgroup label="Фермер:">
                                <option value="">Основные культуры</option>
                                <option value="">Фрукты и овощи</option>
                            </optgroup>

                            <optgroup label="Заводчик:">
                                <option value="">Мясное животноводство</option>
                                <option value="">Молочное животноводство</option>
                            </optgroup>

                            <optgroup label="Другая деятельность:">
                                <option value="">Сельскохозяйственный или лесной подрядчик</option>
                                <option value="">Дистрибьюторы /Дилеры/Импортеры</option>
                                <option value="">Оптовая продажа /Посредник</option>
                                <option value="">Фермерство</option>
                                <option value="">Обучение / Организация oбслуживания</option>
                                <option value="">Строитель/ Производитель/ Поставщик</option>
                                <option value="">Флорист/ландшафтный дизайнер</option>
                                <option value="">Студенты</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="post">Какие разделы выставки вам наиболее интересны:</label>
                        <select multiple class="form-control select2" id="post" style="width:100%">
                            <option value="">ЭкспоАгроТех</option>
                            <option value="">Растениеводство и агрохимия</option>
                            <option value="">Агротранспорт и логистика</option>
                            <option value="">Hi-tech Агро (инновации)</option>
                            <option value="">Биотопливо</option>
                            <option value="">ANIMAL’EX (Животноводство/вете-ринария)</option>
                            <option value="">Agro-Build Expo (строительство)</option>
                            <option value="">Эко продукция</option>
                            <option value="">FishExpo (рыбоводство)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="checkbox icheck">
                            <label>
                            <input type="checkbox" name="take_invitation" id="take_invitation" checked>
                                    Желаете получить пригласительный на выставку?
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="country">Страна:*</label>
                        <select class="form-control" id="country" data-validation="required">
                            <option selected value="ua">Украина</option>
                            <option value="ru">Россия</option>
                            <option value="by">Белоруссия</option>
                            <option value="ml">Молдова</option>
                            <option value="pl">Польша</option>
                            <option value="kz">Казахстан</option>
                            <option value="pr">Приднестровье</option>
                            <option value="ge">Грузия</option>
                            <option value="az">Азербайджан</option>
					    </select>
                    </div>

                    <div class="form-group">
                        <label for="obl">Область:*</label>
                        <input type="text" class="form-control ntSaveForms" name="obl" id="obl" placeholder="Введите область" data-validation="required length custom" data-validation-length="4-50" data-validation-regexp="^([a-zA-Zа-яА-Я]+)$">
                    </div>

                    <div class="form-group">
                        <label for="raj">Район:</label>
                        <input type="text" class="form-control ntSaveForms" name="raj" id="raj" placeholder="Введите район" data-validation="required">
                    </div>

                    <div class="form-group">
                        <label for="post_code">Почтовый индекс:*</label>
                        <input type="text" class="form-control ntSaveForms" name="post_code" id="post_code" placeholder="Введите почтоый индекс" data-validation="required  length custom" data-validation-length="5-7" data-validation-regexp="^([0-9]+)$">
                    </div>

                    <div class="form-group">
                        <label for="city">Город/поселок:*</label>
                        <input type="text" class="form-control ntSaveForms" name="city" id="city" placeholder="Введите город/поселок" data-validation="required length custom" data-validation-length="3-50" data-validation-regexp="^([a-zA-Zа-яА-Я]+)$">
                    </div>

                    <div class="form-group">
                        <label for="street">Улица:*</label>
                        <input type="text" class="form-control ntSaveForms" name="street" id="street" placeholder="Введите улицу" data-validation="required length custom" data-validation-length="3-50" data-validation-regexp="^([a-zA-Zа-яА-Я]+)$">
                    </div>

                    <div class="form-group">
                        <label for="num_house">№ дома:*</label>
                        <input type="text" class="form-control ntSaveForms" name="num_house" id="num_house" placeholder="Введите № дома" data-validation="required length custom" data-validation-length="1-10" data-validation-regexp="^([a-zA-Zа-яА-Я0-9-]+)$">
                    </div>

                    <div class="form-group">
                        <label for="office">Офис/кв.:</label>
                        <input type="text" class="form-control ntSaveForms" name="office" id="office" placeholder="Введите Офис/кв.">
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

            $("#activity").select2({
                tags: true
            })

            $('.icheck').iCheck({
                checkboxClass: 'icheckbox_flat-grey'
            });

            // получить пригласительный
            $('#take_invitation').on('ifChecked', function() {
                $('#country').prop('disabled', false);
                $('#obl').prop('disabled', false);
                $('#raj').prop('disabled', false);
                $('#post_code').prop('disabled', false);
                $('#city').prop('disabled', false);
                $('#street').prop('disabled', false);
                $('#num_house').prop('disabled', false);
                $('#office').prop('disabled', false);
            });

            $('#take_invitation').on('ifUnchecked', function() {
                $('#country').prop('disabled', true);
                $('#obl').prop('disabled', true);
                $('#raj').prop('disabled', true);
                $('#post_code').prop('disabled', true);
                $('#city').prop('disabled', true);
                $('#street').prop('disabled', true);
                $('#num_house').prop('disabled', true);
                $('#office').prop('disabled', true);
            });

            $.validate({
                modules: 'security'
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