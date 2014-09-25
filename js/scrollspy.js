$(function() {
    var sections = [];
    var id = false;
    var $navbar = $('.nav-header-inner-right');
    var $navbara = $('a[href^="#"]', $navbar);

    var heightOffset = $('header').hasClass('nav-header-fixed') ? $navbar.height() + parseInt($('.content').css('padding-top')) + parseInt($('.container').css('padding-top')) : $navbar.height();

    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        if ($(this).attr('href') == '#') {
            $('html, body').animate({
                scrollTop: 0
            });
        } else {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - heightOffset
            });
        }
        hash($(this).attr('href'));
    });

    $navbara.each(function() {
        sections.push($($(this).attr('href')));
    });

    $(window).scroll(function(e) {
        var scrollTop = $(this).scrollTop() + ($(window).height() / 3);
        for (var i in sections) {
            var section = sections[i];
            if (scrollTop > section.offset().top) {
                scrolled_id = section.attr('id');
            }
        }
        if (typeof scrolled_id != 'undefined') {
            if (scrolled_id !== id) {
                id = scrolled_id;
                $navbara.removeClass('current');
                $('a[href="#' + id + '"]', $navbar).addClass('current');
            }
        }
    });
});

hash = function(h) {
    if (history.pushState) {
        history.pushState(null, null, h);
    } else {
        location.hash = h;
    }
}
