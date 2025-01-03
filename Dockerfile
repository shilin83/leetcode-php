FROM php:8.3-alpine3.21

WORKDIR /app

COPY . .

CMD ["vendor/bin/pest"]
