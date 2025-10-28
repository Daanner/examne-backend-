<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        $empleados = [
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'correo' => 'juan.perez@empresa.com', 'salario' => 2500.00],
            ['nombre' => 'María', 'apellido' => 'Gómez', 'correo' => 'maria.gomez@empresa.com', 'salario' => 2800.00],
            ['nombre' => 'Carlos', 'apellido' => 'López', 'correo' => 'carlos.lopez@empresa.com', 'salario' => 3200.00],
            ['nombre' => 'Ana', 'apellido' => 'Martínez', 'correo' => 'ana.martinez@empresa.com', 'salario' => 2700.00],
            ['nombre' => 'Pedro', 'apellido' => 'Rodríguez', 'correo' => 'pedro.rodriguez@empresa.com', 'salario' => 3000.00],
            ['nombre' => 'Laura', 'apellido' => 'Hernández', 'correo' => 'laura.hernandez@empresa.com', 'salario' => 2600.00],
            ['nombre' => 'Diego', 'apellido' => 'García', 'correo' => 'diego.garcia@empresa.com', 'salario' => 2900.00],
            ['nombre' => 'Sofía', 'apellido' => 'Ramírez', 'correo' => 'sofia.ramirez@empresa.com', 'salario' => 3100.00],
            ['nombre' => 'Miguel', 'apellido' => 'Torres', 'correo' => 'miguel.torres@empresa.com', 'salario' => 2750.00],
            ['nombre' => 'Elena', 'apellido' => 'Díaz', 'correo' => 'elena.diaz@empresa.com', 'salario' => 2850.00]
        ];

        foreach ($empleados as $empleado) {
            Empleado::create($empleado);
        }
    }
}