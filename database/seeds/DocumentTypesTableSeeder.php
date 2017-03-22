<?php

use Illuminate\Database\Seeder;
use App\DocumentType;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents =[
        
        [
            'name'  => "Cedula de ciudadanía"
            
        ],
        [
             'name'  => "Cedula de extranjeria"
        ],
        [
             'name'  => "NIT"
        ],
        [
             'name'  => "Tarjeta de identidad"
        ]   
            
    ];
    DB::table('document_types')->delete();
    foreach ($documents as $document){
        DocumentType::create($document);
    }
    }
}
