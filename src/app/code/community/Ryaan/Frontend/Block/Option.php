<?php
/**
 * Bundle option renderer
 * @method Mage_Bundle_Model_Option getOption()
 */
class Ryaan_BundleThumbnails_Block_Option extends Mage_Bundle_Block_Catalog_Product_View_Type_Bundle_Option
{

    /**
     * @param Mage_Catalog_Model_Product
     * @return Mage_Catalog_Helper_Image
     */
    public function getProductImage(Mage_Catalog_Model_Product $product)
    {
        return $this->getCatalogHelper()->init($product , 'thumbnail');
    }

    /**
     * @return Mage_Catalog_Helper_Image
     */
    protected function getCatalogHelper()
    {
        return Mage::helper('catalog/image');
    }
}
