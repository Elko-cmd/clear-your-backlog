> [Organize Vault](../01_Organize/README.md) • [Work Description](../02_Lebenslauf%20und%20Statement/exercise1_works.md) • [Statement](../02_Lebenslauf%20und%20Statement/exercise2_statment.md) • [CV](../02_Lebenslauf%20und%20Statement/exercise3_cv.md) • [Communication](../02_Lebenslauf%20und%20Statement/exercise4_professionelle_kommunikation.md) • [Documentation](../04_document/exercise4_dokumentation.md) • [Tech Rider](../06_techrider/exercise_techrider.md) • [Website](../05_publish/exercise_website.md) • [Portfolio](../07_Portfolio/portfolio.md) • [Applications & Funding](../02_Lebenslauf%20und%20Statement/exercise5_bewerbungen_foerderung.md) • [Institutions](../08_Institution/institution.md) • [Reading List](../02_Lebenslauf%20und%20Statement/leseliste.md)

# Session 1 -- Obsidian for Artistic Practice

Accompanying material for the first session of the seminar. This file gathers introductory input, exercises, and further tips for working with Obsidian as a personal knowledge and archive system for artists and designers.

---

## 1. Why Obsidian?

Obsidian is a **local, file-based note-taking and knowledge system**. All notes are simple Markdown files (`.md`) in a folder on your hard drive. This has four decisive advantages for artistic practice:

1. **Ownership & longevity:** Your notes belong to you. No cloud lock-in, no subscription obligation. If Obsidian no longer exists in 10 years, your texts will still be there as readable files.
2. **Networking instead of hierarchy:** Notes can be freely linked to each other -- like in a Zettelkasten. Connections emerge *through the work*, not through pre-selected folders.
3. **Archive + workshop in one:** Work descriptions, application fragments, research excerpts, idea lists, diary notes -- everything lives in the same space and can be recombined.
4. **Scriptable & extensible:** Through community plugins, the app grows with your practice (see section 6).

> **Rule of thumb:** Obsidian is not a productivity tool, but a **studio for thoughts**. Like a physical studio, it only becomes useful through use. Perfection at the start is an antipattern.

---

## 2. Basic Terms

| Term | Meaning |
|------|---------|
| **Vault** | The root folder of your system. A folder on your hard drive that Obsidian opens as a "vault". You can have several (e.g. practice + teaching separated). |
| **Note** | A single `.md` file. Can be anything: work description, idea fragment, literature note, timeline entry. |
| **Wikilink** | Internal link in the form `[[Note name]]`. Clicking opens the target note; if it doesn't yet exist, it is created when clicked. |
| **Backlink** | Automatically generated list of all notes that link to the current one. Visible in the right sidebar. |
| **Tag** | Keyword with `#` at the beginning, e.g. `#video` or `#in-progress`. Used for cross-categorization across folders. |
| **Frontmatter** | YAML block at the beginning of a note (between `---`/`---`). Structured metadata goes here: title, year, medium, tags. |
| **Graph View** | Visualization of your vault as a network graph. Each note a point, each link a line. |
| **Canvas** | Infinitely large canvas on which you can spatially arrange notes and images. Good for project planning, exhibition layouts, mind maps. |

---

## 3. Markdown Basics (what you really need)

Markdown is simple text markup. Three characters are enough for 90% of everyday use.

```markdown
# Heading Level 1
## Heading Level 2
### Heading Level 3

**bold**   *italic*   ~~strikethrough~~

- Bullet point
- another one
  - indented

1. Numbered list
2. second point

> Blockquote

`inline code`

[Visible text](https://target-url.com)
[[Internal Note]]
[[Internal Note|Display text]]

![[image.jpg]]       (embed image from vault)
![[other_note]]      (embed entire note)

#tag  #work/video  #status/in-progress

- [ ] open task
- [x] completed task
```

### Frontmatter example

```markdown
---
title: Untitled (Fog III)
year: 2025
medium: Video installation
duration: 8 min
status: completed
tags: [work, video, installation]
---
```

These metadata can later be queried with the Dataview plugin -- so you can, for example, have all video works from 2023 onwards automatically listed.

---

## 4. Folder Structure: three basic approaches

There is **no right structure**. The most common mistake is to adopt another person's folder logic. Choose a starting point, work with it for 2--3 weeks, then adjust.

### Approach A -- "Simple" (recommended for the start)

```
00_Inbox/          new, unsorted notes
01_Works/          one note per work
02_Texts/          statement, CV, project descriptions
03_Applications/   open calls, grants, drafts
04_Research/       literature notes, quotes, inspiration
05_Journal/        daily or weekly entries
99_Archive/        completed, no longer active
_Footage/          images, videos, PDFs (attachments)
_Templates/        templates for notes
```

### Approach B -- PARA (Tiago Forte)

```
1_Projects/     active projects with deadline
2_Areas/        ongoing areas of responsibility (practice, teaching, admin)
3_Resources/    topics that interest you
4_Archive/      everything inactive
```

