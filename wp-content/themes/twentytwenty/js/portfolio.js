jQuery(document).ready(function($) {
    // Initialize Isotope
    var $grid = $('.cs-isotop').isotope({
        itemSelector: '.cs-isotop_item',
        layoutMode: 'masonry',
        percentPosition: true,
        masonry: {
            columnWidth: '.cs-grid_sizer',
            gutter: 24
        }
    });

    // Filter items on button click
    $('.cs-isotop_filter ul li a').on('click', function(e) {
        e.preventDefault();
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        $('.cs-isotop_filter ul li').removeClass('active');
        $(this).parent().addClass('active');
    });
});