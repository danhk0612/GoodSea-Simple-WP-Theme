$('ul.page-numbers').addClass('pagination');
$('a.page-numbers').parent().addClass('waves-effect');
$('span.page-numbers.current').contents().unwrap().wrap( '<a></a>' ).parent().parent().addClass('active');

$('input[type=submit]').addClass('btn');
$('textarea').addClass('materialize-textarea');
