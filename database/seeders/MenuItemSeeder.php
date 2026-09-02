<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::create([
            'name' => 'Pasta Mediterránea',
            'description' => 'Pasta artesanal con vegetales frescos y salsa de la casa',
            'price' => 15.00,
            'category' => 'Pastas',
            'available' => true,
        ]);

        MenuItem::create([
            'name' => 'Pollo a la Parrilla',
            'description' => 'Pechuga de pollo a la parrilla acompañada de vegetales y papas',
            'price' => 18.50,
            'category' => 'Platos Fuertes',
            'available' => true,
        ]);

        MenuItem::create([
            'name' => 'Ensalada César',
            'description' => 'Lechuga fresca, pollo a la parrilla, crutones y aderezo César',
            'price' => 10.00,
            'category' => 'Ensaladas',
            'available' => true,
        ]);

        MenuItem::create([
            'name' => 'Sopa de Tomate',
            'description' => 'Sopa cremosa de tomate con hierbas frescas y pan artesanal',
            'price' => 7.50,
            'category' => 'Entradas',
            'available' => true,
        ]);

        MenuItem::create([
            'name' => 'Cheesecake de la Casa',
            'description' => 'Cheesecake cremoso acompañado de frutos rojos',
            'price' => 8.00,
            'category' => 'Postres',
            'available' => true,
        ]);
    }
}