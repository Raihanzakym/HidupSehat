<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Bersihkan tabel sebelum menambahkan data
        DB::table('products')->truncate();

        // Tambahkan data produk
        DB::table('products')->insert([
            [
                'name' => 'Produk 1',
                'description' => 'Deskripsi produk 1',
                'price' => 100,
            ],
            [
                'name' => 'Produk 2',
                'description' => 'Deskripsi produk 2',
                'price' => 150,
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
