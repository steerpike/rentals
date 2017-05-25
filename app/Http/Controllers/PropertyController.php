<?php

namespace App\Http\Controllers;
use App\Suburb;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use PHPHtmlParser\Dom;

class PropertyController extends Controller {
	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index() {
        $suburb = Suburb::find(5);
        $name = urlencode(trim($suburb->suburb));
        echo $suburb->suburb."<br />";
		$url   = "https://services.realestate.com.au/services/listings/search?query={%22channel%22:%22rent%22,%22filters%22:{%22replaceProjectWithFirstChild%22:true,%22surroundingSuburbs%22:false,%22minimum-bedrooms%22:3,%22propertyTypes%22:[%22house%22],%22priceRange%22:{%22minimum%22:500,%22maximum%22:700}},%22localities%22:[{%22subdivision%22:%22NSW%22,%22locality%22:%22$name%22}]}";
		$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
		$ch    = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
        $json = json_decode($output);
        echo "<pre>";
		print_r($json);
        echo "</pre>";
		return '';
	}
	public function insert() {
        $filename = base_path('/storage/app/suburbs.csv');
        $file = fopen($filename, "r");
        $all_data = array();
        while ( ($data = fgetcsv($file, 200, ",")) !==FALSE) {
            if(array_key_exists(0, $data) && array_key_exists(1, $data)) {
                $order = trim($data[0]);
                $suburb = trim($data[1]);
                $sub = new Suburb;
                $sub->suburb = $suburb;
                $sub->score = $order;

                //$sub->save();
                //echo $suburb."=".$order."<br />";
            }
        }
        fclose($file);
		return '';
	}
    public function suburbs() {
        $suburbs = Suburb::all();
        foreach($suburbs as $suburb) {
            echo $suburb->suburb."<br />";
        }
    }
    public function lookup() {
        $suburbs = Suburb::find([1, 2, 3]);
        foreach($suburbs as $suburb) {
            if($suburb->suburb) {
                $url = "http://v0.postcodeapi.com.au/suburbs.json?name=".trim($suburb->suburb)."&state=nsw";
                $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
                echo $url."<br />";
                $ch    = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_USERAGENT, $agent);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
                $json = json_decode($output, true);
                print_r(sizeof($json));
                echo "<br />";
                foreach($json as $response) {
                    print_r($response['postcode']);

                }
                echo "<br />";
            }
        }
    }
}