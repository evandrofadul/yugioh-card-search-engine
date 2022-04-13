<?php
require_once('misc/header.php');
?>

<body>
    <div class="container-xxl">
        <a href="https://yugioh-card-search-engine.herokuapp.com/"><img src="assets/images/logo.svg" class="mx-auto d-block" style="padding: 4% 0 30px" /></a>

        <!-- BOTÃO PARA GERAR CARTAS ALEATÓRIAS
        <div class="d-grid col-1 mx-auto">
            <form method="get">
                <button type="submit" name="card" value="Random" class="btn btn-success btn-lg">Aleatório</button>
            </form>
        </div> -->

        <form class="row justify-content-md-center align-items-center" method="get">
            <div class="col-4">
                <input type='text' name='search' placeholder='Pesquisar por Cartas Yu-Gi-Oh!' class='flexdatalist form-control' data-data='complete.json' data-search-in='name' data-selection-required='true' data-focus-first-result='true' data-min-length='1' data-value-property='iso2' data-search-contain='false' />
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>

        <?php
        require 'misc/tools.php';

        if (isset($_REQUEST['search'])) {
            $url = 'https://yugioh-card-search-engine.herokuapp.com/cardinfo.php?name=' . urlencode($_REQUEST['search']);
            $url_headers = @get_headers($url);

            echo strpos($url_headers[0], '200') ? cardInfo($url) : cardNotFound();
        } elseif (isset($_REQUEST['card'])) {
            randomCard();
        }
        ?>

    </div>
<?php require 'misc/footer.php'; ?>