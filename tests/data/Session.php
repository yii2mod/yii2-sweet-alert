<?php

namespace yii2mod\alert\tests\data;

/**
 * Class Session
 *
 * @package yii2mod\alert\tests\data
 */
class Session extends \yii\web\Session
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        // blank, override, preventing shutdown function registration
    }

    public function open()
    {
        // blank, override, preventing session start
    }
}
