<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Banking Systerm</title>
  
<style>
    #footer
    {
      padding-top:7px;
      padding-bottom:27px;
      position:fixed;
      bottom:0px;
      width:100%;
      height:50px;
      color:black;
      text-align:center;
    }

   #text{
       padding-top:30px;
       padding-left:50px;
       padding-right:500px;
       font-family: serif;
       border: 0px solid black;
       width: 200px;
       height:200px; 
    }

   #title{
       padding-top:50px;
       margin-left:750px;
       font-family: raleway;
    }

   

     .btn {
           border-radius: 37px;
           padding:12px;
           padding-right:30px;
           padding-left:30px; 
           margin-left:860px;
           font-size:20px;
           background-color:#DAA520;
           color:white; 
          }

    button:hover {
          background-color:#00b300; 
          color: white;
           }
    body {
         width:1250px;
         background-image: url('bank1.png');
         background-repeat: no-repeat;
         background-attachment: fixed;  
         background-size: 1300px 575px;
        }

</style>

  </head>

  <body>
  
   <?php
  include 'navbar.php';
  ?> 

  <div class="container-fluid">
    <div class="row">

        <div class="heading text-center font-size-80px" id="title">
            <h style="font-size:48px;"><b>BANKING SYSTEM</b></h>
        </div>
    
        <div class="row activity text-center" id="text">
            <div class="col-md-10 act">
                 <button onclick="location.href='transfermoney.php'" type="button" class="btn">View All Customers</button>
          </div>
      </div>

      

</div>
  </div>
      
      <div id="footer">
      <pre style="color:black;font-family:Verdana;"><b>Made by Koye Harshitha of The Sparks Foundation || koyeharshitha.e0320039@sret.edu.in </b> <a href="https://www.linkedin.com/in/harshitha-koye-5b776b210/" style="color:black;"> <i class="fa fa-linkedin-square icon fa-2x" ></i></a>  <a href="mailto:harshitha@gmail.com" style="color:black;"> <i class="fa fa-envelope icon fa-2x" ></i></a>  <a href="https://github.com/KoyeHarshitha" style="color:black;"> <i class="fa fa-github icon fa-2x" ></i></a>
      
      </pre>
      
      </div>

      </body>
      </html>
