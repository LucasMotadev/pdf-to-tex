<?php

namespace Lucasmota\App\Src;


class PdfToImage {
    const  TMP = __DIR__ . "/tmp/tmp.tiff";

    public function __construct(string $filename)
    {
        $validate = new FileValidate($filename);
        $validate->validExtencion('pdf')->fileExist();
        $this->filename = $filename;
    }

    public function tiff(){
      exec("convert -quality 100 -density 300 -depth 8 -strip -background white -alpha off {$this->filename}[0] ". self::TMP , $this->outputExec);
      return self::TMP;
    }

    public function destroy()
    {
        // echo $filename;
        if (!unlink($this->tmp)) throw new \Exception("Erro ao excluir o arquivo");
    }

}