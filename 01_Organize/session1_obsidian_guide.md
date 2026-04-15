> [Vault organisieren](Session%201%20-%20Übung.md) • [Werkbeschreibung](../02_Lebenslauf%20und%20Statement/exercise1_works.md) • [Statement](../02_Lebenslauf%20und%20Statement/exercise2_statment.md) • [CV](../02_Lebenslauf%20und%20Statement/exercise3_cv.md) • [Kommunikation](../02_Lebenslauf%20und%20Statement/exercise4_professionelle_kommunikation.md) • [Dokumentation](../04_document/exercise4_dokumentation.md) • [Tech Rider](../06_techrider/exercise_techrider.md) • [Website](../05_publish/exercise_website.md) • [Portfolio](../07_Portfolio/portfolio.md) • [Bewerbung & Förderung](../02_Lebenslauf%20und%20Statement/exercise5_bewerbungen_foerderung.md) • [Institutionen](../08_Institution/institution.md) • [Leseliste](../02_Lebenslauf%20und%20Statement/leseliste.md)

# Session 1 -- Obsidian für die künstlerische Praxis

Begleitmaterial zur ersten Sitzung des Seminars. Diese Datei versammelt Einstiegs-Input, Übungen und weiterführende Tipps für die Arbeit mit Obsidian als persönliches Wissens- und Archivsystem für Künstler:innen und Designer:innen.

---

## 1. Warum Obsidian?

Obsidian ist ein **lokales, dateibasiertes Notiz- und Wissenssystem**. Alle Notizen sind einfache Markdown-Dateien (`.md`) in einem Ordner auf deiner Festplatte. Das hat vier entscheidende Vorteile für die künstlerische Praxis:

1. **Eigentum & Langfristigkeit:** Deine Notizen gehören dir. Kein Cloud-Lock-in, kein Abo-Zwang. Wenn Obsidian in 10 Jahren nicht mehr existiert, liegen deine Texte trotzdem noch als lesbare Dateien vor.
2. **Vernetzung statt Hierarchie:** Notizen können frei miteinander verlinkt werden -- wie in einem Zettelkasten. Zusammenhänge entstehen *durch die Arbeit*, nicht durch vorab gewählte Ordner.
3. **Archiv + Werkstatt in einem:** Werkbeschreibungen, Bewerbungsfragmente, Rechercheausschnitte, Ideenlisten, Tagebuchnotizen -- alles lebt im selben Raum und kann neu kombiniert werden.
4. **Skriptbar & erweiterbar:** Über Community-Plugins wächst die App mit deiner Praxis mit (siehe Abschnitt 6).

> **Faustregel:** Obsidian ist kein Produktivitätstool, sondern ein **Studio für Gedanken**. Wie ein physisches Atelier wird es erst durch Gebrauch brauchbar. Perfektion am Anfang ist ein Antipattern.

---

## 2. Grundbegriffe

| Begriff | Bedeutung |
|---------|-----------|
| **Vault** | Der Wurzelordner deines Systems. Ein Ordner auf deiner Festplatte, den Obsidian als "Tresor" öffnet. Du kannst mehrere haben (z. B. Praxis + Lehre getrennt). |
| **Note / Notiz** | Eine einzelne `.md`-Datei. Kann alles sein: Werkbeschreibung, Ideenfragment, Literaturnotiz, Timeline-Eintrag. |
| **Wikilink** | Interner Link in der Form `[[Notizname]]`. Klick öffnet die Zielnotiz; existiert sie noch nicht, wird sie beim Klick neu angelegt. |
| **Backlink** | Automatisch generierte Liste aller Notizen, die auf die aktuelle verlinken. In der rechten Seitenleiste sichtbar. |
| **Tag** | Stichwort mit `#` am Anfang, z. B. `#video` oder `#in-arbeit`. Dient zur Querkategorisierung quer zu Ordnern. |
| **Frontmatter** | YAML-Block am Anfang einer Notiz (zwischen `---`/`---`). Dort stehen strukturierte Metadaten: Titel, Jahr, Medium, Tags. |
| **Graph View** | Visualisierung deines Vaults als Netzwerkgraph. Jede Notiz ein Punkt, jeder Link eine Linie. |
| **Canvas** | Unendlich große Leinwand, auf der du Notizen und Bilder räumlich arrangieren kannst. Gut für Projektplanung, Ausstellungslayouts, Mindmaps. |

