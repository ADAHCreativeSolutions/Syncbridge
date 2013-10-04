<link href="../resources/css/style.css" type="text/css" rel="stylesheet" media="all" />
<link href="../resources/js/slider/nivo-slider.css" rel="stylesheet" media="all" />
<!-- jquery lib version 1.6-->
<script type="text/javascript" src="../resources/js/jquery[version18].js"></script>
<!-- jquery animate colours frame work-->
<script type="text/javascript" src="../resources/js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="../resources/js/jquery.animate-colors.js"></script>
<!-- slider css-->
<script type="text/javascript" src="../resources/js/slider/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
 $(window).load(function() {
        $('#slides').nivoSlider({
			effect: 'fold',
			pauseTime: 5000,
			directionNav: false,
			pauseOnHover: false

			});
			
			var $h;
			function showHideArrow(){
				 $h = $(window).height();
				if($(window).scrollTop()>150){
						$("#upArrow").fadeIn(700);
					}else{
						$("#upArrow").fadeOut(500);
						}
				}
			$("#upArrow").click(function(){
					$("html, body").animate({
							"scrollTop":0
						},1000,"easeInOutCubic");
				});
			
			$(window).scroll(function(){
				//$("#s").text($(window).scrollTop());
					showHideArrow();
				});
			
			
			//main menu//
			$("#mainMenu ul").find("li a").hover(function(){
			if($(this).hasClass("activeLink")){}else{
				$(this).stop(true,false).animate({color:"#F60"},500);
				//$(this).stop(true,false).animate({backgroundColor:"#000"},700);
			}
				
			},function(){
				if($(this).hasClass("activeLink")){}else{
				$(this).stop(true,false).animate({color:"#ccc"},300);
				//$(this).stop(true,false).animate({backgroundColor:"#fff"},700);
				}	
			});
    });
</script>


<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-40396846-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
