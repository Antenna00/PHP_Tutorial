<?php

//* Opening xml file
$xmlTree = simplexml_load_file("https://h2o-space.com/feed");

foreach($xmlTree -> channel -> item as $item): //^The tag you want access is under the channel tag.
    ?>
    <a href="<?php print($item->link); ?>" >
        <?php print($item -> title);?>
    </a>
<?php
endforeach;
?>


