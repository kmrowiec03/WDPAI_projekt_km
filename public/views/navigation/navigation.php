<nav class="Toolbar">
        <div class="Toolbar_container_for_buttons Right-toolbar">
            <div class="Dropdown">
                <button class="DropdownButton">Moje treningi</button>
                <div class="DropdownContent">
                    <a href="#progres">Progres</a>
                    <a href="/trainings">Treningi</a>
                    <a href="#statystyki">Statystyki</a>
                </div>
            </div>
            <div class="Dropdown">
                <button class="DropdownButton">Moje treningi</button>
                <div class="DropdownContent">
                    <a href="#progres">Progres</a>
                    <a href="/treningi">Treningi</a>
                    <a href="#statystyki">Statystyki</a>
                </div>
            </div>
            <div class="Dropdown">
                <button class="DropdownButton">Moje treningi</button>
                <div class="DropdownContent">
                    <a href="#progres">Progres</a>
                    <a href="#treningi">Treningi</a>
                    <a href="#statystyki">Statystyki</a>
                </div>
            </div>
        </div>


        <div class="LogoContainer">
            <a href="/dashboard">
            <img src="public/images/logo.png" alt="Logo firmy" class="Logo-toolbar">
            </a>
        </div>
        
        <div class="Toolbar_container_for_buttons Left-toolbar">
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['email'])): ?>
                <!-- Jeśli użytkownik jest zalogowany, pokaż przyciski wylogowania i profilu -->
                <a href="/profile" class="Toolbar-buttons">Profil</a>
                <a href="/logout" class="Toolbar-buttons">Wyloguj</a>
            <?php else: ?>
                <!-- Jeśli użytkownik nie jest zalogowany, pokaż przyciski logowania i rejestracji -->
                <a href="/login" class="Toolbar-buttons">LOG IN</a>
                <a href="/register" class="Toolbar-buttons">SIGN IN</a>
            <?php endif; ?>
        </div>

</nav>