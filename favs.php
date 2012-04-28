<ul id="favs">
<?php

function get_feed_list($feed_url) {
  $feed = simplexml_load_file($feed_url);
  $html = '';
  if (!$feed) { return FALSE; }
  foreach ($feed->xpath('//item') as $item) {
    $html .= '<li><a target="_blank" title="'.htmlspecialchars($item->description).'" href="'.htmlspecialchars($item->link).'">&#9679;</a></li>'.PHP_EOL;
  }
  return $html;
}

echo get_feed_list('http://feeds.delicious.com/v2/rss/pup/framit?count=15');

?>
</ul>