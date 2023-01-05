<?php
  include_once "includes/functions.php";

  $error = get_error_message();

  if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
  } elseif(logged_in()) {
    $id = $_SESSION['user'];
  } else {
    $id = -1;
  };

  $posts = get_posts($id);

  $title = 'Твиты пользователя';
  if(!empty($posts)) $title = 'Твиты пользователя @' . $posts[0]['login'];

  include_once "includes/header.php";
  if(logged_in()) include_once "includes/twit_form.php";
  include_once "includes/posts.php";
  include_once "includes/footer.php";
