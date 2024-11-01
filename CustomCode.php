<?php 
global $InputField3;
global $InputField2;
global $InputField4;

$number=$InputField3;



$widthgsf=$InputField4;



if ($widthgsf=='1'){
	$widthgsf='full-getseofix';
}
else{
		$widthgsf='auto-getseofix';
}


if (isset($InputField2) && $InputField2 !=''){
	$color=$InputField2;
} 
else{
	$color='#4caf50';
}


?>

<p class="<?php echo $widthgsf; ?>"><a class="prova-getseofix <?php echo $widthgsf; ?>" href="tel:<?php echo $number; ?>">
  <span class="icophonez"></span>
  <span><?php echo $number; ?></span>
</a></p>


<style>
.icophonez {
  background: url(<?php echo plugins_url( 'phone.png', __FILE__ ); ?>);
  width: 24px;
  height: 24px;
  display: inline-block;
}
.prova-getseofix {
	text-decoration: none !important;
padding: 10px 20px;
   background: <?php echo $color; ?>;
 font-family: sans-serif;
    font-weight: 400;
    text-align: center;
    color: #FFF;
    margin: 5px 0;
    border-radius: 5px;
	font-size:20px;
}

.prova-getseofix span {
  display: inline-block;
  vertical-align: middle;font-size:0.8em;    color: #FFF;
}

.prova-getseofix:hover {opacity:0.8;}

.full-getseofix{
width: 100%;margin:5px 0 !important;
    display: inline-block;
    max-width: 100% !important;box-sizing: border-box;
}
.auto-getseofix{
	margin:5px 0 !important;
    display: inline-block;
width:auto;	box-sizing: border-box;
}

</style>
	
