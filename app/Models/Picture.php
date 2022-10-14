<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;


    public function getPictureName(){

        return $this->image_name;

    }

    public function getCryptedPath(){

        $firstFolderPath = '/'.substr($this->md5,0,1);
        $secondFolderPath = $firstFolderPath.'/'.substr($this->md5,2,1);
        $thirdFolderPath = $secondFolderPath.'/'.substr($this->md5,3,1);

        return $thirdFolderPath;

    }

    public function getImagePath($type = null,$width = null, $height=null){

        $basePath = '/storage/upload';
        ($width == null or $height == null) ? $basePathWithSizes = $basePath.'/origins' : $basePathWithSizes = $basePath.'/'.$width.'x'.$height;

        $type == null ? $finalImagePath = $basePathWithSizes.$this->getCryptedPath().'/'.$this->getPictureName().'.'.$this->original_type : $finalImagePath = $basePathWithSizes.$this->getCryptedPath().'/'.$this->getPictureName().'.'.$type;

        return $finalImagePath;

    }

    public function contents(){

        return $this->belongsToMany(Content::class,'pictures_contents','picture_id');

    }


}
