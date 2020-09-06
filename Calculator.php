<?php


class Calculator
{
    public $a;
    public $b;

    function checkopration($pheptinh)
    {
        switch($pheptinh)
        {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '*':
                return $this->a * $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;

            default:
                return "Sorry No command found";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}