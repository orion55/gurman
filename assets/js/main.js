'use strict';

jQuery(document).ready(function ($) {

    var menu = $('#menu-topmenu');
    var hasChildren = menu.find(".menu-item-has-children");

    hasChildren.each(function () {
        $(this).find('.sub-menu').hide();
        var aHref = $(this).children('a');
        aHref.html(aHref.html() + ' <i class="fas fa-caret-down"></i>');
    });

    hasChildren.hover(function () {
        $('ul', this).stop().slideDown(100);
    }, function () {
        $('ul', this).stop().slideUp(100);
    });

    $('.menu-item-has-children > a').on('click', function (e) {
        e.preventDefault();
    });

    $('.menu-item').click(function () {
        $(this).find("a")[0].click();
    });
});