<?php

use PHPUnit\Framework\TestCase;
use App\Support\Collection;

class CollectionTest extends TestCase
{
    /** @test */
    public function empty_instantiated_collection_returns_no_items()
    {
        $array = [];
        $collection = new Collection($array);

        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function count_is_correct_for_items_passed_in()
    {
        $array = ['one','two','three'];
        $collection = new Collection($array);

        $this->assertEquals(3, $collection->count());
    }

     /** @test */
     public function items_returned_match_items_passed_in()
     {
         $array = ['one','two'];
         $collection = new Collection($array);
 
         $this->assertCount(2, $collection->get());
         $this->assertEquals($collection->get()[0], 'one');
         $this->assertEquals($collection->get()[1], 'two');
     }

     /** @test */
     public function collection_is_instance_of_iterator_aggregate()
     {
         $collection = new Collection();
         $this->assertInstanceOf(IteratorAggregate::class, $collection);
     }
}