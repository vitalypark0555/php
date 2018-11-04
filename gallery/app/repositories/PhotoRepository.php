<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 03.11.2018
 * Time: 17:15
 */

class PhotoRepository
{

    private $photos;

    public function __construct()
    {
    }

    public static function create($extension)
    {
        $photo = Photo::create($extension);
        $photo->save();
        return $photo;
    }

    public static function update($id, $path, $miniPhotoPath)
    {
        $photo = Photo::find($id);
        $photo->path = $path;
        $photo->mini_path = $miniPhotoPath;
        $photo->save();
    }

    public static function iterate($id)
    {
        $photo = Photo::find($id);
        $photo->views_num++;
        $photo->save();
    }

}