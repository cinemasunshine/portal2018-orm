# cinemasunshine/portal2018-orm

![Test](https://github.com/cinemasunshine/portal2018-orm/workflows/Test/badge.svg)

## Installation

Add `repositories` to Composer.

```json
{
    "repositories": {
        "cinemasunshine/portal2018-orm": {
            "type": "vcs",
            "url": "https://github.com/cinemasunshine/portal2018-orm.git"
        }
    }
}
```

Install the latest version with

```console
$ composer require cinemasunshine/portal2018-orm
```

## Usage

Extend the entity class.

```php
<?php
use Cinemasunshine\ORM\Entity\Page as BasePage;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Page extends BasePage
{
}
```

### アノテーションの継承について

一部（おそらくEntityレベル）のアノテーションは継承に対応していません。継承後に改めて設定してください。

https://github.com/doctrine/orm/issues/5928#issuecomment-231634212
