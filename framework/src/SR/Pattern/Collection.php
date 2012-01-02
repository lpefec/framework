<?php
namespace SR\Pattern;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Collection
 *
 * @author sr
 */
class Collection implements \Countable, \Iterator, \ArrayAccess
{
    /**
     * @var array 
     */
    protected $elements = array();
    
    /**
     * @var integer
     */
    protected $iteratorIndex = 0;
    
    /**
     * @var integer
     */
    protected $iteratorCount = 0;

    /**
     * Class constructor.
     *
     * @param array $elements
     */
    public function __construct(array $elements = array()){
        $this->elements = $elements;
    }

    /**
     * Returns an array containing all of the elements in this collection.
     * 
     * @return array
     */
    public function toArray(){
        return $this->elements;
    }

    /**
     * Returns the number of elements.
     *
     * @return integer
     */
    public function count(){
        return $this->iteratorCount;
    }

    /**
     * Returns the current element.
     *
     * @return mixed
     */
    public function current(){
        return current($this->elements);
    }

    /**
     * Returns the key of the current element.
     *
     * @return mixed
     */
    public function key(){
        return key($this->elements);
    }

    /**
     * Returns the next element or false if at the end of elements array.
     *
     * @return mixed
     */
    public function next(){
        $this->iteratorIndex++;
        return next($this->elements);
    }

    /**
     * Rewinds the iterator index.
     *
     * @return mixed
     */
    public function rewind(){
        $this->iteratorIndex = 0;
        reset($this->elements);
    }

    /**
     * Checks if the current index is valid.
     *
     * @return boolean
     */
    public function valid(){
        return $this->iteratorIndex < $this->iteratorCount;
    }

    /**
     * Offset check for the ArrayAccess interface.
     *
     * @param mixed $key
     * @return boolean
     */
    public function offsetExists($key){
        return array_key_exists($key, $this->elements);
    }

    /**
     * Getter for the ArrayAccess interface.
     *
     * @param mixed $key
     * @return mixed
     */
    public function offsetGet($key){
        return $this->elements[$key];
    }

    /**
     * Setter for the ArrayAccess interface.
     *
     * @param mixed $key
     * @param mixed $element
     * @return void
     */
    public function offsetSet($key, $element){
        $this->elements[$key] = $element;
        $this->iteratorCount = count($this->elements);
    }

    /**
     * Unsetter for the ArrayAccess interface.
     *
     * @param mixed $key
     * @return void
     */
    public function offsetUnset($key){
        unset($this->elements[$key]);
        $this->iteratorCount = count($this->elements);
    }

    /**
     * Adds an element to the end of the internal elements array.
     *
     * @param mixed $element.
     * @return void
     */
    public function append($element){
        $this->elements[] = $element;
        $this->iteratorCount = count($this->elements);
    }
}

?>
