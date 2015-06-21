<?php
//session_start();
//require_once("php/dbcontroller.php");
//$db_handle = new DBController();
if(!empty($_GET["action"])) :
	switch($_GET["action"]) 
	{
		case "add":
			if(!empty($_POST["quantity"])) 
			{
				$productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");
				$itemArray = array($productByCode[0]["code"]=>
					array(
						'pic'=>$productByCode[0]["title"], 
						'code'=>$productByCode[0]["code"], 
						'quantity'=>$_POST["quantity"], 
						'price'=>$productByCode[0]["price"]
						)
					);
				
				if(!empty($_SESSION["cart_item"])) 
				{
					if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) 
					{
						foreach($_SESSION["cart_item"] as $k => $v) 
						{
								if($productByCode[0]["code"] == $k)
									$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
						}
					} 
					else 
					{
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				} 
				else 
				{
					$_SESSION["cart_item"] = $itemArray;
				}
			}
		break;
		case "remove":
			if(!empty($_SESSION["cart_item"])) 
			{
				foreach($_SESSION["cart_item"] as $k => $v) 
				{
						if($_GET["code"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}
			}
		break;
		case "empty":
			unset($_SESSION["cart_item"]);
		break;	
	}
endif; //if(!empty($_GET["action"])) :