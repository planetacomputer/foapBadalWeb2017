<?php include 'header.php';?>
<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
  
    <div class="w3-row w3-center w3-card-2 w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card-2">
      <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card-2">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p><br>
    
      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>
    
      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p><br>
    
      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>
    
      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>  
    <img src="w3images/coffeehouse2.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>
<?php include 'footer.php';?>