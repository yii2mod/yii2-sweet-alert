<?php

namespace yii2mod\alert\tests;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii2mod\alert\tests\data\Session;

/**
 * This is the base class for all yii framework unit tests.
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->mockApplication();

        FileHelper::createDirectory($this->getTestFilePath());
    }

    protected function tearDown()
    {
        $this->destroyApplication();
    }

    /**
     * Populates Yii::$app with a new application
     * The application will be destroyed on tearDown() automatically.
     *
     * @param array $config The application configuration, if needed
     * @param string $appClass name of the application class to create
     */
    protected function mockApplication($config = [], $appClass = '\yii\web\Application')
    {
        new $appClass(ArrayHelper::merge([
            'id' => 'testapp',
            'basePath' => __DIR__,
            'vendorPath' => $this->getVendorPath(),
            'aliases' => [
                '@bower' => '@vendor/bower-asset',
                '@npm' => '@vendor/npm-asset',
            ],
            'components' => [
                'request' => [
                    'hostInfo' => 'http://domain.com',
                    'scriptUrl' => 'index.php',
                ],
                'session' => [
                    'class' => Session::class,
                ],
                'assetManager' => [
                    'basePath' => $this->getTestFilePath(),
                ],
            ],
        ], $config));
    }

    /**
     * @return string vendor path
     */
    protected function getVendorPath()
    {
        return dirname(__DIR__) . '/vendor';
    }

    /**
     * Destroys application in Yii::$app by setting it to null.
     */
    protected function destroyApplication()
    {
        Yii::$app = null;
    }

    /**
     * Returns the test file path.
     *
     * @return string file path
     */
    protected function getTestFilePath()
    {
        return dirname(__DIR__) . '/tests/runtime' . DIRECTORY_SEPARATOR . getmypid();
    }
}
