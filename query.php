<?php 

include('connect.php');

// $create="CREATE Table Admin
// (
// 		AdminID varchar(30) NOT NULL Primary Key,
// 		Name varchar(50),
// 		Password varchar(50)
	
// 	)";

// $query=mysqli_query($connect,$create);

// if($query){

// 	echo "<p>Admin Table Successfully Created!</p>";
// }


// $create="CREATE Table Contact
// (
// 	Name varchar(50),
// 	Email varchar(50),
// 	Subject varchar(100),
// 	Message varchar(500)

// )";

// $query=mysqli_query($connect,$create);

// if($query){
// 	echo "<p>Contact Table Successfully Created!</p>";
// }


// $create="CREATE Table Orders
// (
// 	OrderID varchar(30) NOT NULL Primary Key,
// 	OrderDate varchar(30),
// 	CustomerID int,
// 	Order_Total_Amount int,
// 	Tax int,
// 	All_Total int,
// 	Order_Quantity int,
// 	Remark varchar(100),
// 	Payment_Type varchar(30),
// 	Order_Location varchar(30),
// 	Order_Phone varchar(30),
// 	Order_Status varchar(30),
// 	Foreign Key(CustomerID) References Customers (CustomerID)
// )";


// $query=mysqli_query($connect,$create);

// if($query){
// 	echo "<p>Orders Table Successfully Created!</p>";
// }

$create="CREATE Table Orderdetail
(
	OrderID varchar(30) NOT NULL,
	ProductID int NOT NULL,
	Product_Price int,
	BuyQty int,
	Primary Key(OrderID,ProductID),
	Foreign Key (OrderID) References Orders(OrderID),
	Foreign Key(ProductID) References Product(ProductID)
)";
$query=mysqli_query($connect,$create);

if($query){
	echo "<p>OrderDetail Table Successfully Created!</p>";
}




// $create="CREATE TABLE Product
// (
// 	ProductID int NOT NULL Primary key AUTO_INCREMENT,
// 	ProductName varchar(30),
// 	ProductAmount int,
// 	ProductQuantity int,
// 	ProductImage Text,	
// 	Description varchar (100),	
// 	ProductTypeID int,
// 	Status varchar(10),
// 	Foreign key(ProductTypeID) References ProductType(ProductTypeID)	
// )";

// $query=mysqli_query($connect,$create);

// if($query){
// 	echo "<p>Product Table Successfully Created!</p>";
// }


// $create="CREATE TABLE ProductType
// (

// 	ProductTypeID int NOT NULL Primary key AUTO_INCREMENT,
// 	ProductName varchar(30)
	
// )";

// $query=mysqli_query($connect,$create);

// if($query){
// 	echo "<p>ProductType Table Successfully Created!</p>";
// }

// $create="CREATE TABLE Customers
// (

// 	CustomerID int NOT NULL Primary key AUTO_INCREMENT,
// 	CustomerName varchar(30),
// 	PhoneNo varchar(30),
// 	Email varchar(30),
// 	Password varchar (30),
// 	Address varchar (30),	
// 	Image Text,
// 	ViewCount int
// )";

// $query = mysqli_query($connect,$create);

// if($query)

// 	{ echo "<p>Customers Table Successfully Created!</p>"; }





// $create="CREATE TABLE Bookings
// (

// 	BookingID int NOT NULL Primary key AUTO_INCREMENT,
// 	CustomerName varchar(30),	
// 	Email varchar(30),
// 	Date varchar(15),
// 	Time varchar(15),
// 	Description varchar(100)
	
// )";
// $query = mysqli_query($connect,$create);

// if($query)
// {
// 	echo "<p>Bookings Table Successfully Created!</p>";
// }



  ?>