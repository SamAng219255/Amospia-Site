function tree15(input) {//move
	var success=false;
	if(input=="north") {
		player.position.z--;
		success=true;
	} else if(input=="south") {
		player.position.z++;
		success=true;
	} else if(input=="west") {
		player.position.x--;
		success=true;
	} else if(input=="east") {
		player.position.x++;
		success=true;
	} else {transceive("Sorry, you did not enter a valid diection. "+
		"Valid directions are: north, south, west, and east.","tree1")}
	if(!(inInterval(player.position.x,mapSize) && inInterval(player.position.z,mapSize))) {
		transmit("As you begin travelling "+input+", you approach a sheer drop extending infinitly before you.","info");
		transmit("You don't go that way.","player");
		if(input=="north") {
			player.position.z++;
		} else if(input=="south") {
			player.position.z--;
		} else if(input=="west") {
			player.position.x++;
		} else if(input=="east") {
			player.position.x--;
		}
		transceive(baseText(),"tree1")
		success=false;
	}
	if(success==true) {
		success=false;
		transmit("You travel "+input+".");
		$("body")[0].style="background-image:url('img/backgrounds/"+map["x"+player.position.x]["y"+player.position.y]["z"+player.position.z].Name+".jpg')";
		transceive(baseText(),"tree1")
	}
	shouldUpdate=true;
}