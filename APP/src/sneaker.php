<?php


namespace App\src;


class sneaker
{
    public string $name;
    public string $mode;
    public  int $price;
    public int $size;


    public function __construct($data)
    {
        $this->name=$data["name"];
        $this->mode=$data["mode"];
        $this->price=$data["price"];
        $this->size=$data["size"];
    }

    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getMode(): mixed
    {
        return $this->mode;
    }

    /**
     * @return mixed
     */
    public function getSize(): mixed
    {
        return $this->size;
    }
}
