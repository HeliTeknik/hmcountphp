<?php
require 'scraperwiki.php';
    require 'scraperwiki/simple_html_dom.php';
?>


<?php
$url="http://web.archive.org/web/20110514112442/http://unstats.un.org/unsd/demographic/products/socind/education.htm";
$html = scraperWiki::scrape( $url );
$dom = new simple_html_dom();
$dom->load($html);

$record = array(
            'html' => $tds[0]->plaintext 
        );
 scraperwiki::save( array('html'), $record )

?>
