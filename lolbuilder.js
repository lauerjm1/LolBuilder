var champs = ["Ahri", "Thresh", "Janna"];

var items = ["A", "Volvo", "BMW"];
var buttonsC = [];

var champLength = champs.length;

var itemLength = items.length;
var currentChamp;
var currentItem;

for (var i = 0; i < 30; i++) {
	var img = document.createElement("img");
	img.src = "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/champion/Aatrox.png" ;

	var src = document.getElementById("champSelect");
	src.appendChild(img);
    buttonsC.push(img);
    
}


for (var i = 0; i < buttonsC.length; i++) {
	buttonsC[i].onclick = changecurrentC(i);
	
	
	
}

function changecurrentC(i) {
    currentChamp = champs[i];
}