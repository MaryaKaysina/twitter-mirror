<?php
  $title = 'Главная страница';
  include_once "includes/header.php";
  $posts = get_posts();
  $error = get_error_message();
  if(logged_in()) include_once "includes/twit_form.php";
  include_once "includes/posts.php";
  include_once "includes/footer.php";

