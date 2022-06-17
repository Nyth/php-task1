<?php
if (empty($name)){
      echo"<h1>Hello World</h1>";
}
else{
      $name=$_GET['name'];
      echo $name;
}

?>