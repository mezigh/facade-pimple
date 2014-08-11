<?php

namespace Devmedia\Facades;

/**
 * Description of View
 *
 * @author mezighpro
 */
class Application extends \Devmedia\Facade
{
    protected static function getFacadeAccessor()
	{
		return 'container';
	}
}

?>
