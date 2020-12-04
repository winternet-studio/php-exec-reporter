<?php
$config = [
	'smtp_host' => null,  //leave as null in order to use PHP's native mail() - NOT YET IMPLEMENTED THOUGH!
	'smtp_port' => 587,
	'smtp_username' => null,
	'smtp_password' => null,
	'smtp_encryption' => 'tls',  // 'tls' or 'ssl'

	'from_email' => 'noreply@sample.com',
	'from_name' => 'exec_reporter',  //replace with a system identifier so you know where the email comes from
	'subject_line' => 'Cron job failed',
	'recipients' => [],   // formatter as either `['sample@sample.com']` or `['sample@sample.com' => 'Mr Sample']`
	'notify_if_stdout' => false,  //send email if STDOUT has content
	'notify_if_stderr' => true,  //send email if STDERR has content
	'notify_if_exitcode' => true,  //send email if exit code is not zero
	'http_url' => false,  //set URL to send a POST HTTP request to

	'append_stdout' => false,
	'append_stderr' => false,

	'ignore_exitcodes' => [],  //array of exitcodes to ignore or string `*` to ignore all
	'skip_exitcode_handling' => false,
];

return $config;
