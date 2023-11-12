<?php

// lấy thông tin của người đăng nhập là : user ||Employer || Admin
if (!function_exists('get_data_user'))
{
    function get_data_user($type, $field = 'id')
    {
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}

// Upload file
if (!function_exists('upload_image')){



    function upload_image($file, $folder = '', array $extend = array())
    {
        //     $file [Tên file trùng với tên input]
        //     array $extend [Định dạng file có thể upload được]
        //     array/int [Tham số trả về là 1 mảng - nếu lỗi trả về int]
        $code = 1;
        // Lấy đường dẫn từ thư mục Public
        $baseFilename = public_path() . '/uploads/' . $_FILES[$file]['name'];
        // Thông tin file
        $info = new SplFileInfo($baseFilename);
        // Đuôi file (.png , .jpg.....), [(strtolower: Hàm trả về chữ thường), (getExtension: phần mở rộng tệp)

        $ext = strtolower($info->getExtension());
        // Kiểm tra định dạng file
        if (!$extend)
            $extend = ['png', 'jpg', 'jpeg', 'webp'];

        if (!in_array($ext, $extend))
            return $data['code'] = 0;

        // Tên file mới
        $nameFile = trim(str_replace('.' . $ext, '', strtolower($info->getFilename())));
        $filename = date('Y-m-d__') . \Illuminate\Support\Str::slug($nameFile) . '.' . $ext;;

        // Thư mục góc để upload
        $path = public_path() . '/uploads/' . date('Y/m/d/');
        if ($folder)
            $path = public_path() . '/uploads/' . $folder . '/' .date('Y/m/d/');

        if(!\File::exists($path))
            mkdir($path, 0777, true);

        //Di chuyển file vào thư mực uploads
        move_uploaded_file($_FILES[$file]['tmp_name'], $path . $filename);

        $data = [
            'name' => $filename,
            'code' => $code,
            'path' => $path,
            'path_img' => 'uploads/' . $filename
        ];

        return $data;
    }
}


if (!function_exists('pare_url_file')) {
    function pare_url_file($image, $folder = '')
    {
        if (!$image) {
            return '/images/no-image-' . config('app.name') . '.jpg';
        }
        $explode = explode('__', $image);

        if (isset($explode[0])) {
            $time = str_replace('_', '/', $explode[0]);
            return '/uploads' . $folder . '/' .date('Y/m/d', strtotime($time)) . '/' . $image;
        }
    }
}
