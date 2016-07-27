Alert Widget for Yii 2
======================
Alert widget based on [SweetAlert](http://t4t5.github.io/sweetalert/)

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-sweet-alert/v/stable)](https://packagist.org/packages/yii2mod/yii2-sweet-alert) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-sweet-alert/downloads)](https://packagist.org/packages/yii2mod/yii2-sweet-alert) [![License](https://poser.pugx.org/yii2mod/yii2-sweet-alert/license)](https://packagist.org/packages/yii2mod/yii2-sweet-alert)
[![Build Status](https://travis-ci.org/yii2mod/yii2-sweet-alert.svg?branch=master)](https://travis-ci.org/yii2mod/yii2-sweet-alert)

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-sweet-alert "*"
```

or add

```json
"yii2mod/yii2-sweet-alert": "*"
```

to the require section of your composer.json.

Usage
-------

**For render the message from session flash you can use the following code:**

1) Set the message in your action, for example:

```php
Yii::$app->session->setFlash('success', 'This is the message');
```

2) Simply add widget to your page as follows:
```php
echo Alert::widget();
```

**For render the custom message you can use the following code:**
```php
// A replacement for the "prompt" function

echo \yii2mod\alert\Alert::widget([
    'useSessionFlash' => false,
    'options' => [
        'timer' => null,
        'type' => \yii2mod\alert\Alert::TYPE_INPUT,
        'title' => 'An input!',
        'text' => "Write something interesting",
        'confirmButtonText' => "Yes, delete it!",
        'closeOnConfirm' => false,
        'showCancelButton' => true,
        'animation' => "slide-from-top",
        'inputPlaceholder' => "Write something"
    ],
    'callback' => new \yii\web\JsExpression(' function(inputValue) { 
                if (inputValue === false) return false;      
                if (inputValue === "") { 
                    swal.showInputError("You need to write something!");     
                    return false;   
                }      
                swal("Nice!", "You wrote: " + inputValue, "success"); 
    }')
]);
```

**You can also change the theme of SweetAlert!**

To change the theme, you can configure the assetManager array in your application configuration:
```php
// twitter theme

'assetManager' => [
    'bundles' => [
        'yii2mod\alert\AlertAsset' => [
            'css' => [
                'dist/sweetalert.css',
                'themes/twitter/twitter.css',
            ]
        ],
    ],
]
```

Alert Options 
----------------
You can find them on the [options page](http://t4t5.github.io/sweetalert/)
