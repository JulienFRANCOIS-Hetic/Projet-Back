<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>

<main>
<section class="sign">
        <form class="signup" method="post">
            <h1>Connectez-vous</h1>
            <?= $content; ?>
            <?php checkFlashMessage(); ?>
            <input type="email" name="mailconnect" id="name" class="inpt" placeholder="Your mail">      
            <input type="password" name="mdpconnect" id="password" class="inpt" placeholder="Your password">
            <div class="submit-wrap">
                <input type="submit" value="Se connecter" name="formconnexion" class="submit">
            </div>
        </form>
</section>
</main>
<hr>
<?php include 'config/template/footer.php'; ?>