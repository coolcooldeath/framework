<?php


namespace Core\Type;
use Iterator;
use ArrayAccess;
use Countable;
use JsonSerializable;

class Dictionary implements Iterator, JsonSerializable, Countable, ArrayAccess
{
    private bool $readonly;
    private $position = 0;
    private $array = array();
    protected $count;


    public function get($name){
        return $this->offsetGet($name);
    }

    public function set($name,$value){
        $this->offsetSet($name, $value);
    }

    public function getValues(){
        return $this->array;
    }

    public function setValues($values){
        $this->array[] = $values;
    }

    public function clear(){
        $array = array();
    }

    public function __construct($values, bool $readonly = false){

    }

    public function current()
    {
        return $this->array[$this->position];
    }


    public function next()
    {
        ++$this->position;
    }


    public function key()
    {
        return $this->position;
    }


    public function valid()
    {
        return isset($this->array[$this->position]);
    }


    public function rewind()
    {
        $this->position = 0;
    }

    public function offsetExists($offset)
    {
        return isset($this->$array[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->$array[$offset]) ? $this->$array[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->$array[] = $value;
        } else {
            $this->$array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->$array[$offset]);
    }

    public function count()
    {
        return $this-> count;
    }

    public function jsonSerialize()
    {
        return json_encode($this->array);
    }
}