<?php


namespace App\Http\Services;

use Illuminate\Http\Request;

class UploadService
{
    public function store(Request $request)
    {
        // Kiểm tra xem request có chứa file không
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            // Tạo tên mới cho file
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            
            // Lưu trữ file vào thư mục uploads
            $file->move(public_path('uploads'), $imageName);
            
            // Tạo đường dẫn đầy đủ của tệp hình ảnh
            $imagePath = '/uploads/' . $imageName;
        } else {
            // Trả về null nếu không có tệp nào được tải lên
            $imagePath = null;
        }

        // Trả về đường dẫn đầy đủ của tệp hình ảnh sau khi lưu trữ, hoặc null nếu không có tệp được tải lên
        return $imagePath;
    }
}
