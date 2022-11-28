<?php
for($i=0;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo '*';
	}
	echo'<br/>';
} 







//$_SERVER is a special reserved  variable which store all server information


//echo '<pre>';print_r($_SERVER['REQUEST_URI']); // using this we can get current url 

/*To Get the ip address we use $_SERVER['REMOTE_ADD'];

GET can handle a maximum of 2048 characters, POST has no such restrictions.

Traits allow to create a reuse code.
Traits are machanism to reuse the code in single inheritance language such as php.Traits reduce the single inheritance language .

//Preventing SQL injection in PHP
1)Sanitize user input

use mysql_real_escape_string(). Basically, what it does it remove all special characters in a string



*/
//Video URL 

//https://www.youtube.com/watch?v=VXVKX4a_SgQ&ab_channel=TestyCodeiz



// Mysql Questions


//Function is a block of statement. A function not execute automatically on Page Load.and return value.

//Cookies is client side on local computer

// Session is stored data on server side 

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

Trigger can be executed automatically on some specified action invoked like insert update and delete.for example you want set if any data is inserted then email is send then after insert trigger is run.









unique key can be NULL value but primary key cannot be a NULL Value.
Primary key is only one in table and unique key is more than one

Truncate is faster then delete
we can not rollback truncated file but deleted file we can rollback
in truncate we cannot use where clouse but in delete we can use where clouse



View is virtual table . it conatin rows and column Like real table.
//command here
create VIEW viewname as
select * from table_name;

if you have a complex mysql queries you can make a view to simplify the queries.

stored procedure  is a group of statement that can be execte.

stored procedure is used for insert update and delete.

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
 is hiding the implementation details and expose only method.
 
 Inheritance
       is the process to child inherit all the properties and methods  from Parent Class.
	   
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

array(),count(),array_search(),in_array(),in_array(),array_combine(),array_mearge()




Polymorphism − This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it make take different number of arguments and can do different task.
  
  

Helper is group of function that assist the user to perform a Specific Task.



Opps

Interface allow you to specify what methods a class should implement..

Polymorphism is a OOP Patern that enables the  numerious classes with diffrent functionalities is called polymorphism.  (same Fucnction can be used for diffrent purpose is called Polymorphism)

Encapsulation is the wrapping up the member variable and function into a single unit is called encapusulation.

   
Access Modifire

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class


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
  
  
  
  

*/