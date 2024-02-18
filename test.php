<?php
//terminal:composer require mongodb/mongodb 
// error use :composer update --ignore-platform-reqs
require_once __DIR__ . "/vendor/autoload.php";

// connect to MongoDB

    $client = new MongoDB\Client("mongodb+srv://soemnho1695:soemnho1695@uocgiconguoiyeu.hyo2mgk.mongodb.net/");

    // select a database
    $database = $client->selectDatabase('QuanLyBanDienTu');

    // select a collection
    $collection = $database->selectCollection('sanpham');
    $query = [];
    $options = ['sort' => ['gia' => 1]]; // Sắp xếp theo giá tăng dần
    $lowestPriceProduct = $collection->findOne($query, $options);

    return $lowestPriceProduct; 
    // In thông tin sản phẩm có giá thấp nhất
    var_dump($lowestPriceProduct);
    
?>