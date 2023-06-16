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
                "url_gambar" => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FClubroot&psig=AOvVaw2W7fQmb_1tfBo7kTx0AOr9&ust=1686990760218000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCLjvhbuwx_8CFQAAAAAdAAAAABAE',
                "judul" => 'Club Rot',
                "isi" => ''
            ],
            [
                "kode_depresi" => "P002",
                "url_gambar" => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fejournal.unsrat.ac.id%2Findex.php%2Fcocos%2Farticle%2Fview%2F12868%2F12458&psig=AOvVaw1NKDkM34jP_fnGSZOBnXDK&ust=1686990824934000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCID4x9mwx_8CFQAAAAAdAAAAABAQ',
                "judul" => 'Black Rot',
                "isi" => ''
            ],
            [
                "kode_depresi" => "P003",
                "url_gambar" => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.planetnatural.com%2Fpest-problem-solver%2Fplant-disease%2Fdowny-mildew%2F&psig=AOvVaw3J6vs9JMu9-EOaM7bnOwXg&ust=1686990888204000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPDo1fewx_8CFQAAAAAdAAAAABAI',
                "judul" => 'Downy Mildew',
                "isi" => ''
            ],
            // [
            //     "kode_depresi" => "P004",
            //     "url_gambar" => 'https://soc-phoenix.s3-ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/22173906/mental-illness-and-disorders.jpg',
            //     "judul" => 'Depresi mayor / Depresi Berat',
            //     "isi" => 'Depresi mayor merupakan salah satu gangguan yang prevalensinya paling tinggi di antara berbagai gangguan (Davidson, 2006: 374). Depresi mayor adalah kemurungan yang dalam dan menyebar luas. Perasaan murung ini mampu menyedot semangat dan energy serta menyelubungi kehidupan si penderita seperti asap yang tebak dan menyesakkan dada. Depresi mayor ini dapat berlangsung cukup lama mulai dari empat belas hari sampai beberapa tahun. Hal ini menyebabkan penderita akan sangat sulit utnuk berfungsi dengan baik di lingkungannya. Orang dengan depresi mayor ini juga terkadang disertai dengan keinginan untuk bunuh diri atau bahkan keinginan untuk mati. Orang yang sangat tertekan, mereka akan mengalami dampak hal-hal yang mengganggu kejiwaan mereka seperti gila, paranoia atau halusinasi pendengaran (Meier, 2000: 25-26).'
            // ]
        ];
        return $artikel;
    }
}
