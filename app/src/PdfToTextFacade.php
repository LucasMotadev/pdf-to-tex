<?php

namespace App\src;

class PdfToTextFacade {
    public static function getText(string $filename)
    {
        $pdfToImage = new PdfToImage($filename);
        $imgToText = new ImageToText($pdfToImage->tiff()); 
        return $imgToText->convert()->get();
    }
}