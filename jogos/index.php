<?php
include "header.php";
include "dados.php";
?>

<main>
    <section class="introduction">
        <div class="container">
            <h1>Bem-vindo ao Mundo Inclusivo</h1>
            <p>
                No "Mundo Inclusivo", celebramos a diversidade e promovemos a inclusão, com destaque especial para o espectro autista.
                Descubra histórias inspiradoras, aprenda sobre diferentes perspectivas e explore o incrível potencial presente em nossa comunidade global.
                Junte-se a nós enquanto desvendamos narrativas emocionantes e cultivamos um ambiente que promove a aceitação, a empatia e a valorização das diferenças.
            </p>
        </div>
    </section>

    <div class="grid2">
        <?php
        $i = 1;
        shuffle($produtos);
        foreach ($produtos as $produto) {
        ?>
            <div class="coluna">
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
            $i++;
            if ($i > 4) break;
        }
        ?>
    </div>
</main>

<?php
include "footer.php";
?>
