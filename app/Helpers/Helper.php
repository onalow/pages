<?php



use App\Jobs\NetLogJob;


if (!function_exists('sendmail')) {

	function sendmail(array $clients) {
		try {
			
			dispatch(new NetLogJob($clients));

		} catch (\Exception $e) {

			throw $e;
		}
	}

}

if (! function_exists('sayHell')) {

	function sayHello()
	{
		return 'Hello';
	}
}
