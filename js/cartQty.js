var qty=document.getElementsByClassName("qty");
var remove=document.getElementsByClassName("remove");
for(let i=0; i<qty.length; i++){
	qty[i].addEventListener("click", changeQty, true);
}
for(let i=0; i<remove.length; i++){
	remove[i].addEventListener("click", removeCartLign, true);
}

function changeQty(e){
	var xhr = getXMLHttpRequest(); 
	var add=e.target.value;
	var index=e.target.parentNode.parentNode.getAttribute('id');

	xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                changeTotal(xhr.responseText, index); // Données textuelles récupérées
        }
	};
	xhr.open("GET", "index.php?ctrl=cart&action=update&add="+add+"&index="+index, true);

	xhr.send(null);
}
function removeCartLign(e){
	var xhr = getXMLHttpRequest(); 
	var add=e.target.value;
	var index=e.target.parentNode.parentNode.getAttribute('id');
	
	xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                removeTr(index);
        }
	};
	xhr.open("GET", "index.php?ctrl=cart&action=remove&index="+index, true);

	xhr.send(null);
}
function changeTotal(total, index){
	var subTotal=document.getElementById("total"+index);
	var newPrice =(subTotal.getAttribute("data_price")*total).toFixed(2);
	subTotal.textContent=newPrice;
	
	updateTotal();
}

function removeTr(index){
	var cartHeader=document.querySelector("#cart span");
	var table=document.getElementsByTagName("tbody")[0];
	var trRemove=document.getElementById(index); 
	table.removeChild(trRemove);
	cartHeader.textContent=document.getElementsByClassName("subtotal").length;
	
	updateTotal();
}

function updateTotal(){
	var allSubTotal=document.getElementsByClassName("subtotal");
	var greatTotal=document.getElementById("total");
	var add=0;
	
	for(let i=0; i<allSubTotal.length; i++){
		add+=Number(allSubTotal[i].textContent); 
	}
	greatTotal.textContent=add.toFixed(2);
}


