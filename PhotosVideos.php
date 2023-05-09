<?php
require "header.php";
?>
       <title>Photo Gallery | Creativity Without Frontiers</title>
       
       
        <section class="gallery-links">
        <div class="wrapper">
          <h1 class="leader3">Gallery</h1>

          <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>

          <?php
          if ($_SESSION['admin']==1) {
            echo "<div class='gallery-upload'>
            <h1 class='leader3'>Upload</h1>
              <form action='includes/gallery-upload.inc.php' method='post' enctype='multipart/form-data'>
                <input type='text' name='filename' placeholder='File name...'>
                <input type='text' name='filetitle' placeholder='Image title...'>
                <input type='text' name='filedesc' placeholder='Image description...'>
                <input type='file'name='file'>
                <button type='submit' name='submit'>UPLOAD</button>
              </form>
            </div>";
          }
          ?>
<?php
require "footer.php";
?>