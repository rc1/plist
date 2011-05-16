# Plist #

Plist Extension for [Symphony-CMS](http://symphony-cms.com/). 

Converts the rendered output to a CFPropertyList (.plist) Format. The plist can either be created as an XML plist or Binary plist. The conversion can be triggered appending a GET var of `plist` to the URL of any frontend page.

## Example Usage ##

Convert page to a XML Plist:

     http://examples.com/myPage/?plist

Convert page to a Binary Plist:

     http://examples.com/myPage/?plist=binary
     
## Tips ##

### Creating Downloadable Links ###

The Plist extension can be combined with Giel Berkers' [Force Download Extension](http://symphony-cms.com/download/extensions/view/49268/) to create downloadable links to the plist files through a web browser.

For example, if a Force Download event is added to the page `myPage` the plist could be downloaded from:

    
	http://examples.com/myPage/?plist=binary&download=myPage.plist
	
	
    
     
     