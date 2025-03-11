<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    /**
     * Upload a file to storage
     *
     * @param UploadedFile $file
     * @param string $directory
     * @return string The URL to access the file
     */
    public function uploadFile(UploadedFile $file, string $directory = 'uploads'): string
    {
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($directory, $filename, 'public');
        
        return Storage::url($path);
    }
    
    /**
     * Delete a file from storage
     *
     * @param string|null $fileUrl
     * @return bool
     */
    public function deleteFile(?string $fileUrl): bool
    {
        if (!$fileUrl) {
            return false;
        }
        
        $filePath = str_replace('/storage/', '', $fileUrl);
        
        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->delete($filePath);
        }
        
        return false;
    }
}