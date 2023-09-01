<?php wp_footer(); ?>
<footer>
        <?php if (is_active_sidebar('footer')) : ?>
		<div class="widget-area">
                        Feito por Guilherme e Thales
                	<?php dynamic_sidebar('footer'); ?>
                </div>
        <?php endif; ?>
        </footer>
</body>
</html>
