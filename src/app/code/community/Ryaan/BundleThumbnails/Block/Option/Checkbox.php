<?php
/**
 * Bundle option checkbox type renderer
 */
class Ryaan_BundleThumbnails_Block_Bundle_Option_Checkbox extends Ryaan_BundleThumbnails_Block_Option
{
    /**
     * Set the template
     */
    protected function _construct()
    {
        $this->setTemplate('bundle_thumbnails/option/checkbox.phtml');
    }
}
