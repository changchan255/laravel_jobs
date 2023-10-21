<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Career;
use Illuminate\Database\Seeder;
use App\Models\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $attributes = [
            Attribute::TYPE_EXPERIENCE => [
                'Chưa có kinh nghiệm',
                'Dưới 1 năm',
                '1 năm',
                '2 năm',
                '3 năm',
                '4 năm',
                '5 năm',
                'Trên 5 năm',

            ],
            Attribute::TYPE_RANK => [
                'Mới tốt nghiệp / thực tập',
                'Nhân viên',
                'Trưởng nhóm',
                'Trưởng phòng',
                'Phó giám đốc',
                'Giám đốc',
            ],
            Attribute::TYPE_FORM_OF_WORK => [
                'Toàn thời gian cố định',
                'Bán thời gian cố định',
                'Bán thời gian tạm thời',
                'Thực tập',
                'Theo hợp đồng tư vấn',
            ]
        ];

        foreach($attributes as $key => $attribute) {
           foreach($attribute as $item) {
                try {
                    dump($item);
                    Attribute::insert ([
                        'a_name' => $item,
                        'a_slug' => Str::slug($item),
                        'a_type' => $key,
                        'created_at' => Carbon::now()
                    ]);
                } catch (\Exception $exception) {

                }
           }

        }
        $careers = [
            'IT phần mềm',
            'Bán hàng',
            'Khách sạn - Nhà hàng',
            'Phiên dịch - Ngoại ngữ',
            'Hành chính - Văn phòng',
            'Kỹ thuật',
            'Kế toán - Kiểm toán',
            'Marketing - PR',
        ];

        foreach ($careers as $item)
        {
            try {
                Career::insert([
                    'c_name' => $item,
                    'c_slug' => Str::slug($item),
                    'created_at' => Carbon::now()
                ]);
            } catch (\Exception $exception)
            {

            }
        }

    }
}
