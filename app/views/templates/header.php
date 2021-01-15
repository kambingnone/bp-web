<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $data['title']; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url; ?>/css/style.css">
</head>

<body>
    <div class="sidebar">
        <img src="<?= base_url; ?>/img/logo.png" alt="" width="100%">
        <a href="<?= base_url; ?>/home">Home</a>
        <a href="<?= base_url; ?>/inbound">Inbound</a>
        <a href="<?= base_url; ?>/outbound">Outbound</a>
    </div>

    <div class="content">

        <header>
            <!-- Example single danger button -->
            <div class="btn-group grid-container">
                <button type="submit" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Akun
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url; ?>/home/logout">Sign Out</a>
                </div>
            </div>
        </header>

        <h2><?= $data['judul']; ?></h2>