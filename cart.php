<?php
    include 'dbFunction.php';

    $query1 = "Select * from item where name= 'Sourdough Classic'";
    $query2 = "Select * from item where name= 'Kouign Amann'";
    $query3 = "Select * from item where name= 'French Crepe'";

    $resultSelect1 = mysqli_query($link, $query1) or die("Error Querying Database");
    $resultSelect2 = mysqli_query($link, $query2) or die("Error Querying Database");
    $resultSelect3 = mysqli_query($link, $query3) or die("Error Querying Database");
   
    
    $num_result1 = mysqli_num_rows($resultSelect1);
    $num_result2 = mysqli_num_rows($resultSelect2);
    $num_result3 = mysqli_num_rows($resultSelect3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Artisanal Bakery</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="cart.js"></script>
<link rel="stylesheet" href="ArtisanalBakery.css">
</head>
<body>
    <header>
            <h1><img src="banner.png" width="100%" alt="Artisanal Bakery"></h1>
    </header>
	<nav class="nav1">
		<a href="index.html"><button class="button" type="button">Home</button></a>
		<a href="menu.html"><button class="button" type="button">Menu</button></a>
		<a href="cart.html"><button class="button" type="button">Cart</button></a>
		<a href="contact.html"><button class="button" type="button">Contact</button></a>
		<a href="about.html"><button class="button" type="button">About</button></a>
	</nav>
	<div class="wrapper">
		<img src="cartbanner.png" height="150" width="1000" alt="menu" class="imagetitle">
	</div>
	<div id="rightcolumn" class="content">
		<table width="600px" align="center" border="0">
				<tr>
				<th><img src="sourdough.jpg" alt="Sourdough" style="width:180px; height:180px;"></th>
				<td class="text-center" width = 200px><b>Sourdough Classic</b><br><br>$8.50</td>
                <td>
                    <label for="SDQty"> Quantity </label><br>
                    <input type="number" name="SDQty" id="SDQty" style="width: 60px;" value="0" min="0" oninput="SDPrice()">
                </td>
                <td id="SDSubtotal">
                    Subtotal<br>
                    $0.00
                </td>
			</tr>
			<tr>
				<th><img src="kouignamann.jpg" alt="kouignamann" style="width:180px; height:180px;"></th>
				<td class="text-center" width = 200px><b>Kouign Amann</b><br><br>$7.50</td>
                <td>
                    <label for="KAQty"> Quantity </label><br>
                    <input type="number" name="KAQty" id="KAQty" style="width: 60px;" value="0" min="0" oninput="KAPrice()">
                </td>
                <td id="KASubtotal">
                    Subtotal<br>
                    $0.00
                </td>
			</tr>
			<tr>
				<th><img src="frenchcrepe.jpg" alt="frenchcrepe" style="width:180px; height:180px;"></th>
				<td class="text-center" width = 200px><b>French Crepe</b><br><br>$9.50</td>
                <td>
                    <label for="FCQty"> Quantity </label><br>
                    <input type="number" name="FCQty" id="FCQty" style="width: 60px;" value="0" min="0"   oninput="FCPrice()">
                </td>
                <td id="FCSubtotal">
                    Subtotal<br>
                    $0.00
                </td>
			</tr>
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: center;">Total price:</td>
                <td id="GrandTotal">$0.00</td>
            </tr>
        </table>
		</table>
    </div>
    <div class="button-center">
		<a href="menu.html"><button class="button" type="button" style="width:200px; padding: 20px;font-size: 16px;">Continue Shopping</button></a>
		<a href="delivery.html"><button class="button" type="button" style="width:200px; padding: 20px;font-size: 16px;">Continue Checkout </button></a>
	</div>
	<footer class="footer">
        <a><img src="fblogo.png" alt="Twitter Logo" style="width:40px;height:40px;"></a>
        <a><img src="twitlogo.png" alt="Twitter Logo" style="width:40px;height:40px;"></a>
        <a><img src="instalogo.png" alt="Twitter Logo" style="width:40px;height:40px;"></a>
        <p class="footercopy">Copyright &copy; 2020 Artisanal Bakery</p><br>
    </footer>
</body>
</html>