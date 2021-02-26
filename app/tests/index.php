<?php

use App\src\PdfToTextFacade;
echo "teste";
echo "<pre>";
$filename = path('app/tests/teste4.pdf');
echo PdfToTextFacade::getText($filename);

?>