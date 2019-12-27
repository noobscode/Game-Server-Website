<?php
if (trim(file_get_contents('maintenance.txt')) == false) { ?>
    <div class="alert alert-success my-5" role="alert">
      <h4 class="alert-heading">All good!</h4>
      <p>All servers healthy and running! This section displays planned upcomming maintenance/reboots/patches etc.</p>
    </div>
<?php }
else { ?>
    <div class="alert alert-warning my-5" role="alert">
      <h4 class="alert-heading">Upcomming Maintenance!</h4>
      <p>Out servers will be undergoing maintenance/reboots/patching</p>
      <hr>
      <p class="mb-0"><?php readfile("maintenance.txt")?></p>
    </div>
<?php } ?>