<?php

/**
* @name Logger
*
* Help class, dose belong to all projects
*/
class Logger
{
	/**
	 * @name log
	 * @param string  
	 */
	public function Log($tolog)
	{
		if (! LOGGING)
		{
			return;
		}
		if (is_array($tolog) || is_object($tolog))
		{
			print_r($tolog);
			return;
		}
		printf($tolog);
	}
}

