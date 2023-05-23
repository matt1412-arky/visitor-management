<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LostItem;

class LostItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy lost items
        LostItem::create([
            'id_visitor' => 1,
            'id_karyawan' => 1,
            'item_name' => 'Laptop',
            'item_image' => 'https://example.com/images/laptop.jpg',
            'status' => 'Taken',
            'takenby' => 'John Doe',
        ]);

        LostItem::create([
            'id_visitor' => 2,
            'id_karyawan' => 1,
            'item_name' => 'Phone',
            'item_image' => 'https://example.com/images/phone.jpg',
            'status' => 'Not Taken',
            'takenby' => 'Martin',
        ]);

        LostItem::create([
            'id_visitor' => 3,
            'id_karyawan' => 3,
            'item_name' => 'Wallet',
            'item_image' => 'https://example.com/images/wallet.jpg',
            'status' => 'Not Taken',
            'takenby' => 'John Deep',
        ]);

        // Add more dummy lost items as needed
    }
}
