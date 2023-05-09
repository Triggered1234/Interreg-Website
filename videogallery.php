<?php 
require 'header.php'
?>
<title>Video Gallery | Creativity Without Frontiers</title>
          <h1 class="leader3">Video Gallery</h1>

      <?php
          if ($_SESSION['admin']==1) {
            echo "<div class='gallery-upload'>
            <h1 class='leader3'>Upload</h1>
              <form action='includes/videogalleryupload.php' method='post' target='my-iframe'>
                <input type='text' name='videotitle' placeholder='Video Title...'>
                <input type='text' name='videodesc' placeholder='Video Description...'>
                 <input type='text' name='videourl' placeholder='Video URL...'>
                <button type='submit' name='submit'>Submit</button>
              </form>
            </div>";
          }
          ?>
<?php 
require 'footer.php'
?>