
import './bootstrap';
//import 'lazysizes';
import './conseil';

$('#accordion .btn-link').on('click', function () {
    $(this).parent().parent().parent().parent().toggleClass('active');
    $(this).parent().parent().parent().parent().toggleClass('inactive');
});