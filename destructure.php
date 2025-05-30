<?php

class File {
    private $filename;
    private $handle;

    public function __construct($filename, $mode = 'r'){
        $this->filename = $filename;
        $this->handle = fopen($filename, $mode);
    }

    public function __destruct(){
        if($this->handle){
            fclose($this->handle);
        }
    }
    public function read(){
        return fread($this->handle, filesize($this->filename));
    }
}

$file1 = new File('file.txt');

echo $file1->read();