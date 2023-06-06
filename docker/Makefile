include docker.mk

.PHONY: composer artisan npm install reinstall

PHP_VER ?= 8.0
COMPOSER_ROOT ?= /var/www/html

composer:
	docker exec -ti -e XDEBUG_MODE=off -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php$$' --format "{{ .ID }}") composer --working-dir=$(COMPOSER_ROOT) $(filter-out $@,$(MAKECMDGOALS))
composer-debug:
	docker exec -ti -e XDEBUG_TRIGGER=debug -e XDEBUG_CONFIG='log_level=3' -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php$$' --format "{{ .ID }}") composer --working-dir=$(COMPOSER_ROOT) $(filter-out $@,$(MAKECMDGOALS))

artisan:
	docker exec -ti -e XDEBUG_MODE=off -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php$$' --format "{{ .ID }}")  ./artisan $(filter-out $@,$(MAKECMDGOALS))
artisan-debug:
	docker exec -ti -e XDEBUG_TRIGGER=debug -e XDEBUG_CONFIG='log_level=3' -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php$$' --format "{{ .ID }}")  ./artisan $(filter-out $@,$(MAKECMDGOALS))

yarn:
	docker exec -ti -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='^$(PROJECT_NAME)_php$$' --format "{{ .ID }}") yarn $(filter-out $@,$(MAKECMDGOALS))
