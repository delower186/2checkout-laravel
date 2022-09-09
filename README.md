[![Latest Version on Packagist](https://img.shields.io/packagist/v/collizo4sky/omnipay-2checkout.svg?style=flat-square)](https://packagist.org/packages/delower186/twocheckout)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/collizo4sky/omnipay-2checkout.svg?style=flat-square)](https://packagist.org/packages/delower186/twocheckout)

## 2checkout package for Laravel application
Providing Simple Integration for 2Checkout Payment Gateway

## Requirements
* Laravel >= 5.5

## Installation

* Use following command to install:

```bash
composer require delower186/twocheckout
```


* Add the service provider to your if Laravel version is below 5.5 `$providers` array in `config/app.php` file like: 

```php
TwoCheckout\TwoCheckoutServiceProvider
```
```php
TwoCheckout\TwoCheckoutServiceProvider::class
```

* Add the alias to your `$aliases` array in `config/app.php` file like: 

```php
'TwoCheckout' => TwoCheckout\Facades\TwoCheckout 
```
```php
'TwoCheckout' => TwoCheckout\Facades\TwoCheckout::class 
```

* Run the following command to publish configuration:

```bash
php artisan vendor:publish
```

## Usage
### Configuration 
* after creating 2checkout account add merchant code to .env file
```bash
MERCHANT_CODE='your merchant code here'
```

### Options
* Migrate database if you want to see demo / use built in system then go to the following link
```bash
http://127.0.0.1:8000/twocheckout
```
* Otherwise include the following facade to your controller which will enable you to use 2 static methods loadScripts() and buyNow($price)
```php
use Delower186\Twocheckout\Facades\Twocheckout;
```
```php
loadScripts() // use this method in the bolwo of product page
```
```php
buyNow($price) //use this method as buyNow button product price as parameter, it can be customized using css classes
```

### Customization
* these are optional customization options can be added to .env file
```bash
#DEFAULT PRODUCT TYPE IS "DYNAMIC" only for now 
#PRODUCT_TYPE=

#DEFAULT CURRENCY "USD"
#CURRENCY_CODE=

#DEFALT TEXT "BUY NOW"
#BUTTON_TEXT=

#CSS CLASSES  SEPARATED BY SPACE
#CSS_CLASSES=

#CART NAME (DEFAULT 'Total Price')
#CART_NAME=
```
