<?php

interface Flyable
{
    public function fly() : string;
}

abstract class Human
{
    abstract public function brain() : float;

    public function walk()
    {
        return true;
    }

    public function speak()
    {
        return true;
    }
}

class Arif extends Human implements Flyable
{
    public function brain(): float
    {
        return 90;
    }

    public function fly(): string
    {
        return "Fly via Airplane";
    }
}

class Rafsan extends Human
{
    public function brain(): float
    {
        return 96;
    }
}


class Immigration
{
    private Flyable $flyable;

    public function __construct(Flyable $flyable)
    {
        $this->flyable = $flyable;
    }

    public function processFly()
    {
        return 'status: ' . $this->flyable->fly();
    }
}

$man = new Arif;

$man1 = new Rafsan;

$immigration = new Immigration($man);

echo $immigration->processFly();

