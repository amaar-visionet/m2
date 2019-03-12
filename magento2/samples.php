<?php 
  	

	/*
		The static method in PHP is same as other OOP languages. Static method should be used only when particular data remains constant for the whole class. As an example, consider that some programmer is making the data of a college and in that every object needs getCollegeName function that returns the same college name for all objects as name of college then this function should be made static. Basically static methods are used when to access that method without the object of that class. Static method are used when there is a chance to use method without help of class objects.
	
	*/

	// PHP code for static method  
	class College 
	{ 
		private $name; 

	    // Static function 
	    static function getCollegeName() 
	    { 
	            return "MNNIT Allahabad"; 
	    } 
	      
	    // This function sets the name 
	    function setName($name) { 
	        $this -> name = $name; 
	    } 
	      
	    // This function return name 
	    function getName() { 
	        return $this -> name; 
	    } 
	} 
	  
	// Calling function without its object 
	echo (College::getCollegeName()); 


	/*--------------------------------------------------------*/


	/*
		Instance/Normal method is used when there is no chance to call the method without existing of object. For example consider a College class in which getPersonName() method which returns the name of person. This method should exist only when there is a particular type of person object.
	*/
 
	  
	// Creating an object of type College 
	$obj = new College; 
	  
	// Setting name 
	$obj -> setName("Geeks"); 
	  
	// Getting name 
	echo '<br><br>'.($obj -> getName()); 
?> 