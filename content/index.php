<?php
# @Author: Felix Schmitt
# @Date:   2022-01-06T18:08:29+01:00
# @Email:  felix.schmitt@edingmc.com
# @Filename: index.php
# @Last modified by:   Felix Schmitt
# @Last modified time: 2022-01-07T23:36:28+01:00
# @Copyright: Copyright 2022 © TheEdingMCGroup

?>
<div
        class="header-img p-5 text-center bg-image"
        style="
        background-image: url('assets/img/background.png');
        height: 750px;
        margin-top: 0px;">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Herzlich Wilkommen</h1>
        <h4 class="mb-3">auf ZockZone.net</h4>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <center>
  <h1 style="font-weight: light;">Unsere Server</h1>
  <div class="row">

      <!-- Discord -->
    <div class="col-lg-3 col-md-6">
      <div class="card text-center bg-light mb-3" style="">
        <div class="card-header">Discord</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="//to.zockzone.de/discord">Beitreten</a></h5>
              <!--<li class="list-group-item"><a href="//to.zockzone.de/discord" data-mdb-toggle="modal" data-mdb-target="#disTuto">Beitreten</a></h5>-->
              <li class="list-group-item">
              <span class="badge rounded-pill bg-success">Online</span>
            <!--<li class="list-group-item">
              na/na
            </li>-->
          </ul>
        </div>
    </div>

      <!-- Minecraft -->
    <div class="col-lg-3 col-md-6">
      <div class="card text-center bg-light mb-3" style="">
        <div class="card-header">Minecraft</div>
          <ul class="list-group list-group-flush">
              <!--<li class="list-group-item"><a href="#" data-mdb-toggle="modal" data-mdb-target="#mcTuto">Beitreten</a></h5>-->
              <li class="list-group-item">ZockZone.net</li>
              <li class="list-group-item">
              <?php
              $server = new MCServerStatus("zockzone.net", 25565);

              if ($wartung === true) {
                echo <<<HTML
                      <span class="badge rounded-pill bg-warning">Wartungen</span>
                      HTML;
              } else {
                if ($server->online) {
                      echo <<<HTML
                              <span class="badge rounded-pill bg-success">Online</span>
                              HTML;
                    } else {
                      echo <<<HTML
                              <span class="badge rounded-pill bg-danger">Offline</span>
                              HTML;
                    }
                  }
              ?>
            <li class="list-group-item">
              <?php
              echo $server->online_players . "/" . $server->max_players;
              ?>
            </li>
          </ul>
        </div>
      </div>

      <!-- FiveM -->
	    <div class="col-lg-3 col-md-6">
      <div class="card text-center bg-light mb-3" style="">
        <div class="card-header">FiveM</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Beitreten</a></h5>
                <!--<li class="list-group-item"><a href="//to.zockzone.de/discord" data-mdb-toggle="modal" data-mdb-target="#fivemTuto">Beitreten</a></h5>-->
            <li class="list-group-item">
             <!-- <span class="badge rounded-pill bg-succes">Online</span>-->
            <li class="list-group-item">
                            <span class="badge bg-warning">Coming Soon!</span>
		  </li>
          </ul>
        </div>
    </div>

      <!-- TeeamSpeak -->
    <div class="col-lg-3 col-md-6">
      <div class="card text-center bg-light mb-3" style="">
        <div class="card-header">TeamSpeak</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="//to.zockzone.de/teamspeak" data-mdb-toggle="modal" data-mdb-target="#tsTuto">Beitreten</a></h5>
            <li class="list-group-item">
              <span class="badge rounded-pill bg-success">Online</span>
            <!--<li class="list-group-item">
              na/na
            </li>-->
          </ul>
        </div>
    </div>
  </div>
</div>
<br>
<center>
    <h1>News</h1>
    <h3>Coming Soon</h3>
</center>





<!-- Modal -->

<!-- disTuto
<div class="modal top fade" id="disTuto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog   modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- mcTuto
<div class="modal top fade" id="mcTuto" tabindex="-1" aria-labelledby="minecraftModal" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="minecraftModal">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- fivemTuto
<div class="modal top fade" id="fivemTuto" tabindex="-1" aria-labelledby="fivemModal" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fivemModal">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- tsTuto
<div class="modal top fade" id="tsTuto" tabindex="-1" aria-labelledby="teamspeakModal" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamspeakModal">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>-->