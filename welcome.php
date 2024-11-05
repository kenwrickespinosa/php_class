<?php

// Create an object of FormInfoClass and set the data
$formInfo = new FormInfoClass();
$formInfo->setLastname($_POST['lastname']);
$formInfo->setFirstname($_POST['firstname']);
$formInfo->setMiddleInitial($_POST['middleInitial']);
$formInfo->setAge($_POST['age']);
$formInfo->setContact($_POST['contact']);
$formInfo->setEmail($_POST['email']);
$formInfo->setAddress($_POST['address']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
</head>
<body>
    <h1>Registration Details</h1>
    <p><strong>Last Name:</strong> <?php echo $formInfo->getLastname(); ?></p>
    <p><strong>First Name:</strong> <?php echo $formInfo->getFirstname(); ?></p>
    <p><strong>Middle Initial:</strong> <?php echo $formInfo->getMiddleInitial(); ?></p>
    <p><strong>Age:</strong> <?php echo $formInfo->getAge(); ?></p>
    <p><strong>Contact No.:</strong> <?php echo $formInfo->getContact(); ?></p>
    <p><strong>Email:</strong> <?php echo $formInfo->getEmail(); ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($formInfo->getAddress()); ?></p>
</body>
</html>
