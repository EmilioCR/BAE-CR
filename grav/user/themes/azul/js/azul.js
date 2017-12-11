jQuery(document).ready(function($){

    // get the action filter option item on page load
    var $filterType = $('#content li.active a').attr('class');
    
    // get and assign the ourHolder element to the
      // $holder varible for use later
    var $holder = $('ul.holder');
    
    // clone all items within the pre-assigned $holder element
    var $data = $holder.clone();
    
    // attempt to call Quicksand when a filter option
    // item is clicked
    $('#content li a').click(function(e) {
        // reset the active class on all the buttons
        $('#content li').removeClass('active');
        
        // assign the class of the clicked filter option
        // element to our $filterType variable
        var $filterType = $(this).attr('class');
        $(this).parent().addClass('active');
        
        if ($filterType == 'all') {
            // assign all li items to the $filteredData var when
            // the 'All' filter option is clicked
            var $filteredData = $data.find('li');
        } 
        else {
            // find all li elements that have our required $filterType
            // values for the data-type element
            var $filteredData = $data.find('li[data-type=' + $filterType + ']');
        }
        
        // call quicksand and assign transition parameters
        $holder.quicksand($filteredData, {
            duration: 800,
            easing: 'easeInOutQuad'
        });
        return false;
    });

    var $menuToggle = $('#menu-toggle');
    var $navigation = $('.navigation');
    $menuToggle.click(function () {
        $menuToggle.toggleClass('menu-toggle-active');
        $navigation.toggle()
    });

    var $menuTitle = $('.menu-title');
    $menuTitle.click(function () {
        $navigation.toggle()
    })
});

(function($) {

    $.fn.ljTabs = function(options) {

        $(this).each(function(){

            var settings = $.extend({
                tabsList: $('.container-achieve-list'),
                tabsListItems: 'li',
                tabsContent: '.tabs-content',
                tabsSections: 'article',
                inlineStyles: true
            }, options );

            var tabs = $(this),
                tabsList = tabs.find(settings.tabsList),
                tabsListItems = tabsList.children(settings.tabsListItems),
                tabsListItemsFirst = tabsListItems.first(),
                tabsContent = tabs.find(settings.tabsContent),
                tabsSections = tabsContent.find(settings.tabsSections),
                tabsSectionsFirst = tabsSections.first();

            // Add active class to first items
            if(!tabsList.find('.active-tab').length) {
                tabsListItemsFirst.addClass('active-tab');
            }

            if(!tabsContent.find('.active-tab').length) {
                tabsSectionsFirst.addClass('active-tab');
            }

            

            if(settings.inlineStyles === true) {

                // tabsContent.css({
                //     'position': 'relative',
                //     'overflow': 'hidden',
                //     'width': '100%'
                // });

                tabsSections.css({
                    'position': 'absolute',
                    'opacity': 0
                });

                if(!tabsContent.find('.active-tab').length) {
                    tabsSectionsFirst.css({
                        'opacity': 1
                    });
                } else {
                    tabsContent.find('.active-tab').css({
                        'opacity': 1
                    });
                }

            }

            $(window).resize(function() {

                // Retrieve height of active section
                var activeHeight = tabsContent.find('.active-tab').outerHeight();

                // Set height of container based on active section
                tabsContent.css({height: activeHeight});

            });

            $(window).trigger('resize');

            /**
             * Navigate through tabs on click
             */
            tabsListItems.click(function(){

                // If active tab clicked, do nothing
                if($(this).hasClass('active-tab')){
                    return;
                };

                // Remove active class from current item
                tabsListItems.removeClass('active-tab');
                tabsSections.removeClass('active-tab');

                if(settings.inlineStyles === true) {
                    tabsSections.css({'opacity': 0});
                }

                // Add active class to tab item
                $(this).addClass('active-tab');

                // Get height of new tab
                var newSection = tabsSections.eq($(this).index()),
                    newHeight = newSection.outerHeight();
                    newSection.css({opacity : 1})
                    newSection.addClass('active-tab');


            });

        });

     }
     
     $(document).ready(function() {
        $('.tabs').ljTabs();
    });

})(jQuery);


