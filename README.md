# Minion Masters Deck Builder
A web based deck builder tool for Minion Masters and an excuse to learn Lumen

## Installation

- Install docker, While that's installing

- In your project directory you'll need to create your local .env file
    ```bash
    cp .env.example .env
    ```
- Update your .env file to have
    ```
    DB_CONNECTION=mysql
    DB_DATABASE=mm-deckbuilder
    DB_HOST=mysql
    DB_PORT=3306
    DB_USERNAME=admin
    DB_PASSWORD=secret
    ```

- Follow the instructions here to clone this dev environment 
https://laradock.io/getting-started/

- After cloning and creating a .env file update the line
    ```
    APP_CODE_PATH_HOST=../mm-deckbuilder/
    ```

- In the laradock directory you'll need to bring up the dev environment
    ```bash
    docker-compose up -d apache2 mysql phpmyadmin workspace
    ```
 - Access phpmyadmin via localhost:8080 (mysql, root, root) and run these queries: 
    ```sql
    CREATE DATABASE `mm-deckbuilder`;

    GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, RELOAD, SHUTDOWN, PROCESS, FILE, REFERENCES, INDEX, ALTER, SHOW DATABASES, SUPER, CREATE TEMPORARY TABLES, LOCK TABLES, EXECUTE, REPLICATION SLAVE, REPLICATION CLIENT, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, CREATE USER, EVENT, TRIGGER, CREATE TABLESPACE, CREATE ROLE, DROP ROLE ON *.* TO `admin`@`%` WITH GRANT OPTION;

    GRANT BACKUP_ADMIN,BINLOG_ADMIN,CONNECTION_ADMIN,ENCRYPTION_KEY_ADMIN,GROUP_REPLICATION_ADMIN,PERSIST_RO_VARIABLES_ADMIN,REPLICATION_SLAVE_ADMIN,RESOURCE_GROUP_ADMIN,RESOURCE_GROUP_USER,ROLE_ADMIN,SET_USER_ID,SYSTEM_VARIABLES_ADMIN,XA_RECOVER_ADMIN ON *.* TO `admin`@`%` WITH GRANT OPTION;

    GRANT ALL PRIVILEGES ON `mm-deckbuilder`.* TO `admin`@`%`;
    ```
 - Using phpmyadmin create a schema for this project (mm-deckbuilder)
 - To run migrations and seed the db
    ```bash
    docker-compose exec workspace bash
    php artisan migrate
    php artisan db:seed
    ```
