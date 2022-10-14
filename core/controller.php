<?php

 class Controller{

  function __construct()
  {
    
  }

  function veiw($viewUrl,$data=[])
  {
      require ('views/header.php');
      require ('views/'.$viewUrl.'.php');
      require ('views/footer.php');
  }
     function vother($viewUrl)
     {
         require ('views/header1.php');
         require ('views/'.$viewUrl.'.php');
         require ('views/footer1.php');
     }
     function model($modelUrl)
     {
         require ('models/model_'.$modelUrl.'.php');
         $classname = 'model_'. $modelUrl;
         $this->model = new $classname;

     }
 }
?>