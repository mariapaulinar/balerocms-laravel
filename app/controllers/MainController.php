<?php

class MainController extends BaseController {

	/**
	* Copyright
	* Anibal Gomez <anibalgomez@icloud.com>
	*
	* @var string $copyright
	*/
	protected $copyright = 'balerocms.com';

	/**
	* Check if system is installed
	*
	* @var boolean $installed
	*/
	protected $installed = false;

	/**
	* Configuration file path
	* URL: kathirvel.com/laravel-4-get-app-path-
	* public-path-storage-path-base-path/
	*
	* @var boolean $config
	*/
	protected $configPath = null;

	/**
	 * The index (home) controller
	 *
	 * @return View
	 */
	public function home()
	{
		$this->configPath = app_path() . '/config/config.xml';
		$view = View::make(
			'installer',
			array(
				'configPath' => $this->configPath
				)
			);
		return $view;
	}
}
