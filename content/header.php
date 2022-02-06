<?php
  # @Author: Felix Schmitt
  # @Date:   2022-01-06T13:39:37+01:00
  # @Email:  felix.schmitt@edingmc.com
  # @Filename: header.php
  # @Copyright: Copyright 2022 © TheEdingMCGroup

$img = "assets/img/icon.png";
$imgData = base64_encode(file_get_contents($img));
$imgSrc = 'data: ' . mime_content_type($img) . ';base64,' . $imgData;
?>
<nav class="navbar navbar-fixed navbar-expand-lg rounded-nav navbar-light fixed-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand brand" href="/">
            <?php
            echo '<img src="' . $imgSrc . '" style="width: 100px;">';
            ?>
        </a>
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=sites/team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=sites/rules">Regelwerk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://forum.zockzone.net">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://help.zockzone.net">Support</a>
                </li>
            </ul>

            <!--<div class="d-flex">
                <form class="d-flex">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>-->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="#000000">Anmelden</button>
            </div>
        </div>
    </div>
</nav>
