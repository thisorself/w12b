<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $estate_id = 9;
    $estate_address = "new_test_address";
    $estate_description = "new_test_description";

    $query = "UPDATE real_estates SET address = :address, description = :description WHERE id = :id";
    $statement = $pdo->prepare($query);

    $statement->bindParam(':address', $estate_address);
    $statement->bindParam(':description', $estate_description);
    $statement->bindParam(':id', $estate_id);

    $statement->execute();
    print "OK.";
    ?>
</body>

</html>