<?php
//application/views/pics/index.php


$this->load->view($this->config->item('theme') . 'header');

?>


<?php
foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}
?>

<p><b> Here is where we will see pics</b></p>


<h2><?=$title?></h2> 

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>