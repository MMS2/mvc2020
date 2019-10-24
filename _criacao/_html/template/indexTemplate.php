<!DOCTYPE html>
<html lang="pt-br">
<!-- 
 * Demetrios Felipe, demtriosfelipe@outlook.com
 * instagram: dmobass
 * facebook: demetriosf.felipe
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TESTE MVC</title>
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>       
    <?php AjudaCarregaHeader::js(['script', 'filtro']);
    AjudaCarregaHeader::css(['style']);
    ?>

</head>

<body>
    <!-- HEADER -->
    <?php $this->html('./template/headerTemplate');
    ?>
    <div class="container">
        <div class="row">
            <!-- SIDEBAR -->
            <?php $this->html('./template/sideTemplate'); ?>
            <!-- MAIN -->
            <div class="col x-10 main">
                <?php $this->html($conteudo) ?>
            </div>
        </div>
    </div>
</body>

</html>