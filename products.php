<?php
    session_start();

    include "classes/item.php";
    $item = new Item;
    $rows = $item->getAllItems();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Products</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
            <div class="ms-auto">
                <ul class="navbar-nav">
                    <?php
                        if ($_SESSION['status'] == 'U'){
                            ?>
                             <h1><a href="products.php" class="text-warning"><i class="fas fa-shopping-bag me-3"></i></a></h1>
                        <?php
                        }
                    ?>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><?= $_SESSION['username'] ?></a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link text-danger">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <div class="row">
            <?php
                foreach($rows as $r){
                    ?>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <div class="card-header p-0">
                                    <img src="assets/images/items/<?= $r['item_photo'] ?>" class="w-100" style="height:200px;">
                                </div>
                                <div class="card-bod text-center">
                                    <?= $r['item_name'] ?> <br>
                                    <?= number_format($r['item_price'],2) ?> <br>

                                    <a href="buy-item.php?item_id=<?= $r['item_id'] ?>" class="btn btn-outline-primary w-50 mb-2">
                                        BUY</a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </main>
</body>

</html>