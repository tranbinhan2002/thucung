<footer id="footer">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('sidebar-footer')): ?>
                <div class="container">
                    <div class="row">
                    <?php dynamic_sidebar('sidebar-footer'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="absolute-widgets">
            <div class="container">
                <div class="copyright-footer text-center">
                    &copy Team 12
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>