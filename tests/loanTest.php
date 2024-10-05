<?php
require 'loan.class.php';
use PHPUnit\Framework\TestCase;

class loanTest extends TestCase
{
        public $loanInstance;

        protected function setUp(): void
        {
                $this->loanInstance = new loan();
        }

        public function testComputeLoan()
        {
                $this->assertEquals(600,$this->loanInstance->computeloan(500));
        }
}
?>
