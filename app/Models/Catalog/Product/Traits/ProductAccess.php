<?php

namespace Snaketec\Models\Catalog\Product\Traits;

/**
 * Trait ProductAccess.
 */
trait ProductAccess
{
    public function hasImage()
    {
        return ($this->image && file_exists($this->getImagePath('original'))) ? true : false;
    }

    public function getImageUrl($type = 'original')
    {
        return asset('/files'.$this->image->getPath($type));
    }

    public function getImagePath($type)
    {
    	return base_path('public/files'.$this->image->getPath($type));
    }

    public function getImageType()
    {
    	return ['breadcrumb', 'cover', 'original', 'slider', 'thumbnail', 'zoom'];
    }
}
