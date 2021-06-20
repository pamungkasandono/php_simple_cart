<?php require_once("template/head.php") ?>

<?php
session_start();

$cart_data = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// echo "<pre>";
// print_r($cart_data);
// echo "</pre>";
// die;
?>

<body>
    <?php require_once("template/nav.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th width="80">Harga</th>
                            <th width="80">Jumlah</th>
                            <th width="80">Subtotal</th>
                            <th width="50"></th>
                        </tr>
                    </thead>
                    <tbody id="cart_data">
                        <?php
                        $total = 0;
                        $no = 1;
                        $pos = 0;
                        foreach ($cart_data as $key => $row) :
                            $total += $row["harga"];
                        ?>
                            <tr>
                                <th><?php echo $no++ ?></th>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="cart_data.php?plus=<?php echo $key ?>&val=1" class="btn btn-danger btn-sm"><i class="fas fa-plus"></i></a>
                                        <button type="button" class="btn btn-secondary" disabled>1</button>
                                        <a href="cart_data.php?minus=<?php echo $key ?>&val=1" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $row['harga'] ?>
                                </td>
                                <!-- <td><?php echo $key ?></td> -->
                                <td><a href="cart_data.php?hapus=<?php echo $key ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <th colspan="4" style="text-align: end;">Total</th>
                            <th><?php echo $total ?></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "cart_data.php",
                method: "POST",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(res) {
                    console.log(res);
                }
            });
        });
    </script>

</body>

</html>