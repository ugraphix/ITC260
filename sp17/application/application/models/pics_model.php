<?php
$api_key = '284d573e16b7d9cfe078df985f212b65';
$tags = 'title';

$perPage = 3;
$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key=' . $api_key;
$url.= '&tags=' . $tags;
$url.= '&per_page=' . $perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';


    
    
    
    
