up:
		docker-compose up -d
stop:
		docker-compose stop
db:
		docker exec -ti wordpress-test_db_1 bash -c 'mysql --user=wordpress --password=wordpress'