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

$oddcomment = 'comment';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
    <div class="wrapper">
        <div class=" comments">

            <div class="nbComments">

                <h3 class="subheader" id="comments">&nbsp;<?php comments_number('Pas de commentaire', '1 personne en parle', '% personnes en parlent' );?></h3>
            </div>
        </div>

        <div class="listComments">
            <ol class="comments" id="goComments">
                <?php foreach ($comments as $comment) : ?>

                    <li class="comment" id="comment-<?php comment_ID() ?>">

                        <div class="comment-header">
                            <div class="photoAuthor">
                              <?php  echo get_avatar( get_the_author_id(), $size = '60' );?>
                          </div> 
                          <div class="vcardComment">
                           <p class="comment-name" ><?php comment_author_link() ?></p> <a class="comment-date" href="#comment-<?php comment_ID() ?>" title="Cibler le commentaire"><?php comment_date('d M Y') ?> <?php _e('&agrave;');?> <?php comment_time('G:i') ?></a> <?php edit_comment_link('Modifier le commentaire','',''); ?>
                           <?php  echo get_comment_reply_link(); ?>
                           <?php if ($comment->comment_approved == '0') : ?>
                               <em><?php _e('Votre commentaire est en cours de mod&eacute;ration'); ?></em>
                           <?php endif; ?>
                       </div>

                       <div class="textComment">
                       <?php comment_text(); ?>
                       </div>
                   </li>

                   <?php /* Changes every other comment to a different class */
                   if ('comment' == $oddcomment) $oddcomment = '';
                   else $oddcomment = 'comment';
                   ?>

               <?php endforeach; /* end for each comment */ ?>
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
                        <label for="author"><small>Nom <?php if ($req) echo "(requis)"; ?></small></label></p>

                        <p><input type="text" name="author" required id="author" value="<?php echo $comment_author; ?>" placeholder="Entrer votre nom" size="40" tabindex="1" />
                            <label for="email"><small>email (ne sera pas publi&eacute;) <?php if ($req) echo "(requis)"; ?></small></label></p>
                            <p><input type="email" name="email" placeholder="Entrer votre email" required id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
                                
                                <label for="url"><small>Site Web</small></label></p>
                                <p><input type="url" name="url" placeholder="Entrer votre site web" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />


                                <?php endif; ?>

                                <!--<p><small><strong>XHTML:</strong> <?php _e('Vous pouvez utiliser ces tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->
                                <p>
                                <label for="commentaire">Poster un commentaire</label>
                                <textarea id="commentaire comment" placeholder="Entrer votre commentaire ici" name="comment"  cols="60" rows="5" tabindex="4"></textarea>
                                </p>

                                <p><input name="submit"  class="small button" value="Poster" type="submit" id="submit" tabindex="5" />
                                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                                </p>

                                <?php do_action('comment_form', $post->ID); ?>

                            </form>
                        </div>
                    </div>
                <?php endif; // If registration required and not logged in ?>

            <?php endif; // if you delete this the sky will fall on your head ?>