<!-- START Include/Get variables from API -->
<?php if(API_Rustservers_net == "ON"){include_once("includes/api-rust-servers-net.php");};?>
<!-- END Include/Get variables from API -->

<!-- START Check server status if its up or down -->
<?php
function status1() {
    if ($is_online1 < "1") {
      echo '<span class="badge badge-success">UP!</span>';
    }
    else{
      echo '<span class="badge badge-danger">Down</span>';
    }
  }
  
  function status2() {
      if ($is_online2 < "1") {
        echo '<span class="badge badge-success">UP!</span>';
      }
      else{
        echo '<span class="badge badge-danger">Down</span>';
      }
    }
  
    function status3() {
      if ($is_online3 < "1") {
        echo '<span class="badge badge-success">UP!</span>';
      }
      else{
        echo '<span class="badge badge-danger">Down</span>';
      }
    }
?>
<!-- END Check server status if its up or down -->

<!-- START Create table / Server list -->

<table class="table table-responsive-lg">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">QuickConnect</th>
      <th scope="col">Game</th>
      <th scope="col">Online</th>
      <th scope="col">Players</th>
      <th scope="col">Uptime</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $name1?></th>
      <td><button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Server1"><i class="fab fa-steam-symbol"></i> Steam Connect</button></td>
      <td><img src="../images/rust-32x32.png" width="20" height="20" title="Rust" alt="Rust" /><?php echo " Rust"?></td>
      <td><?php status1(); ?></td>
      <td><?php echo $activeplayers1?>/<?php echo $maxplayers1?></td>
      <td><?php echo $uptime1?>%</td>
      <td><?php echo $location1?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $name2?></th>
      <td><button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Server2"><i class="fab fa-steam-symbol"></i> Steam Connect</button></td>
      <td><img src="../images/rust-32x32.png" width="20" height="20" title="Rust" alt="Rust" /><?php echo " Rust"?></td>
      <td><?php status2(); ?></td>
      <td><?php echo $activeplayers2?>/<?php echo $maxplayers2?></td>
      <td><?php echo $uptime2?>%</td>
      <td><?php echo $location2?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $name3?></th>
      <td><button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Server3"><i class="fab fa-steam-symbol"></i> Steam Connect</button></td>
      <td><img src="../images/rust-32x32.png" width="20" height="20" title="Rust" alt="Rust" /><?php echo " Rust"?></td>
      <td><?php status3(); ?></td>
      <td><?php echo $activeplayers3?>/<?php echo $maxplayers3?></td>
      <td><?php echo $uptime3?>%</td>
      <td><?php echo $location3?></td>
    </tr>
  </tbody>
</table>

<!-- END Create table / Server list -->

<!-- START Create bootstrap modal for the steam connect buttons -->

<!-- Modal Server #1 -->
<div class="modal fade" id="Server1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Server1">Steam Connect</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong><?php echo $name1; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
        <p class="text-center"><a href="steam://connect/<?php echo $address1; ?>:<?php echo $port1; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
        <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
        <hr>
      </div>
  <div class="modal-body">
    <label for="consolecommand">Connect via Rust in-game console</label></p>
    <textarea class="form-control" id="consolecommand" rows="1">client.connect <?php echo $address1; ?>:<?php echo $port1; ?></textarea></p>
    <p>In order to connect via in-game console, while you are in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Server #2 -->
<div class="modal fade" id="Server2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Server1">Steam Connect</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong><?php echo $name2; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
        <p class="text-center"><a href="steam://connect/<?php echo $address2; ?>:<?php echo $port2; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
        <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
        <hr>
      </div>
  <div class="modal-body">
    <label for="consolecommand">Connect via Rust in-game console</label></p>
    <textarea class="form-control" id="consolecommand" rows="1">client.connect <?php echo $address2; ?>:<?php echo $port2; ?></textarea></p>
    <p>In order to connect via in-game console, while you are in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Server #3 -->
<div class="modal fade" id="Server3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Server1">Steam Connect</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong><?php echo $name3; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
        <p class="text-center"><a href="steam://connect/<?php echo $address3; ?>:<?php echo $port3; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
        <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
        <hr>
      </div>
  <div class="modal-body">
    <label for="consolecommand">Connect via Rust in-game console</label></p>
    <textarea class="form-control" id="consolecommand" rows="1">client.connect <?php echo $address3; ?>:<?php echo $port3; ?></textarea></p>
    <p>In order to connect via in-game console, while you are in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END Create bootstrap modal for the steam connect buttons -->