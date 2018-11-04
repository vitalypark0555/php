<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 03.11.2018
 * Time: 21:59
 */

class ArrayHelper
{
    public static function normalizeArray(&$files)
    {
        $file_array = [];
        $multiple = is_array($files['name']);

        $file_count = $multiple ? count($files['name']) : 1;
        $file_keys = array_keys($files);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_array[$i][$key] = $multiple ? $files[$key][$i] : $files[$key];
            }
        }

        return $file_array;
    }
}