<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
     Enter age: <input type="text" name="age">  
     <button type="submit" name="age_submit">Submit</button>
    </form>
    <?php
     $age = $_GET['age'];
    if(isset($_GET['age_submit'])){
       
        if($age>18){
            echo"You are eligible";
        }
        else
            $rem=$age-18;
            echo"Sorry not eligible.Remaining time is  ".rem;
        

    }
    ?>
</body>
</html>
