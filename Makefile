SERVICE?=wordpress

.PHONY: build
.PHONY: down
.PHONY: flogs
.PHONY: logs
.PHONY: ps
.PHONY: ssh
.PHONY: up

build:
	docker-compose build

up: ARGS?=-d
up:
	docker-compose up $(ARGS)

down:
	docker-compose down

logs: ARGS?=-f
logs:
	docker-compose logs $(ARGS)

ps:
	docker-compose ps

ssh:
	docker-compose exec $(SERVICE) /bin/bash