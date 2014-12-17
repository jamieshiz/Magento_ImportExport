<?php

class JS_ImportExport_Model_Import_Entity_Product_Type_Bookable
    extends Mage_ImportExport_Model_Import_Entity_Product_Type_Abstract
{
    /**
     * Attributes' codes which will be allowed anyway, independently from its visibility property.
     *
     * @var array
     */
    protected $_forcedAttributesCodes = array(
        'related_tgtr_position_behavior', 'related_tgtr_position_limit',
        'upsell_tgtr_position_behavior', 'upsell_tgtr_position_limit'
    );
}
