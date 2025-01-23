<nav class="Toolbar">
        <div class="Toolbar_container_for_buttons Left-toolbar">
            <button class="HamburgerButton">
                <i class="fa-solid fa-bars icon_toolbar"></i>
            </button>
            <a href="/trainingPlans" class="toolbar_button">Treningi</a>
            <a href="/articles" class="toolbar_button">Artykuły</a>
        </div>
        <div class="DropdownMenu">
            <a href="/trainingPlans" class="toolbar_button">Treningi</a>
            <a href="/articles" class="toolbar_button">Artykuły</a>
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['email'])): ?>
                <a href="/profile" class="toolbar_button">Profil</a>
                <a href="/logout" class="toolbar_button">Wyloguj</a>
            <?php else: ?>
                <a href="/login" class="toolbar_button">Zaloguj sie</a>
                <a href="/register" class="toolbar_button">Zarejestruj sie</a>
            <?php endif; ?>
        </div>

        <div class="LogoContainer">
            <a href="/dashboard">
            <img src="/public/images/logo.png" alt="Logo firmy" class="Logo-toolbar">
            </a>
        </div>
        
        <div class="Toolbar_container_for_buttons Right-toolbar">
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['email'])): ?>
                <a href="/profile" class="toolbar_button">
                    <i class="fa-solid fa-user icon_toolbar"></i>
                </a>
                <a href="/logout" class="toolbar_button">
                    <i class="fa-solid fa-arrow-right-from-bracket icon_toolbar"></i>
                </a>
            <?php else: ?>
                <a href="/login" class="toolbar_button">Zaloguj sie</a>
                <a href="/register" class="toolbar_button">Zarejestruj sie</a>
            <?php endif; ?>
        </div>
</nav>
