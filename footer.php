<footer>
    <div class="container">
        <?php if(is_active_sidebar('footer_sidebar')) : ?>

            <?php dynamic_sidebar('footer_sidebar'); ?>

        <?php endif; ?>
    </div>

        &copy; Cyber Leviathan - 2021
    </footer>
    <?php wp_footer(); ?>
</body>
</html>