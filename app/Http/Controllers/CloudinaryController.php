<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CloudinaryService;

class CloudinaryController extends Controller
{
    public function testUpload(Request $request, CloudinaryService $cloudinary)
    {
        try {

            $result = $cloudinary->upload($request->file('photo'));

            dd($result);
        } catch (\Exception $e) {

            dd($e->getMessage());
        }
    }
}
