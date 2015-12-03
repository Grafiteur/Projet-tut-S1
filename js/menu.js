// jQuery(document).ready(function(sidebar) {
// var sidebar = $('nav');
// var offsetTop = sidebar.offset().top;
     
// var floatListenner = function() {
//     // Si le haut du navigateur dépasse le haut du menu
//     if ($(window).scrollTop() >= offsetTop) { // Position fixe
//         var offsetLeft = sidebar.offset().left;
//         sidebar.addClass("eqtsidebar");
//         sidebar.css('left', offsetLeft);
//     // Sinon, le menu reste intégré sous la bannière
//     } else { // Position relative
//         sidebar.removeClass("eqtsidebar");
//     }
// };
// $(window).scroll(floatListenner);
// $(window).resize(floatListenner);
// sidebar.removeClass("eqtsidebar");
// });

// listen for scroll
var positionElementInPage = $('#threeIn').offset().top;
$(window).scroll(
	function() {
		if ($(window).scrollTop() &gt;= positionElementInPage) {
			// fixed
			$('#threeIn').addClass("floatable");
		} else {
			// relative
			$('#threeIn').removeClass("floatable");
		}
	}
);