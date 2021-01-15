<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="sidebar">
        <img src="image/logo.png" alt="" width="100%">
        <a class="active" href="index.php">Home</a>
        <a href="inbound.html">Inbound</a>
        <a href="outbound.html">Outbound</a>
    </div>

    <div class="content">

        <header>
            <!-- Example single danger button -->
            <div class="btn-group grid-container">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Akun
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sign Out</a>
                </div>
            </div>
        </header>

        <h2>Home</h2>

        <div class="alert alert-info" role="alert">
            SELAMAT DATANG DI WMS ( WAREHOUSE MANAGEMENT SYSTEM )
        </div>

        <h3>Daftar Barang</h3>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Suplier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>NIVEA Body Serum</td>
                        <td>Perawatan & Kecantikan</td>
                        <td>150</td>
                        <td>IDL</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3>Barang keluar (Overhand)</h3>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Suplier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>NIVEA Body Serum</td>
                        <td>Perawatan & Kecantikan</td>
                        <td>150</td>
                        <td>IDL</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>