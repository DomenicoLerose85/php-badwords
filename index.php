<?php  
   $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vel?';
   
   if(isset($_GET['bad_word'])){
      $bad_word = $_GET['bad_word'];
   } else {
      $bad_word = '';
   }
   
   $new_paragraph = str_replace($bad_word, '***', $paragraph);
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
   <h1>Lorem Paragraph</h1>
   <p><?php echo $paragraph; ?> </p>
   <h3>Paragraph Length</h3>
   <p><?php echo strlen($paragraph); ?> </p>
   <h3>Modified Paragraph</h3>
   <p><?php echo $new_paragraph; ?> </p> 
   <h3>Modified Paragraph Length</h3>
   <p><?php echo strlen($new_paragraph); ?> </p>
</body>
</html>


