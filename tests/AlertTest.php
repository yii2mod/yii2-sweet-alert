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
        $output = Alert::widget();
        $this->assertEmpty($output);
    }

    public function testRenderAlert()
    {
        $flashMessage = 'Test flash message';
        Yii::$app->session->addFlash('success', $flashMessage);
        $widget = Yii::createObject(Alert::class);
        $this->assertEquals($flashMessage, $widget->options['title']);
    }
}