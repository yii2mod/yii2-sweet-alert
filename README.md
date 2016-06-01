Alert Widget for Yii 2
======================
Alert widget based on [SweetAlert](http://t4t5.github.io/sweetalert/)

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-sweet-alert/v/stable)](https://packagist.org/packages/yii2mod/yii2-sweet-alert) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-sweet-alert/downloads)](https://packagist.org/packages/yii2mod/yii2-sweet-alert) [![License](https://poser.pugx.org/yii2mod/yii2-sweet-alert/license)](https://packagist.org/packages/yii2mod/yii2-sweet-alert)

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
------------
Once the extension is installed, simply add widget to your page as follows:

1) Default usage, render all flash messages stored in session flash via Yii::$app->session->setFlash().
```php
echo Alert::widget(); 
```

2) Custom usage example:
```php
echo \yii2mod\alert\Alert::widget([
        'type' => \yii2mod\alert\Alert::TYPE_WARNING,
        'options' => [
            'title' => 'Success message',
            'text' => "You will not be able to recover this imaginary file!",
            'confirmButtonText'  => "Yes, delete it!",
            'cancelButtonText' =>  "No, cancel plx!"
        ]
]);
```


Alert Options 
----------------
You can find them on the [options page](http://t4t5.github.io/sweetalert/)
