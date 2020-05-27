<?php

use PHPUnit\Framework\TestCase;

use App\Calculator\Addition;
use App\Calculator\Division;
use App\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    /** @test */
    public function can_set_single_operation()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function can_set_multiple_operations()
    {
        $addition1 = new Addition();
        $addition1->setOperands([5, 10]);

        $addition2 = new Addition();
        $addition2->setOperands([2, 2]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition1, $addition2]);

        $this->assertCount(2, $calculator->getOperations());
    }

    /** @test */
    public function my_own_test_really_addition_and_devision_multiple_operations()
    {
        
        $addition1 = new Addition();
        $addition1->setOperands([5, 10]);

        $addition2 = new Addition();
        $addition2->setOperands([2, 2]);

        $devision = new Division();
        $devision->setOperands([4, 2]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition1, $addition2, $devision]);

        $this->assertCount(3, $calculator->getOperations());
    }

    /** @test */
    public function operations_are_ignored_if_not_instance_of_operation_interface()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition, 'cats', 'dogs']);

        $this->assertCount(2, $calculator->getOperations());
    }
}