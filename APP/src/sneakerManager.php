<?php


namespace App\src;


class sneakerManager
{
    public  static   $sneaker;
    public  string $path;
    public function __construct($path)
    {
        $this->path=$path;
    }
    public  function  getDaTaToFIle()
    {
        $dataJson= file_get_contents($this->path);
        return json_decode($dataJson,true);
    }
    public function getData(): array
    {
        $data= $this->getDaTaToFIle();
        self::$sneaker = [];
        foreach ($data as $item){
            $sneaker = new sneaker($item);
            self::$sneaker[] = $sneaker;
        }
        return self::$sneaker;
    }
    public  function saverDaTaToFile($arr)
    {
        $dataJson = json_encode($arr);
        file_put_contents($this->path, $dataJson);
    }
    public function addData($item)
    {
        $data = $this->getDaTaToFIle();
        array_push($data,$item);
        $this->saverDaTaToFile($data);
    }
    public function find($index): sneaker
    {
        $data = $this->getDaTaToFIle();
        $item = $data[$index];
        return new sneaker($item);
    }
    public function delete($index)
    {
        $data = $this->getDaTaToFIle();
        array_splice($data,$index,1);
        $this->saverDaTaToFile($data);
    }
    public function update($index,$item)
    {
        $data = $this->getDaTaToFIle();
        $data[$index]= $item;
        $this->saverDaTaToFile($data);


    }

    public function detailsProduct($index): sneaker
    {
        $data = $this->getDaTaToFIle();
        $item = $data[$index];
        return new sneaker($item);

    }



}