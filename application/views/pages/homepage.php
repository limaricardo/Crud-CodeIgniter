<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <h1 style="font-size: <?= $size ?>px">FONTE DO TITULO</h1>
        </header>

        <article>
            <p><?= $article ?></p>
        </article>

        <section>
            <div style="border: 1px solid black">
                <header>
                    <h2><?= $vote[0]["title_vote"] ?></h2>
                </header>
                <div>
                    <p><?= $vote[0]["subtitle_vote"] ?></p>
                    <form action="" method="post">
                        <input type="radio" id="option_1" name="vote" value="1">
                        <label for="option_1"><?= $vote[0]["option_1"] ?></label><br>
                        <input type="radio" id="option_2" name="vote" value="2">
                        <label for="option_2"><?= $vote[0]["option_2"] ?></label><br>
                    </form>
                </div>
            </div>
        </section>

        <div>
            <a class="nav-link" href="<?= base_url('') ?>gerenciador">
            Retornar ao Gerenciador
            </a>
        </div>
    </main>
    
    
    
</body>
</html>