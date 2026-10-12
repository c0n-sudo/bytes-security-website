<?php
const SUPPORTED_LANGS = ['de', 'en', 'pl'];
const DEFAULT_LANG = 'de';

$lang = $_GET['lang'] ?? DEFAULT_LANG;
if (!in_array($lang, SUPPORTED_LANGS, true)) {
    $lang = DEFAULT_LANG;
}

function load_lang(string $code): array {
    $file = __DIR__ . '/../lang/' . $code . '.json';
    if (!is_file($file)) {
        return [];
    }
    return json_decode(file_get_contents($file), true) ?? [];
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