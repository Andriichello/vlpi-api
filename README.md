## Set up locally

To set up this api locally you need to follow these steps:
- Create `.env` file inside the project root directory and copy contents of `.env.example` into it.
- Intall docker if you haven't already.
- Run `docker-compose up` command.
- To run migrations and seed the database run `docker-compose exec app php artisan migrate:fresh --seed`.

Now you should have docker containers running. Api should be now accessable at `localhost:8100`
