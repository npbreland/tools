<?php

foreach (glob("*.zip") as $filename) {
    $zip = new ZipArchive();

    if ($zip->open($filename) === true) {
        $extractPath = 'unzipped';
        $zip->extractTo($extractPath);
        $zip->close();
    }
}
