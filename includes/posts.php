<?php if($posts) { ?>
  <section class="wrapper">
  <ul class="tweet-list">
    <?php foreach($posts as $post) { ?>
      <li>
        <article class="tweet">
          <div class="row">
            <img class="avatar" src="<?php echo get_url($post['avatar']); ?>" alt="Аватар пользователя <?php echo $post['name']; ?>">
            <div class="tweet__wrapper">
              <header class="tweet__header">
                <h3 class="tweet-author"><?php echo $post['name']; ?>
                  <a href="<?php echo get_url('user_posts.php?id=' . $post['user_id']); ?>" class="tweet-author__add tweet-author__nickname">@<?php echo $post['login']; ?></a>
                  <time class="tweet-author__add tweet__date"><?php echo date('d.m.y в H:i', strtotime($post['date'])); ?></time>
                </h3>
                <?php if (logged_in() && $post['user_id'] == $_SESSION['user']) { ?>
                  <a href="<?php echo get_url('includes/delete_post.php?id=' . $post['id']); ?>" class="tweet__delete-button chest-icon"></a>
                <?php } ?>
              </header>
              <div class="tweet-post">
                <p class="tweet-post__text"><?php echo $post['text']; ?></p>
                <?php if($post['image']) { ?>
                  <figure class="tweet-post__image">
                    <img src="<?php echo $post['image']; ?>" alt="tweet image">
                  </figure>
                <?php } ?>
              </div>
            </div>
          </div>
          <footer class="tweet__footer">
            <?php
            $likes_count = get_likes_count($post['id']);
              if (logged_in()) {
                if (is_post_liked($post['id'])) { ?>
                  <a href="<?php echo get_url('includes/delete_like.php?id=' . $post['id']); ?>" class="tweet__like tweet__like_active">
                    <?php echo $likes_count; ?>
                  </a>
                <?php } else { ?>
                  <a href="<?php echo get_url('includes/add_like.php?id=' . $post['id']); ?>" class="tweet__like">
                    <?php echo $likes_count; ?>
                  </a>
                <?php }
              } else { ?>
                <div class="tweet__like"><?php echo $likes_count; ?></div>
              <?php } ?>
          </footer>
        </article>
      </li>
    <?php } ?>
    <?php } else { ?>
      <article class="tweet">
        <div class="row">
          <div class="tweet__wrapper">
              <header class="tweet__header">
                <h2 class="tweet-form__title">Здесь пока нет твитов ...</h3>
              </header>
          </div>
        </div>
      </article>
    <?php } ?>
  </ul>
</section>
