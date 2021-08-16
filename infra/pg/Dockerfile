FROM postgres:13.0

ENV TZ=Asia/Tokyo \
  POSTGRES_DB=laravel_local \
  POSTGRES_USER=phper \
  POSTGRES_PASSWORD=secret 

COPY init/* /docker-entrypoint-initdb.d/ 