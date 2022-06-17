<?php

namespace Database\Seeders;

use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

use Faker;

class ProductSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'products',
            'product_variants',
            'product_compotitions',
            'product_excelences'
        ]);

        $faker = Faker\Factory::create();
        $products_data = [
            [
                'name' => 'UHT Lactose Free',
                'slug' => 'uht-lactose-free',
                'products' => [
                    [
                        'name' => 'Susu Bebas Laktosa Original',
                        'slug' => 'susu-bebas-laktosa-original',
                        'size' => 1000,
                        'flavor' => 'Original',
                        'image' => asset('img/product/Produk100ml.png')
                    ],
                    [
                        'name' => 'Susu Bebas Laktosa Mocha',
                        'slug' => 'susu-bebas-laktosa-mocha',
                        'size' => 1000,
                        'flavor' => 'Mocha',
                        'image' => asset('img/product/Produk100ml.png')
                    ],
                    [
                        'name' => 'Susu Bebas Laktosa Original',
                        'slug' => 'susu-bebas-laktosa-original-200',
                        'size' => 200,
                        'flavor' => 'Original',
                        'image' => asset('img/product/Produk coklatthumbs.png')
                    ],
                    [
                        'name' => 'Susu Bebas Laktosa Mocha',
                        'slug' => 'susu-bebas-laktosa-mocha-200',
                        'size' => 200,
                        'flavor' => 'Mocha',
                        'image' => asset('img/product/Produk coklatthumbs.png')
                    ]
                ]
            ],
            [
                'name' => 'Fresh Milk',
                'slug' => 'fresh-milk',
                'products' => [
                    [
                        'name' => 'Susu Murni Penuh Gizi',
                        'slug' => 'susu-murni-penuh-gizi',
                        'size' => 1000,
                        'flavor' => 'Original',
                        'image' => asset('img/product/Produk100ml.png')
                    ],
                    [
                        'name' => 'Susu Segar Rasa Cokelat',
                        'slug' => 'susu-segar-rasa-cokelat',
                        'size' => 1000,
                        'flavor' => 'Cokelat',
                        'image' => asset('img/product/Produk100ml.png')
                    ],
                    [
                        'name' => 'Susu Murni Penuh Gizi',
                        'slug' => 'susu-murni-penuh-gizi-200',
                        'size' => 200,
                        'flavor' => 'Original',
                        'image' => asset('img/product/Produk coklatthumbs.png')
                    ],
                    [
                        'name' => 'Susu Segar Rasa Cokelat',
                        'slug' => 'susu-segar-rasa-cokelat-200',
                        'size' => 200,
                        'flavor' => 'Cokelat',
                        'image' => asset('img/product/Produk coklatthumbs.png')
                    ],
                ]
            ],
            [
                'name' => 'Kurma',
                'slug' => 'kurma',
                'products' => [
                    [
                        'name' => 'Susu Segar Rasa Kurma',
                        'slug' => 'susu-segar-rasa-kurma-200',
                        'size' => 200,
                        'flavor' => 'Kurma'
                    ],
                ]
            ],
            [
                'name' => 'UHT Teens',
                'slug' => 'uht-teens',
                'products' => [
                    [
                        'name' => 'Susu Segar Cokelat',
                        'slug' => 'susu-segar-cokelat-teens',
                        'size' => 200,
                        'flavor' => 'Cokelat'
                    ],
                    [
                        'name' => 'Susu Segar Original',
                        'slug' => 'susu-segar-original-teens',
                        'size' => 200,
                        'flavor' => 'Original'
                    ],
                    [
                        'name' => 'Susu Segar Strawberry',
                        'slug' => 'susu-segar-strawberry-teens',
                        'size' => 200,
                        'flavor' => 'Strawberry'
                    ],
                ]
            ],
            [
                'name' => 'UHT Kids',
                'slug' => 'uht-kids',
                'products' => [
                    [
                        'name' => 'Susu Segar Cokelat',
                        'slug' => 'susu-segar-cokelat-kids',
                        'size' => 100,
                        'flavor' => 'Cokelat'
                    ],
                    [
                        'name' => 'Susu Segar Original',
                        'slug' => 'susu-segar-original-kids',
                        'size' => 100,
                        'flavor' => 'Original'
                    ],
                    [
                        'name' => 'Susu Segar Strawberry',
                        'slug' => 'susu-segar-strawberry-kids',
                        'size' => 100,
                        'flavor' => 'Strawberry'
                    ],
                ]
            ]

        ];

        foreach ($products_data as $product_data) {
            $variant = ProductVariant::create([
                'name' => $product_data['name'],
                'slug' => $product_data['slug'],
            ]);

            foreach ($product_data['products'] as $product) {
                Product::create([
                    'product_variant_id' => $variant->id,
                    'name' => $product['name'],
                    'slug' => $product['slug'],
                    'size' => $product['size'],
                    'flavor' => $product['flavor'],
                    'image' => $product['image'] ?? null,
                    'slogan' => $faker->paragraph,
                ]);
            }
        }

        Model::reguard();
    }
}
