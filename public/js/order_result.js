 function order_result(){
	var date=document.getElementById("Wdate").value;
	var time=document.getElementById("time").value;
	
	
	var sel=document.getElementById("selectNumber");
	var index = sel.selectedIndex;
	var number = sel.options[index].value;
	var reason=document.getElementById("reason").value;
//	console.log(date);
//	console.log(reason);
	var data={};
	data['date']=date;
	data['time']=time;	  
	data['number']=number;
	data['reason']=reason;
//	var date = JSON.stringify({"date":date});
//	var time = JSON.stringify({"time":time});
//	var number=JSON.stringify({"number":number});
//	var reason=JSON.stringify({"reason":reason});
	var data=JSON.stringify(data);
	var flag="";
//	console.log(number);
//	
//	console.log(time);
	console.log(data);
	
	  $.ajax({
             type:'POST',
             url: 'order',//在php中全局定义url，方便使用thinkphp的U方法
             data:{"date":date,"time":time,"number":number,"reason":reason},
//             ajax要求json对象或json字符串才能传输,json_data只是json字符串而已
             dataType: "json",
             
             success: function (data) {
//            	 var data=eval("("+data+")");
            	
            	
				if(data['result']=='1'){
					
					alert("预订成功！");
					
				}
				if(data['result']=='0'){
					alert("预订失败！");
					
				}
				if(data['result']=='-1'){
					alert("已被预订！");
					
				}
				location.reload(true);
             },
            
             error: function (data) {
            	 

            	 alert(c);
                 console.log("数据交互失败");
             }
             
         });
	  
	
 
 }
 


	













	