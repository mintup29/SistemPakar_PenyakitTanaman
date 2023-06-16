<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatDepresi extends Model
{
    use HasFactory;
    protected $table = 'tingkat_depresi';
    protected $guard = ["id"];
    protected $fillable = ['kode_depresi', 'depresi'];

    public function fillTable()
    {
        $depresi = [
            [
                "kode_depresi" => "P001",
                "depresi" => "Club Rot"
            ],
            [
                "kode_depresi" => "P002",
                "depresi" => "Black Rot"
            ],
            [
                "kode_depresi" => "P003",
                "depresi" => "Downy Mildew"
            ],
        ];
        return $depresi;
    }
}
