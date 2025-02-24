# Classes Presets for Magento 2 PageBuilder

This module enhances the **PageBuilder** functionality by adding a configurable list of class presets and replacing the default "Additional Classes" input field with a select dropdown.

## Features
- Adds a new configuration section in:
  ```
  Stores -> Configuration -> NortN -> PageBuilder
  ```
- Introduces a **CSS Class Presets** group with a dynamic rows field where users can:
  - Define multiple sets of CSS classes.
  - Assign labels and descriptions to each set.
- Replaces the default "Additional Classes" input field with a select dropdown populated with values from global configuration.

## Configuration
To configure the module:
1. Navigate to **Stores -> Configuration -> NortN -> PageBuilder**.
2. Locate the **CSS Class Presets** group.
3. Use the dynamic rows field to add or edit class sets with labels and descriptions.

**Note:** If a class preset that is currently in use is modified or removed from the configuration, it will continue to be applied until the next content edit. Upon saving, if no new preset is selected, the value will reset.

## Installation
To install the module from Packagist, run the following commands:
```sh
composer require nortn/magento2-page-builder-classes-presets
bin/magento module:enable NortN_PageBuilderClassPresets
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage
- When editing a PageBuilder content type that supports additional classes, you will see a select dropdown instead of a text input.
- Choose a class preset from the dropdown to apply predefined styles.

## Compatibility
- Magento 2.4.x
- Adobe Commerce (formerly Magento Commerce)

## Support
For any issues or feature requests, please open an issue on GitHub.

GitHub Repository: [m2ext-page-builder-classes-presets](https://github.com/norton-nimnul/m2ext-page-builder-classes-presets)

