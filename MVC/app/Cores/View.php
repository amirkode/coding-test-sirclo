<?php
namespace CodingTest\Sirclo\SimpleMVC\Cores;

class View {
    public static function render(string $view, $data = null) {
        require __DIR__ . '/../Views/' . $view . '.php';
    }
    
    public static function redirect(string $url) {
        header("Location: $url");
    }
}