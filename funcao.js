function gravar() {
	
	
	msg = prompt("Digite o nome: ");
	//document.write(msg);
	var ajax = new XMLHttpRequest();
	var url = "incluir.php?msg=" + msg; 
	ajax.open("GET", url, false);
	ajax.send();

	var objSaida = document.getElementById("saida");
	alert(ajax.responseText);


	


}

function editar(cod){


	editar = prompt("Digite o novo nome: ");
	//document.write(editar);
	var ajax = new XMLHttpRequest();
	var url = "editar.php?id="+cod+"&&msg="+editar; 
	ajax.open("GET", url, false);
	ajax.send();

	alert(ajax.responseText);

}


function excluir(cod){
	var btn=confirm("Você deseja realmente excluir o registro?");
	if (btn==true)
	  {

	  	var ajax = new XMLHttpRequest();
		var url = "excluir.php?id="+cod; 
		ajax.open("GET", url, false);
		ajax.send();

		alert(ajax.responseText);





	  }






}


