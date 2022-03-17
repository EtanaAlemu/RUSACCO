<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>RUSACCO</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/icons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- <div class="navbar-custom"> -->


        <nav class="navbar-custom navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url() ?>">RUSACCO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>form">Form</a>
                    </li>

                </ul>

            </div>
        </nav>
        <!-- </div> -->