<?php
Class extension_plist extends Extension
{
	// About this extension:
	public function about()
	{
		return array(
			'name' => 'Plist',
			'version' => '0.1.0',
			'release-date' => '2011-05-16',
			'author' => array(
				'name' => 'Ross Cairns',
				'website' => 'http://theworkers.net',
				'email' => 'r@theworkers.net'),
			'description' => 'Convert rendered output to XML or binary CFPropertyList (.plist) Format'
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
	
	function sxiToArray($sxi){
		  $a = array();
		  for( $sxi->rewind(); $sxi->valid(); $sxi->next() ) {
			    if(!array_key_exists($sxi->key(), $a)){
				      $a[$sxi->key()] = array();
			    }
			    if($sxi->hasChildren()){
				      $a[$sxi->key()][] = $this->sxiToArray($sxi->current());
			    }
			    else{
				      $a[$sxi->key()][] = strval($sxi->current());
			    }
		  }
		  return $a;
	}

	public function frontendOutputPostGenerate($context) {
	
		if (! array_key_exists('plist', $_GET) ) return;
		
		require_once( "lib/CFPropertyList/CFPropertyList.php" );
	
		$xmlIterator = new SimpleXMLIterator( $context['output'] );
		$xmlArray = $this->sxiToArray( $xmlIterator );
		
		$plist = new CFPropertyList();
		$td = new CFTypeDetector();  
		$guessedStructure = $td->toCFType( $xmlArray ); 
		$plist->add( $guessedStructure );
		
		if ($_GET['plist'] == "binary") {
			echo $plist->toBinary();
		} else {
			echo $plist->toXML();
		}
			
		die ();
	}
}
?>