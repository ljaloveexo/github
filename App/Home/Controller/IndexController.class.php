<?php

namespace Home\Controller;
header("Content-Type:text/html; charset=utf-8");
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "寰蒋闆呴粦"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>娆㈣繋浣跨敤 <b>ThinkPHP</b>锛�</p><br/>鐗堟湰 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$this->display();
    }
    
    /** 登录 */
    public function login(){
    	if (IS_POST) {
    
    		// if($_POST['account']==""||$_POST['password']==""||$_POST['checkCode']=="") {
    			// header("Location:index");
    		// }
    		if($_POST['login']=="") {
    			//
    			header("Location:index");
    		}
    		$code=$_POST['checkCode'];
    		$v=new\Think\Verify();
    		
    			if($v->check($code)===false){
    		
    
    		$this->display('Index/index');
    		echo "<script>alert('验证码错误！');</script>";
    		
    		}
    		// 实例化Login对象

    		
    		else{
    		
    			$userinfo=D('account');
    			// 自动验证 创建数据集
    			if (!$data = $userinfo->create()) {
    			//设置编码格式
    			header("Content-type: text/html; charset=gb2312");
    			exit($student->getError());
    		}
    		// 组合查询条件
    			$where = array();
    			$where['account'] = $data['account'];
    					$result = $userinfo->where($where)->field('id,account,password,type,name')->find();
    			// 验证用户名 对比 密码
    			if ($result && $result[md5('password')] == $result[md5('password')]&&$result['type']==$_POST['login']) {
    			// 存储session
    			if($result['type']=='user'){
//     			ini_set('session_gc_maxlifetime',1440);
    			session('id', $result['id']);          // 当前用户id
    			session('user', $result['name']);   // 当前用户名字
    			}
    			// 更新用户登录信息
    			$where['account'] = session('user');
    				// 更新登录时间和登录ip
    				M('account')->where($where)->save($data);
    				//var_dump($result);登录用户数据信息
    						if($_POST['login']=='user'){
    
//     						$this->display('Index/informationUser');
                            $this->redirect('Index/infoUserFind');
    			}
    								if($_POST['login']=='admin'){
    			$this->redirect('Index/classroomFindAll');
    			}
    
    			}
    			else{
    		    $this->display('Index/index');
    			echo "<script>alert('用户名或密码不正确！');</script>";
				}
    			
    		
    		}
//     			
    						
    	}
    		
    			
    }
     
    /** 验证码*/
    public function  createCode(){
    $v=new\Think\Verify();
//     $v->useZh=true;
//     $v->zhSet='们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这主中人上为来分生对于学下级地个用同行面说种过命度革而多子后自社加小机也经力线本电高量长党得实家定深法表着水理化争现所二起政三好十战无农使性前等反体合斗路图把结第里正新开论之物从当两些还天资事队批点育重其思与间内去因件日利相由压员气业代全组数果期导平各基或月毛然如应形想制心样干都向变关问比展那它最及外没看治提五解系林者米群头意只明四道马认次文通但条较克又公孔领军流入接席位情运器并飞原油放立题质指建区验活众很教决特此常石强极土少已根共直团统式转别造切九你取西持总料连任志观调七么山程百报更见必真保热委手改管处己将修支识病象几先老光专什六型具示复安带每东增则完风回南广劳轮科北打积车计给节做务被整联步类集号列温装即毫知轴研单色坚据速防史拉世设达尔场织历花受求传口断况采精金界品判参层止边清至万确究书术状厂须离再目海交权且儿青才证低越际八试规斯近注办布门铁需走议县兵固除般引齿千胜细影济白格效置推空配刀叶率述今选养德话查差半敌始片施响收华觉备名红续均药标记难存测士身紧液派准斤角降维板许破述技消底床田势端感往神便贺村构照容非搞亚磨族火段算适讲按值美态黄易彪服早班麦削信排台声该击素张密害侯草何树肥继右属市严径螺检左页抗苏显苦英快称坏移约巴材省黑武培著河帝仅针怎植京助升王眼她抓含苗副杂普谈围食射源例致酸旧却充足短划剂宣环落首尺波承粉践府鱼随考刻靠够满夫失包住促枝局菌杆周护岩师举曲春元超负砂封换太模贫减阳扬江析亩木言球朝医校古呢稻宋听唯输滑站另卫字鼓刚写刘微略范供阿块某功套友限项余倒卷创律雨让骨远帮初皮播优占死毒圈伟季训控激找叫云互跟裂粮粒母练塞钢顶策双留误础吸阻故寸盾晚丝女散焊功株亲院冷彻弹错散商视艺灭版烈零室轻血倍缺厘泵察绝富城冲喷壤简否柱李望盘磁雄似困巩益洲脱投送奴侧润盖挥距触星松送获兴独官混纪依未突架宽冬章湿偏纹吃执阀矿寨责熟稳夺硬价努翻奇甲预职评读背协损棉侵灰虽矛厚罗泥辟告卵箱掌氧恩爱停曾溶营终纲孟钱待尽俄缩沙退陈讨奋械载胞幼哪剥迫旋征槽倒握担仍呀鲜吧卡粗介钻逐弱脚怕盐末阴丰雾冠丙街莱贝辐肠付吉渗瑞惊顿挤秒悬姆烂森糖圣凹陶词迟蚕亿矩康遵牧遭幅园腔订香肉弟屋敏恢忘编印蜂急拿扩伤飞露核缘游振操央伍域甚迅辉异序免纸夜乡久隶缸夹念兰映沟乙吗儒杀汽磷艰晶插埃燃欢铁补咱芽永瓦倾阵碳演威附牙芽永瓦斜灌欧献顺猪洋腐请透司危括脉宜笑若尾束壮暴企菜穗楚汉愈绿拖牛份染既秋遍锻玉夏疗尖殖井费州访吹荣铜沿替滚客召旱悟刺脑措贯藏敢令隙炉壳硫煤迎铸粘探临薄旬善福纵择礼愿伏残雷延烟句纯渐耕跑泽慢栽鲁赤繁境潮横掉锥希池败船假亮谓托伙哲怀割摆贡呈劲财仪沉炼麻罪祖息车穿货销齐鼠抽画饲龙库守筑房歌寒喜哥洗蚀废纳腹乎录镜妇恶脂庄擦险赞钟摇典柄辩竹谷卖乱虚桥奥伯赶垂途额壁网截野遗静谋弄挂课镇妄盛耐援扎虑键归符庆聚绕摩忙舞遇索顾胶羊湖钉仁音迹碎伸灯避泛亡答勇频皇柳哈揭甘诺概宪浓岛袭谁洪谢炮浇斑讯懂灵蛋闭孩释乳巨徒私银伊景坦累匀霉杜乐勒隔弯绩招绍胡呼痛峰零柴簧午跳居尚丁秦稍追梁折耗碱殊岗挖氏刃剧堆赫荷胸衡勤膜篇登驻案刊秧缓凸役剪川雪链渔啦脸户洛孢勃盟买杨宗焦赛旗滤硅炭股坐蒸凝竟陷枪黎救冒暗洞犯筒您宋弧爆谬涂味津臂障褐陆啊健尊豆拔莫抵桑坡缝警挑污冰柬嘴啥饭塑寄赵喊垫丹渡耳刨虎笔稀昆浪萨茶滴浅拥穴覆伦娘吨浸袖珠雌妈紫戏塔锤震岁貌洁剖牢锋疑霸闪埔猛诉刷狠忽灾闹乔唐漏闻沈熔氯荒茎男凡抢像浆旁玻亦忠唱蒙予纷捕锁尤乘乌智淡允叛畜俘摸锈扫毕璃宝芯爷鉴秘净蒋钙肩腾枯抛轨堂拌爸循诱祝励肯酒绳穷塘燥泡袋朗喂铝软渠颗惯贸粪综墙趋彼届墨碍启逆卸航衣孙龄岭骗休借';            // 中文验证码字符串
    					
    $v->entry();
    }
    
 
   
    
    /** 查看所有管理员信息*/
    public function adminfindAll(){
    	$db = M('account');							// 实例化模型类,参数数据表名称，不包含前缀
    	
    	$count=$db->count();
    	//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
    	$p=new \Home\Controller\AjaxPage($count,10,'infoAdmin');
    	//产生分页信息
    	$page=$p->show();
    	
    	
    	//要查询的数据,limit表示每页查询的数量，这里为10条
    	$data = $db->where(" type IN ('admin')")->limit($p->firstRow.','.$p->listRows)->select();
    	//assign方法往模板赋值
    	$this->assign('list',$data);
    	$this->assign('data',$page);
    	 
    	//ajax返回信息
    	$msg['content']=$this->fetch('Index/infoAdmin_page');
    	 
    	$this->ajaxReturn($msg);
    }
    
    /** 查看所有教室*/
  
    
    public function roominfoAll(){
    	 
    	$db =D('classroominfo'); // 实例化模型类,参数数据表名称，不包含前缀
    	$count=$db->count();
    	//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
    	$p=new \Home\Controller\AjaxPage($count,10,'serverAdmin');
    	//产生分页信息
    	$page=$p->show();
    
    
    	//要查询的数据,limit表示每页查询的数量，这里为10条
    	$data = $db->limit($p->firstRow.','.$p->listRows)->select();
    	//assign方法往模板赋值
    	$this->assign('list',$data);
    	$this->assign('data',$page);
    	
    	//ajax返回信息
    	$msg['content']=$this->fetch('Index/roominfo_page');
    	
    	$this->ajaxReturn($msg);
    }
    public function roominfo_searchAdmin(){
    	
    
    	$number=$_POST['number'];
    	$tb=$_POST['tb'];
    	$pg=$_POST['page'];
    	file_put_contents('log.txt',$pg,FILE_APPEND);
    	$db =M($tb); // 实例化模型类,参数数据表名称，不包含前缀
    	
    	
    	
    	$count=$db->where("number='$number'")->count();
    	
    	//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
    	$p=new \Home\Controller\AjaxPage($count,10,'roominfo_searchAdmin');
    	//产生分页信息
    	$page=$p->show();
    	
    	
    	//要查询的数据,limit表示每页查询的数量，这里为10条
    	$data = $db->where("number='$number'")->limit($p->firstRow.','.$p->listRows)->select();
    	//assign方法往模板赋值
    	$this->assign('list',$data);
    	$this->assign('data',$page);
    	 
    	//ajax返回信息
    	$msg['content']=$this->fetch($pg);
    	
    	
    	
    	$this->ajaxReturn($msg);
    }
    

    
    /** 预定处理信息输出*/
    public function orderoperationFindAll()
    {
    	$db =M('orderoperation'); // 实例化模型类,参数数据表名称，不包含前缀
    	file_put_contents('log.txt',$db,FILE_APPEND);
    	$count=$db->count();
    	//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
    	$p=new \Home\Controller\AjaxPage($count,10,'serverOperate');
    	//产生分页信息
    	$page=$p->show();
    	
    	
    	//要查询的数据,limit表示每页查询的数量，这里为10条
    	$data = $db->limit($p->firstRow.','.$p->listRows)->select();
    	//assign方法往模板赋值
    	$this->assign('list',$data);
    	$this->assign('data',$page);
    	if($count==0){
    		$msg['content']=0;
    	}
    	//ajax返回信息
    	else{
    		$msg['content']=$this->fetch('Index/operate_page');
    	}
    	$this->ajaxReturn($msg);
    }
    
    /** 预定处理结果输出*/
    public function orderrecordFindAll()
    {
    	$db =M('orderrecord'); // 实例化模型类,参数数据表名称，不包含前缀
    	$count=$db->count();
    	//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
    	$p=new \Home\Controller\AjaxPage($count,10,'serverRecord');
    	//产生分页信息
    	$page=$p->show();
    	
    	
    	//要查询的数据,limit表示每页查询的数量，这里为10条
    	$data = $db->limit($p->firstRow.','.$p->listRows)->select();
    	//assign方法往模板赋值
    	$this->assign('list',$data);
    	$this->assign('data',$page);
    	
    	//ajax返回信息
    	$msg['content']=$this->fetch('Index/recordAdmin_page');
    	$this->ajaxReturn($msg);
    
    }
    
    /** 预定处理结果输出*/
