# wordpress-test

wordpressのキャッチアップ用

## このテンプレートを使ってテーマを開発する場合の流れ

### ルートディレクトリ上にテーマを置く

このtemplateには、仮でSampleThemeというディレクトリを置いてある。
これを消して、同じように作ったテーマを置く。

### docker-compose.ymlを修正する

wordpressのvolumesを以下のように修正する。

```
wordpress:
     depends_on:
       - db
     image: wordpress:latest
     ports:
       - "8000:80"
     restart: always
     environment:
       WORDPRESS_DB_HOST: db:3306
       WORDPRESS_DB_USER: wordpress
       WORDPRESS_DB_PASSWORD: wordpress
       
     // ↓ローカルのSampleThemeを、Docker上のSampleThemeにマウントしている
     // 新たにテーマをdockerで開発したい場合はここの名前も変える必要がある。
     volumes:
      - ./SampleTheme:/var/www/html/wp-content/themes/SampleTheme
      
      ~~省略~~
```

参考サイト  

Docker ComposeでWordPressのテーマ開発環境を一瞬で作成する  
https://qiita.com/akiyama01/items/4dcaf889aad8883b4364

wordpressのSampleThemeを生成してくれるサイト  
https://underscores.me/
