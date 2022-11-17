<?php

//$_SERVER is a special reserved  variable which store all server information

echo '<pre>';print_r($_SERVER['REQUEST_URI']);






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





Traits are machanism to reuse the code in single inheritance language such as php.Traits reduce the single inheritance language .



unique key can be NULL value but primary key cannot be a NULL Value.
Primary key is only one in table and unique key is more than one

Truncate is faster then delete
we can not rollback truncated file but deleted file we can rollback
in truncate we cannot use where clouse but in delete we can use where clouse



View is virtual table . it conatin rows and column Like real table.
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
     php is single inheritance language in which only parent class extends by the child.


*/