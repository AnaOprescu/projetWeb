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

        <form method="post" action="../controller/add_membre.php"  enctype="multipart/form-data">
        <table class="table1">
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">First_name</label></td>
            <td width="30"></td>
            <td><input type="text" name="first_name" placeholder="first_name" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Last_name</label></td>
            <td width="30"></td>
            <td><input type="text" name="last_name" placeholder="last_name" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Pseudo</label></td>
            <td width="30"></td>
            <td><input type="text" name="pseudo" placeholder="Pseudo" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Country of origin</label></td>
            <td width="30"></td>
            <td><input type="text" name="country_origin" placeholder="Country_origin" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">City of origin</label></td>
            <td width="30"></td>
            <td><input type="text" name="city_origin" placeholder="City_origin" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Facebook name</label></td>
            <td width="30"></td>
            <td><input type="text" name="fb_name" placeholder="fb_name" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Pseudo</label></td>
            <td width="30"></td>
            <td><input type="text" name="pseudo" placeholder="Pseudo" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Country of origin</label></td>
            <td width="30"></td>
            <td><input type="text" name="country_origin" placeholder="Country_origin" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">City of origin</label></td>
            <td width="30"></td>
            <td><input type="text" name="city_origin" placeholder="City_origin" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Facebook name</label></td>
            <td width="30"></td>
            <td><input type="text" name="fb_name" placeholder="fb_name" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
            <td width="30"></td>
            <td><input type="text" name="email" placeholder="Email" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Password</label></td>
            <td width="30"></td>
            <td><input type="text" name="password" placeholder="Password" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">Country of destionation</label></td>
            <td width="30"></td>
            <td><input type="text" name="country_dest" placeholder="Country_dest" required /></td>
          </tr>
          <tr>
            <td><label style="color:#3a87ad; font-size:18px;">City of destionation</label></td>
            <td width="30"></td>
            <td><input type="text" name="city_dest" placeholder="City_dest" required /></td>
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
