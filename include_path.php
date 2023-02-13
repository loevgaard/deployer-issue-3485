<?php
require_once 'vendor/autoload.php';

echo "Paths in include path\n---\n";

$paths = explode(PATH_SEPARATOR, get_include_path());
foreach ($paths as $path) {
    echo "- $path\n";
}
