<?php
/**
 * Copyright (c) 2018.
 * @author Andrey Inyagin <zemljanoj.i@gmail.com>
 */
namespace Zemljanoj\GoogleClient\Api\Data;
/**
 * Interface \Zemljanoj\GoogleClient\Api\Data\RangeInterface
 */
interface RangeInterface
{
    /**
     * @return \Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface
     */
    public function getAddress ():\Zemljanoj\GoogleClient\Api\Data\Range\AddressInterface;

    /**
     * @return \Zemljanoj\GoogleClient\Api\Data\CellInterface[][]
     */
    public function getCells ():array;
}