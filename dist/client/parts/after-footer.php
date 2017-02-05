<div class="reg-question">
    <div class="alert alert-info" role="alert">
        <table>
            <tr>
                <td><i class="fa fa-fw fa-3x fa-info"></i> </td>
                <td>Возникли вопросы?<br> Звоните: <br> +38 044 236-4853 <br> Мы Вам поможем!</td>
            </tr>
        </table>
    </div>
</div>


<script src="js/client/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/client/jquery.form-validator.min.js"></script>
<script src="js/client/ntsaveforms.js"></script>

<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>

<script>
    $(function() {
        // проверка форм
        $.validate({
            lang: 'ru'
        });

        // MultiSelect
        $(".select2").select2();

        $("#date").mask("99/99/9999", {
            placeholder: "mm/dd/yyyy"
        });
        $(".phone").mask("+38 (099) 999-9999");
        $("#tin").mask("99-9999999");
        $("#ssn").mask("999-99-9999");


        // связанные select

        function chainSelect(current, target) {
            var value1 = $(current).on('change', function() {
                if ($(this).find(':selected').val() != '') {
                    $(target).removeAttr('disabled');
                    var value = $(this).find(':selected').text();
                } else {
                    $(target).prop('disabled', 'disabled').val(null);
                }
                return value;
            });
            return value1;
        }
        //подвыбор выставки
        var podsec = chainSelect('select#section', '#podsection');

    });
</script>