<!-- includes/autoloader.php -->
<?php

class Autoload {
    public function __construct($name) {
        $this->loadFile($name);
    }

    public function loadFile($name) {
        // Replace any non-alphanumeric characters with directory separator
        $file = str_replace(['.', '/',], DIRECTORY_SEPARATOR, $name);

        // Combine with base directory
        $file = __DIR__ . DIRECTORY_SEPARATOR . $file . '.php';

        if (file_exists($file)) {
            include_once $file;
        } else {
            echo "File not found: $file";
        }
    }
}
class AutoLink{
    public function __construct($name) {
       echo __DIR__.'/../'.$name;
    }
}

// Example usage:



