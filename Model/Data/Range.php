<?php
/**
 * Copyright (c) 2018.
 * @author Andrey Inyagin <zemljanoj.i@gmail.com>
 */
namespace Zemljanoj\GoogleClient\Model\Data;
use Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface;

/**
 * Class \Zemljanoj\GoogleClient\Model\Data\Range
 */
class Range implements \Zemljanoj\GoogleClient\Api\Data\RangeInterface
{
    /**
     * @var \Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface
     */
    private $address;

    /**
     * @var \Zemljanoj\GoogleClient\Api\Data\CellInterface[][]
     * [[<column>][<row>] => <cell>, ...]
     */
    private $cells;

    /**
     * Range constructor.
     *
     * @param \Zemljanoj\GoogleClient\Model\Data\Range\Context $context
     * @param \Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface $address
     * @param array $cells
     */
    public function __construct (
        \Zemljanoj\GoogleClient\Model\Data\Range\Context $context,
        \Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface $address,
        array $cells = []
    ) {
        $this->address = $address;
        $this->cells = $cells;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress ():\Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface
    {
        return $this->address;
    }

    /**
     * {@inheritdoc}
     */
    public function getCells ():array
    {
        return $this->cells;
    }
}