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

        public function testIfLoanWorks()
        {
                $this->assertEquals(560,$this->loanInstance->computeloan(500));
        }
}
?>