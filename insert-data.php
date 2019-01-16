<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    )   VALUE
    (
        '10',
        'Bayu Rizqi Fachreza Ramadhan',
        'Frontend and Backend Developer',
        'Full Time',
        '16',
        'Malang',
        '1',
        'bayu_rizqi_27rpl@student.smktelkom-mlg.sch.id'
    )";

    if($koneksi->query($sql) == TRUE){
            echo "Insert data telah berhasil";
    }else{
        echo "Insert data gagal";
    }
?>