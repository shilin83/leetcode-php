FROM php:8.3-alpine

WORKDIR /app

COPY . .

CMD ["vendor/bin/pest"]
