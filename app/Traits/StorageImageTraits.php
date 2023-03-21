<?php

namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait StorageImageTraits{
    public function storageTraitUpload($request, $fileName, $foderName)
    {
        if($request->hasFile($fileName))
        {
            $file = $request->$fileName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameInsert = Str::random(20) . '.' .$file->getClientOriginalExtension();
            $path = $request->file($fileName)->storeAs('public/'. $foderName . '/' . auth()->id(), $fileNameInsert);
            $dataUpload =[
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($path),
            ];
            return $dataUpload;
        }
        return null;
    }
    public function storageTraitUploadMutiple($file,  $foderName)
    {
        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameInsert = Str::random(20) . '.' .$file->getClientOriginalExtension();
        $path = $file->storeAs('public/'. $foderName . '/' . auth()->id(), $fileNameInsert);
        $dataUpload =[
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($path),
        ];
        return $dataUpload;
    }
}
?>
