<?php
/**
 * Bundle option radiobox type renderer
 */
class Ryaan_BundleThumbnails_Block_Bundle_Option_Radio extends Ryaan_BundleThumbnails_Block_Option
{
    /**
     * Set the template
     */
    protected function _construct()
    {
        $this->setTemplate('bundle_thumbnails/option/radio.phtml');
    }
}
