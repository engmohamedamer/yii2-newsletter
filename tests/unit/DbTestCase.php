<?php
/**
 * @link https://github.com/yiimaker/yii2-newsletter
 * @copyright Copyright (c) 2017 Yii Maker
 * @license BSD 3-Clause License
 */

namespace ymaker\newsletter\tests\unit;

use yii\test\FixtureTrait;

/**
 * Base test case class with fixures support
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class DbTestCase extends TestCase
{
    use FixtureTrait;

    /**
     * @var \UnitTester
     */
    protected $tester;


    /**
     * @inheritdoc
     */
    protected function _before()
    {
        parent::_before();
        $this->loadFixtures();
    }

    /**
     * @inheritdoc
     */
    protected function _after()
    {
        $this->unloadFixtures();
        parent::_after();
    }

    /**
     * @inheritdoc
     */
    public function fixtures()
    {

    }
}
