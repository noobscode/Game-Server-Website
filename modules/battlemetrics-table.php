<!-- START Include/Get variables from API -->
<?php if(API_BattleMetrics_com == "ON"){include_once("includes/api-battlemetrics-com.php");};?>
<!-- END Include/Get variables from API -->

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
      <th scope="row"><?php echo $bm_name1?></th>
      <td><button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Server1"><i class="fab fa-steam-symbol"></i> Steam Connect</button></td>
      <td><img src="../images/rust-32x32.png" width="20" height="20" title="Rust" alt="Rust" /><?php echo " Rust"?></td>
      <td><?php echo $bm_status1?></td>
      <td><?php echo $bm_activeplayers1?>/<?php echo $bm_maxplayers1?></td>
      <td><?php echo $bm_uptime1?>/sec</td>
      <td><?php echo $bm_location1?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $bm_name2?></th>
      <td><button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Server2"><i class="fab fa-steam-symbol"></i> Steam Connect</button></td>
      <td><img src="../images/csgo.452e5.png" width="20" height="20" title="CS GO" alt="CS GO" /><?php echo " CS GO"?></td>
      <td><?php echo $bm_status2 ?></td>
      <td><?php echo $bm_activeplayers2?>/<?php echo $bm_maxplayers2?></td>
      <td><?php echo $bm_uptime2?>/sec</td>
      <td><?php echo $bm_location2?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $bm_name3?></th>
      <td><button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Server3"><i class="fab fa-steam-symbol"></i> Steam Connect</button></td>
      <td><img src="../images/arma-3.jpg" width="20" height="20" title="Arma3" alt="Arma3" /><?php echo " Arma 3"?></td>
      <td><?php echo $bm_status3?></td>
      <td><?php echo $bm_activeplayers3?>/<?php echo $bm_maxplayers3?></td>
      <td><?php echo $bm_uptime3?>/sec</td>
      <td><?php echo $bm_location3?></td>
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
        <p>In order to connect <strong><?php echo $bm_name1; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
        <p class="text-center"><a href="steam://connect/<?php echo $bm_address1; ?>:<?php echo $bm_port1; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
        <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
        <hr>
      </div>
  <div class="modal-body">
    <label for="consolecommand">Connect via Rust in-game console</label></p>
    <textarea class="form-control" id="consolecommand" rows="1">client.connect <?php echo $bm_address1; ?>:<?php echo $bm_port1; ?></textarea></p>
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
        <p>In order to connect <strong><?php echo $bm_name2; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
        <p class="text-center"><a href="steam://connect/<?php echo $bm_address2; ?>:<?php echo $bm_port2; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
        <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
        <hr>
      </div>
  <div class="modal-body">
    <label for="consolecommand">Connect via Rust in-game console</label></p>
    <textarea class="form-control" id="consolecommand" rows="1">client.connect <?php echo $bm_address2; ?>:<?php echo $bm_port2; ?></textarea></p>
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
        <p>In order to connect <strong><?php echo $bm_name3; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
        <p class="text-center"><a href="steam://connect/<?php echo $bm_address3; ?>:<?php echo $bm_port3; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
        <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
        <hr>
      </div>
  <div class="modal-body">
    <label for="consolecommand">Connect via Rust in-game console</label></p>
    <textarea class="form-control" id="consolecommand" rows="1">client.connect <?php echo $bm_address3; ?>:<?php echo $bm_port3; ?></textarea></p>
    <p>In order to connect via in-game console, while you are in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END Create bootstrap modal for the steam connect buttons -->