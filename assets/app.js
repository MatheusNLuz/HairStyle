import './styles/app.css';
import 'preline/preline';
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
})
