<!--
# @Author: Felix Schmitt
# @Date:   2022-01-06T11:35:03+01:00
# @Email:  felix.schmitt@edingmc.com
# @Filename: index.php
# @Last modified by:   Felix Schmitt
# @Last modified time: 2022-01-07T23:26:25+01:00
# @Copyright: Copyright 2022 © TheEdingMCGroup



  This Site was Created by Felix Schmitt,CSU
  Copyright Script: 2022 © TheEdingMCGroup
  Copyright Content: 2022 © ZockZone.net
-->
<?php
  require_once "includes.php";
  require_once "settings.php";
  include "lang/" . $loc . ".php";

  // Include Pages
  if(isset($_GET['p'])) {
    $p = htmlspecialchars($_GET['p']);
  } else {
    $p = "index";
  }
  ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- Meta -->
    <meta http-equiv="content-Type" content="text/html; utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="cache" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta http-equiv="content-Language" content="de" />
    <meta name="description" content="The Official Website of ZockZone Minecracft and Community Network" />
    <meta name="keywords" content="Minecraft, Minecraft Server, ZockZone, EdingMC" />
    <meta name="author" content="Felix Schmitt" />
    <meta name="publisher" content="TheEdingMCGroup" />
    <meta name="copyright" content="ZockZone.net and TheEdingMCGroup" />
    <meta name="audience" content="Alle" />
    <meta name="page-type" content="Produktinfo" />
    <meta name="page-topic" content="Computer" />
    <meta http-equiv="Reply-to" content="" />
    <meta name="expires" content="" />
    <meta name="revisit-after" content="2 days" />
    <title>ZockZone.net - Dein Minecraft und Community Netzwerk</title>

    <!-- Social -->
      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://zockzone.net">
      <meta property="og:title" content="ZockZone.net - Dein Minecraft und Community Netzwerk">
      <meta property="og:description" content="Spiele Citybuild oder Unterhalte dich mit deinem Freunden auf unserem Teamspeak oder Discord Server.">
      <meta property="og:image" content="assets/img/banner.jpg">
      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://zockzone.net">
      <meta property="twitter:title" content="ZockZone.net - Dein Minecraft und Community Netzwerk">
      <meta property="twitter:description" content="Spiele Citybuild oder Unterhalte dich mit deinem Freunden auf unserem Teamspeak oder Discord Server.">
      <meta property="twitter:image" content="assets/img/banner.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/iconassets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mdb/mdb.min.css">
    <link
          rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
          integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
          crossorigin="anonymous"
        />
    <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/navbar.css">



  </head>
  <body>

    <?php include "content/header.php";  ?>

        <?php include "content/" . $p . ".php" ?>

    <?php include "content/footer.php" ?>

    <!-- JavaScript -->
    <script type="text/javascript">
      /*var _smartsupp = _smartsupp || {};
      _smartsupp.key = '5503cda08742a8305d9a1971615368d0b476b174';
      window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
      })(document);*/
    </script>
    <!--<script type="text/javascript" src="https://cache.consentframework.com/js/pa/29749/c/l6fil/stub" referrerpolicy="unsafe-url" charset="utf-8"></script>
    <script type="text/javascript" src="https://choices.consentframework.com/js/pa/29749/c/l6fil/cmp" referrerpolicy="unsafe-url" charset="utf-8" async></script>-->
    <script src="assets/js/mdb/mdb.min.js"></script>
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/switch.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
