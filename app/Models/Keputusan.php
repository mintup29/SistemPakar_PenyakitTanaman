<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;
    protected $table = 'keputusan';
    protected $guard = ["id"];

    public function depresi()
    {
        return $this->hasMany(TingkatDepresi::class, 'kode_depresi', 'kode_depresi');
    }
    public function gejala()
    {
        return $this->hasMany(Gejala::class, 'kode_gejala' /* tbl gejala */, 'kode_gejala');
    }

// 1-4 = CLub Root
// 5-9 = Black Root
// 10-14 = Downy Mildew

    public function fillTable()
    {
        $rule = [
            // P001 => Gangguan Mood
            [
                'kode_depresi' => 'P001',
                'kode_gejala' => 'G001',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P001',
                'kode_gejala' => 'G002',
                'mb' => 0.4,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P001',
                'kode_gejala' => 'G003',
                'mb' => 1.0,
                'md' => 0.0
            ],
            [
                'kode_depresi' => 'P001',
                'kode_gejala' => 'G004',
                'mb' => 0.4,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P002',
                'kode_gejala' => 'G005',
                'mb' => 0.8,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P002',
                'kode_gejala' => 'G007',
                'mb' => 0.4,
                'md' => 0.2
            ],

            [
                'kode_depresi' => 'P002',
                'kode_gejala' => 'G008',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P002',
                'kode_gejala' => 'G008',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P002',
                'kode_gejala' => 'G009',
                'mb' => 1.0,
                'md' => 0.0
            ],
            [
                'kode_depresi' => 'P003',
                'kode_gejala' => 'G010',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P003',
                'kode_gejala' => 'G011',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P003',
                'kode_gejala' => 'G012',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_depresi' => 'P003',
                'kode_gejala' => 'G013',
                'mb' => 0.8,
                'md' => 0.0
            ],
            [
                'kode_depresi' => 'P003',
                'kode_gejala' => 'G014',
                'mb' => 0.6,
                'md' => 0.2
            ],
        ];
        return $rule;
    }
}
