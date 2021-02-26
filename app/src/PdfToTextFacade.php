<?php

namespace Lucasmota\Src;

class PdfToTextFacade {
    public static function getText(string $filename)
    {
        $pdfToImage = new PdfToImage($filename);
        $imgToText = new ImageToText($pdfToImage->tiff()); 
        return $imgToText->convert()->get();
    }
}