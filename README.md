# GITAM Website Home Page – Drupal 10 Technical Test

## Project Links

| Resource | Link |
|---|---|
| **GitHub Repository** | https://github.com/PrashantPsv/gitam-task |
| **Live Demo** | https://gitam.prashantnaicker.com/ |

### GitHub Repository

The complete Drupal 10 implementation is available in the GitHub repository:

https://github.com/PrashantPsv/gitam-task

### Live Demo

The implemented Drupal 10 website is hosted and available for review at:

https://gitam.prashantnaicker.com/

The live implementation includes:

- Converted GITAM homepage
- Responsive desktop and mobile navigation
- Programme Finder
- Database-driven programme data
- Drupal-managed categories, disciplines, and campuses

### Source Template

GITAM Website Home Page:

https://webdev.gitam.edu/new-website/v3

---

# 1. Technical Requirements

| Requirement | Implementation |
|---|---|
| CMS | Drupal 10 |
| Backend | PHP |
| Database | MySQL / MariaDB |
| Frontend | HTML / CSS / JavaScript |
| Grid | Bootstrap Grid |
| Templating | Drupal Twig |
| Programme Finder | Database-driven |
| Taxonomy | Category / Disciplines / Campuses |
| Theme | `gitam_theme` |
| Custom Module | `gitam_programme_finder` |
| Responsive | Desktop + Tablet + Mobile |
| Drupal Core | Not modified |

---

# 2. Project Objective

The objective of this technical test was to convert the supplied GITAM HTML website into a Drupal 10 implementation while preserving the existing frontend experience.

The implementation focuses on maintaining:

- Page layout
- Header
- Footer
- Navigation
- Desktop menu behaviour
- Mobile menu behaviour
- Typography
- Spacing
- Responsive behaviour
- Homepage sections
- Frontend interactions
- Programme Finder UI/UX

The major functional enhancement is that the **Programme Finder is database-driven and managed through Drupal**, instead of relying on hard-coded programme data in JavaScript.

The implementation separates the presentation layer from the backend/data layer using:

- Custom Drupal theme
- Custom Drupal module
- Drupal Content Type
- Drupal Taxonomy
- Drupal Paragraphs
- Entity Reference
- Entity Reference Revisions
- Database-driven API

---

# 3. Drupal Architecture

The implementation follows a Drupal-native architecture consisting of a custom theme, custom module, Drupal content entities, taxonomy terms, Paragraphs, and database-driven programme data.

```text
                         Drupal 10
                            │
             ┌──────────────┴──────────────┐
             │                             │
        Custom Theme                 Custom Module
        `gitam_theme`          `gitam_programme_finder`
             │                             │
      ┌──────┼──────┐              ┌───────┴────────┐
      │      │      │              │                │
    Twig    CSS     JS        Page Controller   API Controller
      │      │      │              │                │
      │      │      │              └────────┬───────┘
      │      │      │                       │
      │      │      │                       ↓
      │      │      │                 Drupal Database
      │      │      │                       │
      │      │      │                  Programme
      │      │      │                       │
      │      │      │                   Meta Data
      │      │      │                       │
      │      │      │                  Prog Details
      │      │      │                       │
      │      │      │            ┌──────────┼──────────┐
      │      │      │            │          │          │
      │      │      │         Campus     Category   Discipline
      │      │      │            │          │          │
      │      │      │            ↓          ↓          ↓
      │      │      │        Campuses    Category   Disciplines
      │      │      │
      └──────┴──────┴──────────────────────────────┐
                                                   ↓
                                            Programme Finder
                                                   │
                                                   ↓
                                                Frontend
```

This architecture separates:

- Presentation
- Backend routing
- API functionality
- Programme content
- Taxonomy
- Programme metadata
- Frontend filtering
- Database access

This makes the implementation easier to maintain and extend.

---

# 4. Custom Theme

The frontend has been implemented using a custom Drupal theme named:

```text
gitam_theme
```

### Theme Location

```text
web/themes/custom/gitam_theme
```

The custom theme contains the Drupal-specific Twig templates, CSS, JavaScript, images, and theme configuration required to integrate the supplied frontend into Drupal.

