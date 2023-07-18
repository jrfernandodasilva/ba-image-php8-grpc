FROM baimages/php-nginx:8-alpine

COPY --from=baimages/php-grpc:8-alpine /grpc.so /protobuf.so ./

RUN apk add --update --no-cache libstdc++ && \
    mv grpc.so protobuf.so $(php-config --extension-dir) && \
    docker-php-ext-enable grpc protobuf && \
    docker-php-ext-install pdo_mysql

WORKDIR /var/www

# Copy the whole project to the default workdir /var/www
COPY . .

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies and remove Composer
RUN composer install \
    --no-dev \
    --no-interaction \ 
    --optimize-autoloader && \
    rm /usr/bin/composer
