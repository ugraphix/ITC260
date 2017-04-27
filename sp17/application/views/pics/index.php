<?php
//application/views/pics/index.php


$this->load->view($this->config->item('theme') . 'header');

?>



<p><b> Here is where we will see pics</b></p>


<h2><?=$title?></h2> 

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>