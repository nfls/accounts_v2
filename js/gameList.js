$.ajax({
	type: "GET",
	url: "https://api.nfls.io/game/getList",
    xhrFields: {
        withCredentials: true
    },
	dataType: "json",
	success: function (gameList) {
		if(gameList.status=="succeed")
		{
			delete gameList.status;
			
			$.each(gameList.info,function(i,list){
				addGame(list.name,list.url,list.icon,list.description);
			});
			
		}
		else
		{

		}
			
	},
	error: function (gameList) {
	}
});
function addGame(name,url,icon,description)
{
	var gameList=document.getElementById("gameList");

	//var x_content = document.createElement("div");  
	//x_content.setAttribute("class","x_content");

	//var ul = document.createElement("ul");
	//ul.setAttribute("class","list-unstyled timeline");

	var div = document.createElement("div");
	div.setAttribute("class","card-panel grey lighten-5 z-depth-1");
	div.innerHTML='<div class="row valign-wrapper"><div class="col s2"><img width="50" src="images/'+icon+'" alt="" class="circle responsive-img"></div><div class="col s10"><span class="black-text">'+name+'</span><a href="'+url+'" class="waves-effect waves-light btn blue-grey right">LAUNCH</a><a class="waves-effect waves-light btn blue-grey right" onclick="Materialize.toast(\''+description+'\', 4000)">DETAILS</a></div></div>';
	gameList.appendChild(div);
	//li.appendChild(block);
}
