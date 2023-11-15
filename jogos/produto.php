<?php 
include "header.php";
include "dados.php";

$id = $_GET["id"]; //Esse id vem da URL produto.php?id=2

?>
<main>
    <div class="grid3">
        <div class="coluna3">
            <img src="imagens/<?=$produtos[$id]["imagem"]?>" alt="<?=$produtos[$id]["nome"]?>">
        </div>
        <div class="coluna4">
            <h2><?=$produtos[$id]["nome"]?></h2>
            <p><?=$produtos[$id]["descricao"]?></p>
        </div>
    </div>
</main>
<?php 
include "footer.php";
?>