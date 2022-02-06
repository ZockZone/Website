<?php
# @Author: Felix Schmitt
# @Date:   2022-01-06T18:08:10+01:00
# @Email:  felix.schmitt@edingmc.com
# @Filename: footer.php
# @Last modified by:   Felix Schmitt
# @Last modified time: 2022-01-08T13:35:27+01:00
# @Copyright: Copyright 2022 © TheEdingMCGroup
?>
<!-- Footer -->

<footer class="bg-light text-center ">
  <!-- Grid container -->
  <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <div class="col-md-12">
          <div class="py-4 d-flex justify-content-center align-items-center">
            <a class="mr-4" href="?p=legal/privacy">Datenschutz</a>&emsp;|&emsp;<a href="?p=legal/imprint">Impressum</a>
          </div>
        </div>
      </div>
      <div class="d-flex">
      <div class="form-check form-switch ms-auto mt-3 me-3"><!--ms-auto mt-3 me-3-->
        <label class="form-check-label ms-3" for="lightSwitch">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="25"
            height="25"
            fill="currentColor"
            class="bi bi-brightness-high"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
            />
          </svg>
        </label>
        <input class="form-check-input" type="checkbox" id="lightSwitch" />
      </div>
          <select class="selectpicker" data-width="fit">
              <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
              <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
          </select>
      </div>
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © <?php echo date("Y"); ?> Copyright
    <a class="footer link" href="https://zockzone.de">ZockZone.net</a><br>
    Developing by <a class="footer link" href="https://edingmc.com">TheEdingMCGroup</a>
  </div>
  <!-- Copyright -->


</footer>
<!-- Footer -->
