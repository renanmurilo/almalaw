    <?php $home = get_page_by_title('Home'); ?>
    <?php $contato = get_page_by_title('Contato'); ?>
    <?php $idioma = get_locale();?>

    <footer class="footer">

        <div class="box-cookies hide">
			<p class="msg-cookies">“Ao clicar em "Aceitar todos os cookies", concorda com o armazenamento de cookies no seu dispositivo para melhorar a navegação no site, analisar a utilização do site e ajudar nas nossas iniciativas de marketing.  <?php if ($idioma === 'pt_BR') : ?>
                            <a href="/politica-de-privacidade">Política de privacidade</a>
                        <?php elseif ($idioma === 'en_US') : ?>
                            <a href="/privacy-policy">Privacy Policy</a>
                        <?php endif ?>"</p>
			<button class="btn btn__outline__white btn-cookies">Aceitar</button>
		</div>
    </footer>
    
    <!-- Inicio Wordpress Footer -->
	    <?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->
    
    </body>
</html>