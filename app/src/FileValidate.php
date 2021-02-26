<?php

namespace App\src;

class FileValidate {

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }
    
    public  function validExtencion(string $extencion)
    {
        $path_parts = pathinfo($this->filename);

        if (strtolower($path_parts['extension']) != $extencion) {
            throw new \Exception("O arquivo não a extenção: $extencion");
        }

        return $this;
    }
    public function fileExist()
    {
        if (!file_exists($this->filename)) {
            throw new \Exception("O arquivo informado não existe: " . $this->filename);
        }

        return $this;
    }
}