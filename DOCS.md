# Installation
Upload:

  - the `homing_pigeon` folder to `_add-ons` and
  - `_config/add-ons/homing_pigeon` to `_config/add-ons`.

# Setup
Open up `_config/add-ons/homing_pigeon/homing_pigeon.yaml` and edit the values.

## `langs`
List your site's available languages and corresponding homepage URLs.

```
langs:
  en: /en
  kr: /kr
```

## `lang_default`
Which language is the default? Homing Pigeon uses this if the user's preferred language is unavailable.

```
lang_default: en
```

# Usage
Place `{{ homing_pigeon }}` in the template that redirects to language specific homepages.

## `root.html`
```
{{ homing_pigeon }}
```