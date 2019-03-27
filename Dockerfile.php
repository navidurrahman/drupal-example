ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.2-fpm

RUN apk add openldap-dev && docker-php-ext-configure ldap && docker-php-ext-install ldap

COPY --from=cli /app /app
