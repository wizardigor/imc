<?php
$image = '';
if (isset($_GET['peso']) && !empty($_GET['peso']) && isset($_GET['peso']) && !empty($_GET['peso'])) {
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc = $peso / ($altura * $altura);
    $imc = number_format($imc, 2, '.', '');

    if ($imc < 18) {
        $image = 'img/-18.png';
    } elseif ($imc >= 18 && $imc <= 24.9) {
        $image = 'img/18a24-9.png';
    } elseif ($imc >= 25 && $imc <= 29.9) {
        $image = 'img/25a29-9.png';
    } elseif ($imc >= 30 && $imc <= 34.9) {
        $image = 'img/30a34-9.png';
    } elseif ($imc >= 35 && $imc <= 39.9) {
        $image = 'img/35a39-9.png';
    } elseif ($imc >= 40) {
        $image = 'img/+40.png';
    }
} else

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Metas fixo-->
    <meta name="author" content="Igor Gomes">
    <meta name="copyright" content="© 2020 Igor Gomes" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-br, en-US" />
    <meta name="generator" content="Visual Studio Dode" />
    <meta name="description" content="Site projeto pessoal, IMC - Índice de Massa Corporal">
    <meta name="keywords" content="sites, web, desenvolvimento, tecnologia, projeto, artigo, html, index, inicio, IMC, indice, massa, corporal">
    <meta name="rating" content="general" />
    <meta http-equiv="expires" content="0" />
    <meta name="robots" content="all">
    <meta http-equiv='cache-control' content="no-cache">
    <link rel='canonical' href='http://igorgomes.eti.br/projetos/imc/index.php'>

    <!-- limpa chache-->
    <link rel=”stylesheet” href=”/style.css?1422981258” type=”text/css” media=”screen” />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135019833-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-135019833-6');
    </script>


    <!-- Google Adsense -->
    <script data-ad-client='ca-pub-7972995086715645' async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
    <!-- fim Adsense -->

    <link rel="icon" type="imagem/png" href='img/logo.png'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel='stylesheet' href='css/style2.css'>

    <title>Cálculo de IMC</title>
</head>

<body>
    <header>
        <h1>IMC</h1>
        <h4>Índice de Massa Corporal</h4>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class='col-md-4'>
                <div class="col ms-auto">
                    <h3>Faça a medição do seu IMC</h3>
                </div>
                <div class='col-md'>
                    <form action="index.php?" method="get">
                        <input type="number" class='valor' pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso" autocomplete="off" placeholder="Peso" required>
                        <input type="number" class='valor' pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="altura" autocomplete="off" placeholder="Altura" required>
                        <div class='botoes'>
                            <input type="submit" class='botao' name="calcular" value="Calcular">
                            <input type="reset" class='botao' name="limpar" value="Limpar">
                        </div>
                    </form>
                </div>
                <div class='col-md imc'>
                    <?php if (!empty($imc)) echo $imc ?>
                </div>
            </div>

            <div class='col-md-4'>
                <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>

    <footer class="footer">
            <div class='row '>
                <div class='col-md-12 text-center'>
                    <p>
                        Copyright &copy; 2020 All rights reserved | This template is made with <i class='icon-heart color-danger' aria-hidden='true'></i> by <a href='https://igorgomes.eti.br/' target='_blank'>Igor Gomes ETI</a>
                    </p>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>