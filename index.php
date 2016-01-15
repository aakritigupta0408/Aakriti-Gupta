<?php

include 'header.inc.php';
require 'db.inc.php';

$query = "Select * from projects";

  if($query_run = mysql_query($query)){
    
    $num_rows = mysql_num_rows($query_run);

    if($num_rows != 0){
?>

<html>

<body>

<div class="container">
<br><h1  style="margin-top:175px">My Projects</h1><br>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Project</th>
      <th>Category</th>
      <th>Link</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    
    <?php     
      while($rows = mysql_fetch_assoc($query_run)){ ?>

       
    <tr>
     
      <td><a href="#" data-toggle="modal" data-target=<?php echo '#'.$rows['id']; ?>><?php echo $rows['name']; ?> </a></td>
      <td><?php echo $rows['category']; ?></td>
      <td><a target="_blank" href=<?php echo $rows['link']; ?>><?php echo $rows['link']; ?></a></td>
      <td><a href=<?php echo 'projects/'.$rows['id'].'.zip'; ?> class="btn btn-danger">Download</a></td>
      
    </tr>


    <div class="modal" id=<?php echo $rows['id']; ?>>
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <label class="modal-title"><?php echo $rows['name']; ?></label> 
          </div>

          <div class="modal-body">
            <p><strong><?php echo $rows['category']; ?></strong></p>
            <p><strong>Description : </strong></p>
            <p><?php echo $rows['description']; ?></p>
            <p><a target="_blank" href=<?php echo $rows['link']; ?>><?php echo $rows['link']; ?></a></p>
            
          </div>

          <div class="modal-footer">
            <a href=<?php echo 'projects/'.$rows['id'].'.zip'; ?> class="btn btn-danger">Download</a>
          </div>

          </form>

        </div>
      </div>  
    </div>

    <?php
      }?>
  </tbody>
</table>
</div>
</body>
</html>
<?php
  }
}

?>