/**
 * 
 */
function serverAdmin(id){
	
	 var id=id;
	   $.ajax({
         type: 'POST',
         url: 'roominfoAll',//在php中全局定义url，方便使用thinkphp的U方法
          data: {p:id},
		 

//         ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
         dataType: "json",
         success: function (msg) {
      	   
			   $("#server").replaceWith('<div id="user_9">'+msg.content+'</div>');
			 
				  	  preview.style.display="none";
      	   console.log("数据交互");
      	
      	   
         },
         error: function (msg) {
      	   
      	   
      	   
      	   
             console.log("数据交互失败");
         }
     });
	
}


function serverOperate(id){
	
	 var id=id;
	
	   $.ajax({
        type: 'POST',
        url: 'orderoperationFindAll',//在php中全局定义url，方便使用thinkphp的U方法
         data: {p:id},
		 

//        ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
        dataType: "json",
        success: function (msg) {
     	      if(msg.content==0){
     	    	 $("#server").replaceWith('<img style="margin-top:50px;" src="/classroomorder_ThinkPHP/Public/images/tip.png" /><p>没有找到任何结果！</p>');
     	    	
     	      }
     	      else{
     	    	  $("#server").replaceWith('<div id="user_11">'+msg.content+'</div>');
     	      
			 
				  	  preview.style.display="none";
     	  
     	      }
     	   
        },
        error: function (msg) {
     	   
     	   
     	   
     	   
            console.log("数据交互失败");
        }
    });
	   
	   var search=document.getElementById("search");
	   var button_1=document.getElementById("button_1");
	   var button_2=document.getElementById("button_2");
	   	 search.style.cssText="margin-left: 20px;position: absolute;display: block;border: none;background-color: #444;color: #fff;border-radius: 3px;width: 136px;height: 30px;text-align: center;opacity:0.2";
	   	 search.setAttribute("onclick","javascript:return false");
	   	 button_1.style.cssText="height:31px;width: 77px;font-size: 13px;border-radius: 8px;background-color: rgb(56, 59, 66); color: white;  font-weight: bold;display: inline-block;margin-left: 20px;opacity:0.2";
	   	 button_1.setAttribute("onclick","javascript:return false");
		 button_2.style.cssText="height:31px;width: 77px;font-size: 13px;border-radius: 8px;background-color: rgb(56, 59, 66); color: white;  font-weight: bold;display: inline-block;margin-left: 20px;opacity:0.2";
		 button_2.setAttribute("onclick","javascript:return false");
		 console.log(2);
	     
}
function serverRecord(id){
	
	 var id=id;
	
	   $.ajax({
       type: 'POST',
       url: 'orderrecordFindAll',//在php中全局定义url，方便使用thinkphp的U方法
        data: {p:id},
		 

//       ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
       dataType: "json",
       success: function (msg) {
    	   
			   $("#server").replaceWith('<div id="user_12">'+msg.content+'</div>');
			 
				  	  preview.style.display="none";
    	  
    	
    	   
       },
       error: function (msg) {
    	   
    	   
    	   
    	   
           console.log("数据交互失败");
       }
   });
	  
   	
	

}

function infoAdmin(id){
	
	 var id=id;
	   $.ajax({
        type: 'POST',
        url: 'adminfindAll',//在php中全局定义url，方便使用thinkphp的U方法
         data: {p:id},
		 

//        ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
        dataType: "json",
        success: function (msg) {
     	   
			   $("#server").replaceWith('<div id="user_11">'+msg.content+'</div>');
			 
				  	  preview.style.display="none";
     	   console.log("数据交互");
     	
     	   
        },
        error: function (msg) {
     	   
     	   
     	   
     	   
            console.log("数据交互失败");
        }
    });
	
}



