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

    $query = $pdo->prepare("SELECT * FROM real_estates WHERE id = :id");
    $query->execute(['id' => 5]);
    $row = $query->fetch(PDO::FETCH_OBJ);
    print $row->id . "<br>";
    print $row->description . "<br>";
    print $row->price . "<br>";
    ?>
</body>

</html>