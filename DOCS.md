# Installation
Upload:

  - the `homing_pigeon` folder to `_add-ons` and
  - `_config/add-ons/homing_pigeon` to `_config/add-ons`.

# Setup
Open up `_config/add-ons/homing_pigeon/homing_pigeon.yaml` and edit the values.

## `langs`
List your site's available languages and corresponding homepage URLs. Use a [2 character language code](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) for the key (the part on the left) and whatever you want for the URL.

```
langs:
  en: /en
  kr: /kr
  sh: /shyriiwook
```

## `lang_default`
Which language is the default? Homing Pigeon uses this if the user's preferred language is unavailable.

```
lang_default: en
```

# Usage
Place `{{ homing_pigeon }}` in the template that redirects to language specific homepages.

## `templates/landing-redirect.html`
```
{{ homing_pigeon }}
```