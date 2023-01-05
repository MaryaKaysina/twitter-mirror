<?php
  include_once "includes/functions.php";
  if (!logged_in()) redirect();

  $title = 'Понравившиеся твиты';
  include_once "includes/header.php";
  $posts = get_liked_posts();
  include_once "includes/posts.php";
  include_once "includes/footer.php";

