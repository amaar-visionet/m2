<?php
class Amit_Customcontactus_Model_Resource_Customcontactus extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('customcontactus/customcontactus', 'custommodule_id');
    }
}