### Approach C -- Zettelkasten (flat)

Just one folder `notes/`, everything is accessed via wikilinks, tags, and "Map of Content" notes (index notes). Very flexible, but requires discipline.

> **Recommendation for the seminar:** Start with approach A or the template from [Obsidian_Template/](./Obsidian_Template/). You can restructure at any time -- Obsidian follows the file system.

---

## 5. The Zettelkasten Idea for Artistic Work

The principle comes from sociologist Niklas Luhmann: **One idea per note, each note linked to at least one other.** Three note types work very well for artistic practice:

| Type | Function | Example |
|------|----------|---------|
| **Fleeting Note** | fleeting thought, 1--2 sentences | "Thought on the relationship between fog and screen flicker" |
| **Literature Note** | excerpt from read/viewed material, with source | "Sontag: *On Photography* -- p. 41: 'To photograph is to appropriate...'" |
| **Permanent Note** | own, articulated idea in your own words | "Appropriation through gaze -- connection to my video work Fog III" |

**The crux:** The individual note is not valuable, the network is. Every time you write something new, ask yourself: *What does this remind me of?* Link it.

---

## 6. Recommended Plugins (enable Community Plugins)

Obsidian ships with a basic version; the ecosystem lives from community plugins. The following are particularly useful for artistic practice:

| Plugin | For what |
|--------|----------|
| **Templater** | Note templates with dynamic fields (date, title, questions on creation) -- ideal for work data sheets |
| **Dataview** | SQL-like queries: "Show all works 2024 with medium=video" -- automatic lists, tables, galleries |
| **Calendar** | Calendar view + Daily Notes -- good for studio logbook |
| **Periodic Notes** | Weekly/monthly reflection notes |
| **Excalidraw** | Hand sketches directly in Obsidian -- exhibition plans, moodboards |
| **Image Toolkit** | Larger previews of images in the vault |
| **Advanced Tables** | Comfortable table editing (tech rider!) |
| **Kanban** | Project boards (applications: idea → submitted → response) |
| **Homepage** | Defined start page on opening (your "dashboard") |

Core plugins (built-in) that should be turned on right away: **Daily Notes**, **Graph View**, **Backlinks**, **Outgoing Links**, **Tags Pane**, **Templates**, **Canvas**.

---

## 7. Graph View & Canvas -- Seeing what emerges

**Graph View** (core plugin, icon bottom left) shows your vault as a network. Unspectacular at first; after 2--3 months of active work, it becomes visible which topics actually preoccupy you -- and which remain isolated.

**Canvas** is an infinite canvas. Use cases for artistic practice:

- **Work overview:** group notes + images of your works spatially
- **Exhibition planning:** import floor plan, arrange works as cards
- **Moodboard:** collage image quotes, references, own fragments
- **Application strategy:** open calls as cards, connected to matching works
- **Developing a work group:** visually cluster fragments that are not yet named

---

## 8. Exercises for Session 1

### Exercise 1 -- "Backlog Audit" (20 min)

**Goal:** Honest inventory of your professional backlog.

1. Create a note `00_Inbox/backlog.md`.
2. Write down **unfiltered** everything you "should actually do sometime" regarding your practice: website, statement, document old work, write email to XY, update portfolio...
3. No order, no evaluation. At least 15 items.
4. **Afterwards:** mark with tags: `#now` (next 4 weeks), `#later` (this semester), `#sometime`.
5. Share with the person next to you: which three points are the most urgent? Why?

### Exercise 2 -- Set up vault (30 min)

1. Download and install Obsidian: https://obsidian.md
2. Create new vault (name: your surname or project title). Choose the storage location deliberately (not in an iCloud sync folder if you want to work with Git later).
3. Set up folder structure from approach A (see section 4) **or** copy the [Obsidian_Template/](./Obsidian_Template/) from this repo as a starting point.
4. Activate community plugins: *Settings → Community Plugins → turn Restricted Mode off*. Then install **Templater**, **Dataview**, **Calendar**.
5. Create a note `About me.md` with basic data: name, year of birth, studies, current media, website (if available).

### Exercise 3 -- Document first work (30 min)

1. Choose **one** existing work (unfinished is also ok).
2. Create: `01_Works/[Work title].md`.
3. Copy the following frontmatter and fill it in:

```markdown
---
title: 
year: 
medium: 
duration_or_format: 
status: [idea | in-progress | completed | shown]
tags: [work]
---

## Short description
(3--4 sentences: what is the work?)

## Detailed description
(1000--2000 characters: context, process, effect)

## Technique & setup
(How is it shown? What does it need?)

## Exhibitions / presentations
- 

## Related works
- [[...]]

## Footage
![[image1.jpg]]
```

4. Create a subfolder `_Footage/[Work title]/` and copy at least one image/video into it.
5. Embed the image in the note (`![[image1.jpg]]`).

### Exercise 4 -- Linking experiment (10 min)

