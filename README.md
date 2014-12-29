Alert Widget for Yii 2
=========
- Alert widget based on SweetAlert extension http://tristanedwards.me/sweetalert


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
echo Alert::widget([
          'useSessionFlash' => false,
          'options' => [
               'title' => 'Success message',
               'type' => 'Success',
               'text' => "You will not be able to recover this imaginary file!",
               'confirmButtonText'  => "Yes, delete it!",   
               'cancelButtonText' =>  "No, cancel plx!"
          ]
]);
```
