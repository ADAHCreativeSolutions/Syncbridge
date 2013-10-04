<?php
ob_start();
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php

		include("../includes/common-scripts.php");

	?>


<script type="text/javascript" src="../resources/js/formValidation.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SYNCBRIDGE.NET | CONTACT US</title>

</head>



<body>



<div id="wrapper">

	<?php

		include("../includes/common-header.php");

	?>



	<div id="bodyWrapper">

        <div id="upArrow"></div>

    	<div id="slideshowWrapper2">

        	<div id="slides2">

            <img src="../resources/images/contactus.jpg" />

            

            </div>

        </div>

        <div id="bodyContent">

        <div class="leftContent homeLeft">

        	<p>&nbsp;</p>

            <h1>Contact Form<br /><span>GOT QUESTIONS? NEED INFO?</span></h1>

            	<p>&nbsp;</p>
<form action="email-send.php" method="post" onsubmit="return validateForm()">
            <div id="contactus">

            	<div>

                	<label>Name</label>

                    <input type="text" name="txtName" id="txtName" />

                </div>

                

                

                <div>

                	<label>E-mail</label>

                    <input type="text" name="txtEmail" id="txtEmail" />

                </div>

                

                <div>

                	<label>Contact No</label>

                    <input type="text" name="txtContact" id="txtContact" />

                </div>

                <div>

                	<label>Address</label>

                   <textarea id="txtAddress" name="txtAddress"></textarea>

                </div>

                <div>

                	<label>Message/ Inquiries</label>

                  <textarea id="txtMessage" name="txtMessage"></textarea>

                </div>

               
<div>
<label>Please enter the code</label>
<img src="captcha/captcha_class.php" id="docaptcha" 
onclick="this.src='captcha/captcha_class.php?'+Math.random();" style="float:none;cursor:hand; margin-right:10px;" title="Click to refresh code"/><br /><br />
       <input type="text" name="txtCode" id="txtCode"/>
</div>

 <div>

                <input type="submit" value="  Submit  " />

                <input type="reset" value="  Cancel  " />

                </div>
            </div>
</form>
</div>



<div class="rightContent homeRight"> <p>&nbsp;</p>

            <h1>Contact Us</h1>

     <p>
<span><strong>T : </strong></span>+94 772 908 678 <br />

<span><strong>F : </strong></span>+94 112 334 452  <Br />

<span><strong>E : </strong></span><a href="mailto:info@syncbrdge.net">info@syncbridge.net</a></p>

</div>



<div class="clear"></div>

<p>&nbsp;</p>

<p>&nbsp;</p>

        </div>

    </div>

    <!--footer-->

  <?php

		include("../includes/common-footer.php");

	?>

    

    

</div>





</body>

</html>

