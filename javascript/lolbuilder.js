var a = new XMLHttpRequest();
var champsJSONobject;
a.open("GET", "https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion?api_key=6bd5695e-29ee-4aef-a98a-a514b1c4dfad", true);
a.send();
a.onreadystatechange = function() {
  if (a.readyState == 4 && a.status == 200) {
	champsJSONobject = JSON.parse(a.responseText);
  }


var champs = [];
Object.getOwnPropertyNames(champsJSONobject.data).forEach(function(val, idx, array) {
  champs.push(val);
});

var buttonsC = [];

var champLength = champs.length;

var currentChamp;

for (var i = 0; i < champs.length; i++) {
	var img = document.createElement("img");
	console.log(champs[i]);
	img.src = "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/champion/" + champs[i] + ".png";

	var src = document.getElementById("champSelect");
	src.appendChild(img);
    buttonsC.push(img);
    
}


for (var i = 0; i < buttonsC.length; i++) {
	buttonsC[i].onclick = function (i) {
		return function(){
		currentChamp = champs[i];
		document.getElementById("Champ").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/champion/" + champs[i] + ".png";
		}
		
		
	}(i);
	
	
	
}


}