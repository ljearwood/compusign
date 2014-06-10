/**
 * Created by Jasper on 6/9/14.
 */
var screenWidth, screenHeight, bodyElement, message, topbarHeight, topbarElement;
bodyElement = window;
topbarElement =document.getElementById('jas-topbar');
topbarHeight = topbarElement.clientHeight;
    //setupBackGround( calculateDimensions() );

jQuery(window).resize( function(){
    location.reload( true );
    setupBackGround( calculateDimensions() );
});

function calculateDimensions(){
    var dimensions;
    screenWidth = bodyElement.width;
    screenHeight = bodyElement.height;
    screenHeight -= topbarHeight;
    dimensions = { scrWidth: screenWidth, scrHeight: screenHeight };
    return dimensions;
}

function setupBackGround( dimensions ){
    //message = "The Width is: " + dimensions.scrWidth.toString() + "." + "<br /> The Height is: " + dimensions.scrHeight.toString() + ".";
    //$('#information').html( message );
}