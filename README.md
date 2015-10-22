# Demo
LAMP application using AJAX call for login to mysql with docker

## Docker

This project uses docker to spin up and give a demo of the application. Simply make sure you have docker compose and docker installed then run
```bash
docker-compose up -d
docker exec -it lampdemo_db_1 bash -c 'exec mysql -uroot -ppassword demo < /schema/schema.sql'
```
 Navigate to localhost:8000 to see a working login example

 After you are done playing with the example you can stop the image and remove it with:
 ```bash
docker-compose stop
docker-compose rm
 ```