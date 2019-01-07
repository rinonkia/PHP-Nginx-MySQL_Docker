# PHP-Nginx-MySQL_Docker

### Dockerを使って簡単にPHPの開発環境を用意できます。

## 環境

以下を用意している必要があります。<br>
 - Docker
 - docker-compose


## バージョン

 - `nginx:1.13.5-alpine`
 - `php:7.1.9-fpm-alpine`
 - `mysql:5.7.19`

## 手順

### git clone でリポジトリを取り込む

任意のフォルダにて`git clone`する。<br>
フォルダ名は任意で構いません。今回は”test”としています。<br>

```git clone https://github.com/rinonkia/PHP-Nginx-MySQL_Docker.git test```

フォルダ内に移動<br>
```cd test```

### コンテナの起動

Dockerを起動した状態で、以下のコマンドを一行ずつ入力<br>
```
docker-compose build
docker-compose up -d
```
```
starting php_web_1 ... done
starting php_app_1 ... done
starting php_db_1  ... done
```
このような表記が出れば起動が成功。<br>

念のためにコンテナ実行中か以下のコマンドで確認してください。
```docker ps```

```
// 例
CONTAINER ID        IMAGE                 COMMAND                  CREATED             STATUS              PORTS                    NAMES
e1c0c8f5f4d7        nginx:1.13.5-alpine   "nginx -g 'daemon of…"   28 minutes ago      Up 4 minutes        0.0.0.0:80->80/tcp       php_web_1
8c7d9543cf3f        php_app               "docker-php-entrypoi…"   28 minutes ago      Up 4 minutes        9000/tcp                 php_app_1
b52177ffdef0        mysql:5.7.19          "docker-entrypoint.s…"   28 minutes ago      Up 4 minutes        0.0.0.0:3306->3306/tcp   php_db_1
```
