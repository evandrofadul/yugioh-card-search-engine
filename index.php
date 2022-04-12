<?php
    require 'misc/header.php';
    $siteName = 'Yu-Gi-Oh! Buscador de Cartas';
?>
<title><?php
    if(isset($_REQUEST['search']))
    {
        $title = $_REQUEST['search'];

        if ($title == null){
            echo "Carta não encontrada - $siteName";
        }
        else {
            echo "$title - $siteName";
        }
    }
    else {
        echo "$siteName";
    }
?></title>
</head>
<body>
    <div class="container-xxl">
        <a href="http://localhost/"><img src="assets/images/logo.svg" class="mx-auto d-block" style="padding: 4% 0 30px"/></a>

        <!-- BOTÃO PARA GERAR CARTAS ALEATÓRIAS
        <div class="d-grid col-1 mx-auto">
            <form method="get">
                <button type="submit" name="card" value="Random" class="btn btn-success btn-lg">Aleatório</button>
            </form>
        </div> -->

        <form class="row justify-content-md-center align-items-center" method="get">
            <div class="col-4">
                <input
                type='text'
                name='search'
                placeholder='Pesquisar por Cartas Yu-Gi-Oh!'
                class='flexdatalist form-control'
                data-data='complete.json'
                data-search-in='name'
                data-selection-required='true'
                data-focus-first-result='true'
                data-min-length='1'
                data-value-property='iso2'
                data-search-contain='false'/>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>

        <?php
            require 'misc/tools.php';

            if (isset($_REQUEST['search']))
            {
                $url = 'http://localhost/cardinfo.php?name=' . urlencode($_REQUEST['search']);
                $url_headers = @get_headers($url);
            
                if(strpos($url_headers[0],'200'))
                {
                    cardInfo($url);
                }
                else {
                    echo '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Nenhuma carta encontrada.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }
            }
            elseif (isset($_REQUEST['card'])) 
            {
                randomCard();
            }
        ?>

    </div>
<?php require 'misc/footer.php'; ?>