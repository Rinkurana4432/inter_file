<?php
/*
//Q: Load Balancer for overload Traffic on website.
// Load balancing is a core networking solutions used to distribute the traffic accorss the multiple server.
Load balancer improve the application availability and server overload. 


//require() and require_once() both are used to include the file but second function check the php secript  is already added or not before the execution.


//$_SERVER is a special reserved  variable which store all server information


//echo '<pre>';print_r($_SERVER['REQUEST_URI']); // using this we can get current url 

/*To Get the ip address we use $_SERVER['REMOTE_ADD'];

GET can handle a maximum of 2048 characters, POST has no such restrictions.

Traits allow to create a reuse code.
Traits are machanism to reuse the code in single inheritance language such as php.Traits reduce the single inheritance language.

//Preventing SQL injection in PHP
//////
1) Sanitize user input
2) SQL injection is a method where a malicious user can inject some SQL commands to display other information or destroy the database

use mysql_real_escape_string(). Basically, what it does it remove all special characters in a string

use trim() function and strip_tags() . trim function remove the blank space and strip_tags strips the html and php tags.


//Steps for make a website for secure


->Passwords are encrypted using bcrypt()
->All messages are encrypted using mcrypt_ecb()
->Pages can only be accessed when isset($_SESSION["id"]) ie logged in.
->error_reporting(0);to hide errors.
->$_POST instead of $_REQUEST
->mysql_real_escape_string(); for every input


My Sql Query to get second heighest salary  From database 


Select Salary from employee where salaray order by salary desc limit 1,1 // if we get third highest salary then we have change the first number in query that is 1 or 2


*/
//Video URL 

//https://www.youtube.com/watch?v=VXVKX4a_SgQ&ab_channel=TestyCodeiz



// Mysql Questions


//Function is a block of statement. A function not execute automatically on Page Load.and return value.

//Cookies and Sessions are used to store information. Cookies are only stored on the client-side machine, while sessions get stored on the client as well as the server.
//Cookies are little text-based files that are kept on the user's computer and are accessible only by that user's browser. It is possible for a cookie's size to reach a maximum of 4 KB.

//Cookies is client side on local computer using unset($_COOKIE['key']);

// Session is stored data on server side using session_destroy()  we distroy the session

//Cookies  stored on limit data
// Cookies is not secure

// Session have no character Limit


// Five Type of Table in used in mysql 

// MyISAM
// HEAP
// Inodb
// ISAM  stand for Indexed Sequential access method developed my IBM
// Merge


