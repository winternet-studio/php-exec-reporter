<?php
$config = [
	'smtp_host' => null,  //leave as null in order to use PHP's native mail() - NOT YET IMPLEMENTED THOUGH!
	'smtp_port' => 587,
	'smtp_username' => null,
	'smtp_password' => null,
	'smtp_encryption' => 'tls',  // 'tls' or 'ssl'

	'from_email' => 'noreply@sample.com',
	'from_name' => 'Exec-Reporter',  //replace with a system identifier so you know where the email comes from
	'subject_line' => 'Cron job failed',
	'recipients' => [],   // formatter as either `['sample@sample.com']` or `['sample@sample.com' => 'Mr Sample']`
	'notify_if_stdout' => false,  //send email if STDOUT has content
	'notify_if_stderr' => true,  //send email if STDERR has content
	'notify_if_exitcode' => true,  //send email if exit code is not zero (not working on Windows)
	'http_url' => false,  //set URL to send a POST HTTP request to, or array with key `url` for the URL and key `post_vars` with array of additional POST variables to include, and optionally key `trigger`='always' to call the URL both on success and failure.

	'append_stdout' => false,
	'append_stderr' => false,
	'max_log_size' => false,  //when appending is enabled you can automatically trim log files to not grow too large by setting the number of Mb at which the trim should occur

	'stderr_content_callback' => null,  //option to provide a callback function that can modify the STDERR content before we process it. The one and only argument will hold the content and must be returned when done.

	'ignore_exitcodes' => [],  //array of exitcodes to ignore
	'skip_exitcode_handling' => false,
];

return $config;
