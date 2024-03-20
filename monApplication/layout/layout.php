<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" href="https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/css/style.css">
           <title>
     Ton appli !
    </title>
   
  </head>

  <body>
    <p id = "err"></p>
    <h2>CERIcar </h2>
    <?php if($context->getSessionAttribute('user_id')): ?>
	<?php echo $context->getSessionAttribute('user_id')." est connecte"; ?>
     <?php endif; ?>

    <div id="page">
      <?php if($context->error): ?>
      	<div id="flash_error" class="error">
        	<?php echo " $context->error !!!!!" ?>
      	</div>
      <?php endif; ?>
      <h1> <?php echo $context->notification; ?></h1>
      <div id="page_maincontent">	
      	<?php include($template_view); ?>
      </div>
    </div>
      

  </body>

  <script src ="js/ajax.js">

  </script>

</html>
