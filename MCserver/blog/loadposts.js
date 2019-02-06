function setStars() {
	wrapper2=document.getElementById("wrapper2");
	stars1=document.getElementById("stars1");
	stars2=document.getElementById("stars2");
	stars3=document.getElementById("stars3");
	stars1.style.height=Math.max(wrapper2.scrollHeight,stars1.clientHeight);
	stars2.style.height=Math.max(wrapper2.scrollHeight,stars2.clientHeight);
	stars3.style.height=Math.max(wrapper2.scrollHeight,stars3.clientHeight);
}
function setup() {
	setupNoPosts();
	textBox=$("#text");
	updatePosts();
	updateInterval=setInterval(updatePosts,500);
}
function setupNoPosts() {
	if(loggedin) {
		profileIcon=document.getElementById("profile");
		$.get("skins/"+username+".png")
		.done(function() { 
			profileIcon.style="background-image: url(skins/"+username+".png), url(skins/"+username+".png);";
		}).fail(function() { 
			$.get("getSkin.php",function(data) {
				if((/^\.\/(skins|img)\/[a-zA-Z0-9_]+\.png$/).test(data)) {
					profileIcon.style="background-image: url("+data+"), url("+data+");";
				}
			})
		})
	}
	stellarInterval=setInterval(setStars,100);
	wrapper=document.getElementById("wrapper");
	wrapper.addEventListener("scroll",checkBottom,{passive:true})
	document.getElementById("tagSearchButton").addEventListener('click',tagSearch);
	document.getElementById("tagSearch").addEventListener('keypress',function(e){if(e.which==13||e.keyCode==13){tagSearch()}});
}
function tagSearch() {
	var gotten=$("#tagSearch").val();
	if((/^[a-z0-9]+$/).test(gotten)) {
		location.href="./?tag="+gotten;
	}
	else {
		alert("Tags must be alphanumeric. (Only include letters and numbers.)");
	}
}
latestId=-1;
oldestId=Infinity;
loadFinished=false;
function updatePosts() {
	$.getJSON("getPosts.php",{start:latestId,count:25,sort:"ASC"},function(data) {
		for(var i=0; i<data.posts.length; i++) {
			var fullTime=data.posts[i].time.split(" ");
			var sentTime=fullTime[0];
			var time=new Date();
			var yr=time.getFullYear()+"";
			var mon=(time.getMonth()+1)+"";
			var day=time.getDate()+"";
			if(mon.length<2) {
				mon=0+mon;
			}
			if(day.length<2) {
				day=0+day;
			}
			var date=yr+"-"+mon+"-"+day;
			if(date==fullTime[0]) {
				sentTime=fullTime[1];
			}
			var t=data.posts[i].time.split(/[- :]/);
			var d=Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
			textBox.prepend('<div class="card" user="'+data.posts[i].username+'"><div class="postmeta"><div class="h">'+data.posts[i].username+'</div> <div class="topic">'+data.posts[i].topic+'</div> <div class="time">'+sentTime+', '+getTimeOnServer(d).yr+'</div></div><div class="stuffing">'+data.posts[i].content+'</div></div>');
		}
		if(data.posts.length>0) {
			oldestId=Math.min(data.posts[0].id,oldestId);
			latestId=data.posts[data.posts.length-1].id;
			loadFinished=true;
		}
		styleBox=document.getElementById("userstyles");
		var styleStr=""
		for(var i=0; i<data.styles.length; i++) {
			styleStr+="\n.card[user="+data.styles[i].username+"] {\n	color: #"+data.styles[i].forecolor+";\n	background-color: #"+data.styles[i].backcolor+";\n}";
		}
		styleStr+="\n";
		styleBox.innerHTML=styleStr;
	});
}
function checkBottom(e) {
	if(wrapper.scrollTop+wrapper.clientHeight>=wrapper.scrollHeight) {
		getOld();
	}
}
function getOld() {
	$.getJSON("getPosts.php",{start:oldestId,count:25,sort:"DESC"},function(data) {
		for(var i=0; i<data.posts.length; i++) {
			var fullTime=data.posts[i].time.split(" ");
			var sentTime=fullTime[0];
			var time=new Date();
			var yr=time.getFullYear()+"";
			var mon=(time.getMonth()+1)+"";
			var day=time.getDate()+"";
			if(mon.length<2) {
				mon=0+mon;
			}
			if(day.length<2) {
				day=0+day;
			}
			var date=yr+"-"+mon+"-"+day;
			if(date==fullTime[0]) {
				sentTime=fullTime[1];
			}
			var t=data.posts[i].time.split(/[- :]/);
			var d=Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
			textBox.append('<div class="card" user="'+data.posts[i].username+'"><div class="postmeta"><div class="h">'+data.posts[i].username+'</div> <div class="topic">'+data.posts[i].topic+'</div> <div class="time">'+sentTime+', '+getTimeOnServer(d).yr+'</div></div><div class="stuffing">'+data.posts[i].content+'</div></div>');
		}
		if(data.posts.length>0) {
			oldestId=data.posts[data.posts.length-1].id;
		}
	});
}