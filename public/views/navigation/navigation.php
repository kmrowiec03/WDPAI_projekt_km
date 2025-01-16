<nav class="Toolbar">
        <div class="Toolbar_container_for_buttons Right-toolbar">
            <button class="HamburgerButton">
                <i class="fa-solid fa-bars icon_toolbar"></i>
            </button>
            <div class="Dropdown">
                <button class="DropdownButton">Moje treningi</button>
                <div class="DropdownContent">
                    <a href="#progres">Progres</a>
                    <a href="/trainings">Treningi</a>
                    <a href="/articles">Zobacz artykuły</a>
                    <a href="#statystyki">Statystyki</a>
                </div>
            </div>

        </div>
        <div class="DropdownMenu">
            <a href="#progres">Progres</a>
            <a href="/trainings">Treningi</a>
            <a href="#statystyki">Statystyki</a>
        </div>

        <div class="LogoContainer">
            <a href="/dashboard">
            <img src="public/images/logo.png" alt="Logo firmy" class="Logo-toolbar">
            </a>
        </div>
        
        <div class="Toolbar_container_for_buttons Left-toolbar">
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['email'])): ?>
                <a href="/profile" class="Toolbar-buttons">
                    <i class="fa-solid fa-user icon_toolbar"></i>
                </a>
                <a href="/logout" class="Toolbar-buttons">
                    <i class="fa-solid fa-arrow-right-from-bracket icon_toolbar"></i>
                </a>
            <?php else: ?>
                <a href="/login" class="Toolbar-buttons">LOG IN</a>
                <a href="/register" class="Toolbar-buttons">SIGN IN</a>
            <?php endif; ?>
        </div>
</nav>
