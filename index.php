<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<link href="resources/css/style.css" type="text/css" rel="stylesheet" media="all" />

<link href="resources/js/slider/nivo-slider.css" rel="stylesheet" media="all" />

<!-- jquery lib version 1.6-->

<script type="text/javascript" src="resources/js/jquery[version18].js"></script>

<!-- jquery animate colours frame work-->

<script type="text/javascript" src="resources/js/jquery.easing-1.3.pack.js"></script>
<!-- jquery animate colours-->

<script type="text/javascript" src="resources/js/jquery.animate-colors.js"></script>
<!-- slider css-->

<script type="text/javascript" src="resources/js/slider/jquery.nivo.slider.pack.js"></script>



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

				if($(window).scrollTop()>200){

					

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



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SYNCBRIDGE.NET | HOME</title>

</head>



<body>



<div id="wrapper">



	<div id="headerWrapper">

    	<div id="header">

        <div id="s"></div>

       	  <div id="logo">

            	<img src="resources/images/logo.png" />

            </div>

            <div id="mainMenu">

            	<ul>

                	<li><a href="" class="activeLink">HOME</a></li>

                    <li><a href="aboutus/">ABOUT US</a></li>

                    <li><a href="services/">SERVICES</a></li>

                   <!-- <li><a href="aboutus/portfolios.php">PORTFOLIOS</a></li>-->

                    <li><a href="request/">REQUEST A QUOTE</a></li>

                    <li><a href="contactus/">CONTACT US</a></li>

                </ul>

            </div>

            <div id="topMenu">

            	<table cellpadding="0">

                	<tr>

                    	<td><img src="resources/images/phone-icon.png" /></td>

                        <td>+94 772 908 678 </td>

                        <td><img src="resources/images/email-icon.png" /></td>

                        <td><a href="mailto:info@syncbridge.net">info@syncbridge.net</a></td>

          <td><a href="#"><img src="resources/images/fb.png" /></a></td>

          <td><a href="#"><img src="resources/images/tw.png" /></a></td>

                    </tr>

                </table>

            </div>

            <div id="mainMenu"></div>

      </div>

    </div>



	<div id="bodyWrapper">

    <div id="upArrow"></div>

         <div id="slideshowWrapper" class="slider-wrapper theme-default">

 <div id="slides" class="nivoSlider"> 

    

       

            <img src="resources/images/slide1.jpg" />

             <img src="resources/images/slide2.jpg" />
<img src="resources/images/slide4.jpg" />
              <img src="resources/images/slide3.jpg" />

            

            </div>

        </div>

        

        

        <div id="bodyContent">

        <div class="leftContent homeLeft">

        	<p>&nbsp;</p>

            <h1>We are SyncBridge</h1>

            <p>The provider of benchmark Web Applications, Software Solutions and GPS Solutions. Formed in 2003; we challenge the status quo of the industry with a plethora of platform competencies, process management tools, quality standards and certifications.

<br /><br />

Providing a gamut of off shore IT Services that help our clients stay ahead of the competition.

We specialise in bridging multiple technologies for seamless business operation.

<br /><br />

SyncBridge has the experience and knowledge to consult, scope, engineer and implement medium to large scale internet applications that transform businesses. Our Services include coding in Asp.net, Java, php, FoxPro and application development on Sharepoint, SQL services (SSRS/SSAS), Joomla and HTML5. We are excited about the world wide web and what it can do for business and people.</p>

</div>



<div class="rightContent homeRight"> <p>&nbsp;</p>

            <h1>Contact Us</h1>
			<p>
<span><strong>T : </strong></span>+94 772 908 678 <br />

<span><strong>F : </strong></span>+94 112 334 452  <Br />

<span><strong>E :</strong></span> <a href="mailto:info@syncbrdge.net">info@syncbridge.net</a></p>

</div>



<div class="clear"></div>

<p>&nbsp;</p><p>&nbsp;</p>

<div id="services">

	<div>

    

    	<h2>SOFTWARE &amp; WEB</h2>

        <img src="resources/images/pc-icon.jpg" />

        <P>SyncBridge provides a wide range of systems implementation and application outsourcing services through a well optimized model. Through our highly experienced development process, SyncBridge focuses on delivering business results by modernizing, rationalizing and consolidating the critical applications that support our clients' main business processes.</P>

    </div>

    <div>

    

    	<h2>MOBILE SOLUTIONS</h2>

        <img src="resources/images/gps-icon.jpg" />

        <P>SyncBridge supports to extend your sales, customer service and marketing efforts to the most demanding mobile platforms, such as iOS, Android, Windows Mobile, and others.<br/>SyncBridge can help you to connect your valued customers and employees to corporate systems via SyncBridge custom made mobile solutions.</P>

    </div>

 <div>

    

    	<h2>GPS SOLUTIONS</h2>

        <img src="resources/images/web-icon.jpg" />

        <P>Providing a gamut of off shore IT Services that help our clients stay ahead of the competition.

We specialise in bridging multiple technologies for seamless business operation. We specialise in bridging multiple technologies for seamless business operation. </P>

    </div>

    <div class="sLast"><h2>BPO SOLUTIONS</h2>

        <img src="resources/images/mobile-icon.jpg" />

        <P>Providing a gamut of off shore IT Services that help our clients stay ahead of the competition.

We specialise in bridging multiple technologies for seamless business operation. We specialise in bridging multiple technologies for seamless business operation. </P></div>

</div>

<div class="clear"></div>

<p>&nbsp;</p>

<p>&nbsp;</p>

        </div>

    </div>

    <!--footer-->

   <div id="footerWrapper">

	<div id="footer">

    	<p>&copy; COPYRIGHT  SYNCBRIDGE.NET - 2013</p>

        <div id="adah">

        	<p>SOLUTION BY - SYNCBRIDGE</p> 

           

        </div>

    </div>

</div>

    

    

</div>





</body>

</html>

