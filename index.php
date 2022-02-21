<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <div class="topnav" id="myTopnav">
        <a href="logout.php" style=" margin-left: 15px; margin-right: 15px;">Logout</a>
        <a href="#Home" class="active" style="margin-right: 15px;">Home</a>
        <a href="#Catalog" style="margin-left: 15px; margin-right: 15px;">Catalog</a>
        <a href="#Order" style=" margin-left: 15px; margin-right: 15px;">Order</a>


  </div>

  <div class="main" id="Home">
  <div>
    <div class="text1">
      <p>WELCOME TO FLOWER STORE</p>
    </div>
    <div class="text2">
      <p>Flowers are happy things.</p>
    </div>  
    <div class="shop">
      <a href="#Order"><button class="btn"><b>Shop Now<b></button></a> 
    </div>
  </div>
</div>

<div class ="judul" id="Catalog">
  <div>
  <div class="text1">
      <p>Catalog</p>
    </div>
  <div class="gallery">
  <a target="_black" href="melati.jpg">
    <img src="melati.jpg" alt="Jasmine Flower" width="600" height="400">
  </a>
  <div class="desc">Jasmine</div>
   <div class="desc">Rp. 50.000</div>
</div>

<div class="gallery">
  <a target="_black" href="lavender.jpg">
    <img src="lavender.jpg" alt="Lavender Flower" width="600" height="400">
  </a>
  <div class="desc">Lavender</div>
  <div class="desc">Rp. 60.000</div>
</div>
    
<div class="gallery">
  <a target="_black" href="bakung.jpg">
    <img src="bakung.jpg" alt="Lily" width="600" height="400">
  </a>
  <div class="desc">Lily</div>
  <div class="desc">Rp. 70.000</div>
</div>

<div class="gallery">
  <a target="_black" href="lilac.jpg">
    <img src="lilac.jpg" alt="Lilac Flower" width="600" height="400">
  </a>
  <div class="desc">Lilac</div>
  <div class="desc">Rp. 80.000</div>
</div>

<div class="gallery">
  <a target="_black" href="tulip.jpg">
    <img src="tulip.jpg" alt="Tulips" width="600" height="400">
  </a>
  <div class="desc">Tulips</div>
  <div class="desc">Rp. 65.000</div>
</div>
  
</div>

<div class="judul" id="Order">
   <div class="column1">
    <div class="txtorder">
      <p><b>Order Here</b></p>
    </div>


<form class="form"method="post" action="order.php">  
  <table>
  <tr><td>Name  </td><td><input type="text" name="name"></td></tr>
  <tr><td>Email </td><td><input type="text" name="email"></input></td></tr>
  <tr><td>No.Phone </td><td><input type="text" name="phone"><br></td></tr> 
  <tr><td>Choose one </td>
   <td>
    <input type="radio" name="flower1" value="Jasmine">Jasmine
    <input type="radio" name="flower1" value="Lavender">Lavender
    <input type="radio" name="flower1" value="lily">Lily
    <input type="radio" name="flower1" value="lilac">Lilac
    <input type="radio" name="flower1" value="tulips">Tulips
    <br>
   </td>
  </tr>
  <tr><td>Quantity  </td><td><input type = "text" name="quantity" ></input></td></tr>
  <tr><td>Address  </td><td><textarea name="address" rows="5" cols="40"></textarea></input></td></tr>
  
  <tr><td><input type="submit" value="Order" name="order"></td></tr>
 </table>
   
</form>
</div>

  </div>
  <div class="column2">
      <img src="shop.png" alt="Avatar" class="image"style="    width: 100%;     float: right;">
  </div>
</div>

<div class="footer">
  <p>Copyright @2020 Pemrograman Berbasis Web</p>
</div>

    </body>
  </head>
</html>