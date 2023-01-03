<?php

$angka = 4;
// $angka = 20;
// $angka = 39;
// $angka = 104;
echo sebutAngka($angka);


function sebutAngka($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";

    if ($nilai <= 0 or $nilai > 100) {
        echo "silahkan masukkan bilangan 1-100";
    } else if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = sebutAngka($nilai - 10) . " belas";
    } else if ($nilai == 20) {
        $temp = sebutAngka($nilai / 10) . " puluh";
    } else if ($nilai < 100) {
        $temp = sebutAngka($nilai / 10) .
            " puluh" . sebutAngka($nilai % 10);
    } else {
        echo "seratus";
    }

    return $temp;
}
