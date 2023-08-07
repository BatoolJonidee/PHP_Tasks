<?php
for($i=0;$i<5;$i++){
    $dom = new DOMDocument();
    $div = $dom->createElement('div',"this is a div");
    $div->setAttribute('class', 'divClass');
    $p = $dom->createElement('p', "This is a paragraph"); 
    $div->appendChild($p);
    $dom->appendChild($div);
    $htmlString = $dom->saveHTML();
    echo $htmlString;
}
?>