1. Write at the end of the work note: "This work relates to [[Topic XY]]."
2. Click on the newly created red link -- Obsidian creates the target note.
3. Write 3--5 keywords there on why this topic occupies you.
4. Open the **Graph View**. You see two connected points.
5. Reflect: what would you link next?

### Exercise 5 -- Set up Daily Note (10 min)

1. *Settings → Daily Notes*: Activate. Storage location: `05_Journal/`. Format: `YYYY-MM-DD`.
2. Today: create a first Daily Note (icon: calendar left).
3. Write three lines: (a) What did I do in my practice today? (b) What occupies me? (c) What do I plan for tomorrow?
4. If you mention a work, link it: `[[Work title]]`.

---

## 9. Common Beginner Mistakes (and how to avoid them)

| Mistake | Consequence | Better way |
|---------|-------------|------------|
| Installing 40 plugins on the first day | Chaos, overload | Start with 0 plugins. Add one at a time as needed. |
| Planning the "perfect" folder structure | Paralysis, no content | Just start. Structure follows content, not the other way around. |
| Only typing, never linking | Obsidian remains a dumb folder | For every note: set at least 1 link -- even if the target note does not yet exist. |
| Tags AND folders AND links in parallel as main system | Redundancy, inconsistency | Decide: one primary system (usually links), the others secondary. |
| Copying other people's vaults 1:1 | Foreign mindset, your own practice doesn't fit in | Inspiration yes, but build your own system over weeks. |
| Everything in your head, "I'll do it later" | Notes never happen | 5-minute rule: rather half-typed than not at all. |

---

## 10. Sustainable Routines

The vault lives from **small, regular touches**, not from the big clean-up action.

- **Daily (2--5 min):** Open daily note, one sentence. Fleeting notes from head to inbox.
- **Weekly (15 min):** Empty inbox -- each note either throw away, sort into folder, or elaborate.
- **Monthly (30 min):** Open Graph View. Which clusters have grown? Which notes hang isolated? Create index notes ("Map of Content") for large topics.
- **Per semester (1 h):** Check structure, maintain archive, adjust templates.

---

## 11. Sync, Backup, Versioning

Your vault is local. Three options if you want to back it up / use it on multiple devices:

1. **Obsidian Sync** (paid, approx. $5/month): official, encrypted, simple.
2. **iCloud / Dropbox / Syncthing:** free, but conflict files possible. Never mix with Obsidian Sync.
3. **Git** (free, powerful, learning curve): vault as Git repo, `Obsidian Git` plugin. Perfect for technically inclined users -- you get complete version history (like in this seminar repo).

**Minimum:** once a week manually copy the vault folder -- to an external hard drive or USB stick.

---

## 12. Homework until Session 2

- [ ] At least **3 works** documented as separate notes in the vault (with frontmatter, short description, at least one image in `_Footage/`)
- [ ] Existing texts (old bios, application fragments, exhibition texts) collected in the vault -- simply as copy-paste into a note `02_Texts/text_fragments.md`
- [ ] Daily note kept on at least 5 days
- [ ] Bring laptop with working Obsidian to Session 2
- [ ] Note one open question about Obsidian -- will be clarified at the start of Session 2

---

## 13. Further Resources

### Official documentation
- [Obsidian Help](https://help.obsidian.md) -- official docs (EN)
- [Obsidian Hub](https://publish.obsidian.md/hub/) -- community-curated resource collection
- [Obsidian Forum](https://forum.obsidian.md) -- very active community

### Good introductory articles
- [How I use Obsidian -- Steph Ango](https://stephango.com/vault) (CEO of Obsidian, minimalist approach)
- [How I Use Obsidian As A Creative](https://dev.to/heymichellemac/how-i-use-obsidian-as-a-creative-part-1-14lk)
- [Writing like an artist -- Thesis Whisperer](https://thesiswhisperer.com/2024/04/07/using-obsidian-as-your-writing-work-bench/)
- [Obsidian Markdown Cheatsheet](https://www.markdowntools.io/obsidian-cheat-sheet)

### Zettelkasten basics
- [Getting Started with Zettelkasten in Obsidian](https://obsidian.rocks/getting-started-with-zettelkasten-in-obsidian/)
- Sönke Ahrens: *How to Take Smart Notes* (book, 2017) -- standard work

### YouTube (short, good tutorials)
- Nicole van der Hoeven -- practical workflows
- Linking Your Thinking (Nick Milo) -- philosophy of networked thinking
- FromSergio -- German-language Obsidian tutorials

---

## 14. Source Note

This document was created for the seminar "Clear your backlog" at the Kunsthochschule Kassel, New Media. Contents synthesized from Obsidian documentation, community articles (stephango.com, dev.to, obsidian.rocks, thesiswhisperer.com, markdowntools.io, facedragons.com) and seminar practice.

> Back to [Overview 01_Organize](./README.md) • Continue to [Session 2: Work Description](../02_Lebenslauf%20und%20Statement/exercise1_works.md)
