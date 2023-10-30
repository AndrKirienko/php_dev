/*в консолі входимо в потрібну директорію де знаходиться Makefile 
пишемо ключове слово make <command>
в даному випадку $make up -запускана докер композера*/


up: 
	docker-compose up -d --build

composer-install: 
	docker-compose run composer install
	docker-compose run composer dump-autoload

build: 
	nake up
	nake composer-install

composer:
	docker-composer run composer $(parametr1) $(parametr2)  //створення параметрів $composer parametr1 parametr2
