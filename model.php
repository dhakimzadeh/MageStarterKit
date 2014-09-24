<<filename:c:app/code/[codepool]/[Prefix]/[Module]/Model:"Demomodel">>
<<var:n:module prefix => [Prefix]>>
<<var:l:module prefix => [prefix]>>
<<var:c:module name => [Module]>>
<<var:l:module name => [module]>>
<<var:l:code pool => [codepool]>>

<?php
/*
 *  Models are used to work with different data. 
 *  Generally, they are designed for connecting to the database and processing data.
 * 
 */
class [Prefix]_[Module]_Model_Demomodel extends Mage_Core_Model_Abstract {
    
	function getText() {
		//do some "heavy" logic here...
		return Mage::getStoreConfig('[module]/option_group/textfield_input',Mage::app()->getStore());
    }
    
}
