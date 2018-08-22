.PHONY: build
.PHONY: down
.PHONY: flogs
.PHONY: logs
.PHONY: ps
.PHONY: up

build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

logs:
	docker-compose logs ${ARGS}

flogs:
	$(MAKE) ARGS=-f logs

ps:
	docker-compose ps

ssh:
	docker-compose exec wordpress /bin/bash