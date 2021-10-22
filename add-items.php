<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Items</title>
</head>

<body class="bg-light">
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-50 my-auto mx-auto">
                <div class="card-header bg-transparent border-0">
                    <h1 class="text-center">ADD ITEM</h1>
                </div>
                <div class="card-body">
                    <form action="actions/register.php" method="post" enctype="multipart/form-data">
                        <label for="first-name" class="form-label">Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control mb-2" required autofocus>

                        <label for="username" class="form-label fw-bold">Stocks</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required>

                        <label for="password" class="form-label">Price</label>
                        <input type="text" name="password" id="password" class="form-control mb-2" minlength="8" required>

                        <input type="file" name="photo" id="photo" class="form-control" accept="image/*" required>

                        <button type="submit" class="btn btn-success w-100 mt-3">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>