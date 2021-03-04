<?php
use Lucasmota\Src\PdfToTextFacade;

require "../vendor/autoload.php";

$dir = "../storage/pdf2.pdf";
echo $dir;
echo PdfToTextFacade::getText($dir);