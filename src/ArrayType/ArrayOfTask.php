<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTask ArrayType
 * @subpackage Arrays
 */
class ArrayOfTask extends AbstractStructArrayBase
{
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\Task[]
     */
    public $Task;
    /**
     * Constructor method for ArrayOfTask
     * @uses ArrayOfTask::setTask()
     * @param \Dpd\StructType\Task[] $task
     */
    public function __construct(array $task = array())
    {
        $this
            ->setTask($task);
    }
    /**
     * Get Task value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\Task[]|null
     */
    public function getTask()
    {
        return isset($this->Task) ? $this->Task : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTask method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskForArrayConstraintsFromSetTask(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTaskTaskItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaskTaskItem instanceof \Dpd\StructType\Task) {
                $invalidValues[] = is_object($arrayOfTaskTaskItem) ? get_class($arrayOfTaskTaskItem) : sprintf('%s(%s)', gettype($arrayOfTaskTaskItem), var_export($arrayOfTaskTaskItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Task property can only contain items of type \Dpd\StructType\Task, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Task value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Task[] $task
     * @return \Dpd\ArrayType\ArrayOfTask
     */
    public function setTask(array $task = array())
    {
        // validation for constraint: array
        if ('' !== ($taskArrayErrorMessage = self::validateTaskForArrayConstraintsFromSetTask($task))) {
            throw new \InvalidArgumentException($taskArrayErrorMessage, __LINE__);
        }
        if (is_null($task) || (is_array($task) && empty($task))) {
            unset($this->Task);
        } else {
            $this->Task = $task;
        }
        return $this;
    }
    /**
     * Add item to Task value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Task $item
     * @return \Dpd\ArrayType\ArrayOfTask
     */
    public function addToTask(\Dpd\StructType\Task $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\Task) {
            throw new \InvalidArgumentException(sprintf('The Task property can only contain items of type \Dpd\StructType\Task, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Task[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\Task|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\Task|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\Task|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\Task|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\Task|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Task
     */
    public function getAttributeName()
    {
        return 'Task';
    }
}
