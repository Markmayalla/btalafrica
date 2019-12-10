<?php

if (! function_exists('upload_file')) {
    function upload_file($field, $relative_path) {
        $file = request()->file($field);
        $filename = $file->getClientOriginalName();
        $location = $relative_path;
        $file->storeAs('public'.$location, $filename);
        return  '/storage'.$location.'/'.$filename;
    }
}

?>