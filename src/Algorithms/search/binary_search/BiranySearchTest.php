<?php 

namespace Nayeemdev\PhpAlgorithms\Algorithms\search\binary_search;

use PHPUnit\Framework\TestCase;
use Nayeemdev\PhpAlgorithms\Algorithms\search\binary_search\BinarySearch;

class BiranySearchTest extends TestCase 
{    
    /**
     * testBinarySearh
     *
     * @return void
     */
    public function testBinarySearh()
    {
        $elements = [1, 2, 5, 22, 33, 123, 256, 700, 1024];
        $number = 1024;

        $binarySearch = new BinarySearch($elements, $number);
        $this->assertEquals(8, $binarySearch->search());
    }
    
    /**
     * testBinarySearchWithFalseValue
     *
     * @return void
     */
    public function testBinarySearchWithFalseValue()
    {
        $elements = [1, 2, 5, 22, 33, 123, 256, 700, 1024];
        $number = 500;

        $binarySearch = new BinarySearch($elements, $number);
        $this->assertEquals(false, $binarySearch->search());
    }
}