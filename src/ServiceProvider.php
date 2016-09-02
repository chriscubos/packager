<?php
/**
 * This file is part of Packager project.
 *
 * @package   Chriscubos\Packager.
 * @copyright (c) 2016 Philippine Global Outsourcing. All Rights Reserved.
 * @copyright (c) Copyright 2016 Christopher John Cubos.
 * @author    Christopher John Cubos <philippineoutsourcing@gmail.com>
 * @link      http://philippinegloblaoutsourcing.com
 * @link      https://github.com/philippineglobaloutsourcing
 * @link      https://github.com/chriscubos/packager
 * @version   1.0-dev
 * @license   MIT 
 * @since     August 31, 2016 10:08:28 am (Wednesday)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chriscubos\Packager;

use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Foundation\Application;

abstract class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	protected $package_name;
	protected $paths;

	public function __construct() {
		$this->paths = [
			'migrations' => database_path('migrations'),
			'seeds' => database_path('seeds'),
			'config' => config_path(),
			'views' => resource_path('views'),
			'translations' => resource_path('lang'),
			'assets' => public_path(),
			'routes' => base_path('routes'),
		];
	}

	public function boot()
	{
	}

	public function register()
	{
	}

	protected function publishAssets()
	{
		$this->publish('assets');
	}

	protected function publishAll()
	{
		foreach ($this->paths as $source => $target) {
			$this->publish($source);
		}
	}

	protected function publish($section) {
		if ($this->checkDirectory($this->package_path.$section)) {
			$meta = [$this->package_path.$section, $this->paths[$section]];
			$this->publishes([
				$this->package_path.$section => $this->paths[$section],
			], $section);
		}
	}

	protected function checkDirectory($dir) {
		if (!is_dir($dir)) return false;
		return (new \FilesystemIterator($dir))->valid();
	}

}
