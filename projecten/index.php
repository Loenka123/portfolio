<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio - Projecten</title>
</head>
<body>
    <div class="header">
        <p class="portfolio">Portfolio</p>
        <div class="buttons">
            <a href="../index.html" class="home">Home</a>
            <a href="../about/index.html" class="about">About</a>
            <a href="projecten/index.php" class="projecten">Projecten</a>
            <a href="../contact/index.html" class="contact">Contact</a>
        </div>
    </div>
    <h1 class="titel">Projecten</h1>
    <p class="ondertitel">Luca Heintjes</p>
    <div id="projecten">
        <div class="row">
        <?php
        require_once "../db/db.php";
        $statement = $db->query("SELECT * FROM projecten");
        $counter = 0;
        while ($row = $statement->fetch()) {
            if ($counter % 3 == 0 && $counter > 0) {
                ?>
                </div><div class="row">
                <?php
            }
            ?>
            <div class="column">
                <div class="project-container">
                    <a href="<?= $row['link']?>">
                    <div class="afbeelding-wrapper">
                        <img src="<?= $row['foto']?>" alt="<?= $row['title']?>" draggable="false">
                    </div>
                    </a>
                    <div class="project-naam"><?= $row['project']?></div>
                    <div class="project-beschrijving"><?= $row['beschrijving']?></div>
                </div>
            </div>
            <?php
            $counter++;
        }
        ?>
        </div>
    </div>
</body>
</html>