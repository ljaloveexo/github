<?php
namespace Home\Controller;
header("Content-Type:text/html; charset=utf-8");
use Think\Controller;
class AjaxPage {
	// 分页栏每页显示的页数
	public $rollPage = 5;
	// 页数跳转时要带的参数
	public $parameter  ;
	// 默认列表每页显示行数
	public $listRows = 2;
	// 起始行数
	public $firstRow ;
	// 分页总页面数
	protected $totalPages  ;
	// 总行数
	protected $totalRows  ;
	// 当前页数
	protected $nowPage    ;
	// 分页的栏的总页数
	protected $coolPages   ;
	// 分页显示定制
	protected $config  = array('header'=>'条记录','prev'=>'上一页','next'=>'下一页','first'=>'第一页','last'=>'最后一页','theme'=>' %totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
	// 默认分页变量名
	protected $varPage;


	public function __construct($totalRows,$listRows='',$ajax_func,$parameter='') {
		$this->totalRows = $totalRows;
		$this->ajax_func = $ajax_func;
		$this->parameter = $parameter;
		$this->varPage = C('VAR_PAGE') ? C('VAR_PAGE') : 'p' ;
		if(!empty($listRows)) {
			$this->listRows = intval($listRows);
		}
		$this->totalPages = ceil($this->totalRows/$this->listRows);     //总页数
		$this->coolPages  = ceil($this->totalPages/$this->rollPage);
		$this->nowPage  = !empty($_POST[$this->varPage])?intval($_POST[$this->varPage]):1;
		if(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
			$this->nowPage = $this->totalPages;
		}
		$this->firstRow =$this->listRows*($this->nowPage-1);
	}

	public function nowpage($totalRows,$listRows='',$ajax_func,$parameter='') {
		$this->totalRows = $totalRows;
		$this->ajax_func = $ajax_func;
		$this->parameter = $parameter;
		$this->varPage = C('VAR_PAGE') ? C('VAR_PAGE') : 'p' ;
		if(!empty($listRows)) {
			$this->listRows = intval($listRows);
		}
		$this->totalPages = ceil($this->totalRows/$this->listRows);     //总页数
		$this->coolPages  = ceil($this->totalPages/$this->rollPage);
		$this->nowPage  = !empty($_POST[$this->varPage])?intval($_POST[$this->varPage]):1;
		if(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
			$this->nowPage = $this->totalPages;
		}
		$this->firstRow =$this->listRows*($this->nowPage-1);

		return $this->nowPage;
	}

	public function setConfig($name,$value) {
		if(isset($this->config[$name])) {
			$this->config[$name]    =   $value;
		}
	}


	public function show() {
		if(0 == $this->totalRows) return '';
		$p = $this->varPage;
		$nowCoolPage      = ceil($this->nowPage/$this->rollPage);
		$url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$this->parameter;
		$parse = parse_url($url);
		if(isset($parse['query'])) {
			parse_str($parse['query'],$params);
			unset($params[$p]);
			$url   =  $parse['path'].'?'.http_build_query($params);
		}
		//上下翻页字符串
		$upRow   = $this->nowPage-1;
		$downRow = $this->nowPage+1;
		if ($upRow>0){
			$upPage="<a class='ajaxify' id='big_2' href='JavaScript:".$this->ajax_func."(".$upRow.")'>&nbsp;<&nbsp;</a>";
		}else{
			$upPage="<a class='ajaxify' id='big_4' href='javascript:return false;' style='opacity:0.4;'>&nbsp;&lt;&nbsp;</a>";
	            		  
					  	  
		}

		if ($downRow <= $this->totalPages){
			$downPage="&nbsp;<a class='ajaxify' id='big_3' href='javascript:".$this->ajax_func."(".$downRow.")'>&nbsp;>&nbsp;</a>";
		}else{
			$downPage="<a class='ajaxify' id='big_5' href='javascript:return false;' style='opacity:0.4;'>&nbsp;>&nbsp;</a>";
		}
		// << < > >>
		if($nowCoolPage == 1){
			$theFirst = "";
			$prePage = "";
		}else{
			$preRow =  $this->nowPage-$this->rollPage;
			$prePage = "<a class='big_1' id='big_p' href='javascript:".$this->ajax_func."(".$preRow.")'>...</a>";
			$theFirst = "<a class='ajaxify' id='big' href='javascript:".$this->ajax_func."(1)' >&nbsp;1&nbsp;</a>&nbsp;";
		}
		if($nowCoolPage == $this->coolPages){
			$nextPage = "";
			$theEnd="";
		}else{
			$nextRow = $this->nowPage+$this->rollPage;
			$theEndRow = $this->totalPages;
			$nextPage = "<a class='big_1' id='big_n' href='javascript:".$this->ajax_func."(".$nextRow.")' >...</a>";
			$theEnd = "&nbsp;<a class='ajaxify' id='big' href='javascript:".$this->ajax_func."(".$theEndRow.")' >&nbsp;".$this->totalPages."&nbsp;</a>&nbsp;";
		}
		// 1 2 3 4 5
		$linkPage = "";
		for($i=1;$i<=$this->rollPage;$i++){
			$page=($nowCoolPage-1)*$this->rollPage+$i;
			if($page!=$this->nowPage){
				if($page<=$this->totalPages){
					$linkPage .= "&nbsp;<a class='ajaxify' id='big' href='javascript:".$this->ajax_func."(".$page.")'>&nbsp;".$page."&nbsp;</a>";
				}else{
					break;
				}
			}else{
// 				if($this->totalPages != 1){
					$linkPage .= "&nbsp;<span class='current'>&nbsp;".$page."&nbsp;</span>&nbsp;";
				}
// 			}
		}
		$pageStr  =  str_replace(
				array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%prePage%','%linkPage%','%nextPage%','%end%'),
				array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$theFirst,$prePage,$linkPage,$nextPage,$theEnd,$downPage),$this->config['theme']);
		return $pageStr;
	}

}
