<?php

namespace Snaketec\Services\Catalog;

class Cart
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    /**
     * @param $id
     * @param $name
     * @return array
     */
    public function add($id, $name, $code, $image)
    {
        $this->items += [
            $id => [
                'qtd' => 1,
                'name' => $name,
                'code' => $code,
                'image' => $image,
            ]
        ];

        return $this->items;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        unset($this->items[$id]);
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

    public function clear()
    {
        $this->items = [];
    }
}