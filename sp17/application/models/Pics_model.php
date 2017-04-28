<?php

class Pics_model extends CI_Model {

   public function get_pics($param)
    {
        $api_key = '284d573e16b7d9cfe078df985f212b65';
       
        $perPage = 20;
        $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        $url.= '&api_key=' . $api_key;
        $url.= '&tags=' . $param;
        $url.= '&per_page=' . $perPage;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';
       
       $response = json_decode(file_get_contents($url));
       $pics = $response->photos->photo;

       return $pics;    
   }
}




