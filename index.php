<?php

abstract class Math
{
    protected $a, $b, $c;

    public function setA($a)
    {
        $this->a = $a;
        $this->c = null;
    }

    public function setB($b)
    {
        $this->b = $b;
        $this->c = null;
    }

    public function getResult()
    {
        if (null == $this->c) {
            echo ".";
            $this->calc();
        }

        return $this->c;
    }

    abstract function calc();
}


class Sum extends Math
{
    public function calc()
    {
        $this->c = $this->a + $this->b;
    }
}

class Sub extends Math
{
    public function calc()
    {
        $this->c = $this->a - $this->b;
    }
}

class Mul extends Math
{
    public function calc()
    {
        $this->c = $this->a * $this->b;
    }
}

class Div extends Math
{
    public function calc()
    {
        $this->c = $this->a / $this->b;
    }
}

$s = new Div();

$s->setA(5);
$s->setB(6);

echo $s->getResult() . "<br>";
echo $s->getResult() . "<br>";
echo $s->getResult() . "<br>";

$s->setA(8);
$s->setB(4);
echo $s->getResult() . "<br>";
