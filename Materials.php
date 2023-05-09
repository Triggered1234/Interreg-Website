<?php
require "header.php";
require "filesLogic.php";
?>
   <title>Materials | Creativity Without Frontiers</title>
   <table align="center">
<thead>
    <th>ID&nbsp;&nbsp;</th>
    <th>Filename&nbsp;&nbsp;</th>
    <th>Size(MB)&nbsp;&nbsp;</th>
    <th>Downloads&nbsp;&nbsp;</th>
    <th>Action&nbsp;&nbsp;</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id'] . '&nbsp;' ; ?></td>
      <td><?php echo $file['name'] . '&nbsp;' ; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB' . '&nbsp;'; ?></td>
      <td><?php echo $file['downloads'] . '&nbsp;' ; ?></td>
      <td><a href="Materials.php?file_id=<?php echo $file['id']; ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
<br>
<br>
<br>

      <?php
          if ($_SESSION['admin']==1) {
            echo '
             <h1 class="leader">Upload File</h1>
   
       <div class="gallery-upload">
      <div class="row">
        <form action="filesLogic.php" method="post" enctype="multipart/form-data" >
      <div class="upload-btn-wrapper">
  <button class="btn1">Select a file</button>
  <input type="file" name="myfile" />
</div>
          <button type="submit" name="save" class="btn1">Upload</button>
        </form>
      </div>
    </div>
    
';}?>
    
<?php
require "footer.php";
?>