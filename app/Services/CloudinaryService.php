<?php

namespace App\Services;

use Cloudinary\Cloudinary;

class CloudinaryService
{
    protected Cloudinary $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => trim(config('services.cloudinary.cloud_name')),
                'api_key'    => trim(config('services.cloudinary.api_key')),
                'api_secret' => trim(config('services.cloudinary.api_secret')),
            ],
            'url' => [
                'secure' => true,
            ],
        ]);
    }

    public function upload($file)
    {
        return $this->cloudinary
            ->uploadApi()
            ->upload($file->getRealPath());
    }

    public function destroy($publicId)
    {
        return $this->cloudinary
            ->uploadApi()
            ->destroy($publicId);
    }
}
