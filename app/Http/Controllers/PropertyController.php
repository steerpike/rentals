<?php

namespace App\Http\Controllers;

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

		$url   = "https://services.realestate.com.au/services/listings/search?query={%22channel%22:%22rent%22,%22filters%22:{%22replaceProjectWithFirstChild%22:true,%22propertyTypes%22:[%22house%22],%22priceRange%22:{%22minimum%22:500,%22maximum%22:700}},%22localities%22:[{%22subdivision%22:%22NSW%22,%22postcode%22:2287}]}";
		$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
		$ch    = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		print_r($output);
		return '';
	}
	public function suburbs() {

		$url   = "https://www.domain.com.au/news/domain-liveable-sydney-citys-555-suburbs-ranked/";
		$agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13';
		$ch    = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_REFERER, 'http://whitegrey.com.au');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
        $dom = new Dom;
        $dom->load($output);
        $suburbs = $dom->find('h3');
        foreach($suburbs as $heading) 
        {
            $single = $heading->text;
            $parts = explode ( ".", $single);
            $suburb = trim($parts[1]);
            $order = trim($parts[0]);
            $order = str_replace(".","", $order);
            echo $suburb.",".$order."<br />";
            //Storage::append('suburbs.csv', $suburb.",".$order."\n");
        }
		return '';
	}
}