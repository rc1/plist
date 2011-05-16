<?php
Class extension_plist_download extends Extension
{
	// About this extension:
	public function about()
	{
		return array(
			'name' => 'Plist Download',
			'version' => '1.1',
			'release-date' => '2010-10-22',
			'author' => array(
				'name' => 'Giel Berkers',
				'website' => 'http://www.gielberkers.com',
				'email' => 'info@gielberkers.com'),
			'description' => 'Provides a force download-event'
		);
	}
	
	// Set the delegates:
	public function getSubscribedDelegates()
	{
		return array(
			array(
				'page'		=>	'/frontend/',
				'delegate'	=> 'FrontendOutputPostGenerate',
				'callback'	=>	'frontendOutputPostGenerate'
			)
		);
	}
	
	public function frontendOutputPostGenerate($context) {
	
		// if $_GET['plist']

		
		echo $context['output'];
				
		die ();
	}
}
?>