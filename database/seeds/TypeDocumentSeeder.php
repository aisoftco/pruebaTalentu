<?php

use Illuminate\Database\Seeder;
use App\TypeDocument;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        $typeDocuments = [
            [
                'id' => 1,    
                'name' => 'Cédula de ciudadanía',
            ],
            [
                'id' => 2, 
                'name' => 'Cédula de extranjería',
            ],
            [
                'id' => 3, 
                'name' => 'Pasaporte',
            ],
            [
                'id' => 4, 
                'name' => 'Tarjeta de identidad',
            ],
            [
                'id' => 5, 
                'name' => 'Adulto sin identidad',
            ],
            [
                'id' => 6, 
                'name' => 'Número de Identificación Tributaria',
            ],
        ];

        foreach ($typeDocuments as $typeDocument) {
            TypeDocument::create([
                'id' => $typeDocument['id'],
                'name' => $typeDocument['name'],
            ]);
        }
    }
}
