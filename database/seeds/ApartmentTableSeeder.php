<?php

use Illuminate\Database\Seeder;

class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name'=>'Chung cư 1',
                'address'=>'Hà Nội',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 2',
                'address'=>'Hà Tĩnh',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 3',
                'address'=>'Ninh Bình',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 4',
                'address'=>'Thanh Hóa',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 5',
                'address'=>'Nghệ An',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 6',
                'address'=>'Hồ Chí Minh',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 7',
                'address'=>'Nam Định',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 8',
                'address'=>'Quảng Ninh',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 9',
                'address'=>'Lào Cai',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 10',
                'address'=>'Sơn La',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 11',
                'address'=>'Điện Biên',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 12',
                'address'=>'Cà Mau',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 13',
                'address'=>'Cần Thơ',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 14',
                'address'=>'Quảng Bình',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 15',
                'address'=>'Đà Nẵng',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 16',
                'address'=>'Huế',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 17',
                'address'=>'Quảng Trị',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 18',
                'address'=>'Phú Quốc',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 19',
                'address'=>'Bắc Ninh',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name'=>'Chung cư 20',
                'address'=>'Bắc Giang',
                'price'=>100000000,
                'description'=>'View đẹp',
                'detail'=>'Nhà vừa đẹp giá cả hợp lí',
                'image'=>'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ]
        ]);
    }
}
