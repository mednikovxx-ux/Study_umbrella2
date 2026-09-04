---
name: Study Umbrella
description: Warm, trust-first online school for languages and humanities, guided by a red-accented "umbrella" system with six subject colors underneath.
colors:
  umbrella-red: "#f34b4b"
  warm-paper: "#f9faf5"
  stone-grey: "#EDEDED"
  warm-sand: "#EFEBE6"
  soft-ink: "#2c2c2c"
  deep-teal: "#1E7A7A"
  golden-yellow: "#E8B544"
  muted-lilac: "#A98AB0"
  slate-teal: "#4291A0"
  warm-amber: "#D6824A"
  lantern-red: "#D65655"
typography:
  display:
    fontFamily: "Playfair Display, ui-serif, Georgia, Cambria, Times New Roman, Times, serif"
    fontSize: "clamp(1.75rem, 4vw, 4rem)"
    fontWeight: 700
    lineHeight: 1.1
    letterSpacing: "normal"
  body:
    fontFamily: "Inter, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "16px"
    fontWeight: 400
    lineHeight: 1.5
rounded:
  pill: "999px"
  card: "24px"
  control: "16px"
  circle: "50%"
spacing:
  sm: "8px"
  md: "16px"
  lg: "24px"
  xl: "32px"
components:
  button-primary:
    backgroundColor: "{colors.umbrella-red}"
    textColor: "#ffffff"
    rounded: "{rounded.pill}"
    padding: "10px 18px"
  button-cta:
    backgroundColor: "#ffd766"
    textColor: "#000000"
    rounded: "{rounded.pill}"
    padding: "10px 24px"
---

# Design System: Study Umbrella

## Overview

**Creative North Star: "The Steady Umbrella"**

Study Umbrella is a warm, family-facing online school (languages and humanities), not a cold SaaS product. The name and the recurring umbrella imagery set the metaphor: a reliable shelter guiding students through the "storm" of learning a new language or subject. The system stays approachable and a little playful rather than corporate: cream paper backgrounds, one confident warm red as the brand's single accent, and a dedicated color per subject so the languages/humanities hub reads as a coherent family of six rooms under one roof.

