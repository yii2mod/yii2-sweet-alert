<?php

namespace yii2mod\alert\tests;

use Yii;
use yii2mod\alert\Alert;

/**
 * Class AlertTest
 * @package yii2mod\alert\tests
 */
class AlertTest extends TestCase
{
    public function testNoAlert()
    {
        $widget = Yii::createObject(Alert::className());
        $this->assertFalse(isset($widget->options['title']));
    }

    public function testRenderAlert()
    {
        $flashMessage = 'Test flash message';
        Yii::$app->session->addFlash('success', $flashMessage);
        $widget = Yii::createObject(Alert::className());
        $this->assertEquals($flashMessage, $widget->options['title']);
    }
}