<?php

use Proxy\Plugin\AbstractPlugin;
use Proxy\Event\ProxyEvent;

class EbayPlugin extends AbstractPlugin {


	protected $url_pattern = 'ebay.com';
		
	private function replace_images($html)
	{
		// if(preg_match('/< *img[^>]*data-src *= *["\']?([^"\']*)/i', $html, $matches)){
		// 	$file = rawurldecode($matches[1]);

		// }elseif(preg_match('/< *img[^>]*data-img *= *["\']?([^"\']*)/i', $html, $matches)){
		// 	$file = rawurldecode($matches[1]);
		// }
		
		// return $file;
		// preg_match_all('/< img.+ src = [\'"](?P< src >.+)[\'"].*>/i', $searchString, $images);
		// print_r( $images['src'] );

	}

	public function onCompleted(ProxyEvent $event){
	
		$response = $event['response'];
		$content = $response->getContent();
		
		$content = preg_replace('/<*?(data-src)/', 'src', $content);
		$content = preg_replace('/<*?(src-[a-z])/', 'src', $content);
	//src-s
		$response->setContent($content);	
	}

}

?>