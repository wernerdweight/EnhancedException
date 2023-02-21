EnhancedException
==

Generic enhanced exception to be used in other projects

[![Build Status](https://app.travis-ci.com/wernerdweight/EnhancedException.svg?branch=master)](https://app.travis-ci.com/wernerdweight/EnhancedException)
[![Latest Stable Version](https://poser.pugx.org/wernerdweight/enhanced-exception/v/stable)](https://packagist.org/packages/wernerdweight/enhanced-exception)
[![Total Downloads](https://poser.pugx.org/wernerdweight/enhanced-exception/downloads)](https://packagist.org/packages/wernerdweight/enhanced-exception)
[![License](https://poser.pugx.org/wernerdweight/enhanced-exception/license)](https://packagist.org/packages/wernerdweight/enhanced-exception)

Instalation
--

1) Download using composer

```bash
composer require wernerdweight/enhanced-exception
```

2) Define your exceptions

```php
use WernerDweight\EnhancedException\Exception\AbstractEnhancedException;

class MyException extends AbstractEnhancedException
{
    /** @var int */
    public const EXCEPTION_SOMETHING_BAG_HAPPENED = 1;
    /** @var int */
    public const EXCEPTION_DIDNT_EXPECT_SPANISH_INQUISITION = 2;

    /** @var string[] */
    protected static $messages = [
        self::EXCEPTION_SOMETHING_BAG_HAPPENED => 'Something bad happened! Helpful, I know.',
        self::EXCEPTION_DIDNT_EXPECT_SPANISH_INQUISITION => 'Didn\'t expect Spanish inquisition to reach user %s!',
    ];
}
```

3) Use your exceptions

```php
throw new MyException(MyException::EXCEPTION_DIDNT_EXPECT_SPANISH_INQUISITION, [$user->getUsername()]);
// will throw `Didn't expect Spanish inquisition to reach user Ferdinand II!`
```
