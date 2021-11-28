<?php 

namespace CodingTest\Sirclo\SimpleMVC\Models;

class Berat extends BaseModel {
    protected $tableName = 'berat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'date',
        'min',
        'max'
    ];

}