//     public function orderrecordFindAll()
//     {
//     	$db =M('orderrecord'); // 实例化模型类,参数数据表名称，不包含前缀
//     	$select = $db->select(); // 查询数据
//     	$this->assign('select',$select); // 模板变量赋值
//     	$this->display('Index/orderrecordAdmin'); // 输出模板
    
//     }
    
    /** 用户输出*/
    public function infoUserFind()
    {
    	$db =M('account'); // 实例化模型类,参数数据表名称，不包含前缀
    	$user=session('user');
    	$select = $db->where("name='$user'")->select(); // 查询数据
    	$this->assign('select',$select); // 模板变量赋值
    	$this->display('Index/informationUser'); // 输出模板
    }
    
    /** 预定处理同意*/  	
    	public function operate(){
    	if($_POST['operate']=='同意'){
    	
    	$getid=$_REQUEST['id'];//获取选择的复选框的值iy
    	
    	if (!$getid) $this->error('未选择记录') ;//没选择就提示信息
    	
    	$getids=implode(',',$getid); //选择一个以上，就用,把值连接起来(1,2,3)这样
    	
    	$id= array($getid)?$getids:$getid;//如果是数组，就把用,连接起来的值覆给$id,否则就覆获取到的没有,号连接起来的值
       
   
    	$form=D("orderrecord");
    	
        for($i=0;$i<count($getid);$i++){
        	
        	$data['result']='同意';
    	$arr=$form->where("id='$getid[$i]'")->save($data);
        }
        file_put_contents('log.txt',$arr,FILE_APPEND);

    	$Result=D("orderoperation")->execute('DELETE FROM __TABLE__ where `id` IN ('.$id.')');
    	$say='同意预订请求';
    	
    	if($Result===false)
    	{   
    		echo "<script>alert('处理失败！');</script>";
    		$this->redirect('Index/orderoperationFindAll');
    	    
    	}
    	else
    	
    	{  

    		    		
    		$this->redirect('Index/orderoperateAdmin');
    		
    	  

    	   
    	
    	}
    	}
    	if($_POST['operate']=='提交'){
    			    		$getid=$_REQUEST['id'];//获取选择的复选框的值iy
    			    		$select0=$_POST['d_reason'];
    			    		
    			    		if (!$getid) {
    			    			$this->error('未选择记录') ;}//没选择就提示信息
    			 
    			    		$getids=implode(',',$getid); //选择一个以上，就用,把值连接起来(1,2,3)这样
    			 
    			    		$id = is_array($getid)?$getids:$getid;//如果是数组，就把用,连接起来的值覆给$id,否则就覆获取到的没有,号连接起来的值
    		

    			    		$form=D("orderrecord");
    			    		for($i=0;$i<count($getid);$i++){
    			    			 
    			    			$data['result']="不同意($select0)";
    			    			$arr=$form->where("id='$getid[$i]'")->save($data);
    			    		}
    			    		
    			    		
    	             
    			    	$Result=D("orderoperation")->execute('DELETE FROM __TABLE__ where `id` IN ('.$id.')');
    		
    			    		$say='不同意预订';
    			 
    			    		if($Result===false){
    			                 echo "<script>
//     			                 		location.reload(true);
    			                 		alert('处理失败！');</script>";
//     				    		
    	                      
    			    		}
    			    		else
    			 
    				    		{
    		
    	                           $this->redirect('Index/orderoperateAdmin.html');
    		
    		
    				    		}
    			 
    			    		}
 
    	}

    	
    		
    	

    	
    	
    	
    	//用户预订查看
    	
    	public function orderinfo(){
//     	    $user=$_POST['user'];
    		$user=session('user');
    	  
    		$db =D('orderrecord'); // 实例化模型类,参数数据表名称，不包含前缀
    		$count=$db->where("user='$user'")->count();
    		//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
    		$p=new \Home\Controller\AjaxPage($count,10,'server');
    		//产生分页信息
    		$page=$p->show();
    		
    		
    		//要查询的数据,limit表示每页查询的数量，这里为10条
    		$data = $db->where("user='$user'")->limit($p->firstRow.','.$p->listRows)->select();
    		//assign方法往模板赋值
    		$this->assign('list',$data);
    		$this->assign('data',$page);
    	   
    		//ajax返回信息
    		$msg['content']=$this->fetch('Index/resultUser_page');
    	    $this->ajaxReturn($msg);
    	}
    		
      	public function search_user(){
      		
      	
      		$number=$_POST['number'];
      		
      		$db =D('orderrecord'); // 实例化模型类,参数数据表名称，不包含前缀
      		$count=$db->where("number='$number'")->count();
      		//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
      		$p=new \Home\Controller\AjaxPage($count,10,'server_searchUser');
      		//产生分页信息
      		$page=$p->show();
      		
      		
      		//要查询的数据,limit表示每页查询的数量，这里为10条
      		$data = $db->where("number='$number'")->limit($p->firstRow.','.$p->listRows)->select();
      		//assign方法往模板赋值
      		$this->assign('list',$data);
      		$this->assign('data',$page);
      		file_put_contents('log.txt',$data,FILE_APPEND);
      		//ajax返回信息
      		$msg['content']=$this->fetch('Index/searchUser_page');
      		$this->ajaxReturn($msg);
      		
      		
      	}
    	

    		
    	
    	
    	
    	
    	//用户预订选择
    	public function orderUser(){
    	
    		
    	
    		$db =M('classroominfo'); // 实例化模型类,参数数据表名称，不包含前缀
    	
    		
    	
    	
    		$select = $db->select(); // 查询数据
    		
    	    
    		$this->assign('select',$select); // 模板变量赋值
    		$this->display('Index/classroomorderUser'); // 输出模板
    	
    	}

