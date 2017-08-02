<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Attribute;

/**
 * Trait BudgetAnswerAttribute.
 */
trait BudgetAnswerAttribute
{

    public function getListItemsAttribute()
    {
        $item = [];

        foreach ($this->items as $value) {
            $item[] = $value->products->categories->name . ' / ' . $value->products->name;
        }

        return '<ul><li>'.implode('</li><li>', $item).'</li></ul>';
    }

    /**
     * @return string
     */
    public function getAnswerButtonAttribute()
    {
        return '<a href="'.route('admin.catalog.budget.answer.create', $this).'" class="btn btn-xs btn-success"><i class="fa fa-commenting" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.answer').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.catalog.budget.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        return '<a href="'.route('admin.catalog.budget.destroy', $this).'"
            data-method="delete"
            data-trans-button-cancel="'.trans('buttons.general.cancel').'"
            data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
            data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
            class="btn btn-xs btn-danger"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return $this->getAnswerButtonAttribute().
        $this->getEditButtonAttribute().
        $this->getDeleteButtonAttribute();
    }
}