---

## 3. Markdown-Basics (was du wirklich brauchst)

Markdown ist einfache Textauszeichnung. Drei Zeichen reichen für 90 % des Alltags.

```markdown
# Überschrift Ebene 1
## Überschrift Ebene 2
### Überschrift Ebene 3

**fett**   *kursiv*   ~~durchgestrichen~~

- Aufzählungspunkt
- noch einer
  - eingerückt

1. Nummerierte Liste
2. zweiter Punkt

> Zitatblock

`inline code`

[Sichtbarer Text](https://ziel-url.de)
[[Interne Notiz]]
[[Interne Notiz|Anzeigetext]]

![[bild.jpg]]        (Bild aus dem Vault einbetten)
![[andere_notiz]]    (ganze Notiz einbetten)

#tag  #werk/video  #status/in-arbeit

- [ ] offene Aufgabe
- [x] erledigte Aufgabe
```

### Frontmatter-Beispiel

```markdown
---
titel: Ohne Titel (Nebel III)
jahr: 2025
medium: Video-Installation
dauer: 8 min
status: abgeschlossen
tags: [werk, video, installation]
---
```

Diese Metadaten sind später mit dem Dataview-Plugin abfragbar -- so kannst du z. B. automatisch alle Videoarbeiten ab 2023 auflisten lassen.

---

## 4. Ordnerstruktur: drei Grundansätze

Es gibt **keine richtige Struktur**. Der häufigste Fehler ist, die Ordnerlogik einer fremden Person zu übernehmen. Wähle einen Einstieg, arbeite 2--3 Wochen damit, passe dann an.

### Ansatz A -- "Schlicht" (empfohlen für den Start)

```
00_Inbox/          neue, unsortierte Notizen
01_Werke/          eine Notiz pro Arbeit
02_Texte/          Statement, CV, Projektbeschreibungen
03_Bewerbungen/    Open Calls, Stipendien, Entwürfe
04_Recherche/      Literaturnotizen, Zitate, Inspiration
05_Tagebuch/       tägliche oder wöchentliche Einträge
99_Archiv/         abgeschlossen, nicht mehr aktiv
_Footage/          Bilder, Videos, PDFs (Anhänge)
_Templates/        Vorlagen für Notizen
```

### Ansatz B -- PARA (Tiago Forte)

```
1_Projects/     aktive Projekte mit Deadline
2_Areas/        Dauerhafte Verantwortungsbereiche (Praxis, Lehre, Admin)
3_Resources/    Themen, die dich interessieren
4_Archive/      alles Inaktive
```

### Ansatz C -- Zettelkasten (flach)

Nur ein Ordner `notes/`, alles wird über Wikilinks, Tags und "Map of Content"-Notizen (Index-Notizen) erschlossen. Sehr flexibel, braucht aber Disziplin.

> **Empfehlung fürs Seminar:** Beginne mit Ansatz A oder dem Template aus [Obsidian_Template/](./Obsidian_Template/). Du kannst jederzeit umbauen -- Obsidian folgt dem Dateisystem.

---

## 5. Der Zettelkasten-Gedanke für künstlerische Arbeit

Das Prinzip stammt vom Soziologen Niklas Luhmann: **Eine Idee pro Notiz, jede Notiz verlinkt mit mindestens einer anderen.** Für die künstlerische Praxis funktionieren drei Notiztypen sehr gut:

| Typ | Funktion | Beispiel |
|-----|----------|----------|
| **Fleeting Note** | flüchtiger Einfall, 1--2 Sätze | "Gedanke zum Verhältnis von Nebel und Bildschirmflimmern" |
| **Literature Note** | Exzerpt aus gelesenem/gesehenem Material, mit Quelle | "Sontag: *Über Fotografie* -- S. 41: 'Fotografieren heißt sich aneignen...'" |
| **Permanent Note** | eigene, ausformulierte Idee im eigenen Wortlaut | "Aneignung durch Blick -- Verbindung zu meiner Videoarbeit Nebel III" |