## 4.1 Theme Structure

```text
web/
└── themes/
    └── custom/
        └── gitam_theme/
            ├── gitam_theme.info.yml
            ├── gitam_theme.libraries.yml
            │
            ├── css/
            ├── js/
            │   ├── programme-data.js
            │   └── script.js
            │
            ├── images/
            │
            └── templates/
                ├── page.html.twig
                ├── page--front.html.twig
                └── programme-finder-page.html.twig
```

The custom theme is responsible for the presentation layer, while programme and taxonomy information is managed through Drupal.

---

# 5. Custom Module – `gitam_programme_finder`

The backend functionality for the Programme Finder is implemented using a custom Drupal 10 module named:

```text
gitam_programme_finder
```

### Module Location

```text
web/modules/custom/gitam_programme_finder
```

> If the project document root is represented as `docroot`, the equivalent path is `docroot/modules/custom/gitam_programme_finder`.

## 5.1 Module Responsibilities

The custom module is responsible for:

- Programme Finder page routing
- Programme Finder API routing
- Programme Finder page controller
- Programme Finder API controller
- Retrieving Drupal-managed programme data
- Connecting the Drupal backend with the frontend
- Providing programme data through the API endpoint
- Providing the Drupal-side integration required by the Programme Finder

The frontend presentation and filtering UI remain inside the custom theme.

---

## 5.2 Custom Module Directory Structure

```text
modules/custom/gitam_programme_finder/
│
├── gitam_programme_finder.info.yml
├── gitam_programme_finder.module
├── gitam_programme_finder.routing.yml
│
└── src/
    └── Controller/
        ├── ProgrammeFinderController.php
        └── ProgrammeApiController.php
```

## 5.3 File Responsibilities

| File | Responsibility |
|---|---|
| `gitam_programme_finder.info.yml` | Defines the Drupal custom module |
| `gitam_programme_finder.module` | Drupal module hooks, including `hook_theme()` |
| `gitam_programme_finder.routing.yml` | Defines Programme Finder page and API routes |
| `ProgrammeFinderController.php` | Handles the Programme Finder page |
| `ProgrammeApiController.php` | Provides the Programme Finder API endpoint |

---

## 5.4 Backend Flow

The custom module connects the Drupal database with the frontend Programme Finder.

```text
Programme Finder Page
        │
        ↓
ProgrammeFinderController
        │
        ↓
Programme Finder Twig Template
        │
        ↓
Frontend JavaScript
        │
        ↓
Programme API
        │
        ↓
ProgrammeApiController
        │
        ↓
Drupal Database
```

This keeps backend routing and API logic inside the custom module instead of placing backend functionality directly inside the theme.

---

# 6. Programme Finder

The Programme Finder is implemented as a **database-driven Drupal feature**.

The original static programme data was converted into Drupal-managed content and taxonomy relationships.

## 6.1 Original Approach

The original static implementation used JavaScript-based programme data:

```text
JavaScript Object
       ↓
Hard-coded Programme Data
       ↓
Frontend
```

## 6.2 Drupal Implementation

The Drupal implementation uses:

```text
Drupal Database
       ↓
Programme Content
       ↓
Prog Details Paragraph
       ↓
Taxonomy References
       ↓
Programme API
       ↓
Frontend JavaScript
       ↓
Filter / Search Logic
       ↓
Programme Finder
```

This removes the dependency on hard-coded programme data and allows administrators to manage programme information through Drupal.

The Programme Finder can use Drupal-managed:

- Categories
- Disciplines
- Campuses
- Programmes
- Programme duration
- Examination information
- Eligibility
- Fees
- Programme images

---

## 6.3 Programme Finder Frontend Structure

The Programme Finder frontend is implemented inside the custom theme.

```text
themes/custom/gitam_theme/
│
├── templates/
│   └── programme-finder-page.html.twig
│
├── js/
│   ├── programme-data.js
│   └── script.js
│
└── css/
```

### `programme-finder-page.html.twig`

Provides the Twig markup/container structure for the Programme Finder page.

### `programme-data.js`

