<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto_AGV;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Producto_AGV::create([
            'nombre' => 'Chándal Lacoste Classic Verde',
            'descripcion' => 'Conjunto de chaqueta y pantalón Lacoste en color verde oliva con el clásico logo del cocodrilo bordado.',
            'precio' => 139.99,
            'stock' => 12
        ]);

        Producto_AGV::create([
            'nombre' => 'Sudadera Lacoste Essential Blanca',
            'descripcion' => 'Sudadera de algodón premium con cuello redondo y logo bordado en el pecho.',
            'precio' => 89.90,
            'stock' => 18
        ]);

        Producto_AGV::create([
            'nombre' => 'Pantalón Jogger Lacoste Negro',
            'descripcion' => 'Pantalón deportivo ajustado con bolsillos laterales y cintura elástica. Ideal para uso diario.',
            'precio' => 74.50,
            'stock' => 25
        ]);

        Producto_AGV::create([
            'nombre' => 'Zapatillas Lacoste Court Vintage',
            'descripcion' => 'Zapatillas de piel blanca inspiradas en el tenis clásico. Suela antideslizante y logo lateral.',
            'precio' => 119.00,
            'stock' => 10
        ]);

        Producto_AGV::create([
            'nombre' => 'Camiseta Lacoste Polo Azul Marino',
            'descripcion' => 'Polo de algodón piqué, corte regular y cuello clásico. Logo Lacoste bordado en el pecho.',
            'precio' => 89.00,
            'stock' => 30
        ]);
    }
}
