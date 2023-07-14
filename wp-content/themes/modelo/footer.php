<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ili
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<footer>
    <div class="container">
        <div class="row row-itens-footer-amabank">

            <div class="col-lg-4 col-12 d-flex align-items-center justify-content-center imagem-logo-footer">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png">
            </div>

            <div class="col-lg-4 col-12 endere-amabank-footer">
                <p>Amabank S/A</p>
                <p>CNPJ/MF n. 35.379.282/0001-64</p>
                <p>Rua Humberto Carta, 96 - Hugo Lange</p>
                <p>80.040-150 - Curitiba - Paraná.</p>
            </div>

            

            <div class="col-lg-4 col-12 endere-contato-amabank-footer">
                <p><span>Contato</span></p>
                <p>contato@amabank.io</p>
                <p>0800-652-1000</p>
                <p>41 3019-7219</p>
            </div>

        </div>
    </div>
 
</footer>


<?php wp_footer(); ?>

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
-->





</body>

</html>