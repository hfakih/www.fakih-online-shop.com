// JavaScript Document

function checkQuantity(quantityId)
{

	var itemId = "quan"+quantityId;
	var quantity = document.getElementById(itemId).value;

	/*		Regular Expression 

	*/
	
	//-------------------------------------------------

	var quantityMuster = /^[0-9]{1,2}$/;
	
	
	if(quantity == "")
	{
		alert("Bitte Quantity eingeben");
		return false;
	}
	if(!quantityMuster.test(quantity))
	{	
		alert("Please check your quantity: only a maximum of two digits are allowed to enter");
		return false;
	}
} //ende checkQuantity