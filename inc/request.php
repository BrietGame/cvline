<?php

function insertCvGlobal()
{
    $surname = 'rrrr';
    $name = 'eeee';
    $email = 'rrrrr';
    $adress = 'eeeeeee';
    $postal = 'aaaaa';
    $city = 'aaaaaaa';
    $birthday = '2020-03-03 00:00:00';
    $phone = 'ggggggg';
    global $pdo;
    // On prépare la requête SQL Insert
    $sql = "INSERT INTO cvtheques_cv_global (cv_surname, cv_name, cv_birthday, cv_email, cv_phone, cv_adress, cv_postal, cv_city) VALUES ($surname, $name, $birthday, $email, $phone, $adress, $postal, $city)";
    $query = $pdo->prepare($sql);
    $query->execute();
}
