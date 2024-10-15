<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaveFileController extends Controller
{
    public function index(Request $request)
    {
        $directory = public_path('storage/');
        $firstFileName = 100;

        if (!is_dir($directory)){
            mkdir($directory);
        }

        for ($i = $firstFileName; $i >= 1; $i--){

            $fileName = $directory . $i . '.txt';

            if (!file_exists($fileName)){
                $jsonData = response()->json($request->all());
                $file = $fileName;
                $makeFile = fopen($file, 'w');
                fwrite($makeFile, $jsonData);
                fclose($makeFile);
                dd('Done!');
            }
        }

        $maxFileName = $directory . $firstFileName . '.txt' ;
        $jsonData = response()->json($request->all());
        $file = $maxFileName;
        $createFile = fopen($file, 'w');
        fwrite($createFile, $jsonData);
        fclose($createFile);
        dd('Done!!');

    }
}
