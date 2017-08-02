<?php

namespace Snaketec\Models\General\Slider\Traits;

/**
 * Trait SliderAccess.
 */
trait SliderAccess
{
    public function hasImage()
    {
        return ($this->images && file_exists($this->getImagePath('original'))) ? true : false;
    }
    
    public function getImageUrl($type = 'original')
    {
        return asset('/files'.$this->images->getPath($type));
    }

    public function getImagePath($type)
    {
    	return base_path('public_html/files'.$this->images->getPath($type));
    }

    public function getImageType()
    {
    	return ['breadcrumb', 'cover', 'original', 'slider', 'thumbnail', 'zoom'];
    }
}