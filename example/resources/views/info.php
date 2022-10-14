<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Write Your Info/შეიყნავე ინფორმაცია შენზე </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #ff7376  ;


   <?php
        
        $array = [
            'message' => 'ki'
        ];

        $json = json_encode($array);

        echo $json;
   ?>
}  
button {   
        background-color: orangered;   
        width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   

 input[type=text] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid gray;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.85;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
            
 .container {  
        margin-top: 5%;
        margin-left: 38%;
        width: 400px;
        padding: 30px;   
        background-color: #FFF7E9;
        border: 4px solid #F9F9F9;  
    }   

</style>   
</head>    
<body>    
    <center> <h1 style="color: white;"> Write Your Info/შეიყნავე ინფორმაცია შენზე  </h1> </center>   
    <form action = "<?php $_PHP_SELF ?>" method = "POST" 
    @csrf <!-- {{ csrf_field() }} -->  
    
        <div class="container">   
            <label>Name : </label>   
            <input type="text" name ="name" placeholder="ჩაწერეთ თქვენი სახელი" required>  
            <label>Surname : </label>   
            <input type="text" name = "surname" placeholder="ჩაწერეთ თქვენი გვარი" required>
            <button type="submit" class="btn btn-primary">Submit</button>  
            <a href="/" class="w3-button">Cancel</a>
        </div>   
    </form>     
</body>     
</html>
