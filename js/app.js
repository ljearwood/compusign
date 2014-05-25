// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery.noConflict();
jQuery.stellar();
jQuery(document).foundation();
//jQuery(element-to-target).foundation('joyride', 'start');
jQuery(document).ready(function(){
    jQuery('.pricing-table ul li').addClass('bullet-item');
    jQuery('#wpadminbar').addClass('show-for-medium-up');
    jQuery(document).foundation('joyride',(
        {
            tipLocation          : 'bottom',  // 'top' or 'bottom' in relation to parent
            nubPosition          : 'auto',    // override on a per tooltip bases
            scrollSpeed          : 300,       // Page scrolling speed in milliseconds
            timer                : 0,         // 0 = no timer , all other numbers = timer in milliseconds
            startTimerOnClick    : true,      // true or false - true requires clicking the first button start the timer
            startOffset          : 0,         // the index of the tooltip you want to start on (index of the li)
            nextButton           : true,      // true or false to control whether a next button is used
            tipAnimation         : 'fade',    // 'pop' or 'fade' in each tip
            pauseAfter           : [],        // array of indexes where to pause the tour after
            tipAnimationFadeSpeed: 300,       // when tipAnimation = 'fade' this is speed in milliseconds for the transition
            cookieMonster        : false,     // true or false to control whether cookies are used
            cookieName           : 'joyride', // Name the cookie you'll use
            cookieDomain         : false,     // Will this cookie be attached to a domain, ie. '.notableapp.com'
            cookieExpires        : 365,       // set when you would like the cookie to expire.
            tipContainer         : 'body',    // Where will the tip be attached
            postRideCallback     : function (){},    // A method to call once the tour closes (canceled or complete)
            postStepCallback     : function (){},    // A method to call after each step
            template : { // HTML segments for tip layout
                link    : '<a href=\"#close\" class=\"joyride-close-tip\">&times;</a>',
                timer   : '<div class=\"joyride-timer-indicator-wrap\"><span class=\"joyride-timer-indicator\"></span></div>',
                tip     : '<div class=\"joyride-tip-guide\"><span class=\"joyride-nub\"></span></div>',
                wrapper : '<div class=\"joyride-content-wrapper\"></div>',
                button  : '<a href=\"#\" class=\"small button joyride-next-tip\"></a>'
            }
        }
    ));
    //jQuery(document).foundation('joyride', 'start'); //uncomment this to start the joyride on page load.
});

function StartJoyRide(){
    //alert('been clicked');
    jQuery(document).foundation('joyride','start');
}