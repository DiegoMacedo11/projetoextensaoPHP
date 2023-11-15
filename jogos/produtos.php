<?php
include "header.php";
include "dados.php";

//print_r($produtos);exit;
?>
<main>
    <div class="grid">
        <?php
       
        foreach ($produtos as $produto) {
        ?>
            <div class="coluna2">
                <img src="imagens/<?= $produto["imagem"] ?>" alt="<?= $produto["nome"] ?>">
                <p>
                    <strong><?= $produto["nome"] ?></strong>
                    <br>
                    <?= $produto["valor"] ?>
                </p>

                <p>
                    <a href="produto.php?id=<?= $produto["id"] ?>">Detalhes</a>
                </p>
            </div>
        <?php
         
        }

        ?>

    </div>
</main>

<?php
include "footer.php";
?>
    </div>
</main>
