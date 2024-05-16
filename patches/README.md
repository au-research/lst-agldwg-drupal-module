Here are the sources of the patches specified in `composer.json`.

```
    "extra": {
        "patches": {
            "drupal/core": {
                "On tracker pages, add space between link and status": "https://www.drupal.org/files/issues/2024-05-13/tracker-3095533-31.patch",
                "Image styles fails with absolute path in $settings['file_public_path']": "https://www.drupal.org/files/issues/2021-08-27/image_styles-new.patch",
                "Rules registers no listeners on rare occasions": "https://www.drupal.org/files/issues/2022-01-31/2816033-102-no-listeners.core_.patch"
            },
            "drush/drush": {
                "Support utf8mb4 on drush site-install": "https://github.com/drush-ops/drush/pull/4810.patch"
            },
            "drupal/backup_migrate": {
                "Don't try to read directory entries as files during backup": "https://www.drupal.org/files/issues/2021-08-24/bam_empty_dirs.patch"
            },
            "drupal/mimemail": {
                "RfcComplianceException: RFC 2822": "https://www.drupal.org/files/issues/2023-03-24/RfcComplianceException_0.patch"
            },
            "drupal/rules": {
                "Integrate Typed Data Widgets": "https://www.drupal.org/files/issues/2022-03-04/2471481-174.integrate-typed-data-widgets.patch",
                "Rules registers no listeners on rare occasions": "https://www.drupal.org/files/issues/2022-01-31/2816033-102-no-listeners.rules_.patch",
                "Deprecated functions after the PHP upgrade to 8.1": "https://www.drupal.org/files/issues/2022-09-26/rules-deprecated-php-function-with-empty-process-value-3309664.patch"
            },
            "drupal/contact_storage": {
                "Error while field storage definition": "https://www.drupal.org/files/issues/2020-09-28/3053497-8.patch"
            },
            "drupal/readonlymode": {
                "Fatal error due to saved additional form IDs being strings and not arrays": "https://www.drupal.org/files/issues/2020-12-23/readonlymode-string_not_array-3115119-9.patch"
            },
            "drupal/eme": {
                "Optionally allow exporting all entity revisions, not just the default one and the default translations": "https://www.drupal.org/files/issues/2021-08-25/eme-alpha10-with-revisions-3.patch"
            },
            "drupal/structure_sync": {
                "URL Alias of Taxonomy term is not exported": "https://www.drupal.org/files/issues/2024-04-11/structure_sync-3074288-export-import-taxonomy-terms-force-mode-19.patch"
            }
        }
    }
```
