<?php
require_once('misc/header.php');
?>

<body>

    <div class="container-xxl">
        <a href="https://yugioh-card-search-engine.herokuapp.com/"><img src="assets/images/logo.svg" class="mx-auto d-block" style="padding-top: 3%" /></a>

        <form method="get">
            <center><button type="submit" name="card" value="Random" class="btn btn-dark btn" style="margin: 18px auto 20px auto">Gerar Carta Aleatória</button></center>
        </form>

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
            echo randomCard();
        }
        ?>

    </div>
<?php require 'misc/footer.php'; ?>
