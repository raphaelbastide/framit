<ul id="favs">
<?php
/* ------------------------------------------------------
 Parser de rss - by comscripts
------------------------------------------------------- */

$site = "http://feeds.delicious.com/v2/rss/pup/framit?count=15";
$fp = @fopen($site,"r");
while(!feof($fp)) $raw .= @fgets($fp, 4096);
fclose($fp);

if( eregi("<item>(.*)</item>", $raw, $rawitems ) ) {
 $items = explode("<item>", $rawitems[0]);

 for( $i = 0; $i < count($items)-1; $i++ ) {

  eregi("<title>(.*)</title>",$items[$i+1], $title );
  eregi("<description>(.*)</description>",$items[$i+1], $desc );

  eregi("<link>(.*)</link>",$items[$i+1], $url );
  
  echo "<li><a target='_blank' title='".$desc[1]."' href=".$url[1].">&#9679;</a></li>";

  }
}
?>

</ul>