//     	用户预订请求
    	public function classroomOrder(){
    		
    		$data = $_POST['json_data'];
    		$conf= $_POST['conf'];
    		$arr = json_decode($data);
    		$conf=json_decode($conf);
    		
    		if (!$arr) $this->error('未选择记录') ;//没选择就提示信息
    		
    		
    		$db =M('classroominfo');
    		// 组合查询条件
    		$select = $db->select(); // 查询数据
    		$this->assign('select',$select); // 模板变量赋值
    		$result['1']= $db->where("number IN('$arr->id')")->getfield('capacity');
// 			$result= $db->where("number IN('$arr->id')")->getfield('capacity');

    		$result['2']= $db->where("number IN('$conf->id')")->getfield('configuration');
    		
    			// $result=json_encode($result);
    			
    		
    			$this->ajaxReturn($result);
    	}
				
				
    	//用户预订请求
    	public function order(){
    		
    	$orderdate = $_POST['date'];
//     	$orderdate=json_decode($orderdate);
//     	$time = I('post.time');
    	$time = $_POST['time'];
    	
//     	$number = I('post.number');
//     	$time=json_decode($time,true);
    	$number=$_POST['number'];
//         $number=json_decode($number,true);
       
       
      
    	$reason =$_POST['reason'];;
//     	$orderdate=json_decode($reason,true);
    	$db=D("classroominfo");
    	$address=$db->where("number IN('$number')")->getField('address');
    	$user=session('user');

    	$db1=D('orderrecord');
    	$db2=D("orderoperation");
     	$condition['number']=$number;
     	$condition['time']=$time;
     	$condition['orderdate']=$orderdate;
    	$rs=$db2->where($condition)->count();
    	if($rs==0){
    	$sql_1="INSERT into tb_orderrecord (number,address,orderdate,time,user,reason,result) values('$number','$address','$orderdate','$time','$user','$reason','待处理')";
    	$sql_2="INSERT into tb_orderoperation (number,address,orderdate,time,user,reason) values('$number','$address','$orderdate','$time','$user','$reason')";
    		if($db2->execute($sql_2)&&$db1->execute($sql_1)){
    			
    		
                $data=array('result'=>1,'msg'=>'预订成功！');
            
    			
    		}else {

    			file_put_contents('log.txt',"1",FILE_APPEND);
    			$data=array('result'=>0,'msg'=>'预订失败！');
    			

   		          }
    	}
    	else{
    		    file_put_contents('log.txt',"1",FILE_APPEND);

    		    $data=array('result'=>-1,'msg'=>'已被预订！');
    		 
    		    
   		}
   		
   		
   
   		$this->ajaxReturn($data);
    	
    	
    	
    	}
    		 
    	
    	
    	/** 删除教室信息*/
    	public function deleteclassroom()
    	{
    		$id=$_GET["id"];
    		$info=D("classroominfo");
    		$z=$info->delete($id);
    		file_put_contents('log.txt',$z,FILE_APPEND);
    		if($z)
    		{
//     			$this->success("删除成功",U("Index/classroominfoAdmin"));
    			$this->redirect('Index/classroomFindAll');
    			echo "<script>alert('删除成功！');</script>";
    		}
    		else
    		{
    			$this->error("删除失败",U("Index/classroominfoAdmin"));
    		}
    	}
    	
    	/** 删除订单*/
    	public function deleteorder()
    	{
    		$id=$_GET["id"];
    		file_put_contents('log.txt',$number,FILE_APPEND);
    		$info=D("orderrecord");
    		
    		$z=$info->delete($id);
    		file_put_contents('log.txt',$z,FILE_APPEND);
    		if($z)
    		{
//     			$this->success("删除成功",U("Index/orderresultUser"));
    			$this->redirect('Index/orderresultUser');
    		}
    		else
    		{
    			$this->error("删除失败",U("Index/orderresultUser"));
    		}
    	}
    	
    	
    	
    	
    	// 添加教室信息
    	

    	public function isaddclassroominfo(){
    		 
    		 
    		
    	
    			//获取页面表单输入的数据
    			$number=$_POST['number'];
    			$address=$_POST['address'];
    			$capacity=$_POST['capacity'];
    	
    			//将数据放入数组
    			
    			
    	
    			
    			// 实例化member对象
    			$classroominfo=D('classroominfo');
    			//查询是否有重名
    			$rs=$classroominfo->where("number='$number'")->count();
    	        
    			file_put_contents('log.txt',$rs,FILE_APPEND);
    			
    	
     			if($rs==0){
     				
     				$classroominfo=D('classroominfo');

                    $sql="INSERT into tb_classroominfo(number,address,capacity) values('$number','$address','$capacity')";
                   
                    $data=$classroominfo->execute($sql);
     				
     				$count=$classroominfo->count();
     				//实例化分页类，传入三个参数，分别是数据总数、每页显示的数据条数、要调用的jQuery ajax方法名
     				$p=new \Home\Controller\AjaxPage($count,10,'roominfoAdd');
     				//产生分页信息
     				$page=$p->show();
     				
     				
     				//要查询的数据,limit表示每页查询的数量，这里为10条
     				$data = $classroominfo->limit($p->firstRow.','.$p->listRows)->select();
     				//assign方法往模板赋值
     				$this->assign('list',$data);
     				$this->assign('data',$page);
     				
     				//ajax返回信息
     				$msg['content']=$this->fetch('Index/roominfo_page');
     				 
     				
     				}
     				else{
     				$msg['content']=2;
     				 
     				}
     				
     				$this->ajaxReturn($msg);
    				}
    				
    				
    				
    	    public function updateUser(){
    	    	
    	    	$data['account']=$_POST['account'];
    	    	$data['name']=$_POST['name'];
    	    	$data['academy']=$_POST['academy'];
    	    	$data['major']=$_POST['major'];
    	    	$data['tel']=$_POST['tel'];
    	    	$data['mail']=$_POST['mail'];
    	    	$db=D('account');
    	    	$condition['name']=$data['name'];
    	    	$result=$db->where($condition)->save($data);
    	    	if(!$result==false){
    	    	$this->redirect('Index/infoUserFind');
    	    	}
    	    } 
    	    
    	    /*密码重置 */
    	    public  function Reset(){
    	    	
    	    	
    	    	$data['account']=$_POST['account'];
    	    	
    	    	$data['name']=$_POST['name'];
    	    	
    	    	$data['academy']=$_POST['academy'];
    	    	$data['major']=$_POST['major'];
    	    	$data['tel']=$_POST['tel'];
    	    	$data['mail']=$_POST['mail'];
    	    	$data['type']=="user";
    	    	$db=D('account');
    	    	
    	    	$result=$db->where($data)->count();
    	    	file_put_contents('log.txt',$result,FILE_APPEND);
    	    	if($result==0){
    	    		$msg=0;
    	    		
    	    	}
    	    	
    	    	if($result==1){
    	    		$result3['password']=$_POST['password'];
    	    		
    	    		
    	    		$account=$data['account'];
    	    		$result2=$db->where("account='$account'")->save($result3);
    	    		
    	    		$msg=1;
    	    	}
    	    	
    	    	
    	    	$this->ajaxReturn($msg);
    	    	
    	    	
    	    		
    	    }
    			
} 
          
        

    						
    							
    						
    							
    					
    				

 