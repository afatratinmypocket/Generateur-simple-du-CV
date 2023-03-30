//Restorer les donnees du formulaire
function resetinfolang() {
	document.getElementById('fr').value = '';
	document.getElementById('en').value = '';
	document.getElementById('ar').value = '';
	document.getElementById('ch').value = '';
	document.getElementById('ru').value = '';
	document.getElementById('sp').value = '';
}
function resetinfocs() {
	for(var i=1; i<=3; i++){
		document.getElementById("dip"+i).value = '';
		document.getElementById("eta"+i).value = '';
		document.getElementById("d"+i).value = '';
	}		  
}
function resetinfoex() {
	for(var i=1; i<=3; i++){
		document.getElementById("e"+i).value = '';
		document.getElementById("p"+i).value = '';
		document.getElementById("dm"+i).value = '';
	}
}
function resetinfota() {
 	document.getElementById('prop').value = '';
}
//importer l'image au site
var imagesrouce="images/site/defpic.png";
function preview_image(event) 
{
	var reader = new FileReader();
	reader.onload = function()
	{
		var output = document.getElementById('output_image');
		output.src = reader.result;

		var imgsrc = document.getElementById('imgsrc');
		imgsrc.value = reader.result;
		imagesrouce=reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
}
//Restorer l'image
function resetinfoprim() {
	document.getElementById("infoprim").reset();

	let imgdef =  document.getElementById('output_image');
	imgdef.setAttribute('src','images/site/defpic.png');
}
//Si l'utilisaleur oublier d'importer son image
function oublierimage(){
	if(imagesrouce=="images/site/defpic.png"){
		alert("Vous avez oblier d'uploadi votre image !");
	}
}