Handles the frontend API integration, including retrieving programme data and making the returned data available to the frontend.

### `script.js`

Handles the interactive Programme Finder functionality, including:

- Filter interactions
- Programme filtering
- Result rendering
- DOM updates
- Frontend interactions

---

# 7. Taxonomy Configuration

## 7.1 Why Taxonomy Is Used

The Programme Finder does not depend on hard-coded category, discipline, or campus arrays in the frontend.

Drupal Taxonomy is used to create structured and reusable classification terms for programme filtering.

The project contains the following taxonomy vocabularies:

```text
Category
Campuses
Disciplines
```

These vocabularies are referenced by the `Prog Details` Paragraph type using Drupal Entity Reference fields.

---

## 7.2 Category Taxonomy

### Vocabulary

```text
Category
```

### Drupal Administration

```text
Structure
→ Taxonomy
→ Category
```

The Category vocabulary is used to classify programmes into their main academic categories.

Example structure:

```text
Category
├── Undergraduate
├── Postgraduate
└── Ph.D.
```

### Usage

Category is used as a high-level Programme Finder filter.

Administrators can add or modify category terms directly from Drupal without changing the frontend code.

---

## 7.3 Campuses Taxonomy

### Vocabulary

```text
Campuses
```

### Drupal Administration

```text
Structure
→ Taxonomy
→ Campuses
```

The Campuses vocabulary stores the available GITAM campus locations.

Example terms:

```text
Campuses
├── Visakhapatnam
├── Hyderabad
└── Bengaluru
```

The exact campus terms correspond to the campus information available in the supplied programme data.

### Usage

Campus information identifies where a particular programme is available.

The Campus taxonomy is referenced from the `Prog Details` Paragraph using:

```text
field_campus
```

---

## 7.4 Disciplines Taxonomy

### Vocabulary

```text
Disciplines
```

### Drupal Administration

```text
Structure
→ Taxonomy
→ Disciplines
```

The Disciplines vocabulary stores the academic disciplines associated with programmes.

Example terms:

```text
Disciplines
├── Computer Science
├── Information Technology
├── Mechanical Engineering
├── Civil Engineering
├── Architecture
├── Finance
└── Marketing
```

The actual terms are based on the programme data used in the implementation.

### Usage

Disciplines provide another level of Programme Finder filtering.

The Discipline taxonomy is referenced from the `Prog Details` Paragraph using:

```text
field_dis
```

---

## 7.5 Taxonomy Administration

Administrators can manage taxonomy terms directly from Drupal:

```text
Administration
→ Structure
→ Taxonomy
```

Available vocabularies:

```text
Category
Campuses
Disciplines
```

New terms can be added without modifying frontend code.

For example, a new campus can be added through:

```text
Structure
→ Taxonomy
→ Campuses
→ Add term
```

The new term can then be associated with the required Programme data.

---

## 7.6 Taxonomy Benefits

Using Drupal Taxonomy provides:

- Structured programme classification
- Database-driven filtering
- Reusable taxonomy terms
- Centralized administration
- Consistent programme categorization
- Entity Reference support
- Views integration
- Scalability for future programmes
- Separation of content and presentation

The Programme Finder therefore does not rely on hard-coded category, discipline, or campus arrays in the frontend.

---

# 8. Paragraphs Module

The **Paragraphs** module has been added to the Drupal 10 implementation to manage structured and reusable Programme information.

The Programme content type uses the following relationship:

```text
Programme
    ↓
Meta Data
    ↓
Entity Reference Revisions
    ↓
Paragraph
    ↓
Prog Details
```

This allows programme-specific metadata to be stored in a structured and reusable Paragraph entity.

---

## 8.1 Why Paragraphs Was Used

The Programme Finder contains different types of information that need to be stored as structured data.

Instead of placing all programme metadata directly into a single Body field, the implementation uses a `Prog Details` Paragraph to group related information.

This provides:

- Structured programme metadata
- Reusable content components
- Flexible programme data
- Better content management
- Separation of content and presentation
- Easier future expansion
- Support for campus-specific information

