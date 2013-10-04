<?php
session_start();
if (!isset($_POST['txtName'])) {
    echo "<script> location.href='index.php' </script>";
} else {


    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtContact = $_POST['txtContact'];
    $txtService = $_POST['txtService'];
	$txtRequirements = $_POST['txtMessage'];
	$txtCode = $_POST['txtCode'];

//----------------
    $to = 'info@syncbridge.net, mubeen@syncbridge.net, mubeen@centronixx.com';

    $subject = 'SYNCBRIDGE.NET - REQUEST A QUOTE!';

    $message = '
<html>
<head>
  <title>SYNCBRIDGE.NET </title>
</head>
<body>
 
 
 
 <div style="position:relative;width:600px;padding:20px;-moz-box-shadow:0px 0px 3px #333;box-shadow:0px 0px 3px #333;">
 <h1 style="font-family:Arial, Helvetica, sans-serif;font-size:19px;font-weight:100;color:#FF6600;"> SYNCBRIDGE.NET - Web Inquiry </h1>
<p style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#006699;line-height:1.8em;">Dear Admin,<br />

' . $txtRequirements . '<br/><br/>' . $txtService . '<br /></p>

<p style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#006699;line-height:1.8em;"><strong>From </strong><br />

' . $txtName . '<br />
' . $txtEmail . '<br />
' . $txtContact . '<br />



</p>

</div>
 

  
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers

    $headers .= 'From: SYNCBRIDGE.NET - REQUEST A QUOTE <info@syncbridge.net>' . "\r\n";

    if ($_POST['txtCode'] == $_SESSION['code']) {

        $result = mail($to, $subject, $message, $headers);

        if (!$result) {

            echo '<script>alert("Email send error! Please try again later. ")</script>';
			echo "<script> location.href='index.php' </script>";
        } else {
            echo '<script>alert("Thank you! will get in touch with you")</script>';
			echo "<script> location.href='index.php' </script>";

        }
    } else {

        echo '<script>alert("Incorrect Code! Please enter again.")</script>';
        echo "<script> location.href='index.php' </script>";
    }
}
?>
