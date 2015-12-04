var itemsRequest = new XMLHttpRequest();
var itemsJSONobject;
itemsRequest.open("GET", "https://global.api.pvp.net/api/lol/static-data/na/v1.2/item?api_key=6bd5695e-29ee-4aef-a98a-a514b1c4dfad", true);
itemsRequest.send();
itemsRequest.onreadystatechange = function() {
  if (itemsRequest.readyState == 4 && itemsRequest.status == 200) {
	itemsJSONobject = JSON.parse(itemsRequest.responseText);
  }


var items = [];
Object.getOwnPropertyNames(itemsJSONobject.data).forEach(function(val, idx, array) {
  items.push(val);
});

var buttonsI = [];

var itemLength = items.length;
var currentitem;

for (var i = 0; i < items.length; i++) {
	var img = document.createElement("img");
	console.log(items[i]);
	img.src = "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + items[i] + ".png";

	var src = document.getElementById("itemSelect");
	src.appendChild(img);
    buttonsI.push(img);
    
}


for (var i = 0; i < buttonsI.length; i++) {
	buttonsI[i].onclick = function (i) {
		return function(){
		currentitem = items[i];
		document.getElementById("Champ2").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + items[i] + ".png";
		}
		
		
	}(i);
}
	
	
	
	document.getElementById("slot1").onclick = function (i) {
		return function(){
		
		document.getElementById("slot1").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		
		document.getElementById("image1").value= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		}
		
		
	}(i);
	
	document.getElementById("slot2").onclick = function (i) {
		return function(){
		
		document.getElementById("slot2").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		
		document.getElementById("image2").value= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		}
		
		
	}(i);
	
	document.getElementById("slot3").onclick = function (i) {
		return function(){
		
		document.getElementById("slot3").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		var hidden = document.getElementById("item3");
		console.log(hidden);
		
		document.getElementById("image3").value= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		}
		
		
	}(i);	
	document.getElementById("slot4").onclick = function (i) {
		return function(){
		
		document.getElementById("slot4").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		document.getElementById("image4").value= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		}
		
		
	}(i);	
	document.getElementById("slot5").onclick = function (i) {
		return function(){
		
		document.getElementById("slot5").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		
		document.getElementById("image5").value= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		}
		
		
	}(i);	
	document.getElementById("slot6").onclick = function (i) {
		return function(){
		
		document.getElementById("slot6").src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		
		document.getElementById("image6").value= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + currentitem + ".png";
		}
		
		
	}(i);

}
