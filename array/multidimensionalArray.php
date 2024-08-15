<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Multidimensional Array</title>
</head>
<body>

<?php
$contacts = array(
    array(
        "name" => "Md Sium",
        "email" => "mdsiumcse@mail.com",
    ),
    array(
        "name" => "Mohammed hasan",
        "email" => "hasan@mail.com",
    ),
    array(
        "name" => "Hprry",
        "email" => "hprry@mail.com",
    )
);
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
?>

</body>
</html>