/*
Trigger
Before Insert
After Insert
Before Update
After Update
Before Delete
After Delete

Trigger can be executed automatically on some specified action invoked like insert update and delete.
for example you want set if any data is inserted then email is send then after insert trigger is run.









unique key can be NULL value but primary key cannot be a NULL Value.
Primary key is only one in table and unique key is more than one.
Forgien key is a primary key of another table. Its used to join two or more table . 

Truncate is faster then delete
we can not rollback truncated file but deleted file we can rollback
in truncate we cannot use where clouse but in delete we can use where clouse



View is  a virtual table . it conatin rows and column Like real table.
//command here
create VIEW viewname as
select * from table_name;

if we have a complex mysql queries we can make a view to simplify the queries.

stored procedure  is a group of statement that save in the database.
//Using this type we can create in database 
CREATE PROCEDURE procedure_name [ (parameter datatype [, parameter datatype]) ]    
BEGIN    
    Body_section of SQL statements  
END; 

Q: how to execute the stored Procedure.
A: We can execute the a stored Procedure using CALL query.
  CALL Fucntion_name(data)   
  
	stored procedure is used for insert update and delete.

Q: what is index in mysql.
A: Indexes are used to retrieve data from the database more quickly than otherwise. 
   The users cannot see the indexes, they are just used to speed up searches/queries.

	syntax---
	CREATE INDEX index_name
	ON table_name (column1, column2, ...);
Q: what is unique index.
A: In unique index duplicate value are not allowed.
   syntax---
	CREATE UNIQUE INDEX index_name
	ON table_name (column1, column2, ...);


and view is used for select Command only.

OOPS
-----
Class is user defined data type which defined local variables and functions.

class books{
	public function name(){
		echo 'book name';
	}
	public function price(){
		echo '201';
	}
}

//to create a object we use 'new' operator.

$obj = new Books();
$obj->name();
$obj->price();

Encapsulation
 Is hiding the implementation details and expose only method.( encapusulation hide the internal functionalities of the program) 
 for example we start a car using press the start button but we do'nt  know the internal functionality of car start
 
 Inheritance
       is the process to child inherit all the properties and methods  from Parent Class using  extend method.
	   
     php is single inheritance language in which only parent class extends by the child.



Authentication and Autherization


Authentication is the process to check who is the user.
Autherization is the Process to check what they have access(Like which type of role assign to the Person).

For Example : 

Go to airport show id card  for authenticate. and when you arrive the gate you show your boarding pass to the flight 




API Interview Questions

REST stands for Representational State Transfer .These serverice Provide Maintainablity and scalability.

SOAP- Soap stands for Simple object Access Protocol.

SOAP is Slow and REST is Faster.


JSON stands for JavaScript Object Notation. JSON is a lightweight format for storing and 
transporting data.JSON is often used when data is sent from a server to a web page.

A JSON web token(JWT) is JSON Object which is used to securely transfer information over the web(between two parties).




Joins

Innner Joins get all matching Records From Both tables.
Outer joins get all matching and non matching records from Both table.
Left Joins get All Records of Left table and matching Rows from right Table those are matching.
Right Joins get All Records from Right Table and matchig rows from left table.
The CROSS JOIN keyword returns all records from both tables (table1 and table2).


#Explain the difference between $message and $$message

$message is a variable and $$message is refrenced variable.

#Variables in php
array,object,integer,NULL,Duble,Boolean


5 array function

array(),count(),array_search(),in_array(),array_combine(),array_mearge()



We use array_merge() function to merge one or more arrays into one array. In this process, 
the array elements are appended to the end of the previous array to return the new array.

We use array_combine() function to combine two arrays and creates a new array using 
one array as key and another as value. It takes two parameters and both should have the same number 
of elements otherwise it will show a warning message.



  
  

Helper is group of function that assist the user to perform a Specific Task.



Opps

Interface allow you to specify what methods a class should implement..

Polymorphism is a OOPs Pattern that enables the  numerious classes with diffrent functionalities is called polymorphism.  
(same Fucnction can be used for diffrent purpose is called Polymorphism)

Encapsulation is the wrapping up the member variable and function into a single unit is called encapusulation.

   
Access Modifire

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class

////////
Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way



Namespace is a object oriented concept. Namespace allows us to use the same function or class name in different parts of
 the same program without causing a name collision. 
A Namespace can be defined using the keyword The namespace.

Examples 

class fruit(){
	Public $name;
	Protected $color;
	Private $weight;
}

  $f = new fruit();
  
  $f->name = "mango";
  $f->color = "yellow";
  $f->weight ="300";
  
  
  Questions: what is object in class.
  Answers: Object is Instance of class.
  
  
  
  
  
  Features of MYSQL 
  Mysql is cross platform data base server. it can run on Different plateform like Linux,Solaris and Windows etc,
  
  mysql is very easy to use.You can build and interact with MySQL with only the basic knowledge of MySQL and a few simple SQL statements.
  
  1)Mysql is Freely avilable System.
  2)Mysql Can Run on multiple Platefroms such as linux , unix and window.
  3)mysql gives high performance result without losing essential functionality.
  4)Its free to use.
  5)mysql is low memory Leakage.
  6) Mysql gives the high productivity with the help of view,Trigger and Stored Procedure.
  7) Mysql allow transaction to be rollback.
  
  Mysql is supported by oracle and based on structured query lannguage.
  

question:- What is heap table.
Answers:- These are avilable in memory for high speed storage Temporarliy.Heap tables and indexes do not support an auto-increment function and should be NOT NULL.


Name the diffrent type of table in mysql.

MYISAM  "is the default storage engine in MySQL



1)MYISAM
2)ISAM     //Indexd Sequential access method
3)HEAP
4)Mearge
5)Inno DB


Questions: How can you change the root password if it is lost?
In such cases when the password is lost, the user should start the DB with skip-grants-table and then change the password. Thereafter, with the new password, the user should restart the DB in a normal mode.

Questions: How to resolve the problem of the data disk that is full?
When the data disk is full and overloaded, the way out is to create a soft link and move the .frm and the .idb files into that link location.

Q:How to change the MySQL password?
A:ALTER USER 'root'@'localhost' IDENTIFIED BY 'NewPassword';  
 
 
 Questions : what is Localstorage.
 Answers: Local storage is Client side and PHP is server side,so you cannot access Local Storage on the server until the client loads the page.
 
 
 
 how to store data in local storage in php 

		function createItem() {
				localStorage. setItem('nameOfItem', 'value');
		}
			createItem() // Creates a item named 'nameOfItem' and stores a value of 'value'
​
		function getValue() {
				return localStorage.
		}      //Gets the value of 'nameOfItem' and returns it.

	

	
	//Yii2
	
	How to get Last inserted id.
	
	$id = Yii::$app->db->getLastInsertID();
	
	
	Select Command
	
	
	$user = Yii::app()->db->createCommand()
    ->select('id, username, profile')
    ->from('tbl_user')
    ->where('id=:id', array(':id'=>$id))
    ->queryRow();
	
	Insert Command
	Yii::app()->db->createCommand()->insert('tbl_user',['name' => 'yii','status' => 1,])->execute();
	
	
	What is JSON.
	1) JSON stands for javascript object notation.
	2) JSON is light weight format for data sorting and transporting data.
	3) JSON is used when data is sent from server to web page.
	
	
	
	
	Q: What is middle ware in laravel.
	A: Middleware provide a convenient mechanism for filtering HTTP requests entering the application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.
	
	Q: What are migrations in Laravel?
    A: Migration is a feature of Laravel that allows you to modify and share the application's database schema.
	
	
	
	
	
	
	==> str_replace php function is used to replace the string str_replace('replaced string','replaced_by',$string);
	
	$string = 'Hello Dear where are you';
	==> str_pos is used to get the string Position str_pos($string,'Dear');output = 6
	
	==> substr function is used to like we want to show first 100 characters from string 
	       then we use substr($string,0,100);


*/

