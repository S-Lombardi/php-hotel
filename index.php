<?php
    include __DIR__.'/partials/hotels.php';


    if(isset($_GET['parking'])){
       
        //variabile per il valore parking selezionato nella select
        $parking_selected = $_GET['parking'];

        if($parking_selected != "tutti") {
        //converto il valore inserito dall'utente in un booleano
            $parking_selected = filter_var($parking_selected,FILTER_VALIDATE_BOOLEAN);
            echo $parking_selected;
            //creo un array vuoto in cui inserire gli array associativi si hotels
            $hotel_with_park = [];

            foreach($hotels as $item){
                //Se il valore selezionato è uguale a quello ciclato,
                // lo inserisco nell' array
                if($parking_selected == $item ['parking']){
                    $hotel_with_park []= $item;

                }
                
            };

            $hotels = $hotel_with_park;
        }
        
    }

    
    
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
        <!-- FORM -->
        <div class="container">
            <form action="index.php" method="GET">
                <!-- Select parcheggio -->
                <select  class="form-select mb-5 " name="parking" >
                    <option value="tutti" selected>Parcheggio</option>
                    <option value="yes">Hotel con parcheggio</option>
                    <option value="no">Hotel senza parcheggio</option>
                </select>
                <input type="submit">
                <!-- Fine Select parcheggio -->
            </form>
        </div>
        <!-- FINE FORM -->


        <!-- TABELLA -->
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
        <!-- FINE TABELLA -->
    </body>
</html>