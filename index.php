<?php  
   $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vel?';
   // echo $paragraph;
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bad Words</title>
</head>
<body>
   <p><?php echo $paragraph; ?> </p>
   <h3>Paragraph Length</h3>
   <p><?php echo strlen($paragraph); ?> </p>
   
</body>
</html>


