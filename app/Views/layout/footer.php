<section class="cta">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
        <!-- Grid container -->
        <div class="container p-3 pb-3">
            <!-- Section: CTA (Call to Action) -->
            <section class="cta-section">
                <!-- Check if user is logged in -->
                <?php if (logged_in()) : ?>
                    <!-- Button to log out -->
                    <a type="button" class="btn btn-outline-light btn-rounded" href="/logout" role="button">Logout</a>
                <?php else : ?>
                    <!-- If user is not logged in, display sign up and log in options -->
                    <div class="cta-container">
                        <div class="cta-left">
                            <span class="me-3">Register for free</span>
                            <a type="button" class="btn btn-outline-light btn-rounded" href="/register">Sign up!</a>
                        </div>
                        <div class="cta-right">
                            <span class="me-3">Already Have an Account?</span>
                            <a type="button" class="btn btn-outline-light btn-rounded" href="/login">Log In!</a>
                        </div>
                    </div>
                <?php endif; ?>
            </section>
            <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © <?= date("Y"); ?> Copyright:
            <a class="text-white" href="https://adilsputra.me/">adilsputra.me</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</section>