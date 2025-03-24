


<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('footer-widget')) : ?>
                <?php dynamic_sidebar('footer-widget'); ?>
            <?php endif; ?>
        </div>
        <div class="footer-info">
            <p>&copy; <?php echo date('Y'); ?> Digital Marketing. All rights reserved.</p>
        </div>
    </div>
    <div class="social-links">
    <a href="https://facebook.com/yourcompany" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://twitter.com/yourcompany" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com/yourcompany" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://linkedin.com/company/yourcompany" target="_blank"><i class="fab fa-linkedin"></i></a>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
