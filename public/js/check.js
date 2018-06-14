/**
 * 
 */

function check(){
	
	var i=document.form1.name.value;
	
	if(i.length=="")
		document.getElementById("s1").innerHTML="用户名不能为空";
	else{
		document.getElementById("s1").innerHTML="";
	}
}
function reset_view(){
	console.log("1");
	var i=document.getElementById("logina");
	var object=document.getElementById("reset");
	i.innerHTML="";
	i.innerHTML=object.innerHTML;
	
}

