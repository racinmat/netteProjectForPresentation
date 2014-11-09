<?php
   include_once 'header.php';
   include_once 'ClassWithName.php';
   $object = new ClassWithName("tested");
   $object->namee = "notTested";
   include_once 'footer.php';
?>
