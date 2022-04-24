<?php
class Api{

        static $APIKey = 'z9wM59bjtVvTN8r9tMaGIjDfPkARfILX';

        function callAPI($url ){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl);
            curl_close($curl);
            return $output;
        }


        function search_data(){

            $userQuery = $_GET['userQuery'] ? $_GET['userQuery'] : 'hello';
            $limit = $_GET['limit'] ? $_GET['limit'] : '500';
            $rating = $_GET['rating'] ? $_GET['rating'] : 'g';
            $lang = $_GET['lang'] ? $_GET['lang'] : 'en';
            $default = '&limit=25&offset=0&rating=g&lang=en';

            if(!$limit && !$rating && !$lang){
                $get_data = $this->callAPI( 'https://api.giphy.com/v1/gifs/search?api_key=' . Api::$APIKey . '&q=' . $userQuery . $default);

            }else{
                $get_data = $this->callAPI( 'https://api.giphy.com/v1/gifs/search?api_key=' . Api::$APIKey . '&q=' . $userQuery .'&limit='. $limit . '&offset=0&rating='.$rating.'&lang='.$lang);
            }
            $response = json_decode($get_data, true);
            $data = $response['data'];

            return $data;
        }

        function trending_data(){

            $get_data = $this->callAPI('https://api.giphy.com/v1/gifs/trending?api_key=' . Api::$APIKey . '&limit=24');

            $response = json_decode($get_data, true);
            $data = $response['data'];

            return $data;

        }

        function category_data(){
            $get_data = $this->callAPI('https://api.giphy.com/v1/gifs/categories?api_key=' . Api::$APIKey );

            $response = json_decode($get_data, true);
            $data = $response['data'];

            return $data;

        }

}
