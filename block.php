<<filename:c:app/code/[codepool]/[Prefix]/[Module]/Block:"Demoblock">>
<<var:n:module prefix => [Prefix]>>
<<var:c:module name => [Module]>>
<<var:l:module prefix => [prefix]>>
<<var:l:module name => [module]>>
<<var:l:code pool => [codepool]>>

<?php
/*
 *  The Blocks folder is used for storing View classes (in terms of MVC architecture). 
 *  Main goal of theese classes is to link Models with template files from Magento themes.
 * 
 */ 
class [Prefix]_[Module]_Block_Demoblock extends Mage_Core_Block_Template {
    
	function getStuff() {
		//example: calling a method from Demomodel.php
		return Mage::getModel('[module]/demomodel')->getText();
	}
       
}