<?php



function active_class($reference) {

    $return_ = '';

    if (!empty($reference)) {

        $PAGE_URI = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);

        if (strpos($PAGE_URI, $reference)) {

            $return_ = 'class="activeLink"';

        }

    }

    return $return_;

}





?>



<div id="headerWrapper">

    	<div id="header">

       	  <div id="logo">

            	<img src="../resources/images/logo.png" />

            </div>

            <div id="mainMenu">

            	<ul>

                	<li><a href="../" <?php echo active_class('home') ?>>HOME</a></li>

                    <li><a href="../aboutus/" <?php echo active_class('aboutus') ?>>ABOUT US</a></li>

                    <li><a href="../services/" <?php echo active_class('services') ?>>SERVICES</a></li>

                 

                    <li><a href="../request" <?php echo active_class('request') ?>>REQUEST A QUOTE</a></li>

                    <li><a href="../contactus" <?php echo active_class('contactus') ?>>CONTACT US</a></li>

                </ul>

            </div>

            <div id="topMenu">

            	<table cellpadding="0">

                	<tr>

                    	<td><img src="../resources/images/phone-icon.png" /></td>

                        <td>+94 772 908 678 </td>

                        <td><img src="../resources/images/email-icon.png" /></td>

                        <td><a href="mailto:info@syncbridge.net">info@syncbridge.net</a></td>

          <td><a href="#"><img src="../resources/images/fb.png" /></a></td>

          <td><a href="#"><img src="../resources/images/tw.png" /></a></td>

                    </tr>

                </table>

            </div>

            <div id="mainMenu"></div>

      </div>

    </div>