<?php
if(isset($_POST['url])) {
  echo file_get_contents($_POST['url']);
} else {
?>
<!DOCTYPE html>
<html>
  <body>
    <form action="pxy.php" method="POST">
      <input type="text" name="url">
      
      <input type="submit">
    </form>
  </body>
</html>
<?php
}