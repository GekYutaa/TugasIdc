<?php
// Menghitung luas persegi
$sisi = 5;
$luas = $sisi * $sisi;
echo "Hasil dari luas persegi dengan sisi sama dengan $sisi adalah $luas <br>";

// Membuat function mengitung luas persegi
function rumus_persegi($sisi)
{
    $hasil = $sisi * $sisi;
    return $hasil;
}
$s = 10;
$hasil_penjumlahan = rumus_persegi($s);
echo "Hasil dari luas persegi dengan sisinya adalah $s adalah $hasil_penjumlahan <br>";

// Membuat class 
class RumusBangunDatar
{
    // Menghitung luas persegi
    function luas_persegi($sisi)
    {
        return $sisi * $sisi;
    }

    // Menghitung keliling persegi
    function keliling_persegi($sisi)
    {
        return 4 * $sisi;
    }

    // Menghitung luas persegi panjang
    function luas_persegi_panjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    // Menghitung keliling persegi panjang
    function keliling_persegi_panjang($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }

    // Menghitung luas segitiga
    function luas_segitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }

    // Menghitung luas lingkaran
    function luas_lingkaran($jari_jari)
    {
        return pi() * pow($jari_jari, 2);
    }

    // Menghitung keliling lingkaran
    function keliling_lingkaran($jari_jari)
    {
        return 2 * pi() * $jari_jari;
    }
}

// Membuat objek dari class RumusBangunDatar
$bangunDatar = new RumusBangunDatar;

// Hasil dari class
echo "Luas persegi: " . $bangunDatar->luas_persegi(7) . "<br>";
echo "Keliling persegi: " . $bangunDatar->keliling_persegi(7) . "<br>";
echo "Luas persegi panjang: " . $bangunDatar->luas_persegi_panjang(10, 5) . "<br>";
echo "Keliling persegi panjang: " . $bangunDatar->keliling_persegi_panjang(10, 5) . "<br>";
echo "Luas segitiga: " . $bangunDatar->luas_segitiga(6, 8) . "<br>";
echo "Luas lingkaran: " . $bangunDatar->luas_lingkaran(7) . "<br>";
echo "Keliling lingkaran: " . $bangunDatar->keliling_lingkaran(7) . "<br>";
?>
