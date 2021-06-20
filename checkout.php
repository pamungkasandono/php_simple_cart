<?php
session_start();

// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";

$pesan = "";
$limiter = "";
foreach ($_SESSION['cart'] as $item) {
    unset($item['id']);
    // var_dump(implode(", ", $item));
    // echo "<br>";
    $item["subtotal"] = $item["jumlah"] * $item["harga"];
    // array_push("subtotal", $item["subtotal"] += $item["harga"]);
    unset($item['harga']);

    $pesan .= $limiter . implode(", ", $item);
    $limiter = "%0A";
}
$wa_msg = "Saya mau pesan:%0A$pesan%0ATerimakasih";
echo "Pesanan anda sedang di proses ...";

// die;
?>
<meta content="0; url=https://wa.me/6282136880796?text=<?php echo $wa_msg ?>" http-equiv="refresh">