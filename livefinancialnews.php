<?php

/*
Plugin Name: Latest financial news- very cool
Plugin URI: http://zvoid.com/blog2/
Description: latest financial news in real time . most pupular news widget in the world.
Author: Akram Artoul
Version: 2
Author URI: http://zvoid.com/
*/





if($_POST['width']||$_POST['height']||$_POST['background']||$_POST['boxback']||$_POST['color']||$_POST['zc']||$_POST['zbc']||$_POST['n']||$_POST['ctn']){


//////////////////////////////////////////
if($_POST['width']){
add_option('outwidth', '180', '', 'no');
update_option('outwidth', $_POST['width']);
}
/////////////////////////////////////////
if($_POST['height']){
add_option('outheight', '500', '', 'no');
update_option('outheight', $_POST['height']);
}
////////////////////////////////////////
if($_POST['background']){
add_option('outbackground', 'FFFFFF', '', 'no');
update_option('outbackground', $_POST['background']);
}
///////////////////////////////////////
if($_POST['boxback']){
add_option('outboxback', 'FFFFFF', '', 'no');
update_option('outboxback', $_POST['boxback']);
}
//////////////////////////////////////
if($_POST['color']){
add_option('outcolor', '000000', '', 'no');
update_option('outcolor', $_POST['color']);
}
if($_POST['zc']){
add_option('outzc', 'ffffff', '', 'no');
update_option('outzc', $_POST['zc']);
}
if($_POST['zbc']){
add_option('outzbc', '000000', '', 'no');
update_option('outzbc', $_POST['zbc']);
}
if($_POST['n']){
add_option('outn', '0', '', 'no');
update_option('outn', $_POST['n']);
}
if($_POST['ctn']){
add_option('outctn', '1', '', 'no');
update_option('outctn', $_POST['ctn']);
}
if($_POST['speed']){
add_option('outspeed', '2', '', 'no');
update_option('outspeed', $_POST['speed']);
}
//////////////////////////////////////
//////////////////////////////////////

//////////////////////////////////////
//////////////////////////////////////







}
//////////////////////////////////////
$outwidth = get_option('outwidth');
if(!$outwidth)
$outwidth='180';
//////////////////////////////////////
$outheight = get_option('outheight');
if(!$outheight)
$outheight='500';
//////////////////////////////////////
$outbackground = get_option('outbackground');
if(!$outbackground)
$outbackground='ffffff';
//////////////////////////////////////
$outboxback = get_option('outboxback');
if(!$outboxback)
$outboxback='ffffff';
//////////////////////////////////////
$outcolor = get_option('outcolor');
if(!$outcolor)
$outcolor='000000';
//////////////////////////////////////
$outzc = get_option('outzc');
if(!$outzc)
$outzc='ffffff';
//////////////////////////////////////
$outzbc = get_option('outzbc');
if(!$outzbc)
$outzbc='000000';
//////////////////////////////////////
$outn = get_option('outn');
if(!$outn)
$outn='0';
//////////////////////////////////////
$outctn = get_option('outctn');
if(!$outctn)
$outctn='1';
//////////////////////////////////////
$outspeed = get_option('outspeed');
if(!$outspeed)
$outspeed='2';
//////////////////////////////////////
$optionsArray=array(

"width"=>$outwidth,

"height"=>$outheight,

"background"=>$outbackground,

"boxback"=>$outboxback,

"color"=>$outcolor,

"zc"=>$outzc,

"zbc"=>$outzbc,

"n"=>$outn,

"speed"=>$outspeed,

"ctn"=>$outctn
);

$prefix="snl_";