The structure can also be extended in the future with additional programme-specific fields without significantly changing the main Programme content type.

---

## 8.2 Prog Details Paragraph Type

A custom Paragraph type named:

```text
Prog Details
```

has been created.

### Prog Details Fields

| Field Label | Machine Name | Field Type | Reference / Configuration |
|---|---|---|---|
| Campus | `field_campus` | Entity Reference | Taxonomy term → `Campuses` |
| Campus Eligibility | `field_elig` | Text (plain) | Stores campus-specific eligibility information |
| Campus Fee | `field_total` | Number (decimal) | Stores the campus/programme fee |
| Category | `field_cat` | Entity Reference | Taxonomy term → `Category` |
| Discipline | `field_dis` | Entity Reference | Taxonomy term → `Disciplines` |

### Prog Details Structure

```text
Prog Details
│
├── Campus
├── Campus Eligibility
├── Campus Fee
├── Category
└── Discipline
```

---

## 8.3 Campus-Specific Programme Details

A Programme can contain multiple `Prog Details` entries.

For example:

```text
B.Tech Computer Science Engineering
│
├── Prog Details
│   ├── Campus: Visakhapatnam
│   ├── Category: Undergraduate
│   ├── Discipline: Computer Science
│   ├── Campus Eligibility: ...
│   └── Campus Fee: ...
│
└── Prog Details
    ├── Campus: Hyderabad
    ├── Category: Undergraduate
    ├── Discipline: Computer Science
    ├── Campus Eligibility: ...
    └── Campus Fee: ...
```

This structure allows the same Programme to contain different campus-specific details.

---

# 9. Programme Content Type – Field Configuration

The Programme Finder is implemented using a Drupal **Content Type: Programme**.

### Drupal Administration

```text
Structure
→ Content types
→ Programme
→ Manage fields
```

## 9.1 Configured Fields

| Label | Machine Name | Field Type | Purpose |
|---|---|---|---|
| Body | `body` | Text (formatted, long, with summary) | Programme description/content |
| Duration | `field_duration` | Text (plain) | Programme duration |
| Exam | `field_exam` | Text (plain) | Entrance/examination information |
| Exam Intro | `field_exam_intro` | Text (formatted, long) | Examination introduction/details |
| Feeds item | `feeds_item` | Feed | Feed reference |
| Meta Data | `field_meta_data` | Entity Reference Revisions | References `Prog Details` Paragraph |
| Programme Image | `field_programme_image` | Image | Programme image |

---

## 9.2 Programme Data Structure

The Programme content type is structured approximately as follows:

```text
Programme
│
├── Title
├── Body
├── Duration
├── Exam
├── Exam Intro
├── Feeds item
├── Meta Data
│     │
│     └── Paragraph: Prog Details
│            ├── Campus
│            ├── Campus Eligibility
│            ├── Campus Fee
│            ├── Category
│            └── Discipline
│
└── Programme Image
```

---

## 9.3 Programme Entity Relationships

The Programme entity is connected to the taxonomy structure through the `Prog Details` Paragraph.

```text
Programme
    │
    └── Meta Data
          │
          └── Prog Details
                │
                ├── Category
                │      └── Category Taxonomy
                │
                ├── Discipline
                │      └── Disciplines Taxonomy
                │
                └── Campus
                       └── Campuses Taxonomy
```

Category, Discipline, and Campus are therefore stored as Drupal taxonomy references rather than hard-coded frontend values.

---

## 9.4 Why Drupal Content Type Was Used

The Programme Finder was intentionally implemented using Drupal's content/entity system instead of keeping programme information in JavaScript.

This provides:

- Database-driven programme data
- Drupal administration interface
- Structured programme fields
- Taxonomy relationships
- Image management
- Paragraph-based metadata
- Entity Reference support
- Extensibility for future fields
- Separation between content and presentation

The frontend therefore consumes Drupal-managed data rather than a static JavaScript dataset.

---

# 10. Frontend and Responsive Implementation

The supplied frontend structure has been integrated into the custom Drupal theme.

The implementation maintains the supplied design and responsive behaviour across:

```text
Desktop
Tablet
Mobile
```

