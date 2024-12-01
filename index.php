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

    $estate_id = 6;

    $query = "DELETE FROM real_estates WHERE id = :id";
    $statement = $pdo->prepare($query);

    $statement->bindParam(':id', $estate_id);
    $statement->execute();

    $estate_id = 7;
    $statement->bindParam(':id', $estate_id);
    $statement->execute();

    print "OK.";
    ?>
</body>

</html>