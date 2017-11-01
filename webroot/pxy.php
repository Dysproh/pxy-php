<?php
if(isset($_GET['url']) || isset($_POST['url'])) {
  $rcont = rawurldecode(rawurlencode(file_get_contents($_GET['url'])));
  $lrepcont = str_replace ("https://" , "http://dyp-hp-lel-dysproh175320.codeanyapp.com/pxy.php?url=https%3A%2F%2F" , $rcont);
  
  $url = $_GET['url'];
  $eod = strpos(substr($url, 8), "/");
  $ftl = strlen($url) - $eod;
  $dmn = substr($url, 0, $ftl * (0 - 1));
  die($dmn);
  
  
} else {
?>
<!DOCTYPE html>
<html>
  <body>
    <form action="pxy.php" method="GET">
      <input type="text" name="url">
      
      <input type="submit">
    </form>
  </body>
</html>
<?php
}