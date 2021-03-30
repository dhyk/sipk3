



<?php if (validation_errors()) {?>
	<ul style="color: red;">
		<?php echo validation_errors('<li>','</li>')?>
	</ul>
<?php }?>

<form method="post" action="<?php echo site_url('captcha')?>">
	<p><?php echo $img; var_dump($img);
//-------------------------------------------------
	/*
$image = imagecreatetruecolor($this -> winWidth, 
	$this -> winHeight) //Create a new true color image
	or die("<b>" . __FILE__ . "</b><br />" . __LINE__ . " : " 
    ."Cannot Initialize new GD image stream");
$bg = imagecolorallocate($image, 255, 255, 255);//Allocate a color for an image
imagefill($image, 10, 10, $bg);//Flood fill
return imagepng($image);//Outputs or saves a PNG image from the given $image
imagedestroy($image);//rees any memory associated with image $image


$Colors =  array (	'0' => '145',
                    '1' => '204',
                    '2' => '177',
                    '3' => '184',
                    '4' => '199',
                    '5' => '255');

for ($x=0; $x < $this -> winWidth; $x++)
{
    for ($y=0; $y < $this -> winHeight; $y++)
    {
        $random = mt_rand(0 , 5);
        $temp_color = imagecolorallocate($image, 
        	$this -> Colors["$random"], 
        	$this -> Colors["$random"], $this -> Colors["$random"]);
        imagesetpixel( $image, $x, $y , $temp_color );
    }
}

//e.g $this->Characters is the string that we're writing in the image
//Font
$font = "tahomabd.ttf";
$font_size = 33;
//\\
$char = $img;
$random_x = mt_rand(10 , 20);
$random_y = mt_rand(35 , 45);
$random_angle = mt_rand(-20 , 20);
//Writes the given text  into the image using TrueType fonts. 
imagettftext($image, $font_size, $random_angle, $random_x, $random_y, 
	$char_color, $font, $char);
 	*/	//------------------------------------------------

	 ?></p>
	<p>Type the code: <input type="text" name="captcha"/></p>
	<p><input type="typ" name="submit" value="submit"/></p>	
</form>