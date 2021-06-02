<?php

namespace App\Http\Helpers;

use Illuminate\View\Component;

class LazyForm
{
    public static function getArrayFromCollection($collection,$selectedValue,$value_column,$text_column)
    {
        $array=array();
        foreach ($collection as $item) {
           $array[]=['text'=>$item->$text_column,'value'=>$item->$value_column, 'selected'=>$item->$value_column == $selectedValue];
        }
        return $array;
    }
    public static function getArrayFromArray($array,$selectedValue)
    {
        $arrayD=array();
        foreach ($array as $item) {
           $arrayD[]=['text'=>$item,'value'=>$item, 'selected'=>$item == $selectedValue];
        }
        return $arrayD;
    }
}
