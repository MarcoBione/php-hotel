<?php
//array
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$hotelsListFiltered = [];

$selected = $_GET['value'];
echo $selected;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>


    <!-- cicle stamp for all data -->
    <!-- <div>
        <?php foreach ($hotels as $hotel) {
            var_dump($hotel);
        }
        ?>
    </div> -->


    <section class="container">

        <form class="row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">

            <select class="form-select" aria-label="Default select example" name="value">
                <option value="all" selected>Tutti</option>
                <option value="parking">Parcheggio</option>
            </select>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Cerca..</button>
            </div>
        </form>

    </section>

    <!-- table -->
    <section>
        <div class="container py-5">
            <table class="table table-striped">
                <!-- category titles -->
                <thead>
                    <tr>
                        <th scope="col">Hotel</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <!-- cicle stamp -->
                    <?php foreach ($hotels as $hotel) { ?>

                        <tr>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td><?php
                                if ($hotel['parking']) {
                                    echo 'Sì';
                                } else {
                                    echo 'No';
                                } ?>
                            </td>
                            <td><?php echo $hotel['vote'] ?></td>
                            <td><?php echo $hotel['distance_to_center'] ?> km</td>
                        </tr>

                    <?php } ?>
                    <!-- end cicle stamp -->
                </tbody>

            </table>
        </div>
    </section>
    <!-- end table -->


</body>

</html>