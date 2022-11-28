<?php
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


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotel</title>
    <style>
        .description {
            width: max-content;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center m-4">Hotels</h1>
        <table class="table table-dark table-md">
            <tbody>
                <tr>
                    <th>
                    <td>
                        <div class="name">Name:</div>
                        <div class="description">Description:</div>
                        <div class="parking">Parking:</div>
                        <div class="vote">Vote:</div>
                        <div class="distance">Distance to center:</div>
                    </td>

                    </th>
                    <?php foreach ($hotels as $hotel) : ?>
                        <th>
                            <div class="name"><?php echo $hotel['name'] ?></div>
                            <div class="description"><?php echo $hotel['description'] ?></div>
                            <div class="parking">
                                <?php
                                if ($hotel['parking']) {
                                    echo 'This Hotel has parking';
                                } else {
                                    echo 'No parking';
                                } ?>
                            </div>
                            <div class="vote"><?php echo $hotel['vote'] ?></div>
                            <div class="distance"><?php echo $hotel['distance_to_center'] ?></div>

                        </th>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>