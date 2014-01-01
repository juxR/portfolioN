<?php 
/*
Template Name: Contact
*/
?>
<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

    //Check to see if the honeypot captcha field was filled in
  /*  if(trim($_POST['checking']) !== '') {
        $captchaError = true;
    } else {*/

        //Check to make sure that the name field is not empty
        if(trim($_POST['nom']) === '') {
            $nameError = 'Indiquez votre nom.';
            $hasError = true;
        } else {
            $name = trim($_POST['nom']);
        }
        
        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['mail']) === '')  {
            $emailError = 'Indiquez une adresse e-mail valide.';
            $hasError = true;
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['mail']))) {
            $emailError = 'Adresse e-mail invalide.';
            $hasError = true;
        } else {
            $email = trim($_POST['mail']);
        }

        //Check to make sure comments were entered  
        if(trim($_POST['message']) === '') {
            $commentError = 'Entrez votre message.';
            $hasError = true;
        } else {
            if(function_exists('stripslashes')) {
                $comments = stripslashes(trim($_POST['message']));
            } else {
                $comments = trim($_POST['message']);
            }
        }

        //If there is no error, send the email
        if(!isset($hasError)) {
            
            $emailTo = get_field('mail');
            $subject = 'Formulaire de contact de '.$name;
            $sendCopy = trim($_POST['sendCopy']);
            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
            $headers = 'De : mon site <'.$emailTo.'>' . "\r\n" . 'Répondre à : ' . $email;
            
            mail($emailTo, $subject, $body, $headers);

           /* if($sendCopy == true) {
                $subject = 'Formulaire de contact';
                $headers = 'De : <noreply@roland.com>';
                mail($email, $subject, $body, $headers);
            }*/

            $emailSent = true;

        }
    //}
    } ?>

    <?php get_header();?>
    <h1 aria-level="1" role="heading" class="section">Souhaitez-vous me contacter ?</h1>
    <?php include('nav.php'); ?>
    <section role="main" id="main" class="main">
        <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
            <section class="form wrapper" role="form">
                <h3 class="titleIndex" aria-level="3" role="heading">Me contacter</h3>
                <hr/>
                <?php if(isset($hasError)) : ?>
                    <p class="errors">Une erreur est survenue lors de l'envoi du formulaire.</p>
                <?php endif; ?>
                <?php if(isset($emailSent) && $emailSent == true) :?>
                    <p class="success">Message envoyé !</p>

                <?php else: ?>
                    <form action="<?php the_permalink(); ?>" role="form" method="post">
                        <fieldset>
                            <label for="nom">Entrez votre nom</label>
                            <input required type="text" id="nom"  name="nom" placeholder="Votre nom">
                            <?php if($nameError != '') :?>
                                <span class="errors"><?=$nameError;?></span> 
                            <?php endif; ?>

                            <label for="mail">Entrez votre adresse e-mail</label>
                            <input required type="email" id="mail" name="mail" placeholder="Votre e-mail">
                            <?php if($nameError != '') :?>
                                <span class="errors"><?=$emailError;?></span> 
                            <?php endif; ?>

                            <label for="message">Ecrivez votre message</label>
                            <textarea name="message" id="message" required></textarea>
                            <?php if($nameError != '') :?>
                                <span class="errors"><?=$commentError;?></span> 
                            <?php endif; ?>
                            <input type="hidden" name="submitted" id="submitted" value="true" />
                            <input type="submit" value="Envoyer">
                        </fieldset>
                    </form>
                <?php  endif; ?>
            </section>
            <section class="map wrapper">
                <h3 class="titleIndex" aria-level="3" role="heading">Où me trouver</h3>
                <hr/>
                <div id="gmap">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=50.4329476,4.855422999999973&zoom=13&size=600x300&maptype=roadmap
                    &markers=color:blue%7Clabel:S%7C50.4329476,4.855422999999973&sensor=false" alt="">
                </div>
                <div role="form" class="control-map">
                    <label for="map" id="adress" data-adress="<?php the_field('adresse'); ?>">Et vous, vous habitez où?</label>
                    <input type="text" name="map" value="" id="map" placeholder="Rue Basse-Montagne 40, 5100 Wépion, Belgique">
                    <button id="btn" value="Me localiser">Me localiser</button>
                </div>

            </section>

        </section>
        <?php include('footer.php'); ?>
    </section>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=false"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/map-ck.js"></script>
    <?php 
    get_footer(); ?>