<?php
namespace Aalogics\CustomAttribute\Block;

class AttributeData extends \Magento\Framework\View\Element\Template
{       
    public function getCustomAttribute()
    {		
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$product = $objectManager->get('Magento\Framework\Registry')->registry('current_product');//get current product
        $sample_attribute = $product->getCustomAttribute("sample_attribute")->getValue();
		return $sample_attribute;
		
    }
}