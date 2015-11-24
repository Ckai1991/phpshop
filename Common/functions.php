<?php
	function GET($paraName,$method="GET"){
		$paraList = $method=="GET"?$_GET:$_POST;
		
		if(isset($paraList[$paraName])){
			$retValue = trim($paraList[$paraName]);
			$retValue = str_replace(array(""), "", $retValue);
			
			return $retValue;
		}else{
			return false;
		}
	}
?>