<?php

interface Xyz{
    function setA($a);
    function setB($a);
    function getResult($a);
}
interface Ijk{
    function setX($a);
    function setY($a);
}

class Abc implements Xyz, Ijk {
    public function setB($a)
    {
        // TODO: Implement setB() method.
    }

    function setA($a)
    {
        // TODO: Implement setA() method.
    }

    function setX($a)
    {
        // TODO: Implement setX() method.
    }

    function setY($a)
    {
        // TODO: Implement setY() method.
    }

    function getResult($a)
    {
        // TODO: Implement getResult() method.
    }
}