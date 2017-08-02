<?php

namespace Snaketec\Models\Catalog\Category\Traits;

trait CategoryAccess
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
    	return base_path('public_html/files'.$this->image->getPath($type));
    }

    public function getImageType()
    {
    	return ['breadcrumb', 'cover', 'original', 'slider', 'thumbnail', 'zoom'];
    }
}