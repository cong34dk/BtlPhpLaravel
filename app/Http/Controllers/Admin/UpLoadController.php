<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UploadService;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(UploadService $upload)
    {
        $this->upload = $upload;
    }

    public function store(Request $request)
    {
        // Gọi phương thức store() của UploadService để xử lý việc lưu trữ file
        $url = $this->upload->store($request);

        // Kiểm tra xem việc lưu trữ file thành công hay không
        if ($url !== false) {
            // Trả về một phản hồi JSON chứa đường dẫn URL của file
            return response()->json([
                'error' => false,
                'url'   => $url
            ]);
        }

        // Trả về một phản hồi JSON thông báo lỗi nếu việc lưu trữ file không thành công
        return response()->json(['error' => true]);
    }
}
