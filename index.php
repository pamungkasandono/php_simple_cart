<?php require_once("template/head.php"); ?>

<body>
    <?php require_once("template/nav.php"); ?>
    <div class="container">
        <h1>Hello, world!</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th width="80">Harga</th>
                    <th width="50"></th>
                </tr>
            </thead>
            <tbody id="cart_data">
                <tr>
                    <th>1</th>
                    <td>Nasi Kuning + Ayam + Telor Asin + Bihun Goreng</td>
                    <td>20000</td>
                    <td>
                        <a href="cart_data.php?id=1" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Nasi Kuning + Ayam + Telor Asin + Bihun Goreng</td>
                    <td>20000</td>
                    <td>
                        <a href="cart_data.php?id=2" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Nasi Kuning + Ayam + Telor Asin + Bihun Goreng</td>
                    <td>20000</td>
                    <td>
                        <a href="cart_data.php?id=3" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>