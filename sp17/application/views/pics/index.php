<?php
//application/views/pics/index.php


$this->load->view($this->config->item('theme') . 'header');



?>



<p><b> Here is where we will see pics</b></p>

<p><a href="<?=site_url("pics/frog")?>">Frog</a></p>
<p><a href="<?=site_url("pics/bird")?>">Bird</a></p>
<p><a href="<?=site_url("pics/cat")?>">Cat</a></p>



<h2><?=$title?></h2> 

<?php
    foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}



$this->load->view($this->config->item('theme') . 'footer');

?>