<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            //first
            [
                'category_name' => 'Books',
                'children' => [
                    [
                        'category_name' => 'Comic Book',
                        'children' => [
                            ['category_name' => 'Marvel Comic Book'],
                            ['category_name' => 'DC Comic Book'],
                            ['category_name' => 'Action comics'],
                        ],
                    ],

                    [
                        'category_name' => 'Textbooks',
                        'children' => [
                            ['category_name' => 'Business'],
                            ['category_name' => 'Finance'],
                            ['category_name' => 'Computer Science'],
                        ],
                    ],
                ],
            ],

            //2nd
            [
                'category_name' => 'Electronics',
                'children' => [
                    [
                        'category_name' => 'TV',
                        'children' => [
                            ['category_name' => 'LED'],
                            ['category_name' => 'Blu-ray'],
                        ],
                    ],
                    [
                        'category_name' => 'Mobile',
                        'children' => [
                            ['category_name' => 'Samsung'],
                            ['category_name' => 'iPhone'],
                            ['category_name' => 'Xiomi'],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
