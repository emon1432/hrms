<?php

use Intervention\Image\Facades\Image;

function imageUploadManager($image, $slug, $path, $width, $height)
{
    $path = 'uploads/' . $path . '/';
    $image_name = $path . $slug . time() . uniqid() . '.' . 'webp';
    $path = public_path($path);
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $image = Image::make($image)
        ->encode('webp', 90)
        ->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })
        ->save($image_name);
    return $image_name;
}

function imageUpdateManager($image, $slug, $path, $width, $height, $old_image)
{
    $path = 'uploads/' . $path . '/';
    $image_name = $path . $slug . time() . uniqid() . '.' . 'webp';
    $path = public_path($path);
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $image = Image::make($image)
        ->encode('webp', 90)
        ->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })
        ->save($image_name);

    if (file_exists($old_image) && $old_image != 'uploads/default.png') {
        @unlink($old_image);
    }

    return $image_name;
}

function imageDeleteManager($old_image)
{
    if (file_exists($old_image) && $old_image != 'uploads/default.png') {
        @unlink($old_image);
    }
}

function imageShow($image)
{
    if ($image) {
        if (file_exists(public_path($image))) {
            return asset($image);
        } else {
            return asset('uploads/default.png');
        }
    } else {
        return asset('uploads/default.png');
    }
}

function fileUploadManager($file, $slug, $path, $extension)
{
    $path = 'uploads/' . $path . '/';
    $file_name = $path . $slug . time() . uniqid() . '.' . $extension;
    $path = public_path($path);
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $file->move($path, $file_name);
    return $file_name;
}
