<?php
function splDir() {
    $templates = array();
    global $main_root_path_directory;
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($main_root_path_directory)) as $filename)
    {
        if($filename->getFilename() != '.' && $filename->getFilename() != '..' && $filename->getFilename() != 'README.txt') {
            $templates[] = $filename->getPathname();
        }

    }
    return $templates;
}
