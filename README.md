# Required Tools

- [Docker](https://www.docker.com/get-started)

# Clone

Use either **SSH** or **HTTP** method, whichever works easiest for you.

SSH:

```
git clone --recursive git@github.com:nbcsteveb/nbc-wp-docker.git
```

HTTP:

```
git clone --recursive https://github.com/nbcsteveb/nbc-wp-docker.git
```

# First Time Running

```
make ARGS='--build -d' up
```

After running, try to hit http://127.0.0.1:8080/

You should be prompted by a wordpress setup.

The first screen should be language selection, choose "English" (or your preferred language).

The second screen will ask you to fill out:

- Site Title (whatever you want)
- Username (you will use this to login to wp-admin)
- Passsword (you will use this to login to wp-admin)
- Email (you can use test@test.local, or whatever e-mail you want, this doesn't matter)

If all is well, you'll get a **SUCCESS** page.

Click **Log In**.

# Troubleshooting

If you get a "database failed to connect" error, you have to wait for MariaDB to finish starting.

You can check the status by doing `make ARGS=db logs`.

If you see `mysqld: ready for connections` then you can refresh and the page should work.

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

# Building the machine

```
make build
```

or

```
make ARGS='--build -d' up
```


# Changing branches

```
cd wordpress/nbc-wp-content
git checkout ots-theme
```

NOTE: after doing this, you'll see something like this:

```
On branch master
Your branch is up to date with 'origin/master'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)
  (commit or discard the untracked or modified content in submodules)

	modified:   wordpress/nbc-wp-content (new commits, modified content, untracked content)
```

Just ignore this unless you want to update the branch all users see by default.