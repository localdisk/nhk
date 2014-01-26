NHK Program API
===

NHK 番組表 API です。

### インストール

[Composer](http://getcomposer.org) を使用してインストールします

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Add NHK API を require セクションに追加
php composer.phar require nhk/dev-master
```


### 使い方

```php
require 'vendor/autoload.php';

$api = NHK\Api();

// \Guzzle\Http\Message\Response を戻すので加工はご自由に
$list = $api->getList('130', 'g1', '2014-01-26');

```
