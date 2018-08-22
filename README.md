# Required Tools

- [Docker](https://www.docker.com/get-started)

# Clone

SSH:

```
git clone --recursive git@github.com:nbcsteveb/nbc-wp-docker.git
```

HTTP:

```
git clone --recursive https://github.com/nbcsteveb/nbc-wp-docker.git
```

# Makefile Commands

```
make build            # docker-compose build
make down             # docker-compose down
make logs             # docker-compose logs -f
make ARGS='' logs     # docker-compose logs
make ps               # docker-compose ps
make ssh              # docker-compose exec wordpress /bin/bash
make SERVICE=db ssh   # docker-compose exec <service> /bin/bash
make up               # docker-compose up -d
```

# First Time Running

```
make build
make up
```