The Bootstrap Grid is used for responsive page layout.

The responsive implementation includes:

- Responsive header
- Desktop navigation
- Mobile navigation
- Responsive content sections
- Responsive Programme Finder
- Responsive cards and layouts
- Mobile-friendly controls

---

# 11. Navigation and Menu

The website navigation has been implemented within Drupal while preserving the supplied template's visual structure.

## 11.1 Desktop Navigation

The desktop navigation provides:

- Main navigation
- Menu items
- Dropdown/interactive behaviour where applicable
- Responsive alignment
- Existing styling

## 11.2 Mobile Navigation

The mobile navigation provides:

- Mobile menu toggle
- Responsive navigation
- Touch-friendly menu controls
- Appropriate mobile layout

Both desktop and mobile navigation were verified as part of the implementation.

---

# 12. Accessibility

The implementation follows Drupal and frontend accessibility practices where applicable.

Considerations include:

- Semantic HTML
- Proper navigation structure
- Accessible menu controls
- Keyboard-friendly interactions
- Alternative text for images
- Appropriate button and link elements
- Responsive layouts
- Form labels
- Clear content hierarchy

---

# 13. Security

Drupal core has not been modified.

Security-sensitive information should not be stored in the repository.

The implementation follows Drupal's standard security practices including:

- Drupal Entity API
- Render arrays
- Twig auto-escaping
- Drupal permissions
- Entity access controls
- Sanitized user input
- No direct modification of Drupal core

Environment-specific credentials and sensitive configuration should remain outside version control.

---

# 14. Local Development Setup

## 14.1 Requirements

Install the following:

```text
PHP 8.x
MySQL / MariaDB
Apache
Composer
Git
Drupal 10
```

The project was developed using WAMP on Windows.

Example project location:

```text
C:\wamp64\www\gitam-task
```

---

# 15. Install Dependencies

From the project root:

```bash
composer install
```

This installs the Drupal dependencies defined by the project's `composer.json`.

---

# 16. Configure Database

Create a MySQL/MariaDB database.

Example:

```text
Database:
gitam_drupal
```

Configure the Drupal database credentials in:

```text
web/sites/default/settings.php
```

Do not commit database passwords or other sensitive credentials to Git.

---

# 17. Run the Project

Configure Apache/WAMP so that the Drupal web root points to:

```text
<project>/web
```

For example:

```text
C:\wamp64\www\gitam-task\web
```

Open the configured local domain in a browser.

---

# 18. Enable the Custom Module

The Programme Finder module can be enabled from the Drupal administration interface:

```text
Administration
→ Extend
→ GITAM Programme Finder
```

Or using Drush:

```bash
vendor/bin/drush en gitam_programme_finder
```

After enabling the module, clear the Drupal cache:

```bash
vendor/bin/drush cr
```

---

# 19. Clear Drupal Cache

After changing Twig templates, CSS, JavaScript, configuration, or theme/module files, clear the Drupal cache.

Using Drush:

```bash
vendor/bin/drush cr
```

Alternatively:

```text
Administration
→ Configuration
→ Development
→ Performance
→ Clear all caches
```

---

# 20. Useful Drush Commands

### Check Drupal Status

```bash
vendor/bin/drush status
```

### Clear Cache

```bash
vendor/bin/drush cr
```

### Enable Programme Finder Module

```bash
vendor/bin/drush en gitam_programme_finder
```

### Run Database Updates

```bash
vendor/bin/drush updatedb
```

### Export Configuration

```bash
vendor/bin/drush config:export
```

### Import Configuration

```bash
vendor/bin/drush config:import
```

---

# 21. Configuration Deployment

Drupal configuration should be exported before deploying the project to another environment.

### Export Configuration

```bash
vendor/bin/drush config:export
```

### Import Configuration

```bash
vendor/bin/drush config:import
```

After importing configuration:

```bash
vendor/bin/drush cr
```

Configuration export/import allows Drupal configuration changes such as:

- Content types
- Fields
- Taxonomy vocabularies
- Paragraph types
- Views
- Entity Reference configuration
- Other Drupal configuration

to be transferred between environments.

