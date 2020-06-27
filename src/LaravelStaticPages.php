<?php namespace Eamirgh\LaravelStaticPages;

use League\Flysystem\File;

class LaravelStaticPages
{
	public static function CreateFile(String $view, $data ,String $path)
	{
		File::put("{$path}.blade.php",
			view($view)
				->with($data)
				->render());
	}

}
