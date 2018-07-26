-include .env version

SWAGGER_SCHEMA_URL = https://api.swaggerhub.com/apis/wodby/api/$(SWAGGER_SCHEMA_VER)
SWAGGER_CODEGEN_VER = 2.3.1
SWAGGER_CODEGEN_URL = http://central.maven.org/maven2/io/swagger/swagger-codegen-cli/$(SWAGGER_CODEGEN_VER)/swagger-codegen-cli-$(SWAGGER_CODEGEN_VER).jar
SWAGGER_CODEGEN_JAVA_OPTS = -Xmx1024M -DapiTests=false -DmodelTests=false
MAVEN_VER = 3-jdk-7-alpine
PHP_VER = 7.0-4.4.3

default: build

build: codegen
	docker run -it --rm -v "$(PWD)":/var/www/html wodby/php:${PHP_VER} composer install -n --prefer-dist
.PHONY: build

shell:
	docker run -it --rm -v "$(PWD)":/var/www/html wodby/php:${PHP_VER} /bin/bash
.PHONY: shell

test:
	docker run -it --rm -v "$(PWD)":/var/www/html wodby/php:${PHP_VER} ./vendor/bin/codecept run
.PHONY: test

codegen:
	wget -nv "$(SWAGGER_CODEGEN_URL)" -O ./codegen.jar
	docker run -it --rm \
		-u "1000:1000" \
		-v "$(PWD)":/gen \
		-w /gen \
		maven:"$(MAVEN_VER)" java $(SWAGGER_CODEGEN_JAVA_OPTS) -jar ./codegen.jar generate \
			-i ./swagger.json \
			-l php \
			--invoker-package=Wodby\\Api \
			--api-package=Client \
			--model-package=Model
	rm ./SwaggerClient-php/.php_cs \
		./SwaggerClient-php/.travis.yml \
		./SwaggerClient-php/composer.json \
		./SwaggerClient-php/git_push.sh \
		./SwaggerClient-php/phpunit.xml.dist
.PHONY: codegen

clean:
	rm -rf ./SwaggerClient-php ./.swagger-codegen ./codegen.jar
.PHONY: clean