---

# 22. Git Repository

The project is maintained using Git.

### Repository

https://github.com/PrashantPsv/gitam-task

The repository contains the Drupal implementation, custom theme, custom module, frontend assets, configuration, and project documentation.

Drupal core should not be modified directly.

---

# 23. Recommended `.gitignore`

The following files and directories should not be committed:

```gitignore
/vendor/
/web/sites/*/files/
/web/sites/*/private/

.env
/web/sites/*/settings.local.php
/web/sites/*/services.local.yml

.DS_Store
Thumbs.db
```

If Drupal core and contributed modules are installed through Composer, the repository should follow the project's Composer-based dependency management strategy.

---

# 24. Testing Checklist

## 24.1 Homepage

```text
[✓] Homepage loads correctly
[✓] Header displayed
[✓] Footer displayed
[✓] Homepage sections displayed
[✓] Bootstrap grid working
[✓] CSS loaded
[✓] JavaScript loaded
[✓] Images/assets loaded
```

## 24.2 Navigation

```text
[✓] Desktop menu verified
[✓] Mobile menu verified
[✓] Menu items available
[✓] Responsive menu behaviour verified
```

## 24.3 Programme Finder

```text
[✓] Programme data stored in Drupal
[✓] Category filtering
[✓] Discipline filtering
[✓] Programme results
[✓] Campus information
[✓] Fee information
[✓] Database-driven data
[✓] Programme API integration
[✓] Frontend API data loading
```

## 24.4 Responsive

```text
[✓] Desktop
[✓] Tablet
[✓] Mobile
```

## 24.5 Drupal Backend

```text
[✓] Programme content type configured
[✓] Category taxonomy configured
[✓] Campuses taxonomy configured
[✓] Disciplines taxonomy configured
[✓] Prog Details Paragraph configured
[✓] Entity Reference fields configured
[✓] Programme Image configured
[✓] Custom Programme Finder module enabled
```

---

# 25. Known Implementation Notes

## 25.1 Drupal Cache

Twig and library changes may not appear immediately because Drupal caches templates and assets.

Run:

```bash
vendor/bin/drush cr
```

after theme, module, or configuration changes.

---

## 25.2 Entity Reference Views

When an Entity Reference View is used, the display must have a valid Search Field configured.

For example:

```text
Taxonomy term: Name
```

This allows the Entity Reference list to correctly search and return taxonomy terms.

---

## 25.3 JSON Data

The original programme data was represented as a JavaScript object.

JavaScript object syntax and JSON syntax are different.

For example, the following is JavaScript:

```javascript
ug: {
    "Engineering & Technology": {
        ...
    }
}
```

Valid JSON requires quoted property names and a single root object:

```json
{
    "ug": {
        "Engineering & Technology": {
            "programs": {}
        }
    }
}
```

This distinction is important when importing the original programme data into a database-driven Drupal implementation.

---

# 26. Complete Programme Finder Architecture

The complete Programme Finder architecture is:

```text
                         Drupal 10
                            │
             ┌──────────────┴──────────────┐
             │                             │
       gitam_theme                 gitam_programme_finder
             │                             │
      ┌──────┼──────┐              ┌───────┴────────┐
      │      │      │              │                │
     Twig   CSS     JS        Page Controller   API Controller
      │      │      │              │                │
      │      │      │              └────────┬───────┘
      │      │      │                       │
      │      │      │                       ↓
      │      │      │                Drupal Database
      │      │      │                       │
      │      │      │                   Programme
      │      │      │                       │
      │      │      │                   Meta Data
      │      │      │                       │
      │      │      │                  Prog Details
      │      │      │                       │
      │      │      │             ┌─────────┼─────────┐
      │      │      │             │         │         │
      │      │      │          Campus    Category  Discipline
      │      │      │             │         │         │
      │      │      │             ↓         ↓         ↓
      │      │      │         Campuses   Category  Disciplines
      │      │      │
      │      └──────┴────────────────────────────┐
      │                                          │
      └──────────────────────────────────────────┘
                         │
                         ↓
                  Programme Finder
                         │
                         ↓
                      Frontend
```