**Der Knackpunkt:** Nicht die einzelne Notiz ist wertvoll, sondern das Netz. Jedes Mal, wenn du etwas Neues schreibst, frage dich: *Woran erinnert mich das?* Verlinke es.

---

## 6. Empfohlene Plugins (Community Plugins aktivieren)

Obsidian wird in der Grundversion ausgeliefert; das Ökosystem lebt von Community-Plugins. Für die künstlerische Praxis sind diese besonders nützlich:

| Plugin | Wofür |
|--------|-------|
| **Templater** | Notizvorlagen mit dynamischen Feldern (Datum, Titel, Fragen beim Anlegen) -- ideal für Werkdatenblätter |
| **Dataview** | SQL-artige Abfragen: "Zeige alle Werke 2024 mit Medium=Video" -- automatische Listen, Tabellen, Galerien |
| **Calendar** | Kalenderansicht + Daily Notes -- gut für Atelierlogbuch |
| **Periodic Notes** | Wöchentliche/monatliche Reflexionsnotizen |
| **Excalidraw** | Handskizzen direkt in Obsidian -- Ausstellungspläne, Moodboards |
| **Image Toolkit** | größere Vorschauen von Bildern im Vault |
| **Advanced Tables** | komfortable Tabellenbearbeitung (Tech Rider!) |
| **Kanban** | Projekt-Boards (Bewerbungen: Idee → eingereicht → Antwort) |
| **Homepage** | festgelegte Startseite beim Öffnen (dein "Dashboard") |

Kern-Plugins (eingebaut), die man direkt einschalten sollte: **Daily Notes**, **Graph View**, **Backlinks**, **Outgoing Links**, **Tags Pane**, **Templates**, **Canvas**.

---

## 7. Graph View & Canvas -- Sehen, was entsteht

**Graph View** (Kern-Plugin, Icon links unten) zeigt dein Vault als Netzwerk. Für den Anfang noch unspektakulär; nach 2--3 Monaten aktiver Arbeit wird sichtbar, welche Themen dich tatsächlich umtreiben -- und welche isoliert bleiben.

**Canvas** ist eine unendliche Leinwand. Nutzungsbeispiele für die künstlerische Praxis:

- **Werkübersicht:** Notizen + Bilder deiner Arbeiten räumlich gruppieren
- **Ausstellungsplanung:** Grundriss importieren, Arbeiten als Karten anordnen
- **Moodboard:** Bildzitate, Referenzen, eigene Fragmente collagieren
- **Bewerbungsstrategie:** Open Calls als Karten, verbunden mit passenden Arbeiten
- **Werkgruppe entwickeln:** Fragmente, die noch nicht benannt sind, visuell clustern

---

## 8. Übungen für Session 1

### Übung 1 -- "Backlog Audit" (20 min)

**Ziel:** Ehrliche Bestandsaufnahme des professionellen Rückstands.

1. Lege eine Notiz `00_Inbox/backlog.md` an.
2. Schreibe **ungefiltert** alles auf, was du "eigentlich mal machen müsstest" in Bezug auf deine Praxis: Website, Statement, alte Arbeit dokumentieren, Mail an XY schreiben, Portfolio aktualisieren...
3. Keine Reihenfolge, keine Bewertung. Mindestens 15 Punkte.
4. **Danach:** markiere mit Tags: `#jetzt` (nächste 4 Wochen), `#später` (dieses Semester), `#irgendwann`.
5. Teile mit Sitznachbar:in: Welche drei Punkte sind die dringendsten? Warum?

### Übung 2 -- Vault einrichten (30 min)

1. Obsidian herunterladen und installieren: https://obsidian.md
2. Neuen Vault anlegen (Name: dein Nachname oder Projekttitel). Speicherort bewusst wählen (nicht in iCloud-Synchronisationsordner, falls du später mit Git arbeiten willst).
3. Ordnerstruktur aus Ansatz A anlegen (siehe Abschnitt 4) **oder** das [Obsidian_Template/](./Obsidian_Template/) aus diesem Repo als Startpunkt kopieren.
4. Community Plugins aktivieren: *Einstellungen → Community Plugins → Restricted Mode aus*. Dann **Templater**, **Dataview**, **Calendar** installieren.
5. Erstelle eine Notiz `Über mich.md` mit grundlegenden Daten: Name, Geburtsjahr, Studium, aktuelle Medien, Website (falls vorhanden).

