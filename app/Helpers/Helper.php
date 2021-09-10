<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\File;

class Helper
{
    public static function imageExtension($ext)
    {
        $allowed_extension = ['jpg', 'jpeg', 'png'];
        if (!in_array($ext, $allowed_extension)) {
            return 'Allowed Extension Only' . implode(',', $allowed_extension);
        }

        return true;
    }
    public static function delete($full_path)
    {

        if (File::exists($full_path)) {
            File::delete($full_path);
        }

        return [
            'success' => 1,
            'message' => 'Removed successfully !',
        ];

    }

}
