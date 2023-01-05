<?php
  $title = 'Главная страница';
  include_once "includes/header.php";
  $posts = get_posts(-1, true);
  include_once "includes/posts.php";
  include_once "includes/footer.php";

