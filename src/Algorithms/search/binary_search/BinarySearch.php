<?php
declare(strict_types=1);

namespace Nayeemdev\PhpAlgorithms\Algorithms\search\binary_search;


class BinarySearch 
{

    /**
     * sroted array
     *
     * @var array
     */
    public array $elements;

    /**
     * search value
     *
     * @var integer
     */
    public int $number;

    /**
     * constructor of BinarySeach Class
     *
     * @param array $elements
     * @param integer $number
     */
    public function __construct(array $elements, int $number) {
        $this->elements = $elements;
        $this->number = $number;
    }

    /**
     * Search from array
     *
     * @return int|bool
     */
    public function search()
    {
        $elements = $this->elements;
        $number = $this->number;

        $left = 0;
        $right = count($elements) - 1;

        while ($left <= $right) {
            $midpoint = (int) floor(($left + $right) / 2);

            if ($elements[$midpoint] < $number) {
                $left = $midpoint + 1;
            } elseif ($elements[$midpoint] > $number) {
                $right = $midpoint - 1;
            } else {
                return $midpoint;
            }
        }

        return false;
    }
}