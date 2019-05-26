<?php

$error = '';
if(isset($_POST['Submit'])){

    if(empty($_POST['name'])){
        $error = 'Required name';
    } else {
        $error = 'done';

    }
}


function userInputValidate($input){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-7">
            <!-- Default form contact -->
            <form class="text-center border border-light p-5" method="post">

                <p class="h4 mb-4">Contact us</p>

                <!-- Name -->
                <div class="row">
                    <div class="col-10">
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name" placeholder="Name">

                    </div>
                    <div class="col-2 pl-0" style="color: red">*<?= $error ?></div>
                </div>

                <!-- Email -->
                <div class="row">
                    <div class="col-10">
                        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">
                    </div>
                    <div class="col-1 pl-0" style="color: red">*</div>
                </div>

                <!-- Group of default radios - Female -->
               <div class="container">
                   <div class="row">
                       <div class="custom-control custom-radio col-5">
                           <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="gender">
                           <label class="custom-control-label" for="defaultGroupExample1">Female</label>
                       </div>

                       <!-- Group of default radios - Male -->
                       <div class="custom-control custom-radio col-5">
                           <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="gender">
                           <label class="custom-control-label" for="defaultGroupExample2">Male</label>
                       </div>
                       <div class="col-1" style="color: red">*</div>
                   </div>
               </div><br>
                <!-- Website -->
                <div class="row">
                    <div class="col-10">
                        <input type="text" id="defaultContactFormWebsite" class="form-control mb-4" name="website" placeholder="Website">
                    </div>
                    <div class="col-1 pl-0" style="color: red">*</div>
                </div>

                <!-- Message -->
                <div class="row">
                    <div class="form-group col-10">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="col-1 pl-0" style="color: red">*</div>
                </div>


                <!-- Copy -->
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                    <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit" name="Submit">Send</button>

            </form>
            <!-- Default form contact -->
        </div>
    </div>
</div>

</body>
</html>