<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'Top cửa hàng bán dây giày Jordan, Air Force 1, converse uy tín nhất tại Hà Nội',
                'image' => 'blog-1.jpg',
                'category' => 'ADIDAS',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Từ những bổ sung mới cho chương trình “Màu của tháng” cho đến sự hợp tác chính thức với không ai khác ngoài Fat Joe, Nike Air Force 1 đã có rất nhiều tác phẩm cho năm 2023.',
                'image' => 'blog-3.jpg',
                'category' => 'NIKE',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Người được cho là một trong những nhân vật có ảnh hưởng nhất trong nền văn hóa sneaker, là nghệ sĩ thu âm từng 5 lần được đề',
                'image' => 'blog-4.jpg',
                'category' => 'JORDAN',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Yeezy sưu tầm bộ album ảnh giày sneaker nam chính hãng. Album ảnh giày thể thao chính hãng, Bộ Album ảnh giày nike chính hãng và album giày adidas chính...',
                'image' => 'blog-1-10.jpg',
                'category' => 'YEEZY',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Sneaker là một tên gọi khác của “giày thể thao” Sneaker là loại giày đế mềm, Các hãng giày sneaker đang được ưa chuộng + Nike +...',
                'image' => 'blog-1-11.jpg',
                'category' => 'SNEAKER AUTHENTIC',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Cách chọn size giày Snaeker Nike, Adidas @ Norda kinh nghiệm chọn size giày Nam - Nữ, đo size giầy nam - nữ chuẩn UK, US, Việt Nam.',
                'image' => 'anh size.jpg',
                'category' => 'CHỌN SIZE GIÀY NIKE, ADIDAS',
                'content' => '',
            ],
        ]);
    }
}
