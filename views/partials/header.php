<header>
    <div class="logo">
        <a href="/"><img src="/public/images/logo.png" alt="logo" class="logo-img"></a>
    </div>
    <nav>
        <!-- <section class="menu-container">
            <div class="menulist">
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/portfolio">Projecten</a></li>
                    <li><a href="/contact">Contact ons</a></li>
                </ul>
            </div>
        </section> -->
        <section class="top-nav">
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/portfolio">Projecten</a></li>
                <li><a href="/contact">Contact ons</a></li>
            </ul>
        </section>
        <div class="cta-login-btn">
            <?php
            session_start();

            //Checks if user is logged in
            if (isset($_SESSION["email"])) {
                echo '<a href="/dashboard" class="cta-login">Dashboard</a>';
            } else {
                echo '<a href="/login" class="cta-login">Log in</a>';
            }
            ?>
        </div>
    </nav>
</header>