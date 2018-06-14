 function add_engineer_modal_submit(){
	 var sel = document.getElementById("selectNumber");
	
	 var index = sel.selectedIndex;
	 var id = sel.options[index].value;
	
if(id){
	  var json_data = JSON.stringify({"id":id});
	   var conf=JSON.stringify({"id":id});
	  $.ajax({
             type: 'POST',
             url: 'classroomOrder',//在php中全局定义url，方便使用thinkphp的U方法
              data: {json_data: json_data,conf:conf},
			 

//             ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
             dataType: "json",
             success: function (data) {
				
                  document.getElementById("showNum").innerHTML=data['1'];
//				 // document.getElementById("showNum").innerHTML=data;

                  document.getElementById("showConf").innerHTML=data['2'];
               
             },
             error: function (data) {
                 console.log("数据交互失败");
             }
         });
     }
 else{
	 alert("未选中任何编号");
 }
 }


	













	