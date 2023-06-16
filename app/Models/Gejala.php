<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejala';
    protected $guard = ["id"];
    protected $fillable = ["kode_gejala", "gejala"];

    public function fillTable()
    {

// 1-4 = CLub Root
// 5-9 = Black Root
// 9-14 = Downy Mildew

        $gejala2 = [
            [
                "kode_gejala" => "G001",
                "gejala" => "Tanaman Kerdil dan Menguning"
            ],
            [
                "kode_gejala" => "G002",
                "gejala" => "Daun menjadi Kuning dan Layu saat Cuaca Panas"
            ],
            [
                "kode_gejala" => "G003",
                "gejala" => "Pembengkakan pada Akar Tanaman"
            ],
            [
                "kode_gejala" => "G004",
                "gejala" => "pH Tanah di bawah 7"
            ],
            [
                "kode_gejala" => "G005",
                "gejala" => "Muncul Area Kuning (Bersudut) di Tepi Daun"
            ],
            [
                "kode_gejala" => "G006",
                "gejala" => "Muncul Urat dan Pelepah Daun Membentuk Bintik-Bintik Kuning"
            ],
            [
                "kode_gejala" => "G007",
                "gejala" => "Muncul Urat dan Pelepah Daun Membentuk Bintik-Bintik Coklat Menghitam"
            ],
            [
                "kode_gejala" => "G008",
                "gejala" => "Sistem Akar Menghitam"
            ],
            [
                "kode_gejala" => "G009",
                "gejala" => "Muncul Cairan Bakteri"
            ],
            [
                "kode_gejala" => "G010",
                "gejala" => "Bintik-bintik Kecil Berwarna Coklat Keunguan di bawah Permukaan Daun"
            ],
            [
                "kode_gejala" => "G011",
                "gejala" => "Bintik-bintik Kecil Berwarna Kuning di atas Permukaan Daun"
            ],
            [
                "kode_gejala" => "G012",
                "gejala" => "Daun Mengerut dan Kering"
            ],
            [
                "kode_gejala" => "G013",
                "gejala" => "Batang Menunjukkan Lesi atau Guratan Berwarna Coklat Tua"
            ],
            [
                "kode_gejala" => "G014",
                "gejala" => "Tumbuh Jamur Berbulu Halus"
            ],
        ];

        return $gejala2;
    }
}
