<?php
require('mysqli_connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	$id=$_POST['hidden'];
	
		if($id==1){
			
			if(isset($_COOKIE['shoppingcart1'])){
		$quantity2=$_POST['quantity'];
		$queryname=$_POST['namehidden'];
		$q1="select quantityname,price from inventoryOrders where itemname='$queryname'";
				                        $r1=@mysqli_query($dbc,$q1);
while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
	$quantityvalue='quantityname';
	$pricefromtable='price';
							$updatequantity=$quantity2+$row1[$quantityvalue];
							$updateprice=$updatequantity*$row1[$pricefromtable];
							}
							$q1="update inventoryOrders SET quantityname=$updatequantity,price=$updateprice where itemname='$queryname'";
										                        $r=@mysqli_query($dbc,$q1);

		}
		else{
			$queryname=$_POST['namehidden'];
			$qdel="delete from inventoryOrders where itemname='$queryname'";
				                        $r=@mysqli_query($dbc,$qdel);

						setcookie('shoppingcart1',$id,time()+4);

    $quantity1= $_POST['quantity'];
	$price1=$_POST['pricehidden'];
	$name1=$_POST['namehidden'];
	$totalprice= $quantity1*$price1;
	$q= "insert into inventoryOrders (itemname, quantityname, price, totalprice) values ('$name1', '$quantity1','$price1','$totalprice')";
	                        $r=@mysqli_query($dbc,$q);
			
		}
		}
		elseif($id==2){
			if(isset($_COOKIE['shoppingcart2'])){
		$quantity2=$_POST['quantity'];
		$queryname=$_POST['namehidden'];
		$q1="select quantityname,price from inventoryOrders where itemname='$queryname'";
				                        $r1=@mysqli_query($dbc,$q1);
while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
							$updatequantity=$quantity2+$row1['quantityname'];
							$updateprice=$updatequantity*$row1['price'];
							}
							$q1="update inventoryOrders SET quantityname=$updatequantity,price=$updateprice where itemname='$queryname'";
										                        $r=@mysqli_query($dbc,$q1);

		}
		else{
			$queryname=$_POST['namehidden'];
			$qdel="delete from inventoryOrders where itemname='$queryname'";
				                        $r=@mysqli_query($dbc,$qdel);

						setcookie('shoppingcart2',$id,time()+4);

		$quantity1= $_POST['quantity'];
	$price1=$_POST['pricehidden'];
	$name1=$_POST['namehidden'];
	$totalprice= $quantity1*$price1;
	$q= "insert into inventoryOrders (itemname, quantityname, price, totalprice) values ('$name1', '$quantity1','$price1','$totalprice')";
	                        $r=@mysqli_query($dbc,$q);
			
		}
		}
		elseif($id==3){
			if(isset($_COOKIE['shoppingcart3'])){
		$quantity2=$_POST['quantity'];
		$queryname=$_POST['namehidden'];
		$q1="select quantityname,price from inventoryOrders where itemname='$queryname'";
				                        $r1=@mysqli_query($dbc,$q1);
while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
							$updatequantity=$quantity2+$row1['quantityname'];
							$updateprice=$updatequantity*$row1['price'];
							}
							$q1="update inventoryOrders SET quantityname=$updatequantity,price=$updateprice where itemname='$queryname'";
										                        $r=@mysqli_query($dbc,$q1);

		}
		else{
			$queryname=$_POST['namehidden'];
			$qdel="delete from inventoryOrders where itemname='$queryname'";
				                        $r=@mysqli_query($dbc,$qdel);

					setcookie('shoppingcart3',$id,time()+4);

		$quantity1= $_POST['quantity'];
	$price1=$_POST['pricehidden'];
	$name1=$_POST['namehidden'];
	$totalprice= $quantity1*$price1;
	$q= "insert into inventoryOrders (itemname, quantityname, price, totalprice) values ('$name1', '$quantity1','$price1','$totalprice')";
	                        $r=@mysqli_query($dbc,$q);
			
		}
		}
		elseif($id==4){
			if(isset($_COOKIE['shoppingcart4'])){
		$quantity2=$_POST['quantity'];
		$queryname=$_POST['namehidden'];
		$q1="select quantityname,price from inventoryOrders where itemname='$queryname'";
				                        $r1=@mysqli_query($dbc,$q1);
while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
							$updatequantity=$quantity2+$row1['quantityname'];
							$updateprice=$updatequantity*$row1['price'];
							}
							$q1="update inventoryOrders SET quantityname=$updatequantity,price=$updateprice where itemname='$queryname'";
										                        $r=@mysqli_query($dbc,$q1);

		}
		else{
			$queryname=$_POST['namehidden'];
			$qdel="delete from inventoryOrders where itemname='$queryname'";
				                        $r=@mysqli_query($dbc,$qdel);

					setcookie('shoppingcart4',$id,time()+4);

		$quantity1= $_POST['quantity'];
	$price1=$_POST['pricehidden'];
	$name1=$_POST['namehidden'];
	$totalprice= $quantity1*$price1;
	$q= "insert into inventoryOrders (itemname, quantityname, price, totalprice) values ('$name1', '$quantity1','$price1','$totalprice')";
	                        $r=@mysqli_query($dbc,$q);
			
		}
		}
		elseif($id==5){
			if(isset($_COOKIE['shoppingcart5'])){
		$quantity2=$_POST['quantity'];
		$queryname=$_POST['namehidden'];
		$q1="select quantityname,price from inventoryOrders where itemname='$queryname'";
				                        $r1=@mysqli_query($dbc,$q1);
while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
							$updatequantity=$quantity2+$row1['quantityname'];
							$updateprice=$updatequantity*$row1['price'];
							}
							$q1="update inventoryOrders SET quantityname=$updatequantity,price=$updateprice where itemname='$queryname'";
										                        $r=@mysqli_query($dbc,$q1);

		}
		else{
			$queryname=$_POST['namehidden'];
			$qdel="delete from inventoryOrders where itemname='$queryname'";
				                        $r=@mysqli_query($dbc,$qdel);

					setcookie('shoppingcart5',$id,time()+4);

		$quantity1= $_POST['quantity'];
	$price1=$_POST['pricehidden'];
	$name1=$_POST['namehidden'];
	$totalprice= $quantity1*$price1;
	$q= "insert into inventoryOrders (itemname, quantityname, price, totalprice) values ('$name1', '$quantity1','$price1','$totalprice')";
	                        $r=@mysqli_query($dbc,$q);
			
		}
		}
		elseif($id==6){
			if(isset($_COOKIE['shoppingcart6'])){
		$quantity2=$_POST['quantity'];
		$queryname=$_POST['namehidden'];
		$q1="select quantityname,price from inventoryOrders where itemname='$queryname'";
				                        $r1=@mysqli_query($dbc,$q1);
while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
							$updatequantity=$quantity2+$row1['quantityname'];
							$updateprice=$updatequantity*$row1['price'];
							}
							$q1="update inventoryOrders SET quantityname=$updatequantity,price=$updateprice where itemname='$queryname'";
										                        $r=@mysqli_query($dbc,$q1);

		}
		else{
			$queryname=$_POST['namehidden'];
			$qdel="delete from inventoryOrders where itemname='$queryname'";
				                        $r=@mysqli_query($dbc,$qdel);

					setcookie('shoppingcart6',$id,time()+4);

		$quantity1= $_POST['quantity'];
	$price1=$_POST['pricehidden'];
	$name1=$_POST['namehidden'];
	$totalprice= $quantity1*$price1;
	$q= "insert into inventoryOrders (itemname, quantityname, price, totalprice) values ('$name1', '$quantity1','$price1','$totalprice')";
	                        $r=@mysqli_query($dbc,$q);
			
		}
		}
	
}
		
	
?>





