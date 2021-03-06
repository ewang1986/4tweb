<?php
Wind::import('ADMIN:library.AdminBaseController');

/**
 * 后台设置-站点设置-站点信息设置/全局参数设置
 *
 * @author Qiong Wu <papa0924@gmail.com> 2011-12-7
 * @copyright ©2003-2103 phpwind.com
 * @license http://www.windframework.com
 * @version $Id: SecurityController.php 3286 2011-12-15 09:32:42Z yishuo $
 * @package admin
 * @subpackage controller.config
 */
class SecurityController extends AdminBaseController {

	/* (non-PHPdoc)
	 * @see WindController::run()
	 */
	public function run() {

	}

	/**
	 * 加载Config DS 服务
	 * 
	 * @return PwConfig
	 */
	private function _loadConfigService() {
		return Wekit::load('config.PwConfig');
	}

}

?>