<?php

namespace App\src;

use thiagoalessio\TesseractOCR\TesseractOCR;


class ImageToText
{
  
    private $text;
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function convert()
    {
        $tesseract =  new TesseractOCR($this->filename);
         $this->text =  $tesseract->run();
         return $this;
    }

    public function get()
    {
        return $this->text;
    }

}
