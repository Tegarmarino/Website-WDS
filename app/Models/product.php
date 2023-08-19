<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    // Membuat object Product
    private static $products_en = [
        [
            'id' => 1,
            'name' => 'Leak Wood Grade A 100 x 20 CM',
            'price' => 10,
            'product_image' => 'produk4.png'
        ],
        [
            'id' => 2,
            'name' => 'Leak Wood Grade B 100 x 20 CM',
            'price' => 9,
            'product_image' => 'produk5.png'
        ],
        [
            'id' => 3,
            'name' => 'Leak Wood Grade C 100 x 20 CM',
            'price' => 8,
            'product_image' => 'produk3.png'
        ],
        [
            'id' => 4,
            'name' => 'Agarwood Grade A 100 x 20 CM',
            'price' => 100,
            'product_image' => 'Wood_1.jpeg'
        ],
        [
            'id' => 5,
            'name' => 'Agarwood Grade B 100 x 20 CM',
            'price' => 95,
            'product_image' => 'Wood_2.png'
        ],
        [
            'id' => 6,
            'name' => 'Agarwood Gaharu C 100 x 20 CM',
            'price' => 90,
            'product_image' => 'Wood_3.webp'
        ],
    ];

    private static $products_id = [
        [
            'id' => 1,
            'name' => 'Kayu Jati Grade A 100 x 20 CM',
            'price' => 125000,
            'product_image' => 'produk4.png'
        ],
        [
            'id' => 2,
            'name' => 'Kayu Jati Grade B 100 x 20 CM',
            'price' => 100000,
            'product_image' => 'produk5.png'
        ],
        [
            'id' => 3,
            'name' => 'Kayu Jati Grade C 100 x 20 CM',
            'price' => 75000,
            'product_image' => 'produk3.png'
        ],
        [
            'id' => 4,
            'name' => 'Kayu Gaharu Grade A 100 x 20 CM',
            'price' => 1000000,
            'product_image' => 'Wood_1.jpeg'
        ],
        [
            'id' => 5,
            'name' => 'Kayu Gaharu Grade B 100 x 20 CM',
            'price' => 950000,
            'product_image' => 'Wood_2.png'
        ],
        [
            'id' => 6,
            'name' => 'Kayu Jati Gaharu C 100 x 20 CM',
            'price' => 900000,
            'product_image' => 'Wood_3.webp'
        ],
    ];

    // Memanggil object Product
    public static function index_en(){
        return collect(self::$products_en);
    }

    public static function index_id(){
        return collect(self::$products_id);
    }

    // Menampilkan detail Product
    public static function showProduct($id){
        return self::index()->firstWhere('id' , $id);
    }
}
