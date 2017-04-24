<?php
//application/views/news/success.php


$this->load->view($this->config->item('theme') . 'header');

?>


<p><b> You've successfully created a news item</b></p>
<p>Now i suppose you want to see it</p>

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>