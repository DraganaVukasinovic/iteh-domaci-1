<?php
 
  
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        
    </style>



</head>
<body style="   background-image: url('https://images.unsplash.com/photo-1519751138087-5bf79df62d5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGpld2VsbGVyeSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80');    background-repeat: no-repeat;   background-attachment: fixed;  background-size: cover;"> 
     

        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Nakit</a>
            <form class="form-inline">
                <a class="navbar-brand" href="odjava.php">Odjavi se</a>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <label for="cena" style="margin-left:20%;font-size:16px">Sortiranje: </label>
            <select name="cena" id="cena" onchange="sortirajPoCeni()" style="background-color:#fbc2eb;color:black;font-size:16px">
                   
                    <option value="ASC">Price ascending  </option>
                    <option value="DESC">Price  descending </option>
        </select>

    <div id="products">
            <?php
                include 'savNakit.php';
            
            ?>
    </div>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
     
   
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script>
        function sortirajPoCeni() {
            var sortiraj = $("#cena").val();
    

            $("#products").html("");
            $.post("savNakit.php", { cena: sortiraj }, function (data) {
                $("#products").html(data);
            });
            $('html, body').animate({
                scrollTop: $("#products").offset().top
            }, 2000);

        


        }




    </script>

</body>
</html>