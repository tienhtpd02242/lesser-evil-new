(function( $ ){

    var circleDiv = new CircleType(document.getElementById('rotateDes'));
    window.addEventListener('resize', function updateRadius() {
        circleDiv.radius(circleDiv.element.offsetWidth / 2);
    });

    $(document).ready( function() {

    });

})( jQuery );