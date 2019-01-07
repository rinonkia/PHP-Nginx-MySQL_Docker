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

以下のコマンドを一行ずつ入力<br>
```
docker-compose build
docker-compose up -d
```
