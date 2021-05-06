<?php require_once 'lib/function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Karyawan</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/materialize.min.js"></script>
</head>
<body class="grey lighten-3">
    <nav class="z-depth-1">
        <div class="nav-wrapper container">
            <a href="<?= base_url(); ?>">CRUD<span>KARYAWAN</span></a>
            <a href=""><span class="right grey-text text-darken-1">
                <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
            </span></a>
        </div>
    </nav>
    <ul id="side-menu" class="sidenav side-menu">
        <li><a class="font-subheader"><b>Data Karyawan</b></a></li>
        <li><div class="divider"></div></li>
        <li><a href="#" class="waves-effect"><i class="material-icons">dashboard</i>Home</a></li>
        <li><a href="#" class="waves-effect"><i class="material-icons">person</i>About</a></li>
        <li><a href="#" class="waves-effect">
        <i class="material-icons">mail_outline</i>Contact</a></li>
    </ul>