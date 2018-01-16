<header>
    <h1>Meu site</h1>
    <nav>
        <ul>
            <li <?php
                if ($page == "home") {
                    echo "class='active'";
                }
            ?>><a href="home.php">Homepage</a></li>
            <li <?php
                if ($page == "produtos") {
                    echo "class='active'";
                }
            ?>><a href="produtos.php">Produtos</a></li>
            <li <?php
                if ($page == "serviços") {
                    echo "class='active'";
                }
            ?>><a href="servicos.php">Serviços</a></li>
            <li <?php
                if ($page == "sobre") {
                    echo "class='active'";
                }
            ?>><a href="sobre.php">Sobre nós</a></li>
            <li <?php
                if ($page == "contato") {
                    echo "class='active'";
                }
            ?>><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
</header>