<?php

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    public $timestamps = false;

    public static function create($extension)
    {
        $photo = new Photo();
        $photo->extension = $extension;
        return $photo;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->id . '.' . $this->extension;
    }

}