<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free-5/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free-6/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>js/leaflet/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>js/leaflet/leaflet.css" />
    <script src="<?= base_url('assets/'); ?>js/leaflet/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="<?= base_url('assets/'); ?>js/jquery/jquery.js"></script>

    <!-- Leaflet's Routing Machine -->
    <link rel="stylesheet"
        href="<?= base_url('assets/'); ?>js/leaflet/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <script src="<?= base_url('assets/'); ?>js/leaflet/leaflet-routing-machine/dist/leaflet-routing-machine.js">
    </script>
    <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Text To Speech -->
    <script src="<?= base_url('assets/') ?>textToSpeech/textToSpeech.js"></script>


    <script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet/leafletAJAX/leaflet.ajax.js"></script>






    <script>
    var base_url = '<?php echo base_url(); ?>';
    </script>
</head>