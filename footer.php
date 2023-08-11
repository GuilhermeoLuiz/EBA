<?php wp_footer(); ?>
<footer>
        <?php if (is_active_sidebar('footer')) : ?>
		<div class="widget-area">
                	<?php dynamic_sidebar('footer'); ?>
                </div>
        <?php endif; ?>
        </footer>
</body>
</html>
