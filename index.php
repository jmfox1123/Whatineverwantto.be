<a class="home" href="/index"></a>
<center>
<?php
include('assets/src/header.php');
include("analyticstracking.php");
$totalurls = 10;
$images = array();
$images[] .= "http://payload345.cargocollective.com/1/0/19261/9211166/random_ani_buns_600x600.gif";
$images[] .= "https://welovegirlsstuff.files.wordpress.com/2013/02/20130228-183834.jpg";
$images[] .= "http://www.debestemoppen.nl/images/grappigeplaatjes/ba-dum-tsss.jpg";
$images[] .= "http://3.bp.blogspot.com/-mRMk0EdTDjI/Tl578zsUdbI/AAAAAAAAAA4/lfi8WEiv4o4/s400/funny_236.jpg";
$images[] .= "http://www.neijssen.com/grappig/afbeelding/soep%20met%20ballen.jpg";
$images[] .= "http://www.dierenafbeeldingen.com/data/media/40/grappige_wilde_zwijn.jpg";
$images[] .= "joke.jpg";
$images[] .= "http://cdn.smosh.com/sites/default/files/2015/10/star-wars-memes-ok-annie.jpg";
$images[] .= "http://free.wallpaperbackgrounds.com/humor/funny/star-wars-humor-30653.jpg";
$images[] .= "https://cdn.meme.am/instances/400x/58295884.jpg";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";
$images[] .= "";

$select = rand(1,$totalurls);
$i = 1;
foreach ($images as $url){
	if ($select == $i){
		break;
	}
	$i++;
}
echo "<img src='$url'style='height:90%; Overflow:hidden; max-height: 90%; max-width: 100%;'>";
include('assets/src/footer.php');
?>
</center>
<div class="footer" style='position: fixed; width: 100%; bottom: 0; height: 60px; background-color: #1B1B1B;'>
	<div style="text-align: center; color: white; font-size: 16px; padding-top: 10px;"><a href="http://whatineverwantto.be">random next</a></div>
			<div style="text-align: center; color: white; padding-top: 10px;">Copyright © 2016 - <a>Jurre </a></div>
		</div>