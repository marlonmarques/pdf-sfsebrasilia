<?php

namespace Modules\ClickNfse\Nfse\Danfse;

use TCPDF;
use TCPDF_FONTS;

class PdfBase extends TCPDF
{
    public $FontFamily = 'helvetica';

    const OUTPUT_STANDARD = 'I';
    const OUTPUT_DOWNLOAD = 'D';
    const OUTPUT_SAVE = 'F';
    const OUTPUT_STRING = 'S';

    public function __construct($orientation = 'P', $unit = 'mm', $format = [217.1, 304], $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false)
    {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache, $pdfa);
        $this->SetDrawColor('0', '0', '0');
        $this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetMargins(11.8,3.4,8.4,'');
        $this->setFonts();
    }

    private function setFonts()
    {
        $path = realpath(__DIR__.'/../../fonts/');

        TCPDF_FONTS::addTTFfont($path.'/calibri-regular.ttf', 'TrueTypeUnicode', '', 96);
        TCPDF_FONTS::addTTFfont($path.'/calibri-bold.ttf', 'TrueTypeUnicode', '', 96);
        TCPDF_FONTS::addTTFfont($path.'/tahoma.ttf', 'TrueTypeUnicode', '', 96);
        TCPDF_FONTS::addTTFfont($path.'/tahomabd.ttf', 'TrueTypeUnicode', '', 96);
    }

}
