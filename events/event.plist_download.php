<?php

	require_once(TOOLKIT . '/class.event.php');
	
	Class eventplist_download extends Event{
		
		const ROOTELEMENT = 'force-download';
		
		public $eParamFILTERS = array(
			
		);
			
		public static function about(){
			return array(
				'name' => 'Plist Download',
				'author' => array(
					'name' => 'Giel Berkers',
					'website' => 'http://www.gielberkers.com',
					'email' => 'info@gielberkers.com'),
				'version' => '1.1',
				'release-date' => '2010-08-12T11:48:04+00:00');	
		}

		public static function getSource(){
			return false;
		}

		public static function allowEditorToParse(){
			return false;
		}

		public static function documentation(){
			return '
			<h3>Plist Download</h3>
			<p>
				When this event is attached to a page, it enables the page to force a download.
				The download can be triggered by adding the parameter <code>file</code> to the URL:
			</p>';
		}
		
		public function load()
		{
			print_r(Symphony::Engine());
			die;
		
			//print_r($this->_env);
			//die;
		
			//die(DataSource);
		
			// echo "hello!";
			// die ("hello");
		
			/*
			// In case of the page:
			if(isset($_GET['plist']))
			{
				header('Content-Disposition: attachment; filename='.$_GET['download']);
			}
			
			// In case of a file:
			if(isset($_GET['file'])) {
				include_once('event.force_download.config.php');
				$pathInfo = pathinfo($_GET['file']);
				// Check to see if the directory is allowed to direct-download from:
				if(in_array($pathInfo['dirname'], $allowedDirs))
				{
					// Determine the mimetype:
					if(array_key_exists(strtolower($pathInfo['extension']), $mime_types))
					{
						$mimeType = $mime_types[strtolower($pathInfo['extension'])];
					} else {
						$mimeType = "application/force-download";
					}
					// Force the download:
					if (file_exists($_GET['file'])) {
						header('Content-Description: File Transfer');
						header('Content-Type: '.$mimeType);
						header('Content-Disposition: attachment; filename='.$pathInfo['basename']);
						header('Content-Transfer-Encoding: binary');
						header('Expires: 0');
						header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
						header('Pragma: public');
						header('Content-Length: ' . filesize($_GET['file']));
						ob_clean();
						flush();
						readfile($_GET['file']);
						exit;
					} else {
						die('File does not exist!');
					}
				} else {
					die('Permission denied!');
				}
			}
			*/
		}
		
		protected function __trigger(){
			
			return $result;
		}		

	}

