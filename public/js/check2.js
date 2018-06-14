/**
 * 
 */

function check2(){
	 
var name=document.form1.name.value;
var password=document.form1.password.value;
var checkcode=document.form1.checkcode.value;
if(name.length==""||password.length==""||checkcode.length==""){
	
	 alert("表单不能为空！");
	 window.location.href="index.html";
	  return false;
}
    

var flag=false;
if(form1.login.length!=null){
var radio=form1.login.length;
for(i=0;i<radio;i++){
	if(form1.login[i].checked==true)
		flag=true;
}
}
if(!form1.login.length!==""&&flag==false)
    alert("未选择任何类型！");
//var list=document.form1.data1.value;
//    alert("111");
//    if(!list.length=="")
//    alert("hhh");
     
     
    
    
    
}