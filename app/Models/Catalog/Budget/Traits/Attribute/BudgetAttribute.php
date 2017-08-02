<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Attribute;

/**
 * Trait BudgetAttribute.
 */
trait BudgetAttribute
{
    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status == 1;
    }

    public function getListItemsAttribute()
    {
        $item = [];

        foreach ($this->items as $value) {
            $item[] = $value->products->name;
        }

        return '<ul><li>'.implode('</li><li>', $item).'</li></ul>';
    }

    /**
     * @return string
     */
    public function getAnswerPdfAttribute()
    {
        if (! $this->isActive()) {
            return '<a href="'.route('admin.catalog.budget.answer.create', $this).'" class="btn btn-xs btn-danger"><i class="fa fa-file-pdf-o" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.to_pdf').'"></i></a>';
        }
    }

    /**
     * @return string
     */
    public function getAnswerButtonAttribute()
    {
        if ($this->isActive()) {
            return '<a href="'.route('admin.catalog.budget.answer.create', $this).'" class="btn btn-xs btn-success"><i class="fa fa-commenting" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.answer').'"></i></a> ';
        }
        
        return '<a href="'.route('admin.catalog.budget.answer.show', ['id' => $this, 'answerId' => $this->answers]).'" class="btn btn-xs btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.view').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return $this->getAnswerButtonAttribute().
        $this->getAnswerPdfAttribute();
    }
}
