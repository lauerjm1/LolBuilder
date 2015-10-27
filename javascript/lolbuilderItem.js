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
		document.images["Champ2"].src= "http://ddragon.leagueoflegends.com/cdn/5.21.1/img/item/" + items[i] + ".png";
		}
		
		
	}(i);
	
	
	
}


}