FROM node:24.12.0-alpine

WORKDIR /app

COPY docker/vuejs/*.sh /usr/local/bin/

COPY vuejs-app /app

# Shell scripts may originate on Windows; Alpine's /bin/sh requires LF endings.
RUN sed -i 's/\r$//' /usr/local/bin/*.sh \
    && chmod +x /usr/local/bin/*.sh

EXPOSE 5173
