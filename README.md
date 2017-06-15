yii2-dropify
==================
yii2 dropify extension

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist aprsoft/yii2-dropify "*"
```

or add

```
"aprsoft/yii2-dropify": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \AprSoft\Dropify\Dropify::widget(); ?>
```
or    
```php
<?= $form->field($model, 'body')->widget(\AprSoft\Dropify\Dropify::className()) ?>
```

