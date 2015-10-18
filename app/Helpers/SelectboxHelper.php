<?php

namespace App\Helpers;


trait SelectboxHelper {

    public static function itemsToSelect($items)
    {
        $elements = [];
        foreach ($items as $item) {
            $elements = array_add($elements, $item->id, $item->name);
        }
        return $elements;
    }

    public static function singleItemToSelect($item)
    {
        return [
            $item->id => $item->name
        ];
    }
}