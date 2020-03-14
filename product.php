<?php 



include "navbar.php";

//associative array//
$products= [
    'product 1' => [
              'price' => '620',
              'img' => 'images/lap.jpg',
              'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quis ad, est recusandae consequatur magnam atque odit iure, hic tempora odio voluptatibus. Vero nihil deserunt eligendi voluptatem delectus, soluta nam?'
            ],
            'product 2' => [
              'price' => '6500',
              'img' => 'images/laptop.png',
              'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quis ad, est recusandae consequatur magnam atque odit iure, hic tempora odio voluptatibus. Vero nihil deserunt eligendi voluptatem delectus, soluta nam?'
            ],
            'product 3' => [
                'price' => '7500',
                'img' => 'images/Dell-Laptop-PNG-Transparent.png',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quis ad, est recusandae consequatur magnam atque odit iure, hic tempora odio voluptatibus. Vero nihil deserunt eligendi voluptatem delectus, soluta nam?'
              ],
              'product 4' => [
                'price' => '8500',
                'img' => 'images/Dell-Laptop-PNG-Transparent.png',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quis ad, est recusandae consequatur magnam atque odit iure, hic tempora odio voluptatibus. Vero nihil deserunt eligendi voluptatem delectus, soluta nam?'
              ],
              'product 5' => [
                'price' => '9500',
                'img' => 'images/lap.jpg',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quis ad, est recusandae consequatur magnam atque odit iure, hic tempora odio voluptatibus. Vero nihil deserunt eligendi voluptatem delectus, soluta nam?'
              ],
              'product 6' => [
                'price' => '10500',
                'img' => 'images/laptop.png',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quis ad, est recusandae consequatur magnam atque odit iure, hic tempora odio voluptatibus. Vero nihil deserunt eligendi voluptatem delectus, soluta nam?'
              ],
           
        ];
    
?>


<div class="container my-4 px-2">
    <div class="row">
<?php

Foreach($products as $key => $value)//value store(price/img/desc),key store product(1 to 6)//
{
?>

 <div class="col-s-6 col-md-4"> <!-- 34an 3ayza da elly ytkrr-->
<div class="card" style="width: 18rem;">
  <img src="<?php echo $value['img']?>" class="card-img-top mt-2" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $key?></h5> <!-- To Display Name Of Product -->
    <small class="card-title"><?php echo $value['price']?></small>
    <p class="card-text"><?php echo $value['desc'] ?></p>
   
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<?php
}

?>
</div>
</div>	