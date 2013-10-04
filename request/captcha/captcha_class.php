<?php
/*
 * Author: Oziam Web Development
 * Email:  oziam@live.com.au
 * 
 * Call captcha code, add this to your form page
 * 
<img src="captcha/captcha_class.php" id="docaptcha" onclick="this.src='captcha/captcha_class.php?'+Math.random();" style="cursor:hand" title="Click to refresh code">
 * 
 * If you want to change the default font settings
 * you can change the font attributes below 
 * when changing the font ttf file and the background image, make sure the path is correct
 * 
 */

session_start(); // lets start a session

class docaptcha{

    public function __construct(){
    
      $this->file = "paint_bg.jpg"; // This will change the background image, Default = paint_bg.jpg
    
    	$this->font = "arial.ttf"; // This will change the font style, Default = jokerman.ttf
			
			$this->length = 6; // This will change how many characters to show, Default = 6
			
		  $this->size   = 17; // This will change the font size, Default = 24
			
			$this->skew   = 5; // This will change the font skew or angle, Default = 5
			
			$this->dots   = 0; // This will add dots to the image background, 0 = NO, 1 = YES
			
			 // Change rgb color value to suit e.g 255,255,255 = white, 0,0,0 = black, 0,0,255 = blue //
			
			$this->red    = 0;
			$this->green  = 0;
			$this->blue   = 0;
		}
		
		private function RandomCode(){
		
      $output = null;
		
	// Get characters, notice we donot use 0,1,i,I,o,O as they can be confused with each other.
      $char  = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
      $char .= '23456789';
      $char .= 'abcdefghjkmnpqrstuvwxyz';
    
      $i = 0;
      while ($i < $this->length) { 
      $output .= substr($char, mt_rand(0, strlen($char)-1), 1);
      $i++;
      }
      return substr($output, 0);
      }
		
		public function ConvertCodeToImage(){
		
      $code = $this->RandomCode();
			$type = getimagesize($this->file);
			
			if($type[2] == 1){
			$ctype = 'gif';
			$icf   = 'imagecreatefromgif';
			$it    = 'imagegif';
			}
			if($type[2] == 2){
			$ctype = 'jpeg';
			$icf   = 'imagecreatefromjpeg';
			$it    = 'imagejpeg';
			}
			if($type[2] == 3){
			$ctype = 'png';
			$icf   = 'imagecreatefrompng';
			$it    = 'imagepng';
			}
			
			header("Content-type: image/$ctype");
			$img  = $icf($this->file);
			$col  = imagecolorallocate($img, $this->red, $this->green, $this->blue);
			$text = imagettfbbox($this->size, 1, $this->font, $this->RandomCode());
			$px   = ($type[0] - $text[4])/2;
			$py   = ($type[1] - $text[5])/2;
					
      if($this->dots == 1){
      for($i = 0; $i < ($type[0]*$type[1]) / 8; $i++){
      imagefilledellipse($img, mt_rand(0, $type[0]), mt_rand(0, $type[1]), 1, 1, $col);
      }}
      
			imagettftext($img, $this->size, $this->skew, $px, $py, $col, $this->font, $code);
			$it($img);
			imagedestroy($img);					

			$_SESSION['code'] = $code;				
		}
		}		
	
      $result = new docaptcha();	
      $result->ConvertCodeToImage();
?>