### Übung 3 -- Erstes Werk dokumentieren (30 min)

1. Wähle **eine** existierende Arbeit (auch unfertig ist okay).
2. Lege an: `01_Werke/[Werktitel].md`.
3. Kopiere folgendes Frontmatter und fülle es aus:

```markdown
---
titel: 
jahr: 
medium: 
dauer_oder_format: 
status: [idee | in-arbeit | abgeschlossen | gezeigt]
tags: [werk]
---

## Kurzbeschreibung
(3--4 Sätze: was ist die Arbeit?)

## Ausführliche Beschreibung
(1000--2000 Zeichen: Kontext, Prozess, Wirkung)

## Technik & Setup
(Wie wird sie gezeigt? Was braucht sie?)

## Ausstellungen / Präsentationen
- 

## Verwandte Arbeiten
- [[...]]

## Footage
![[bild1.jpg]]
```

4. Lege einen Unterordner `_Footage/[Werktitel]/` an und kopiere mindestens ein Bild/Video rein.
5. Binde das Bild in die Notiz ein (`![[bild1.jpg]]`).

### Übung 4 -- Verlinkungs-Experiment (10 min)

1. Schreibe am Ende der Werknotiz: "Diese Arbeit steht in Bezug zu [[Thema XY]]."
2. Klicke auf den neu entstandenen roten Link -- Obsidian legt die Zielnotiz an.
3. Schreibe dort 3--5 Stichworte, warum dich dieses Thema beschäftigt.
4. Öffne die **Graph View**. Du siehst zwei verbundene Punkte.
5. Reflektiere: Was würdest du als Nächstes verknüpfen?

### Übung 5 -- Daily Note einrichten (10 min)

1. *Einstellungen → Daily Notes*: Aktivieren. Speicherort: `05_Tagebuch/`. Format: `YYYY-MM-DD`.
2. Heute: eine erste Daily Note anlegen (Icon: Kalender links).
3. Drei Zeilen schreiben: (a) Was habe ich in meiner Praxis heute getan? (b) Was beschäftigt mich? (c) Was nehme ich mir für morgen vor?
4. Wenn du eine Werkarbeit erwähnst, verlinke sie: `[[Werktitel]]`.

---

## 9. Häufige Anfängerfehler (und wie du sie vermeidest)

| Fehler | Folge | Besserer Weg |
|--------|-------|--------------|
| Am ersten Tag 40 Plugins installieren | Chaos, Überforderung | Start mit 0 Plugins. Eines nach Bedarf hinzufügen. |
| Die "perfekte" Ordnerstruktur planen | Lähmung, kein Inhalt | Einfach beginnen. Struktur folgt dem Inhalt, nicht umgekehrt. |
| Nur eintippen, nie verlinken | Obsidian bleibt ein dummer Ordner | Bei jeder Notiz: min. 1 Link setzen -- auch wenn die Zielnotiz noch nicht existiert. |
| Tags UND Ordner UND Links parallel als Hauptsystem | Redundanz, Inkonsistenz | Entscheide dich: ein Primärsystem (meistens Links), die anderen sekundär. |
| Fremde Vaults 1:1 kopieren | Fremder Kopf, eigene Praxis passt nicht rein | Inspiration ja, aber eigenes System über Wochen aufbauen. |
| Alles im Kopf, "mach ich später" | Notizen entstehen nie | 5-Minuten-Regel: lieber halb fertig eintippen als gar nicht. |

---

## 10. Nachhaltige Routinen

Das Vault lebt von **kleinen, regelmäßigen Berührungen**, nicht von der großen Aufräumaktion.

