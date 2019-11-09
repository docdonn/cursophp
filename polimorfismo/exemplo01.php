<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

       class Animal {
           
           public function falar() {
               return "Som";        
               
   
           }
           
           public function mover() {
               
               return "Anda";
               
           }
           
   
       } 
        
        
      class Cachorro extends Animal {
          public function falar() {
              return "Late";
              
          }
          
     
      } 
      
      
      class Gato extends Animal{
          public function falar() {
              return "Mia";
              
          }
      
          
          
      }
      
      class Passaro extends Animal{
          public function falar() {
              return "Canta";
              
          }
          public function mover(){
              return "Voa e ". parent::mover();             
              
              
          }
        
          
      }
      
     
      $pluto = new Cachorro();
      echo $pluto->falar() . " <br>";
      echo $pluto->mover() . " <br>";
      
      echo "---------------------------------<br/>"  ;
      
      $garfield = new Gato();
      echo $garfield->falar() . " <br>";
      echo $garfield->mover() . " <br>";
      
      echo "---------------------------------<br/>"  ;
      
      
      
      $canarinho = new Passaro();
      echo $canarinho->falar() . " <br>";
      echo $canarinho->mover() . " <br>";
      
      echo "---------------------------------<br/>"  ;
        ?>
    </body>
</html>
