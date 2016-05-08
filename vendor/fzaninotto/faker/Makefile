vendor/autoload.php:
<<<<<<< HEAD
	composer install --no-interaction --prefer-source
=======
	composer install --no-interaction --prefer-source --dev
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

.PHONY: sniff
sniff: vendor/autoload.php
	vendor/bin/phpcs --standard=PSR2 src -n

.PHONY: test
test: vendor/autoload.php
	vendor/bin/phpunit --verbose
