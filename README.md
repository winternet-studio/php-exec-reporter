# php-exec-reporter

An all-in-one CLI script for handling cron jobs - both logging output and notifying via SMTP (and/or HTTP) of any errors.

It includes an embedded version of [PHPMailer](https://github.com/PHPMailer/PHPMailer) (see version in source code).

## Documentation

See the top of `exec-reporter.php`.

## Examples

Using the default `exec-reporter.config.php`:

```
php exec-reporter.php 0 cleanup.cron.log cleanup.cron.error.log php cleanup.php
```

Using custom config file:

```
php exec-reporter.php ../config.php cleanup.cron.log cleanup.cron.error.log php cleanup.php
```

Handling special command line arguments (in this case dumping a web page to STDOUT):

```
php exec-reporter.php config.php dump.cron.log dump.cron.error.log wget [DASH]O- https://someserver.com/report.php
```
