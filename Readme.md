### About this
Docker container based in a Builderall image with PHP 8.2, Nginx, Composer, MariaDB, Redis and GRPC module
> See Builderall Docker Images in [Docker Hub](https://hub.docker.com/u/baimages)

### Run
```bash
# Via Docker Composer
docker comopse up -d

#Via Docker
docker run -it ba-image-app sh
docker run --rm -d -p 83:80 --name ba-image-app ba-image-app:latest
docker run --rm -d -p 83:80 -v ./app:/var/www/app --name ba-image-app ba-image-app:latest
```

### Access
- App: http://127.0.0.1:83/app/
- App info: http://127.0.0.1:83/app/info.php
- DB test: http://127.0.0.1:83/app/db.php

#### Test redis via terminal
```bash
# Expected response: PONG
docker compose exec redis redis-cli ping
```

### Access container via terminal 
```bash
# Access app container via Docker
docker exec -it ba-image-app sh

# Access app container via Docker Compose
docker compose exec app sh  

# Access mariadb service
# Then run this: mysql -u root -proot
docker compose exec mariadb bash
```

### Buid
```bash
# Via Docker
docker build -t ba-image-app:latest . --no-cache

# Via Docker Compose
docker compose build --no-cache   
```
