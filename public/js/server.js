
function server(id){
	
	
	   var id=id;
    	   $.ajax({
               type: 'POST',
               url: 'orderinfo',//在php中全局定义url，方便使用thinkphp的U方法
                data: {p:id},
  			 

//               ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
               dataType: "json",
               success: function (msg) {
            	   
				   $("#server").replaceWith('<div id="user_7">'+msg.content+'</div>');
				 
					  	  preview.style.display="none";
            	   console.log("数据交互");
            	
            	   
               },
               error: function (msg) {
            	   
            	   
            	   
            	   
                   console.log("数据交互失败");
               }
           });
    	
     }     
    