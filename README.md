## Set up locally

To set up this api locally you need to follow these steps:
- Create `.env` file inside the project root directory and copy contents of `.env.example` into it.
- Intall docker if you haven't already.
- Run `docker-compose up` command.
- Run `docker-compose exec app /bin/bash`. This will open up app's bash (inside docker container).

To set up the app you need to run (inside the app's bash) the following commands:
- Run `composer update`. This will install required packages
- Run `php artisan migrate:fresh --seed`. This will rerun migrations and seed the database

Now you should have docker containers running. Api should be now accessable at `localhost:8100`
