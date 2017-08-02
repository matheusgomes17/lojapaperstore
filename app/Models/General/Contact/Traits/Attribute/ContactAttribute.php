<?php

namespace Snaketec\Models\General\Contact\Traits\Attribute;

/**
 * Trait ContactAttribute.
 */
trait ContactAttribute
{
    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status === 1;
    }

    /**
     * @return string
     */
    public function getMakeButtonAttribute()
    {
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return
            $this->getMakeButtonAttribute();
    }
}
