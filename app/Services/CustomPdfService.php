<?php

namespace App\Services;

use Spatie\PdfToImage\Pdf;

class CustomPdfService extends Pdf
{
    protected string $ghostscriptBinary = 'gs'; // Default Ghostscript command



    public function setGhostscriptBinary(string $binaryPath): self
    {
        $this->ghostscriptBinary = $binaryPath;

        return $this;
    }

    protected function getGhostscriptCommand(): string
    {
        return $this->ghostscriptBinary;
    }
}