<html>
    <head>
        <title>Online Clothing Store</title>
				<meta name="vewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="style.css">
		<style>
	
		
		</style>
    </head>    
    <body>
        <header>
            
            <div class="main">
                <div class="logo">
                    <img src="logo.jpg">
                    
                </div>
                <ul>
                    <li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="index.php">STORE</a></li>
                    <li><a href="cart.php">CART</a></li>                    
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
                <div class="title">
                <h1>Online Clothing Store</h1>
                
            </div>
            </div>
            
            <div class="container">
                <div class="box">
                <div class="imgbox">
                    <img src="shoe.jpg" name="watch">
                    </div>
                    <div class="details">
                       <form method="post" action="index.php">
					<?php	
						$q= "select NAME,QUANTITY,PRICE from inventory where NAME='watch'";
                        $r=@mysqli_query($dbc,$q);
                        while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                         $quantity=$row['QUANTITY'];
                         $price= $row['PRICE'];
						 $name=$row['NAME'];
                        }
						
                        ?> 
						 <select name="quantity" id="options">
			    <?php		
				         for($i=0; $i<= $quantity; $i++){

                          echo '<option name="qauntity">'. $i .'</option>';
						 }
				 ?>
                            </select>
							<input class="hidden" type="hidden" name="pricehidden" value="<?php echo $price;  ?>">
														<input class="hidden" type="hidden" name="namehidden" value="<?php echo $name;  ?>">

					<label name="price"> 
					<?php echo '$'.($price) ?>
				
					</label>
                        <input type="submit" id="submit1" onclick="change1()" value="Add to Cart"></input>
                                                <input type="hidden" name="hidden" value="1"></input>

						</form>
						
                    </div>
                </div>
                <div class="box">                <div class="imgbox">
                    <img src="suits.jpg" name="suits">
                    </div>
                    <div class="details">
                       <form method="post" action="index.php">
					<?php	
						$q= "select NAME,QUANTITY,PRICE from inventory where NAME='suits'";
                        $r=@mysqli_query($dbc,$q);
                        while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                         $quantity=$row['QUANTITY'];
                         $price= $row['PRICE'];
						 						 $name=$row['NAME'];

                        }
						
                        ?> 
						 <select name="quantity">
			    <?php		
				         for($i=0; $i<= $quantity; $i++){

                          echo '<option name="qauntity" >'. $i .'</option>';
						 }
				 ?>
                            </select>
							<input class="hidden" type="hidden" name="pricehidden" value="<?php echo $price;  ?>">
														<input class="hidden" type="hidden" name="namehidden" value="<?php echo $name;  ?>">

						<label for="price"><?php echo '$'.($price) ?></label>
                        <input type="submit" id="submit2" onclick="change2()" value="Add to Cart"></input>
                                                                        <input type="hidden" name="hidden" value="2"></input>

						</form>
						
                    </div></div>
                <div class="box">                <div class="imgbox">
                    <img src="belts.jpg" name="belts">
                    </div>
                    <div class="details">
                       <form method="post" action="index.php">
					<?php	
						$q= "select NAME,QUANTITY,PRICE from inventory where NAME='belts'";
                        $r=@mysqli_query($dbc,$q);
                        while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                         $quantity=$row['QUANTITY'];
                         $price= $row['PRICE'];
						 						 $name=$row['NAME'];

                        }
						
                        ?> 
						 <select name="quantity">
			    <?php		
				         for($i=0; $i<= $quantity; $i++){

                          echo '<option name="qauntity" >'. $i .'</option>';
						 }
				 ?>
                            </select>
							<input class="hidden" type="hidden" name="pricehidden" value="<?php echo $price;  ?>">
														<input class="hidden" type="hidden" name="namehidden" value="<?php echo $name;  ?>">

						<label for="price"><?php echo '$'.($price) ?></label>
                        <input type="submit" id="submit3" onclick="change3()" value="Add to Cart"></input>
                                                                        <input type="hidden" name="hidden" value="3"></input>

						</form>
						
                    </div></div>
                <div class="box">                <div class="imgbox">
                    <img src="shirt.jpg" name="shirt">
                    </div>
                    <div class="details">
                       <form method="post" action="index.php">
					<?php	
						$q= "select NAME,QUANTITY,PRICE from inventory where NAME='shirt'";
                        $r=@mysqli_query($dbc,$q);
                        while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                         $quantity=$row['QUANTITY'];
                         $price= $row['PRICE'];
						 						 $name=$row['NAME'];

                        }
						
                        ?> 
						 <select name="quantity">
			    <?php		
				         for($i=0; $i<= $quantity; $i++){

                          echo '<option name="qauntity" >'. $i .'</option>';
						 }
				 ?>
                            </select>
						<input class="hidden" type="hidden" name="pricehidden" value="<?php echo $price;  ?>">
														<input class="hidden" type="hidden" name="namehidden" value="<?php echo $name;  ?>">
	
						<label for="price"><?php echo '$'.($price) ?></label>
                        <input type="submit" id="submit4" onclick="change4()" value="Add to Cart"></input>
                                                                        <input type="hidden" name="hidden" value="4"></input>

						</form>
						
                    </div></div>
                <div class="box">                <div class="imgbox">
                    <img src="shoes.jpg" name="shoes">
                    </div>
                    <div class="details">
                       <form method="post" action="index.php">
					<?php	
						$q= "select NAME,QUANTITY,PRICE from inventory where NAME='shoes'";
                        $r=@mysqli_query($dbc,$q);
                        while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                         $quantity=$row['QUANTITY'];
                         $price= $row['PRICE'];
						 						 $name=$row['NAME'];

                        }
						
                        ?> 
						 <select name="quantity">
			    <?php		
				         for($i=0; $i<= $quantity; $i++){

                          echo '<option name="qauntity" >'. $i .'</option>';
						 }
				 ?>
                            </select>
							<input class="hidden" type="hidden" name="pricehidden" value="<?php echo $price;  ?>">
														<input class="hidden" type="hidden" name="namehidden" value="<?php echo $name;  ?>">

						<label for="price"><?php echo '$'.($price) ?></label>
                        <input type="submit" id="submit5" onclick="change5()" value="Add to Cart"></input>
                                                                        <input type="hidden" name="hidden" value="5"></input>

						</form>
						
                    </div></div>
                <div class="box">                <div class="imgbox">
                    <img src="bracelet.jpg" name="bracelet">
                    </div>
                    <div class="details">
                       <form method="post" action="index.php">
					<?php	
						$q= "select NAME,QUANTITY,PRICE from inventory where NAME='bracelet'";
                        $r=@mysqli_query($dbc,$q);
                        while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                         $quantity=$row['QUANTITY'];
                         $price= $row['PRICE'];
						 						 $name=$row['NAME'];

                        }
						
                        ?> 
						 <select name="quantity">
			    <?php		
				         for($i=0; $i<= $quantity; $i++){

                          echo '<option name="qauntity">'. $i .'</option>';
						 }
				 ?>
                            </select>
							<input class="hidden" type="hidden" name="pricehidden" value="<?php echo $price;  ?>">
														<input class="hidden" type="hidden" name="namehidden" value="<?php echo $name;  ?>">

						<label for="price"><?php echo '$'.($price) ?></label>
                        <input type="submit" id="submit6" onclick="change6()" value="Add to Cart"></input>
                                                                   <input type="hidden" name="hidden" value="6"></input>
     
						</form>
						
                    </div></div>
            <form action="cart.php">
			<input type="submit" class="checkout" value="checkout">
			</form>
            </div>
          <script>
		function change1(){
		document.getElementById('submit1').value="Item Added";
		}
		function change2(){
		document.getElementById('submit2').value="Item Added";
		}
		function change3(){
		document.getElementById('submit3').value="Item Added";
		}
		function change4(){
		document.getElementById('submit4').value="Item Added";
		}
		function change5(){
		document.getElementById('submit5').value="Item Added";
		}
		function change6(){
		document.getElementById('submit6').value="Item Added";
		}
		</script>  
        </header>
		
    </body>
</html>    