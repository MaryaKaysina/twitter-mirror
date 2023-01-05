<?php
  include_once "includes/header.php";

  if(logged_in()) redirect(get_url());
  
  $title = 'Регистрация';
  $error = get_error_message();

  include_once "includes/register_form.php";
  include_once "includes/footer.php";
