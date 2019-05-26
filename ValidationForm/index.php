<?php
$nameError = '';
$emailError = '';
$genderError = '';
$websiteError = '';
$showData = true;
if (isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameError = 'Name is required!';
        $showData = false;
    } else {
        $name = userInput($_POST['name']);
        if (!preg_match('/^[A-Za-z \s]*$/m',$name)){
            $nameError = 'Only letters and spaces are allowed';
            $showData = false;
        }
    }
    if(empty($_POST['email'])){
        $emailError = 'Email is required!';
        $showData = false;
    } else {
        $email = userInput($_POST['email']);
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            $emailError = 'Invalid e-mail!';
            $showData = false;
        }
    }
    if(empty($_POST['gender'])){
        $genderError = 'Gender is required!';
        $showData = false;
    } else {
        $gender = userInput($_POST['gender']);
    }

    $website = userInput($_POST['website']);
    if (!preg_match( '#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i',$website) && $website != ''){
        $websiteError = 'Invalid website format!';
        $website = '';
    }

    $comments = userInput($_POST['comment']);

    if ($showData){
        echo "<h2>Your submit Information</h2><br>";
        echo "Name: " . ucwords($name) . "<br>";
        echo "Email: {$email}<br>";
        echo "Gender: {$gender}<br>";
        echo "Website: {$website}<br>";
        echo "Comments: {$comments}<br>";
    } else {
        echo "Please complete and correct your Form again!";
    }
}

//function isRequired($nameField){
//    if (empty($nameField)){
//        $errorString = 'This field is required!';
//        return $errorString;
//    } else {
//        return userInput($nameField);
//    }
//}

function userInput($data){
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<h2>Form Validation with PHP</h2>
<div class="row container">
    <div class="col-6">
        <form method="post" style="padding: 5px">
            <fieldset>
                Name:<br>
                <input type="text" name="name">
                <span style="color: red">* <?= $nameError ?></span><br>
                <br>
                E-mail:<br>
                <input type="text" name="email">
                <span style="color: red">* <?= $emailError ?></span><br>
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <span style="color: red">* <?= $genderError ?></span>
                <br>
                <br>
                Website:<br>
                <input name="website"><span style="color: red"> <?= $websiteError ?></span><br>
                <br>
                Comments:<br>
                <textarea name="comment" rows="5" cols="25"></textarea>
                <br>
                <br>
                <input type="submit" name="submit">
            </fieldset>
        </form>
    </div>
</div>

</body>
</html>