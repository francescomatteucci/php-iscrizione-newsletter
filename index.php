<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input  name="email">
        <input type="submit" value="Invia">
    </form>
    <?php 
    $_email = $_POST['email'];
    $_array_chars = [];
    for($_i = 0; $_i < strlen($_email); $_i++){
        $_email_char = $_email[$_i];
        array_push($_array_chars, $_email_char);


    };
   
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    // var_dump($_array_chars);
    if(in_array('@', $_array_chars) && in_array('.', $_array_chars)){
        ?> <div class="alert alert-success">
        Messaggio di successo!
    </div>
        <?php
    }else{
        ?> <div class="alert alert-danger">
        Oops! Qualcosa è andato storto.
    </div>
        <?php
    
    
    };
};
     ?>
</body>
</html>
