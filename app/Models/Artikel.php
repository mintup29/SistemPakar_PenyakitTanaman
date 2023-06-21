<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = ["isi", "judul", "kode_depresi", "id_gambar", "url_gambar"];

    public function depresi()
    {
        return $this->belongsTo(TingkatDepresi::class, 'kode_depresi', 'kode_depresi');
    }

    public function fillTabel()
    {
        $artikel = [
            [
                "kode_depresi" => "P001",
                "url_gambar" => 'https://pnwhandbooks.org/sites/pnwhandbooks/files/plant/images/broccoli-brassica-oleracea-clubroot/clubroot.jpg',
                "judul" => 'Club Rot',
                "isi" => ''
            ],
            [
                "kode_depresi" => "P002",
                "url_gambar" => 'https://extension.umn.edu/sites/extension.umn.edu/files/cabbage-black-rot.jpg',
                "judul" => 'Black Rot',
                "isi" => ''
            ],
            [
                "kode_depresi" => "P003",
                "url_gambar" => 'https://pnwhandbooks.org/sites/pnwhandbooks/files/plant/images/broccoli-brassica-oleracea-downy-mildew-staghead/249.jpg',
                "judul" => 'Downy Mildew',
                "isi" => ''
            ],
            [
                "kode_depresi" => "P004",
                "url_gambar" => 'https://bpb-us-e1.wpmucdn.com/blogs.cornell.edu/dist/1/7446/files/2018/08/Summer-2013-075-1wuy93u.jpg',
                "judul" => 'Leaf Spot',
                "isi" => ''
            ],
            [
                "kode_depresi" => "P005",
                "url_gambar" => 'https://www.greenlife.co.ke/wp-content/uploads/2022/04/white_rust.jpg',
                "judul" => 'White Rust',
                "isi" => ''
            ],
        ];
        return $artikel;
    }
}
