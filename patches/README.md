Here are the sources of the patches specified in `composer.json`.

```
    "extra": {
        "patches": {
            "drupal/core": {
                "On tracker pages, add space between link and status": "https://www.drupal.org/files/issues/2020-05-06/3095533-18.patch",
                "Improve styling for select and add styling to select[multiple]": "https://www.drupal.org/files/issues/2020-08-19/2491725-31-multiple-select.patch",
                "Image styles fails with absolute path in $settings['file_public_path']": "https://www.drupal.org/files/issues/2021-08-27/image_styles-new.patch"
            },
            "drush/drush": {
                "Support utf8mb4 on drush site-install": "https://github.com/drush-ops/drush/pull/4810.patch"
            },
            "drupal/backup_migrate": {
                "Don't try to read directory entries as files during backup": "https://www.drupal.org/files/issues/2021-08-24/bam_empty_dirs.patch"
            },
            "drupal/rules": {
                "Integrate Typed Data Widgets": "https://www.drupal.org/files/issues/2021-06-22/2471481-146.integrate-typed-data-widgets.patch",
                "Support upcasting entity IDs to full entity contexts": "https://www.drupal.org/files/issues/2021-04-29/2800749-88.upcast.patch"
            },
            "drupal/contact_storage": {
                "Error while field storage definition": "https://www.drupal.org/files/issues/2020-09-28/3053497-8.patch"
            },
            "drupal/readonlymode": {
                "Got fatal error when running this module: string, not array": "https://www.drupal.org/files/issues/2020-12-23/readonlymode-string_not_array-3115119-9.patch"
            },
            "drupal/eme": {
                "Optionally allow exporting all entity revisions, not just the default one and the default translations": "https://www.drupal.org/files/issues/2021-08-25/eme-alpha10-with-revisions-3.patch"
            },
            "drupal/structure_sync": {
                "URL Alias of Taxonomy term is not exported": "https://www.drupal.org/files/issues/2021-08-13/structure_sync-export-import-taxonomy-term-aliasses-3074288-14.patch"
            }
        }
    }
```
