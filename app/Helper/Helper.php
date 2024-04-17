<?php
namespace App\Helper;
use Exception;
use Illuminate\Support\Facades\File;

class Helper{

  public function makeDirectory($location): void
{
    if (!File::isDirectory(public_path() . $location)) {
        File::makeDirectory(public_path() . $location, 0777, true, true);
    }
}


    public static function saveImage($image, $path, $option){
    try {
        if($image != null) {
            $image_path = $image->store($path, $option);
            return $image_path;
        } else {
            return null;
        }
    } catch (Exception $e) {
        echo 'Image Helper saveImage ' .$e->getMessage();
        }
    }



    public static function deleteImage($image): void
{
    if (File::exists(public_path() . $image)) {
        File::delete(public_path() . $image);
    }
}
}