HOST=127.0.0.1
PORT=8080

.PHONY: build
.PHONY: down
.PHONY: flogs
.PHONY: logs
.PHONY: open
.PHONY: ps
.PHONY: ssh
.PHONY: swbranch
.PHONY: up

build:
	docker-compose build

down:
	docker-compose down

logs: ARGS?=-f
logs:
	docker-compose logs $(ARGS)

open:
	open http://$(HOST):$(PORT)/

ps:
	docker-compose ps

ssh: SERVICE?=wordpress
ssh:
	docker-compose exec $(SERVICE) /bin/bash

swbranch: BRANCH?=ots-theme
swbranch:
	pushd ./wordpress/nbc-wp-content && \
		git stash save && \
		git checkout $(BRANCH) && \
	popd

up: ARGS?=-d
up:
	docker-compose up $(ARGS)
