<?php
class VIEW{

	public static $view;
	public static function init($viewtype,$config){
		self::$view = new $viewtype;

		/*$smarty = new Smarty();
		$smarty->left_delimiter = "{";			//定义左定界符
		$smarty->right_delimiter = "}";			//定义右定界符
		$smarty->template_dir = "tpl";			//html模板位置
		$smarty->compile_dir = "template_c";	//模板编译生成的文件
		$smarty->cache_dir = "cache";			//缓存*/

		foreach($config as $key => $value){
			self::$view->$key = $value;
		}
	}

	public function assign($data){
		foreach($data as $key => $value){
			self::$view->assign($key,$value);
		}
	}

	public static function display($template){
		self::$view->display($template);
	}



}


?>