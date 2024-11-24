import './styles/app.css';
import 'preline/preline';
import 'jquery-mask-plugin';
import 'jquery-timepicker/jquery.timepicker'
import 'jquery-timepicker/jquery.timepicker.css'
import '@fortawesome/fontawesome-free/css/all.min.css'

$( () => {
    $('.timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 30,
        minTime: '10',
        maxTime: '22:30',
        defaultTime: '10',
        startTime: '10:00',
        dynamic: true,
        dropdown: true,
        scrollbar: true
    });

    var today = new Date().toISOString().split('T')[0];
    $('input[type="date"]').attr('min', today);

    $("#schedule_client_phone").mask("(00) 00000-0000")
    $('.price').mask('R$00,00')
})