This is a redesign-in-progress from a non-professional-designer baseline: the color palette is the incumbent, deliberate choice (kept as-is on purpose) and the typography (Playfair Display + Inter) was refreshed this cycle to replace fonts that were referenced in CSS but never actually loaded in the browser. Visual rejections confirmed so far: no yellow-and-navy "SaaS compliance" palette (an earlier reference board was explicitly rejected in favor of the site's own colors), no Hedvig Letters Serif (no Cyrillic support — the whole site is Russian-language).

**Key Characteristics:**
- One brand red (`umbrella-red`) plus six subject accents, never mixed on the same element
- Serif display headlines over sans-serif everything else, a firm two-font system
- Soft, cream, slightly-varied neutral surfaces rather than pure white
- Full-pill buttons and pills everywhere; 24px soft-rounded cards everywhere else
- Flat-to-soft shadows, no glassmorphism, no gradients

## Colors

Warm and a little playful: cream paper, one confident red, six subject colors that never bleed into each other.

### Primary
- **Umbrella Red** (#f34b4b): The single brand accent — primary CTAs, active nav underline, cookie-banner button, accent phrases inside body copy. Used site-wide regardless of which subject page it appears on.

### Secondary (subject accents — one per course, used only on that course's own materials)
- **Deep Teal** (#1E7A7A): English
- **Golden Yellow** (#E8B544): Español
- **Muted Lilac** (#A98AB0): История (also the general humanities-hub accent)
- **Slate Teal** (#4291A0): Обществознание
- **Warm Amber** (#D6824A): Русский язык
- **Lantern Red** (#D65655): 中文

### Neutral
- **Soft Ink** (#2c2c2c): Primary body text — a warm near-black, not pure `#000`.
- **Warm Paper** (#f9faf5): Page background, the lightest surface.
- **Stone Grey** (#EDEDED): Hero panel and "programs" panel background — a flat mid-grey card surface.
- **Warm Sand** (#EFEBE6 / #F1EADF): Track cards, program cards, and the contact form panel — a second, slightly warmer neutral than Stone Grey.

### Named Rules
**The One Accent Rule.** `umbrella-red` is the only color allowed on cross-subject UI (nav, footer, global buttons, cookie banner). A subject accent only ever appears on that subject's own page and its own nav pill — never borrowed onto a different subject's card or badge.

## Typography

**Display Font:** Playfair Display (with Georgia, Times New Roman fallback)
**Body Font:** Inter (with system-ui fallback)

**Character:** A confident, slightly editorial serif for headlines paired with a neutral, highly-legible grotesque for everything functional — the pairing signals "real school," not "app."

### Hierarchy
- **Display** (700, 64px desktop / 30-40px mobile, line-height 1.0-1.1): Subject-page hero titles ("УЧИТЬ АНГЛИЙСКИЙ...").
- **Headline** (700, 48-56px): Section titles ("ПОЧЕМУ МЫ — ВАШ ЛЕГКИЙ СТАРТ?", "НАШИ ПРОГРАММЫ").
- **Title** (700, 20-26px): Card titles (teacher name, track card title, program card title).
- **Body** (400, 15-18px, line-height 1.4-1.5): Paragraph copy, card descriptions.
- **Label** (500-600, 13-21px): Nav links, pill labels ("Современно", "Доступно"), button text.

### Named Rules
**The Numeral Rule.** The big "01 / 02 / 03" numerals in the "Why choose us" list use the display serif at 48px, not the body font — they read as a typographic flourish, not a data label.

## Layout

Centered `.container` at max-width 1200px, 16px side padding. Sections stack vertically in a fixed order (hero → about → teachers → why-choose-us → programs → courses → contact → footer) shared across every page via PHP partials, so header/footer/contact-form never drift between pages. Subject pages additionally use a two-column hero (911px content / 557px photo at desktop, scaled 0.75 via `transform: scale`) that collapses to a single column under 1024px. Breakpoints: 480 / 640 / 768 / 1024px for new code (older sections still carry a mix of 600/768/900/1024px breakpoints from before this system existed).

## Elevation & Depth

Mostly flat, with soft tinted shadows used sparingly to lift specific cards (`box-shadow: 0 8px 18px rgba(0,0,0,0.08)` on goal/format cards, `0 14px 28px rgba(15,23,42,0.08)` on program cards) rather than a full elevation scale. No glassmorphism, no blur.

### Shadow Vocabulary
- **card-lift** (`0 8px 18px rgba(0,0,0,0.08)`): Default resting shadow for goal/format/track/program cards.
- **pressed-button** (`0 4px 0 #e2b640`): The primary yellow CTA button's solid drop shadow — reads as a tactile, pressable 3D button rather than a flat pill.

### Named Rules
**The Flat-By-Default Rule.** Cards get one soft lift shadow and nothing else — no hover-elevate, no layered shadows. The primary CTA is the one exception with its solid pressed-button shadow.

## Shapes

Three radii: **full pill** (`999px`) for every button and nav toggle; **24px** for every content card (hero panel, program card, track card, contact form, format card); **16px** for compact floating UI (dropdown menus, cookie banner) — a nested row inside a 16px menu uses a proportionally smaller 12px. Teacher photos and social icons are perfect circles (`50%`). No sharp corners anywhere in the UI.

## Components

### Buttons
- **Shape:** Full pill (999px).
- **Primary (brand-wide):** `umbrella-red` background, dark navy `#121826` text (not white — fails contrast) — used for cookie-banner accept and the contact form submit.
- **Primary (yellow CTA):** `#ffd766` background, black text, solid `#e2b640` drop shadow — used for the main hero "Проверь себя" button on hub pages.
- **Ghost:** White background, `#d1d5db` border — used for the header's "Главная ▾" and language/subject switcher pills.
- **Subject-page level-check button:** Fills with that page's own subject accent color, white text, no shadow — the one place a subject accent is allowed on a button.

### Cards / Containers
- **Corner Style:** 24px everywhere.
- **Background:** Warm Sand or Stone Grey (never pure white).
- **Shadow Strategy:** `card-lift` (see Elevation) on goal/format/program/track cards; the contact form and hero panel skip the shadow entirely.
- **Internal Padding:** 20-26px.

### Inputs / Fields
- **Style:** No box, no border-radius — a single 2px bottom border only, transparent background. This is deliberately different from the pill/card language; forms read as a written list, not boxed inputs.
- **Focus:** Border-bottom switches to `umbrella-red`.

### Navigation
- **Style:** Sticky header, white background. Desktop shows inline anchor links plus a "Главная ▾" pill menu (nested by school → subject) and, on subject pages, a second pill switching between sibling subjects. Mobile collapses to a labeled burger ("Главная" + hamburger icon) revealing a full-width dropdown list.

### Teacher Card (signature component)
Circular photo (280px desktop / 180px mobile) with a smaller circular certification badge overlapping its top-right corner, subject name colored with that subject's own accent token, inside a horizontally-scrollable card slider with arrow controls that hide on touch devices.

## Do's and Don'ts

### Do:
- **Do** use `umbrella-red` for every cross-subject interactive element; keep the six subject accents scoped to their own page only.
- **Do** use Playfair Display only for headings ≥20px; Inter for everything else.
- **Do** keep every element on one of the three radii (999px pill, 24px card, or 16px compact control) — no in-between corner values.
- **Do** keep text on `umbrella-red` (and subject-accent) buttons dark navy `#121826`, not white or `#2c2c2c` — white-on-red was 3.55:1 and `#2c2c2c` still only 3.94:1; `#121826` clears WCAG AA at 5.00:1+.

### Don't:
- **Don't** introduce a warm-beige-and-brass "premium artisan" palette or an AI-purple gradient — neither matches this brand.
- **Don't** borrow a subject's accent color onto a different subject's card, badge, or button.
- **Don't** add drop shadows to inputs or nav pills — shadows are reserved for content cards and the one pressed-button CTA.
- **Don't** reach for Hedvig Letters Serif or any other Cyrillic-incomplete font — every typeface on this site must render Russian text correctly.
