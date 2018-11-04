<?php

use Intervention\Image\ImageManagerStatic as Image;

class PhotoService
{
    public static function createMiniPhoto($name)
    {
        $image = Image::make(INC_ROOT . "/public/photos/" . $name)->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save(INC_ROOT . "/public/miniphotos/" . $name);
    }
}