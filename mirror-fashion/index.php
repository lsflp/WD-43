<?php 
    $cabecalho_title="Mirror Fashion";
    include("cabecalho.php"); 
?>

    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
        </section>

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas</a></li>
                    <li><a href="#">Acessórios  </a></li>
                </ul>
            </nav>
        </section>

        <img src="img/destaque-home.png" alt="Promoção: Big City">

        <div class="container paineis">
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png" alt="">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png" alt="">
                                <figcaption>T-Shirt Skull por R$ 39,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png" alt="">
                                <figcaption>Wool Cardigan por R$ 109,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png" alt="">
                                <figcaption>Bubble Jacket por R$ 159,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png" alt="">
                                <figcaption>Regata Esportiva por R$ 29,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura9.png" alt="">
                                <figcaption>Camisa Xadrez por R$ 39,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostra mais</button>
            </section>

            <section class="painel mais-vendidos">
                    <h2>Mais Vendidos</h2>
                    <ol>
    
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura10.png" alt="">
                                    <figcaption>Blusa Leve por R$ 129,90</figcaption>
                                </figure>
                            </a>
                        </li>
    
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura11.png" alt="">
                                    <figcaption>Green Shorts por R$ 49,90</figcaption>
                                </figure>
                            </a>
                        </li>
    
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura12.png" alt="">
                                    <figcaption>Camisa Leve por R$ 39,90</figcaption>
                                </figure>
                            </a>
                        </li>
    
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura13.png" alt="">
                                    <figcaption>Camisa Leve por R$ 39,90</figcaption>
                                </figure>
                            </a>
                        </li>
    
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura14.png" alt="">
                                    <figcaption>Camisa Leve por R$ 39,90</figcaption>
                                </figure>
                            </a>
                        </li>
    
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura15.png" alt="">
                                    <figcaption>Vestido por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                    </ol>
                    <button type="button">Mostra mais</button>
                </section>
            </div>
        </div>

        <?php include("rodape.php"); ?>

        <script src="js/jquery.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>