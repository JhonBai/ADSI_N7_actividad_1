document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
    $('select').formSelect();
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
    $('.carousel').carousel();
});

var instance = M.Tabs.init(el, options);

// Or with jQuery

$(document).ready(function(){
    $('.tabs').tabs();
});
