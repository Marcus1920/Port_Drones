<<<<<<< HEAD
vendor/autoload.php:
	composer install --no-interaction --prefer-dist

.PHONY: sniff
sniff: vendor/autoload.php
	vendor/bin/phpcs --standard=PSR2 src -n

.PHONY: test
test: vendor/autoload.php
	vendor/bin/phpunit --verbose
=======
vendor/autoload.php:
	composer install --no-interaction --prefer-dist

.PHONY: sniff
sniff: vendor/autoload.php
	vendor/bin/phpcs --standard=PSR2 src -n

.PHONY: test
test: vendor/autoload.php
	vendor/bin/phpunit --verbose
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
