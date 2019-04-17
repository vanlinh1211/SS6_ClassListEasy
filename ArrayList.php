<?php

class ArrayList
{
    public $arrayList = [];

    public function __construct()
    {
        return $this->arrayList;
    }

    public function getArrayList()
    {
        return $this->arrayList;
    }

    public function add($item)
    {
        array_push($this->arrayList, $item);
    }

    public function get($index)
    {
        if ($index >= 0 && $index < count($this->arrayList)) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function remove($index)
    {
        unset($this->arrayList[$index]);
        $this->arrayList = array_values($this->arrayList);
        return $this->arrayList;
    }

}

