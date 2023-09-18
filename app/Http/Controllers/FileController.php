<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getfile($filename)
    {
        $path = storage_path("app/public/image/") . $filename;
        return response()->file($path);
    }
}