- **Täglich (2--5 min):** Daily Note öffnen, ein Satz. Fleeting Notes aus dem Kopf in die Inbox.
- **Wöchentlich (15 min):** Inbox leeren -- jede Notiz entweder wegwerfen, in Ordner einsortieren, oder ausarbeiten.
- **Monatlich (30 min):** Graph View öffnen. Welche Cluster sind gewachsen? Welche Notizen hängen isoliert? Index-Notizen ("Map of Content") für große Themen anlegen.
- **Pro Semester (1 h):** Struktur prüfen, Archiv pflegen, Templates anpassen.

---

## 11. Sync, Backup, Versionierung

Dein Vault liegt lokal. Drei Optionen, wenn du ihn sichern / auf mehreren Geräten nutzen willst:

1. **Obsidian Sync** (kostenpflichtig, ca. 5 $/Monat): offiziell, verschlüsselt, einfach.
2. **iCloud / Dropbox / Syncthing:** kostenlos, aber Konfliktdateien möglich. Nie mit Obsidian Sync mischen.
3. **Git** (kostenlos, mächtig, Lernkurve): Vault als Git-Repo, `Obsidian Git`-Plugin. Perfekt für technisch affine Nutzer:innen -- du bekommst vollständige Versionsgeschichte (wie in diesem Seminar-Repo).

**Minimum:** einmal pro Woche manuell den Vault-Ordner kopieren -- auf externe Festplatte oder USB-Stick.

---

## 12. Hausaufgaben bis Session 2

- [ ] Mindestens **3 Werke** als eigene Notizen im Vault dokumentiert (mit Frontmatter, Kurzbeschreibung, mindestens einem Bild in `_Footage/`)
- [ ] Bestehende Texte (alte Bios, Bewerbungsfragmente, Ausstellungstexte) im Vault gesammelt -- ruhig als Copy-Paste in eine Notiz `02_Texte/textfragmente.md`
- [ ] Daily Note an mindestens 5 Tagen geführt
- [ ] Laptop mit funktionierendem Obsidian zu Session 2 mitbringen
- [ ] Eine offene Frage zu Obsidian notieren -- wird am Anfang von Session 2 geklärt

---

## 13. Weiterführende Ressourcen

### Offizielle Dokumentation
- [Obsidian Help](https://help.obsidian.md) -- offizielle Doku (EN)
- [Obsidian Hub](https://publish.obsidian.md/hub/) -- Community-kuratierte Ressourcensammlung
- [Obsidian Forum](https://forum.obsidian.md) -- sehr aktive Community

### Gute Einstiegsartikel
- [How I use Obsidian -- Steph Ango](https://stephango.com/vault) (CEO von Obsidian, minimalistischer Ansatz)
- [How I Use Obsidian As A Creative](https://dev.to/heymichellemac/how-i-use-obsidian-as-a-creative-part-1-14lk)
- [Writing like an artist -- Thesis Whisperer](https://thesiswhisperer.com/2024/04/07/using-obsidian-as-your-writing-work-bench/)
- [Obsidian Markdown Cheatsheet](https://www.markdowntools.io/obsidian-cheat-sheet)

### Zettelkasten-Grundlagen
- [Getting Started with Zettelkasten in Obsidian](https://obsidian.rocks/getting-started-with-zettelkasten-in-obsidian/)
- Sönke Ahrens: *Das Zettelkasten-Prinzip* (Buch, 2017) -- Standardwerk auf Deutsch

### YouTube (kurze, gute Tutorials)
- Nicole van der Hoeven -- praxisnahe Workflows
- Linking Your Thinking (Nick Milo) -- Philosophie des vernetzten Denkens
- FromSergio -- deutschsprachige Obsidian-Tutorials

---

## 14. Quellenhinweis

Dieses Dokument wurde für das Seminar "Clear your backlog" an der Kunsthochschule Kassel, Neue Medien erstellt. Inhalte synthetisiert aus Obsidian-Dokumentation, Community-Artikeln (stephango.com, dev.to, obsidian.rocks, thesiswhisperer.com, markdowntools.io, facedragons.com) und Seminarpraxis.

> Zurück zur [Übersicht 01_Organize](Session%201%20-%20Übung.md) • Weiter zu [Session 2: Werkbeschreibung](../02_Lebenslauf%20und%20Statement/exercise1_works.md)
