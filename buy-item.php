<?php
    session_start();

    $item_id = $_GET['item_id'];
    include "classes/item.php";
    $item = new Item;
    $rows = $item->getItem($item_id);
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
        <div class="w-75 mx-auto border" style="height: 250px;">
            <div id="left" class="w-50 h-100 float-start">
                <img src="assets/images/items/<?= $rows['item_photo'] ?>" class="w-100 h-100">
            </div>
            <div id="right" class="w-50 float-start" >
                <?= $rows['item_name'] ?> <br>
                <?= $rows['item_stock'] ?> <br>
                <?= number_format($rows['item_price'],2) ?> <br>
                <div class="mt-3">
                    How many items to buy?
                    <form action="" method="post">
                        <input type="number" name="buy" class="form-control w-50" id="">
                        <input type="submit" value="BUY" class="btn btn-warning w-50 mt-3">
                    </form>
                </div>
                
            </div>
        </div>
    </main>
</body>

</html>