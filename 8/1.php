<?php

function showDirectories($path)
{
    $dir = new DirectoryIterator(realpath($path));
    getContent($dir);
}

function getContent($dir)
{
    foreach ($dir as $item) {
        if ($item->getBaseName() == '.') continue;
        if ($item->isDir()) {
            echo <<<zzz
            <p><a href="?path={$item->getPathname()}">$item</a></p>
zzz;
        } else {
            echo '<p>' . $item->getBaseName() . '</p>';
        }
    }
}

if (!empty($_GET['path'])) {
    showDirectories($_GET['path']);
} else {
    showDirectories('/');
}