function widget_livefinancialnews($args) {

	global $optionsArray, $prefix;
	
	

	//foreach($optionsArray AS $ok=>$ov) {

	//	$optionsArray[$ok]=get_option($prefix.$ok);

	//}
	
//echo $optionsArray["background"];


        echo($args["before_widget"].$args["before_title"].$args["widget_name"].$args["after_title"]);

	$params="&bc=".$optionsArray["background"]."&bxc=".$optionsArray["boxback"]."&tcolor=".$optionsArray["color"]."&zc=".$optionsArray["zc"]."&zbc=".$optionsArray["zbc"]."&n=".$optionsArray["n"]."&ctn=".$optionsArray["ctn"]."&speed=".$optionsArray["speed"];
	

?>

	<div>

	<iframe src="http://zvoid.com/wi/index.php?ct=news&lang=english<?php echo($params); ?>" id="streamnewslive" style="width:<?php echo($optionsArray["width"]); ?>;height:<?php echo($optionsArray["height"]); ?>;" frameborder="no" scrolling="no" width="<?php echo($optionsArray["width"]); ?>" height="<?php echo($optionsArray["height"]); ?>"></iframe>

	</div>

<?

	echo($args["after_widget"]);

}





function widget_livefinancialnews_control() {
global $optionsArray;

if($_SERVER["REQUEST_METHOD"]=="POST") {

?>
News category <select name="ctn" id="ctn" >
  <option value="100" <?php if(get_option('outctn')==100) { ?> selected="selected" <?php } ?>>All</option>
  <option value="2" <?php if(get_option('outctn')==2) { ?> selected="selected" <?php } ?> >Political news</option>
  <option value="3" <?php if(get_option('outctn')==3) { ?>  selected="selected" <?php } ?> >Tech news</option>
  <option value="1" <?php if(get_option('outctn')==1) { ?>  selected="selected" <?php } ?> >Finance news</option>
  <option value="4" <?php if(get_option('outctn')==4) { ?>  selected="selected" <?php } ?> >Music news</option>
  <option value="5" <?php if(get_option('outctn')==5) { ?>  selected="selected" <?php } ?> >Movies news</option>
  <option value="6" <?php if(get_option('outctn')==6) { ?>  selected="selected" <?php } ?> >Fashion news</option>
  <option value="7" <?php if(get_option('outctn')==7) { ?>  selected="selected" <?php } ?> >Celebrity gossip news</option>
  <option value="8" <?php if(get_option('outctn')==8) { ?>  selected="selected" <?php } ?> >Art news</option>
  <option value="9" <?php if(get_option('outctn')==9) { ?>  selected="selected" <?php } ?> >Fun news</option>
  <option value="10" <?php if(get_option('outctn')==10) { ?>  selected="selected" <?php } ?> >Books news</option>
  <option value="11" <?php if(get_option('outctn')==11) { ?>  selected="selected" <?php } ?> >Shoping news</option>
  <option value="12" <?php if(get_option('outctn')==12) { ?>  selected="selected" <?php } ?> >Travel news</option>
  <option value="13" <?php if(get_option('outctn')==13) { ?>  selected="selected" <?php } ?> >Games news</option>
  <option value="14" <?php if(get_option('outctn')==14) { ?>  selected="selected" <?php } ?> >Sports news</option>
  <option value="15" <?php if(get_option('outctn')==15) { ?>  selected="selected" <?php } ?> >Soccer news</option>
  <option value="16" <?php if(get_option('outctn')==16) { ?>  selected="selected" <?php } ?> >Golf news</option>
</select><br/>
Photos in headlines? 
<select style="width:80px" name="n" id="n">
  <option value="1" <?php if(get_option('outn')==1) { ?>  selected="selected" <?php } ?>>Yes</option>
  <option value="0" <?php if(get_option('outn')==0) { ?>  selected="selected" <?php } ?>>No</option>
</select><br/>
Scrool speed <input type="text" name="speed" size="4" value="<?php echo $optionsArray["speed"];?>"><br/>
Width <input type="text" name="width" size="4" value="<?php echo $optionsArray["width"];?>"><br/>
Height <input type="text" name="height" size="4" value="<?php echo $optionsArray["height"];?>"><br/>
Background Color <input type="text" name="background" size="6" value="<?php echo $optionsArray["background"];?>"><br/>
Box Background Color <input type="text" name="boxback" size="6" value="<?php echo $optionsArray["boxback"];?>"><br/>
Text Color <input type="text" name="color" size="6" value="<?php echo $optionsArray["color"];?>"><br/>
Real time news color <input type="text" name="zc" size="6" value="<?php echo $optionsArray["zc"];?>"><br/>
Real time news back color <input type="text" name="zbc" size="6" value="<?php echo $optionsArray["zbc"];?>"><br/>

<?php

exit();

}

?>
News category <select name="ctn" id="ctn" >
  <option value="100" <?php if(get_option('outctn')==100) { ?> selected="selected" <?php } ?>>All</option>
  <option value="2" <?php if(get_option('outctn')==2) { ?> selected="selected" <?php } ?> >Political news</option>
  <option value="3" <?php if(get_option('outctn')==3) { ?>  selected="selected" <?php } ?> >Tech news</option>
  <option value="1" <?php if(get_option('outctn')==1) { ?>  selected="selected" <?php } ?> >Finance news</option>
  <option value="4" <?php if(get_option('outctn')==4) { ?>  selected="selected" <?php } ?> >Music news</option>
  <option value="5" <?php if(get_option('outctn')==5) { ?>  selected="selected" <?php } ?> >Movies news</option>
  <option value="6" <?php if(get_option('outctn')==6) { ?>  selected="selected" <?php } ?> >Fashion news</option>
  <option value="7" <?php if(get_option('outctn')==7) { ?>  selected="selected" <?php } ?> >Celebrity gossip news</option>
  <option value="8" <?php if(get_option('outctn')==8) { ?>  selected="selected" <?php } ?> >Art news</option>
  <option value="9" <?php if(get_option('outctn')==9) { ?>  selected="selected" <?php } ?> >Fun news</option>
  <option value="10" <?php if(get_option('outctn')==10) { ?>  selected="selected" <?php } ?> >Books news</option>
  <option value="11" <?php if(get_option('outctn')==11) { ?>  selected="selected" <?php } ?> >Shoping news</option>
  <option value="12" <?php if(get_option('outctn')==12) { ?>  selected="selected" <?php } ?> >Travel news</option>
  <option value="13" <?php if(get_option('outctn')==13) { ?>  selected="selected" <?php } ?> >Games news</option>
  <option value="14" <?php if(get_option('outctn')==14) { ?>  selected="selected" <?php } ?> >Sports news</option>
  <option value="15" <?php if(get_option('outctn')==15) { ?>  selected="selected" <?php } ?> >Soccer news</option>
  <option value="16" <?php if(get_option('outctn')==16) { ?>  selected="selected" <?php } ?> >Golf news</option>
</select><br/>
Photos in headlines? 
<select style="width:80px" name="n" id="n">
  <option value="1" <?php if(get_option('outn')==1) { ?>  selected="selected" <?php } ?>>Yes</option>
  <option value="0" <?php if(get_option('outn')==0) { ?>  selected="selected" <?php } ?>>No</option>
</select><br/>
Width <input type="text" name="width" size="4" value="<?php echo $optionsArray["width"];?>"><br/>
Height <input type="text" name="height" size="4" value="<?php echo $optionsArray["height"];?>"><br/>
Background Color <input type="text" name="Background" size="6" value="<?php echo $optionsArray["background"];?>"><br/>
Box Background Color <input type="text" name="boxback" size="6" value="<?php echo $optionsArray["boxback"];?>"><br/>
Text Color <input type="text" name="color" size="6" value="<?php echo $optionsArray["color"];?>"><br/>
Real time news color <input type="text" name="zc" size="6" value="<?php echo $optionsArray["zc"];?>"><br/>
Real time news back color <input type="text" name="zbc" size="6" value="<?php echo $optionsArray["zbc"];?>"><br/>

<?

}





function widget_livefinancialnews_init() {


	global $optionsArray, $prefix;

	foreach($optionsArray AS $ok=>$ov) {

		if (!get_option($prefix.$ok)) {

			update_option($prefix.$ok, $ov);

		}

	}

	register_sidebar_widget("live financial news", "widget_livefinancialnews");

	register_widget_control("live financial news", "widget_livefinancialnews_control");

}



add_action("plugins_loaded", "widget_livefinancialnews_init");



?>