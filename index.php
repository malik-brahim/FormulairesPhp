 <?php
 
 $prenom= "Clém";

 ?> 

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires PHP</title>
    <style>
        
        body{
            width: 75%;
            margin: auto;
        }
        
        .entete{
            border: 1px solid;
            text-align:center;
            background-color: #80b8f1;
        }
        
        .intro{
            padding: 5px;
            margin-top: 25px;
            border: 1px solid;
            background-color: #80b8f1;
        }
        
        .form{
            padding: 5px;
            margin-top: 25px;
            border: 1px solid;
            background-color: #80b8f1;
            height: 500px;
        }
        
        label{
            padding-bottom: 8px;
            display: block;
        }
        
    
    </style>
</head>

<body>
  
        
  <div class="entete">
     
     <?php
        
    echo "<h1>Bonjour " . $prenom . "</h1>";
  
    ?>
  
  </div>
  
  <div class="intro">
      <p>Pour créer votre devis, vous devez remplir ce formulaire.</p>
  </div> 
      
  <div class="form">  
            
         <form method="post">
          
          <p>
          
          <label for ="service">Quel service souhaiteriez-vous?</label>
          
          <input type="text" name="service" id="service" placeholder = "Ex : Serrurerie"/>
          
          </p> 
      </form>   
  </div>
    
</body>
</html>
