<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Stock Listing</title>
</head>

<body>

<?php 
$url='file.json';
$data=file_get_contents($url);
$character=json_decode($data,true);
?>
<?php foreach ($character as $value): ?>
  <?php endforeach ?>


<div class="title font-bold flex items-center justify-center "><p>Search page</p></div>

<div class="frame flex flex-col lg:flex-row max-md:place-items-center">



  <div class="box-filter">

    <div class="d-flex filter flex">
      <div class="icon">
      <img src="icon.png" alt=""></div> 
      <strong><p>&ensp;Filters</p></strong>
    </div>

    <div class="border"></div>

    <div class="d-flex geo">
      <div class="data">
        <strong><p>Search</p></strong>
        </div>
      <input type="text" class="stock-search" placeholder="  Search here">
    </div>

    <div class="border"></div>

    <div class="measure-filter">

      <div class="measure-unit flex items-center">
        <strong><p>Unit of measure</p></strong>
      </div>

      <div class="unit flex">  
        <div class="button button-white flex items-center justify-center"><p>Miles</p></div>
        <div class="button button-dark flex items-center justify-center"><p>Km</p></div>
      </div>

    </div>

  </div>


  <div class="frame-card grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-md:place-items-center">

    <div class="card max-lg:mt-3">

     <img src="<?php echo $value['image']; ?>" alt="immagine" class="card-image">
  
      <div class="card-content space-y-5">

        <div class="header">
          <div class="brand"><?php echo $value['make']?> <?php echo $value['model']?></div>
          <div class="version"><?php echo $value['version']?></div>
        </div>

        <div class="barra"></div>

        <div class="flex price-section justify-between items-center">
          <div class="">
            <div class="font-light text-sm">A partire da</div>
            <div class="font-bold price">€&ensp;<?php echo $value['price']?></div>  
          </div>
          <div class="circle"><div class="heart"></div></div> 
        </div>

        <div class="box-consumption">
          <div class="info font-bold"><?php echo $value['registrationYear']?>&ensp;-&ensp;<?php echo $value['km']?>km &ensp; -<?php echo $value['fuel']?></div>
          <div class="homologation font-light">
            <div class="consumption">Cons.Comb.Carburante:&ensp;<?php echo $value['wltp']?>&ensp;l/100km&ensp;-&ensp;CO2:&ensp;<?php echo $value['co2']?>
            </div>
          </div>
      </div>
    </div>

    </div>

    <div class="card max-lg:mt-3 ">

     <img src="<?php echo $value['image']; ?>" alt="immagine" class="card-image">
  
      <div class="card-content space-y-5">

        <div class="header">
          <div class="brand"><?php echo $value['make']?> <?php echo $value['model']?></div>
          <div class="version"><?php echo $value['version']?></div>
        </div>

        <div class="barra"></div>

        <div class="flex price-section justify-between items-center">
          <div class="">
            <div class="font-light text-sm">A partire da</div>
            <div class="font-bold price">€&ensp;<?php echo $value['price']?></div>  
          </div>
          <div class="circle"><div class="heart"></div></div> 
        </div>

        <div class="box-consumption">
          <div class="info font-bold"><?php echo $value['registrationYear']?>&ensp;-&ensp;<?php echo $value['km']?>km &ensp; -<?php echo $value['fuel']?></div>
          <div class="homologation font-light">
            <div class="consumption">Cons.Comb.Carburante:&ensp;<?php echo $value['wltp']?>&ensp;l/100km&ensp;-&ensp;CO2:&ensp;<?php echo $value['co2']?>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <div class="card max-lg:mt-3 ">

     <img src="<?php echo $value['image']; ?>" alt="immagine" class="card-image">
  
      <div class="card-content space-y-5">

        <div class="header">
          <div class="brand"><?php echo $value['make']?> <?php echo $value['model']?></div>
          <div class="version"><?php echo $value['version']?></div>
        </div>

        <div class="barra"></div>

        <div class="flex price-section justify-between items-center">
          <div class="">
            <div class="font-light text-sm">A partire da</div>
            <div class="font-bold price">€&ensp;<?php echo $value['price']?></div>  
          </div>
          <div class="circle"><div class="heart"></div></div> 
        </div>

        <div class="box-consumption">
          <div class="info font-bold"><?php echo $value['registrationYear']?>&ensp;-&ensp;<?php echo $value['km']?>km &ensp; -<?php echo $value['fuel']?></div>
          <div class="homologation font-light">
            <div class="consumption">Cons.Comb.Carburante:&ensp;<?php echo $value['wltp']?>&ensp;l/100km&ensp;-&ensp;CO2:&ensp;<?php echo $value['co2']?>
            </div>
          </div>
        </div>  
      </div>

    </div>

    <div class="card mt-3 opacity">

     <img src="<?php echo $value['image']; ?>" alt="immagine" class="card-image">
  
      <div class="card-content space-y-5">

        <div class="header">
          <div class="brand"><?php echo $value['make']?> <?php echo $value['model']?></div>
          <div class="version"><?php echo $value['version']?></div>
        </div>

        <div class="barra"></div>

        <div class="flex price-section justify-between items-center">
          <div class="">
            <div class="font-light text-sm">A partire da</div>
            <div class="font-bold price">€&ensp;<?php echo $value['price']?></div>  
          </div>
          <div class="circle"><div class="heart"></div></div> 
        </div>

        <div class="box-consumption">
          <div class="info font-bold"><?php echo $value['registrationYear']?>&ensp;-&ensp;<?php echo $value['km']?>km &ensp; -<?php echo $value['fuel']?></div>
          <div class="homologation font-light">
            <div class="consumption">Cons.Comb.Carburante:&ensp;<?php echo $value['wltp']?>&ensp;l/100km&ensp;-&ensp;CO2:&ensp;<?php echo $value['co2']?>
            </div>
          </div>
        </div>  
      </div>

    </div>

    <div class="card mt-3 opacity">

     <img src="<?php echo $value['image']; ?>" alt="immagine" class="card-image">
  
      <div class="card-content space-y-5">

        <div class="header">
          <div class="brand"><?php echo $value['make']?> <?php echo $value['model']?></div>
          <div class="version"><?php echo $value['version']?></div>
        </div>

        <div class="barra"></div>

        <div class="flex price-section justify-between items-center">
          <div class="">
            <div class="font-light text-sm">A partire da</div>
            <div class="font-bold price">€&ensp;<?php echo $value['price']?></div>  
          </div>
          <div class="circle"><div class="heart"></div></div> 
        </div>

        <div class="box-consumption">
          <div class="info font-bold"><?php echo $value['registrationYear']?>&ensp;-&ensp;<?php echo $value['km']?>km &ensp; -<?php echo $value['fuel']?></div>
          <div class="homologation font-light">
            <div class="consumption">Cons.Comb.Carburante:&ensp;<?php echo $value['wltp']?>&ensp;l/100km&ensp;-&ensp;CO2:&ensp;<?php echo $value['co2']?>
            </div>
          </div>
        </div>  
      </div>

    </div>

    <div class="card mt-3 opacity">

     <img src="<?php echo $value['image']; ?>" alt="immagine" class="card-image">
  
      <div class="card-content space-y-5">

        <div class="header">
          <div class="brand"><?php echo $value['make']?> <?php echo $value['model']?></div>
          <div class="version"><?php echo $value['version']?></div>
        </div>

        <div class="barra"></div>

        <div class="flex price-section justify-between items-center">
          <div class="">
            <div class="font-light text-sm">A partire da</div>
            <div class="font-bold price">€&ensp;<?php echo $value['price']?></div>  
          </div>
          <div class="circle"><div class="heart"></div></div> 
        </div>

        <div class="box-consumption">
          <div class="info font-bold"><?php echo $value['registrationYear']?>&ensp;-&ensp;<?php echo $value['km']?>km &ensp; -<?php echo $value['fuel']?></div>
          <div class="homologation font-light">
            <div class="consumption">Cons.Comb.Carburante:&ensp;<?php echo $value['wltp']?>&ensp;l/100km&ensp;-&ensp;CO2:&ensp;<?php echo $value['co2']?>
            </div>
          </div>
        </div>  
      </div>

    </div>

    
  </div>  

</div>
<script>
        document.querySelector('.heart').addEventListener('click', function() {
            this.classList.toggle('clicked');
        });
    </script>
</body>
</html>