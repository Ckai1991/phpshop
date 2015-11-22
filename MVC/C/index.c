<?php
	require("_BaseControl.c");
	class index extends _BaseControl{
		function getindex(){
			$this->setViewName("index");
			$this->addObject("ProductName","MEIZU Pro5");
		}
	}
?>