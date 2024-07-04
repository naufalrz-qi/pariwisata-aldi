<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'destination_name' => 'Pulau Moyo',
                'description' => 'Pulau Moyo terkenal dengan keindahan alam bawah laut dan air terjun yang menakjubkan.',
                'price' => 1500000.00,
                'image' => 'no-image.jpg',
                'location' => 'Sumbawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_name' => 'Pantai Maluk',
                'description' => 'Pantai Maluk terkenal dengan ombak yang cocok untuk berselancar.',
                'price' => 500000.00,
                'image' => 'no-image.jpg',
                'location' => 'Sumbawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_name' => 'Air Terjun Mata Jitu',
                'description' => 'Air Terjun Mata Jitu memiliki keindahan yang memukau dengan beberapa tingkatan air terjun.',
                'price' => 300000.00,
                'image' => 'no-image.jpg',
                'location' => 'Sumbawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_name' => 'Gili Keramat',
                'description' => 'Gili Keramat menawarkan pantai pasir putih dan air laut yang jernih.',
                'price' => 750000.00,
                'image' => 'no-image.jpg',
                'location' => 'Sumbawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_name' => 'Desa Wisata Labuhan Jambu',
                'description' => 'Desa Wisata Labuhan Jambu menawarkan pengalaman kehidupan masyarakat pesisir.',
                'price' => 200000.00,
                'image' => 'no-image.jpg',
                'location' => 'Sumbawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_name' => 'Bukit Mantar',
                'description' => 'Bukit Mantar menawarkan pemandangan indah dari ketinggian dan sering disebut "Negeri di Atas Awan".',
                'price' => 400000.00,
                'image' => 'no-image.jpg',
                'location' => 'Sumbawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
