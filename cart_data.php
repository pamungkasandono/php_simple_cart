<?php

session_start();

// session_destroy();

// die;

if (isset($_GET['id'])) {
    // $sql = "SELECT * FROM makanan WHERE id = " . $_GET["id"];
    // Hasil select di atas nantinya di gunakan sebagai untuk isi value di bawah
    // sesuaikan variabel lain seperti harga dan nama
    $id = $_GET["id"];
    $result = [
        "id" => $id,
        "nama" => "Nasi $id",
        "harga" => $id . "000",
        "jumlah" => "1",
    ];

    if (isset($_SESSION['cart'])) {
        $cart  =  $_SESSION['cart'];
    } else {
        $cart = [];
    }

    array_push($cart, $result);

    $_SESSION['cart'] = $cart;

    header("location: index.php");
}

if (isset($_GET["hapus"])) {
    $id = $_GET["hapus"];
    $cart = $_SESSION['cart'];
    unset($cart[$id]);
    $_SESSION['cart'] = $cart;
    header("location: cart_list.php");
}

if (isset($_GET["minus"])) {
    $index = $_GET["minus"];

    if ($_SESSION['cart'][$index]['jumlah'] <= 1) {
        header("location: cart_list.php");
        die;
    }

    $_SESSION['cart'][$index]['jumlah'] -= 1;

    header("location: cart_list.php");
}

if (isset($_GET["plus"])) {
    $index = $_GET["plus"];

    if ($_SESSION['cart'][$index]['jumlah'] >= 40) {
        header("location: cart_list.php");
        die;
    }

    $_SESSION['cart'][$index]['jumlah'] += 1;

    header("location: cart_list.php");
}



// $id = $_POST['id'];


// foreach ($barang as $b) {
//     $col .=
//         '<tr>
//         <td>' . $no++ . ' </td>
//         <td>' . $b->nama_barang . ' ' . $b->merk . ' ' . $b->varian . ' </td>
//         <td>' . $b->stok . ' </td>
//         <td>' . $b->satuan . ' </td>
//         <td>' . number_format($b->harga_jual) . ' </td>
//     </tr>';
// }
// echo $col;
