# Bytes Security Website

Unternehmenswebsite der Bytes Security GmbH (Hamm), dreisprachig (Deutsch, Englisch, Polnisch).

**Technik:** PHP (Includes für Header und Footer), HTML, CSS, JavaScript.
**Hosting:** Strato.
**Terminbuchung:** Microsoft Bookings, eingebunden per iframe (`termin.php`).

## Projektstruktur

```
assets/            CSS, JavaScript, Bilder
includes/
  header.php       Kopfbereich, Navigation, Sprachumschalter, Seitentitel
  footer.php       Fußbereich
  i18n.php         Übersetzungslogik (t(), url(), t_exists())
lang/
  de.json          Globale Texte Deutsch (Navigation, Buttons, Footer)
  en.json          dasselbe für Englisch
  pl.json          dasselbe für Polnisch
  de/ en/ pl/      Seitentexte, je Bereich eine JSON-Datei
*.php              Die einzelnen Seiten
```

## Wie die Mehrsprachigkeit funktioniert

- Die Sprache steckt in der URL: `seite.php?lang=en` (erlaubt: `de`, `en`, `pl`).
- Ohne Parameter wird Deutsch geladen.
- `t('schluessel')` gibt den Text in der aktuellen Sprache aus.
  Fehlt der Schlüssel, wird der deutsche Text angezeigt, fehlt auch der, der Schlüssel selbst.
- `url('seite.php')` erzeugt Links, die die Sprache behalten (`seite.php?lang=en`).
- Alle JSON-Dateien einer Sprache werden automatisch zusammengeführt
  (`lang/xx.json` plus alle Dateien in `lang/xx/`).
- Seitentitel und Beschreibung kommen aus `lang/xx/meta.json`
  (`title.<dateiname>` und `desc.<dateiname>`, Dateiname ohne `.php`).
- Beschriftungen für Screenreader und Bild-Alternativtexte stehen in `lang/xx/a11y.json`.

## Neue Seite anlegen

1. Neue PHP-Datei im Hauptordner anlegen, als Vorlage eine bestehende Seite kopieren
   (Header einbinden, am Ende den Footer einbinden).
2. Alle sichtbaren Texte mit `t('...')` ausgeben, Links mit `url('...')`.
3. Die Texte in `lang/de/<seite>.json`, `lang/en/<seite>.json` und `lang/pl/<seite>.json` eintragen.
4. Seitentitel in `lang/xx/meta.json` ergänzen: `"title.<dateiname>": "..."`.
5. Bei Bedarf einen Link in `includes/header.php` ergänzen.

## Neue Sprache hinzufügen

1. In `includes/i18n.php` das Kürzel bei `SUPPORTED_LANGS` ergänzen.
2. `lang/xx.json` und den Ordner `lang/xx/` mit denselben Dateien wie bei `de` anlegen.
3. Texte übersetzen. Der Sprachumschalter im Header erscheint automatisch.

## Lokal testen (XAMPP)

Projektordner nach `htdocs/bytes-security-website` legen und
`http://localhost/bytes-security-website/index.php?lang=en` aufrufen.

## Typische Fehler

- **Der Schlüssel erscheint als Text** (zum Beispiel `nav.services`):
  Er fehlt in der JSON-Datei, oder die JSON ist ungültig.
- **JSON ungültig:** meist ein Komma nach dem letzten Eintrag, oder fehlende Anführungszeichen.
- **Änderung kommt nicht an:** Datei nicht gespeichert, oder Browser-Cache (`Strg + F5`).

## Offene Punkte

- `php-mails.php` (Kontaktformular) liegt nicht im Repository; die Antworttexte sind noch Deutsch.
- Polnische Texte von einer Person mit Muttersprache gegenlesen lassen.
- Rechtstexte (Impressum, AGB, Datenschutz) rechtlich prüfen lassen
  (u. a. Verweis auf das TMG, Abschnitt Online-Streitbeilegung).
