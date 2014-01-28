<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
    ?>

    <h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
    <p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>

    <?php return;
  }
}

/* This variable is for alternating comment background */

//$oddcomment = 'comment';

?>


<?php if ( have_comments() ) : ?>

  <div class="wrapper">
    <div class="comments">

      <div class="nbComments">

        <h4 class="subheader" role="heading" aria-level="4" id="comments">&nbsp;<?php comments_number('Pas de commentaire', '1 personne en parle', '% personnes en parlent' );?></h4>
      </div>
    </div>

    <div class="listComments">
      <ol class="comments" id="goComments">
        <?php wp_list_comments('type=comment&callback=myComms'); ?>
      </ol>
    </div>
  </div>
<?php else : // this is displayed if there are no comments so far ?>
  <?php echo '<p class="noComment">Y\'a pas de commentaire ...</p>';?>
  <?php if ('open' == $post->comment_status) : ?>
    <!-- If comments are open, but there are no comments. -->
  <?php else : // comments are closed ?>

    <!-- If comments are closed. -->
    <p class="nocomments">Les commentaires sont fermés !</p>

  <?php endif; ?>
<?php endif; ?>
<div class="wrapper">
  <div class="addComents">
    <?php if ('open' == $post->comment_status) : ?>

      <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>" title="Connectez-vous">connect&eacute;</a> pour laisser un commentaire.</p>

      <?php else : ?>

        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
          
          <?php if ( $user_ID ) : ?>

            <p>Connecté en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" title="Aller sur le profil"><?php echo $user_identity; ?></a> <!--<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connect&eacute; de ce compte">D&eacute;connection <i class="icon-user"></i></a>--></p>

          <?php else : ?>

            <p>
              <label for="author">Nom <?php if ($req) echo "(requis)"; ?></label>
              <input type="text" name="author" required id="author" value="<?php echo $comment_author; ?>" placeholder="Entrer votre nom"  />
            </p>
            <p> 
              <label for="email">Email (ne sera pas publi&eacute;) <?php if ($req) echo "(requis)"; ?></label>
              <input type="email" name="email" placeholder="Entrer votre email" required id="email" value="<?php echo $comment_author_email; ?>"  />
            </p>

          <?php endif; ?>

          <!--<p><small><strong>XHTML:</strong> <?php _e('Vous pouvez utiliser ces tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->
          <p>
            <label for="commentaire">Poster un commentaire</label>
            <textarea id="commentaire comment" required placeholder="Entrer votre commentaire ici" name="comment" rows="5" ></textarea>
          </p>

          <p><input name="submit"  class="small button" value="Poster" type="submit" id="submit" />
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
          </p>

          <?php do_action('comment_form', $post->ID); ?>

        </form>
        <div class="formRep" id="respond">
          <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
          
            <?php if ( $user_ID ) : ?>

              <p>Connecté en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" title="Aller sur le profil"><?php echo $user_identity; ?></a> <!--<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connect&eacute; de ce compte">D&eacute;connection <i class="icon-user"></i></a>--></p>

            <?php else : ?>
          	
              <p>
                <label for="authorRep">Nom <?php if ($req) echo "(requis)"; ?></label>
                <input type="text" name="author" required id="authorRep" value="<?php echo $comment_author; ?>" placeholder="Entrer votre nom"  />
              </p>
              <p> 
                <label for="emailRep">Email (ne sera pas publi&eacute;) <?php if ($req) echo "(requis)"; ?></label>
                <input type="email" name="email" placeholder="Entrer votre email" required id="emailRep" value="<?php echo $comment_author_email; ?>"  />
              </p>

            <?php endif; ?>

            <p>
              <label for="commentRep">Poster un commentaire</label>
              <textarea  required id="commentRep" placeholder="Entrer votre commentaire ici" name="comment" rows="1" ></textarea>
            </p>

            <p><input name="submit" class="small button" value="Poster" type="submit" id="submit" />
              <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" id="comment_post_ID"/>
              <input type="hidden" name="comment_parent" value="" id="comment_parent"/>
              
            </p>

            <?php do_action('comment_form', $post->ID); ?>
            <a href="javascript:void" title="Fermer la fenêtre" class="delete">Fermer</a>
          </form>

        </div>
        
      </div>
    </div>

  <?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>