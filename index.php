<?php
    $json = file_get_contents('menu.json');
    $data = json_decode($json, true);

    $menu = false;
    if(isset($_GET["menu"])) {
        $menu = $_GET["menu"];
    }
    $result = [];
    if($menu) {
        foreach($data['menu'] as $value) {
            if($value['jenis'] == $menu) {
                $result[] = $value;
            }
        }
    } else {
        $result = $data['menu'];
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Chicken Delivery!.png" alt="" width="200" height="auto" class="d-inline-block align-text-top">
            </a>
            Restaurant UP
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="?">All Menu</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=Foods">Foods</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=Cold Beverages">Cold Beverages</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=Salads and Snacks">Salads and Snacks</a>
                </li>

            </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <?php foreach($result as $value) { ?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $value['gambar']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['nama']?></h5>
                        <p class="card-text"><?php echo $value['deskripsi']?></p>
                        <p class="card-text"><?php echo $value['harga']?></p>
                        <p class="card-text"><?php echo $value['estimasi']?></p>

                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>