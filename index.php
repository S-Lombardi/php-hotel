<?php
    include __DIR__.'/partials/hotels.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>php Hotel</title>
    </head>
    <body>

        <div class="container">

            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome Hotel</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                <?php foreach($hotels as $hotel) {?>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <?php echo $hotel ['name'] ?>
                            </td>
                            <td>
                                <?php echo $hotel ['description'] ?>
                            </td>
                            <td>
                                <?php echo ($hotel ['parking'] ==true) ? "si" : "no" ?>
                            </td>
                            <td>
                                <?php echo $hotel ['vote'] ?>
                            </td>
                            <td>
                                <?php echo $hotel ['distance_to_center'] ?>
                            </td>
                        </tr>
                    </tbody>
                <?php }?>
            </table>
        </div>
    </body>
</html>