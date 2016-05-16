<!-- Button to trigger modal -->
<a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
<br>
<br>
<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Add</h3>
</div>
<div class="modal-body">

        <form method="post" action="../controller/add_city.php"  enctype="multipart/form-data">
        <table class="table1">
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Name</label></td>
            <td width="30"></td>
            <td><input type="text" name="name" placeholder="Name" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Location</label></td>
            <td width="30"></td>
            <td><input type="text" name="location" placeholder="Location" required /></td>
          </tr>

          </table>
  </div>
  <div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
  </div>

</form>
  </div>
<?php include('../template/footer_table.php'); ?>
