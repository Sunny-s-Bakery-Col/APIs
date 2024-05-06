<nav class="navbar">
    <div class="navbar-brand">
        <a href="<?php echo APP_URL;?>" class="navbar-item">
            <img src="<?php echo APP_URL;?>app/views/img/favicon.ico" alt="Sunny's Bakery logo" width="35" height="35">
        </a>
        <a class="navbar-burger" role="button" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a href="<?php echo APP_URL;?>dashboard" class="navbar-item">Inicio</a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    API's
                </a>

                <div class="navbar-dropdown">
                    <a href="<?php echo APP_URL;?>users" class="navbar-item">Usuarios</a>
                    <a href="<?php echo APP_URL;?>products" class="navbar-item">Productos</a>
                    <a href="<?php echo APP_URL;?>orders" class="navbar-item">Pedidos</a>
                    <a href="" class="navbar-item">Finanzas</a>
                </div>
            </div>
        </div>
    </div>
</nav>