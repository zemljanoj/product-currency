<?php
/**
 * Copyright (c) 2018.
 * @author Andrey Inyagin <zemljanoj.i@gmail.com>
 */
namespace Zemljanoj\GoogleClient\Model\Data\Cell;
/**
 * Class \Zemljanoj\GoogleClient\Model\Data\Cell\AddressFactory
 */
class AddressFactory implements \Zemljanoj\GoogleClient\Api\Data\Cell\AddressFactoryInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        $instanceName = '\\Zemljanoj\\GoogleClient\\Api\\Data\\Cell\\AddressInterface'
    ) {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * {@inheritdoc}
     */
    public function create(
        string $columnName,
        string $rowName = ''
    ):\Zemljanoj\GoogleClient\Api\Data\Cell\AddressInterface {
        return $this->_objectManager->create($this->_instanceName, ['columnName' => $columnName, 'rowName' => $rowName]);
    }
}
