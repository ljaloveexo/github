/**
 * 
 */
 function search_admin(){
	  
	  var search_text=document.getElementById("search_text");
	  search_text.style.display="block";
	 
	  search_btn.style.display="block";
		  console.log(search_btn);
  }

 function roominfo_searchAdmin(id){
 	
 	   
 	   var id=id;
 	   var number=document.getElementById("search_text").value;
 	   var tb=document.getElementById("tb").value;
 	   var page=document.getElementById("page").value;
 	   console.log(number);
     	   $.ajax({
                type: 'POST',
                url: 'roominfo_searchAdmin',//在php中全局定义url，方便使用thinkphp的U方法
                 data: {p:id,number:number,tb:tb,page:page},
   			 

//                ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
                dataType: "json",
                success: function (msg) {
             	   
 				   $("#server").replaceWith('<div id="user_8">'+msg.content+'</div>');
 				 
 					  	  preview.style.display="none";
 				   
             	   console.log("数据交互");
             	
             	   
                },
                error: function (msg) {
             	   
             	   
             	   
             	   
                    console.log("数据交互失败");
                }
            });
     	
      }     
 