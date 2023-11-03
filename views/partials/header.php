<header>
    <div class="logo">
        <a href="/"><img src="/public/images/logo.png" alt="logo" class="logo-img"></a>
    </div>
          <section class="menu-container">
            <div class="menulist">
                <input type="checkbox" id="op">-</input>
                <div class="lower">
                <label for="op"><img src="/public/images/hamburger-menu.svg" class="hamburger-menu"/></label>
                </div>
                <div class="overlay overlay-hugeinc">
			    <label for="op"></label>
			<nav>
				<ul>
					<li><a href="/">Home</a></li>
                    <li><a href="/portfolio">Projecten</a></li>
                    <li><a href="/contact">Contact ons</a></li>
                    <li><?php
                    session_start();
                        //Checks if user is logged in
                        if (isset($_SESSION["email"])) {
                            echo '<a href="/dashboard" class="cta-login">Dashboard</a>';
                        } else {
                            echo '<a href="/login" class="cta-login">Log in</a>';
                        }
                            ?></li>

				</ul>
			</nav>
            </div>
            </div>
        </section>
</div>
</header>
