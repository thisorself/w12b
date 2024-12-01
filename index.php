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
    $estate_address = "test_address";
    $estate_property_type = "Будинок";
    $estate_deal_type = "Продаж";
    $estate_area = 11;
    $estate_description = "test_description";
    $estate_owner_fullname = "test_fullname";
    $estate_owner_telephone = "test_telephone";
    $estate_owner_email = "test_email";
    $estate_price = 111;

    $query = "INSERT INTO real_estates (id, address, property_type, deal_type, area, description,
                                        owner_fullname, owner_telephone, owner_email, price)
              VALUES (:id, :address, :property_type, :deal_type, :area, :description,
                      :owner_fullname, :owner_telephone, :owner_email, :price)";
    $statement = $pdo->prepare($query);

    $statement->bindParam(':id', $estate_id);
    $statement->bindParam(':address', $estate_address);
    $statement->bindParam(':property_type', $estate_property_type);
    $statement->bindParam(':deal_type', $estate_deal_type);
    $statement->bindParam(':area', $estate_area);
    $statement->bindParam(':description', $estate_description);
    $statement->bindParam(':owner_fullname', $estate_owner_fullname);
    $statement->bindParam(':owner_telephone', $estate_owner_telephone);
    $statement->bindParam(':owner_email', $estate_owner_email);
    $statement->bindParam(':price', $estate_price);

    $statement->execute();
    ?>
</body>

</html>