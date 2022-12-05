<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'PS PLUS ESSENTIAL',
                'slug' => 'plus-essential',
                'stripe_plan' => 'price_1M9A3SKxlwWhq5nvh9PrZgaF',
                'price' => 20,
                'description' => 'playstation plus essential subscription'
            ],
            [
                'name' => 'PS PLUS EXTRA',
                'slug' => 'plus-extra',
                'stripe_plan' => 'price_1M9A4QKxlwWhq5nvRw3AsS67',
                'price' => 30,
                'description' => 'playstation plus extra subscription'
            ],
            [
                'name' => 'PS PLUS DELUXE',
                'slug' => 'plus-deluxe',
                'stripe_plan' => 'price_1M9A3pKxlwWhq5nv09DGhqEE',
                'price' => 40,
                'description' => 'playstation plus deluxe subscription'
            ]
        ];

        foreach ($plans as $plan){
            Plan::create($plan);
        }
    }
}