---

# 27. Final Data Model

The final Programme data model can be represented as:

```text
Programme
│
├── Title
├── Body
├── Duration
├── Exam
├── Exam Intro
├── Feeds item
├── Programme Image
│
└── Meta Data
       │
       └── Prog Details
              │
              ├── Campus
              │      └── Campuses Taxonomy
              │
              ├── Category
              │      └── Category Taxonomy
              │
              ├── Discipline
              │      └── Disciplines Taxonomy
              │
              ├── Campus Eligibility
              │
              └── Campus Fee
```

The custom API controller reads the Drupal-managed data and provides the required programme information to the frontend.

---

# 28. Separation of Responsibilities

The implementation intentionally separates backend and frontend responsibilities.

| Component | Responsibility |
|---|---|
| `gitam_programme_finder` | Backend Programme Finder functionality |
| `ProgrammeFinderController.php` | Programme Finder page |
| `ProgrammeApiController.php` | Programme Finder API |
| `gitam_theme` | Frontend presentation |
| `programme-finder-page.html.twig` | Programme Finder markup |
| `programme-data.js` | API fetching and frontend data handling |
| `script.js` | Filtering and DOM rendering |
| Programme Content Type | Programme information |
| `Prog Details` | Structured programme metadata |
| Category | Programme classification |
| Disciplines | Academic discipline classification |
| Campuses | Campus classification |

This separation keeps the backend functionality, content management, and frontend presentation independent from each other.

---

# 29. Deliverables

The implementation provides the following deliverables.

## 29.1 Drupal 10 Code

```text
Drupal 10 project
Custom theme
Custom module
Twig templates
Frontend assets
Drupal configuration
```

### Custom Theme

```text
gitam_theme
```

### Custom Module

```text
gitam_programme_finder
```

---

## 29.2 Programme Data

Programme information is managed using Drupal's content and taxonomy architecture:

```text
Category
Disciplines
Campuses
Programme
Programme Metadata
Campus Eligibility
Campus Fee
Programme Image
```

---

## 29.3 Responsive Homepage

The homepage reproduces the supplied template's:

```text
Layout
Styling
Components
Navigation
Interactions
Responsive behaviour
```

---

## 29.4 Programme Finder

A database-driven Programme Finder has been integrated into Drupal.

The Programme Finder retrieves information from:

```text
Drupal Database
      ↓
Programme Content
      ↓
Prog Details
      ↓
Taxonomy References
      ↓
Custom API
      ↓
Frontend JavaScript
      ↓
Programme Finder
```

---

## 29.5 Documentation

This README provides:

```text
Project overview
Technical requirements
Drupal architecture
Custom theme structure
Custom module structure
Programme Finder implementation
Taxonomy configuration
Paragraph configuration
Programme content type
Database structure
Setup instructions
Configuration deployment
Testing
Security
Accessibility
Git information
```

---

# 30. Conclusion

The GITAM Website Home Page has been converted from the supplied HTML template into a Drupal 10 implementation.

The solution preserves the supplied frontend structure, styling, navigation, responsive behaviour, and Programme Finder experience while moving programme management into Drupal's database and content architecture.

The final implementation provides a structured and maintainable solution using:

```text
Drupal 10
    ↓
Custom Theme
    │
    └── gitam_theme
    ↓
Custom Module
    │
    └── gitam_programme_finder
    ↓
Drupal Content Type
    │
    └── Programme
    ↓
Paragraphs
    │
    └── Prog Details
    ↓
Taxonomies
    ├── Category
    ├── Disciplines
    └── Campuses
    ↓
Database-driven Programme Data
    ↓
Programme API
    ↓
Frontend JavaScript
    ↓
Programme Finder
    ↓
Responsive GITAM Homepage
```

This architecture allows programme information to be managed through Drupal and provides a scalable foundation for future updates to:

- Programmes
- Categories
- Disciplines
- Campuses
- Eligibility information
- Programme fees
- Programme images

The implementation also keeps the Drupal core untouched and separates backend functionality from frontend presentation through the custom `gitam_programme_finder` module and `gitam_theme`.