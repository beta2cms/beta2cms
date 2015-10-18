<?php

namespace App\Helpers;

trait Data {

    /**
     * Check if the active field is set
     * If it's set => true,
     * If not => false
     *
     * @param $data
     * @return mixed
     */
    public static function checkActive($data)
    {
        $data['active'] = isset($data['active']);

        return $data;
    }

    /**
     * Check if a key isset in an array.
     * When not , set a default value
     *
     * @param $data
     * @param $key
     * @param string $value
     * @return mixed
     */
    public static function checkIsSet($data, $key, $value = '')
    {
        if(!isset($data[$key]))
        {
            array_add($data, $key, $value);
        }
        return $data;
    }


    /**
     * Rename the Field of an array and forget the old one
     *
     * @param $data
     * @param $from
     * @param $to
     * @return mixed
     */
    public static function renameField($data, $from, $to)
    {
        $data[$to] = $data[$from];
        array_forget($data, $from);
        return $data;
    }

    /**
     * Add a key-Value-Pair to a given array
     *
     * @param $data
     * @param $key
     * @param $value
     * @return array
     */
    public static function addField($data, $key, $value)
    {
           return array_add($data, $key, $value);
    }

}