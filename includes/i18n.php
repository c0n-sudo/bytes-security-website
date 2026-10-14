<?php
const SUPPORTED_LANGS = ['de', 'en', 'pl'];
const DEFAULT_LANG = 'de';

$lang = $_GET['lang'] ?? DEFAULT_LANG;
if (!in_array($lang, SUPPORTED_LANGS, true)) {
    $lang = DEFAULT_LANG;
}

function load_lang(string $code): array {
    $data = [];

    $main = __DIR__ . '/../lang/' . $code . '.json';
    if (is_file($main)) {
        $data = json_decode(file_get_contents($main), true) ?? [];
    }

    $files = glob(__DIR__ . '/../lang/' . $code . '/*.json') ?: [];
    foreach ($files as $file) {
        $extra = json_decode(file_get_contents($file), true) ?? [];
        $data = array_merge($data, $extra);
    }

    return $data;
}

$translations = load_lang($lang);
$fallback = ($lang === DEFAULT_LANG) ? $translations : load_lang(DEFAULT_LANG);

function t(string $key): string {
    global $translations, $fallback;
    $text = $translations[$key] ?? $fallback[$key] ?? $key;
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function url(string $path): string {
    global $lang;
    if ($lang === DEFAULT_LANG) {
        return $path;
    }
    $hash = '';
    $pos = strpos($path, '#');
    if ($pos !== false) {
        $hash = substr($path, $pos);
        $path = substr($path, 0, $pos);
    }
    $sep = (strpos($path, '?') !== false) ? '&' : '?';
    return $path . $sep . 'lang=' . $lang . $hash;
}

function t_exists(string $key): bool {
    global $translations, $fallback;
    return isset($translations[$key]) || isset($fallback[$key]);
}