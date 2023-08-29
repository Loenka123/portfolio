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
            <a href="projecten/index.php" class="projecten">Projecten</a>
            <a href="../contact/index.html" class="contact">Contact</a>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Project</th>
                <th>Datum</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once "../db/db.php";
            $statement = $db->query("SELECT * FROM projecten");
            while ($row = $statement->fetch()) {
            ?>
                <tr>
                    <th><?= $row['project']?></th>
                    <th><?= $row['datum']?></th>
                    <th><?= $row['link']?></th>
                </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>