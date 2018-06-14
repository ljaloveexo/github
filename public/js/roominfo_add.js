/**
 * 
 */
function roominfoAdd(id){
	
	 var id=id;
//	 var number=document.getElementsByTagName("input")[0];
	 var number=$("#number").val();
//	 var address=document.getElementsByTagName("input")[1];
	 var address=$("#address").val();
//	 var capacity=document.getElementsByTagName("input")[2];
	 var capacity=$("#capacity").val();
	 if(number==""||address==""||capacity==""){
		 alert("你输入的信息不完整！");
		 return false;
	 }
	   $.ajax({
       type: 'POST',
       url: 'isaddclassroominfo',//在php中全局定义url，方便使用thinkphp的U方法
        data: {p:id,number:number,address:address,capacity:capacity},
		 

//       ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
       dataType: "json",
       success: function (msg) {
       	if(msg.content==2){
       		alert("该教室已存在！");
       	}
    	   
       	else{
       		alert("添加成功！");
       		$("#user_9").replaceWith('<div id="user_10">'+msg.content+'</div>');
       		   var preview=document.getElementById("preview");
			 
				  	  preview.style.display="none";
    	   console.log("数据交互");
    	
       	}  
       },
       error: function (msg) {
    	   
    	   
    	   
    	   
           console.log("数据交互失败");
       }
   });
	
}