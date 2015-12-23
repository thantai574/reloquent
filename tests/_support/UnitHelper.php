<?php namespace Codeception\Module;

use Codeception\TestCase;

class UnitHelper extends \Codeception\Module
{
    function _after(TestCase $test)
    {
        \AspectMock\Test::clean();
    }

    public function seeMyVar($var){
        $this->debug($var);
    }
}