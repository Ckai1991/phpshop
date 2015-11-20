<?php
class _BaseControl{
	var $_viewName = "index";//私有变量viewName,默认index，返回首页
	
	function setViewName($vname){
		$this->_viewName = $vname;
	}
	
	//导入头和尾文件，并根据URL中的view参数导入V中文件
	function run(){
		include(Current_ViewPath."head.tpl");
		include(Current_ViewPath.$this->_viewName.".tpl");
		include(Current_ViewPath."footer.tpl");
	}
}

?>