<?php

namespace Devmedia\Facades;

/**
 * Description of View
 *
 * @author mezighpro
 */
class Session extends \Devmedia\Facade
{
    protected static function getFacadeAccessor()
	{
		return 'session';
	}
}

?>
