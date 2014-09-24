<<filename:c:app/code/[codepool]/[Prefix]/[Module]/Helper:"Data">>
<<var:n:module prefix => [Prefix]>>
<<var:c:module name => [Module]>>
<<var:l:code pool => [codepool]>>

<?php
/*
 * Notes on using helpers
 * 
 * This will look in [Prefix]/[Module]/Helper/Data.php for someMethod()
 * $this->helper('[module]')->someMethod(); 
 * 
 * This will look in [Prefix]/[Module]/Helper/Foobar.php for someMethod()
 * $this->helper('[module]/foobar')->someMethod();
 * 
 */
class [Prefix]_[Module]_Helper_Data extends Mage_Core_Helper_Abstract {
    
    public function getConfig() {
        // grab text field input value from module system config page
        // also see system.xml
        return Mage::getStoreConfig('[module]',Mage::app()->getStore());
    }    
    
}

