<div class="Container my-5">
    <div class="alert alert-primary" role="alert"><i class="fas fa-info-circle"></i>
        In your root directory there is a file called maintenance.txt, if you put anything inside the file it will automaticly change from the "All good" box to "Up comming maintenance" and echo the output of maintenance.txt.
        You can populate the file with just plain text or code if you'd like. This maintenance alert has several functions: Fully disable, hide if maintenance.txt is empty only displaying the yellow warning if there is an upcomming maintenance.
    </div>
</div>

<div class="alert alert-warning my-5" role="alert">
    <h4 class="alert-heading">Upcomming Maintenance!</h4>
    <p>Out servers will be undergoing maintenance/reboots/patching</p>
    <hr>
    <p class="mb-0"><?php echo "This text is the output of the content inside maintenance.txt"?></p>
</div>