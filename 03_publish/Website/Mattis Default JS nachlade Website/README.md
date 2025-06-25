# Mattis Default JS Nachlade-Website

Dieses Projekt zeigt ein einfaches Portfolio, bei dem Bilder und zugehörige Texte dynamisch per JavaScript nachgeladen werden. Die Seite ist für Künstler:innen gedacht, die ihre Werke und kurze Beschreibungen präsentieren möchten.

## Übersicht
- **index.html**: Hauptdatei, lädt automatisch alle Bilder und zugehörige Markdown-Texte aus dem `src`-Ordner.
- **src/**: Enthält die Bilddateien (`1.jpg`, `2.jpg`, ...) und die zugehörigen Textdateien (`1.md`, `2.md`, ...).

## Funktionsweise
Beim Laden der Seite:
1. Wird das erste Bild (`1.jpg`) aus dem `src`-Ordner geladen.
2. Falls vorhanden, wird die zugehörige Markdown-Datei (`1.md`) geladen und als HTML unter das Bild gesetzt.
3. Das Skript versucht automatisch, das nächste Bild (`2.jpg`, `3.jpg`, ...) zu laden, bis keine weiteren Bilder mehr vorhanden sind.
4. Die Markdown-Dateien werden mit einer einfachen Funktion in HTML umgewandelt (Überschriften und Absätze).

## Dateien und Struktur
```
Mattis Default JS nachlade Website/
├── index.html
├── README.md
└── src/
    ├── 1.jpg
    ├── 1.md
    ├── 2.jpg
    ├── 2.md
    └── ...
```

## Eigene Inhalte hinzufügen
- Neue Bilder einfach als `n.jpg` in den `src`-Ordner legen (z.B. `4.jpg`).
- Optional: Eine Datei `n.md` mit Beschreibungstext im Markdown-Format hinzufügen (z.B. `4.md`).

## Hinweise
- Die Seite lädt alle Bilder und Texte automatisch in der Reihenfolge der Dateinamen.
- Die Markdown-zu-HTML-Umwandlung unterstützt nur Überschriften (`#`, `##`, `###`) und Absätze.

---

Fragen oder Feedback? Einfach im Projekt ergänzen! 