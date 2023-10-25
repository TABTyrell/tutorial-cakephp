# create migrations
docker-compose exec php-app bin/cake bake migration NameOfMigration

# run migrations
docker-compose exec php-app bin/cake migrations migrate
