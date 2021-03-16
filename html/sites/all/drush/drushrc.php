<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'social',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'dynamic_entity_reference_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/dynamic_entity_reference/tests/modules/dynamic_entity_reference_entity_test/dynamic_entity_reference_entity_test.info.yml',
        'basename' => 'dynamic_entity_reference_entity_test.info.yml',
        'name' => 'Dynamic Entity Reference Entity Test',
        'info' => 
        array (
          'name' => 'Dynamic Entity Reference Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for dynamic_entity_reference tests of entity_test entity type.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'dynamic_entity_reference',
            1 => 'entity_test',
          ),
          'version' => '8.x-1.7',
          'core' => '8.x',
          'project' => 'dynamic_entity_reference',
          'datestamp' => 1554020887,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.7',
      ),
      'dynamic_entity_reference_test_entity_provider' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/dynamic_entity_reference/tests/modules/dynamic_entity_reference_test_entity_provider/dynamic_entity_reference_test_entity_provider.info.yml',
        'basename' => 'dynamic_entity_reference_test_entity_provider.info.yml',
        'name' => 'Dynamic Entity Reference Entity Provider A',
        'info' => 
        array (
          'name' => 'Dynamic Entity Reference Entity Provider A',
          'type' => 'module',
          'description' => 'A provider of an entity type.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'dynamic_entity_reference',
            1 => 'entity_test',
          ),
          'version' => '8.x-1.7',
          'core' => '8.x',
          'project' => 'dynamic_entity_reference',
          'datestamp' => 1554020887,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.7',
      ),
      'dynamic_entity_reference_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/dynamic_entity_reference/tests/modules/dynamic_entity_reference_test_views/dynamic_entity_reference_test_views.info.yml',
        'basename' => 'dynamic_entity_reference_test_views.info.yml',
        'name' => 'Dynamic entity reference test views',
        'info' => 
        array (
          'name' => 'Dynamic entity reference test views',
          'type' => 'module',
          'description' => 'Provides default views for views dynamic entity reference tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'dynamic_entity_reference',
            1 => 'views',
          ),
          'version' => '8.x-1.7',
          'core' => '8.x',
          'project' => 'dynamic_entity_reference',
          'datestamp' => 1554020887,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.7',
      ),
      'dynamic_entity_reference' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/dynamic_entity_reference/dynamic_entity_reference.info.yml',
        'basename' => 'dynamic_entity_reference.info.yml',
        'name' => 'Dynamic Entity Reference',
        'info' => 
        array (
          'name' => 'Dynamic Entity Reference',
          'type' => 'module',
          'description' => 'Provides an entity reference field that can reference multiple entity types.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'test_dependencies' => 
          array (
            0 => 'drupal:field_ui',
            1 => 'drupal:language',
            2 => 'drupal:locale',
            3 => 'drupal:node',
            4 => 'drupal:taxonomy',
          ),
          'version' => '8.x-1.7',
          'core' => '8.x',
          'project' => 'dynamic_entity_reference',
          'datestamp' => 1554020887,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.7',
      ),
      'test_feature' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/features/tests/modules/test_feature/test_feature.info.yml',
        'basename' => 'test_feature.info.yml',
        'name' => 'feature',
        'info' => 
        array (
          'name' => 'feature',
          'type' => 'module',
          'package' => 'Test',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'version' => '8.x-3.8',
          'core' => '8.x',
          'project' => 'features',
          'datestamp' => 1536512288,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.8',
      ),
      'test_mybundle_core' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/features/tests/modules/test_mybundle_core/test_mybundle_core.info.yml',
        'basename' => 'test_mybundle_core.info.yml',
        'name' => 'Test Core',
        'info' => 
        array (
          'name' => 'Test Core',
          'type' => 'module',
          'package' => 'Test',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'version' => '8.x-3.8',
          'core' => '8.x',
          'project' => 'features',
          'datestamp' => 1536512288,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.8',
      ),
      'features_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/features/modules/features_ui/features_ui.info.yml',
        'basename' => 'features_ui.info.yml',
        'name' => 'Features UI',
        'info' => 
        array (
          'name' => 'Features UI',
          'type' => 'module',
          'description' => 'Provides the user interface for Features.',
          'package' => 'Development',
          'configure' => 'features.assignment',
          'dependencies' => 
          array (
            0 => 'features:features',
          ),
          'version' => '8.x-3.8',
          'core' => '8.x',
          'project' => 'features',
          'datestamp' => 1536512288,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.8',
      ),
      'features' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/features/features.info.yml',
        'basename' => 'features.info.yml',
        'name' => 'Features',
        'info' => 
        array (
          'name' => 'Features',
          'type' => 'module',
          'description' => 'Enables administrators to package configuration into modules.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'drupal:config',
            1 => 'config_update:config_update',
          ),
          'version' => '8.x-3.8',
          'core' => '8.x',
          'project' => 'features',
          'datestamp' => 1536512288,
        ),
        'schema_version' => '8301',
        'version' => '8.x-3.8',
      ),
      'ctools_wizard_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/tests/modules/ctools_wizard_test/ctools_wizard_test.info.yml',
        'basename' => 'ctools_wizard_test.info.yml',
        'name' => 'Chaos Wizard Test',
        'info' => 
        array (
          'name' => 'Chaos Wizard Test',
          'type' => 'module',
          'description' => 'Provides testing for ctools wizard',
          'package' => 'Testing',
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools_block_display_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/tests/modules/ctools_block_display_test/ctools_block_display_test.info.yml',
        'basename' => 'ctools_block_display_test.info.yml',
        'name' => 'Block Display Variant Test',
        'info' => 
        array (
          'name' => 'Block Display Variant Test',
          'type' => 'module',
          'description' => 'Testing infrastructure for CTools block display variants.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'entity_mask_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/modules/ctools_entity_mask/tests/modules/entity_mask_test/entity_mask_test.info.yml',
        'basename' => 'entity_mask_test.info.yml',
        'name' => 'Entity Mask test',
        'info' => 
        array (
          'name' => 'Entity Mask test',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'block_content',
            1 => 'ctools_entity_mask',
            2 => 'image',
            3 => 'text',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools_entity_mask' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/modules/ctools_entity_mask/ctools_entity_mask.info.yml',
        'basename' => 'ctools_entity_mask.info.yml',
        'name' => 'Entity Mask',
        'info' => 
        array (
          'name' => 'Entity Mask',
          'type' => 'module',
          'description' => 'Allows an entity type to borrow the fields and display configuration of another entity type.',
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools_views_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/modules/ctools_views/tests/modules/ctools_views_test_views/ctools_views_test_views.info.yml',
        'basename' => 'ctools_views_test_views.info.yml',
        'name' => 'CTools Views test views',
        'info' => 
        array (
          'name' => 'CTools Views test views',
          'type' => 'module',
          'description' => 'Provides default views for CTools Views tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'block',
            2 => 'entity_test',
            3 => 'ctools_views',
            4 => 'text',
            5 => 'user',
            6 => 'node',
            7 => 'taxonomy',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/modules/ctools_views/ctools_views.info.yml',
        'basename' => 'ctools_views.info.yml',
        'name' => 'Chaos Tools Views',
        'info' => 
        array (
          'name' => 'Chaos Tools Views',
          'type' => 'module',
          'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
          'package' => 'Chaos tool suite (Experimental)',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:views',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools_block_field_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/modules/ctools_block/tests/modules/ctools_block_field_test/ctools_block_field_test.info.yml',
        'basename' => 'ctools_block_field_test.info.yml',
        'name' => 'Chaos Tools blocks test',
        'info' => 
        array (
          'name' => 'Chaos Tools blocks test',
          'type' => 'module',
          'description' => 'Support module for Chaos tools blocks tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'menu_ui',
            2 => 'node',
            3 => 'path',
            4 => 'text',
            5 => 'user',
          ),
          'features' => true,
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools_block' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/modules/ctools_block/ctools_block.info.yml',
        'basename' => 'ctools_block.info.yml',
        'name' => 'Chaos Tools Blocks',
        'info' => 
        array (
          'name' => 'Chaos Tools Blocks',
          'type' => 'module',
          'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
          'package' => 'Chaos tool suite (Experimental)',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ctools/ctools.info.yml',
        'basename' => 'ctools.info.yml',
        'name' => 'Chaos Tools',
        'info' => 
        array (
          'name' => 'Chaos Tools',
          'type' => 'module',
          'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'drupal:system (>=8.5)',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1550728390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.2',
      ),
      'paragraphs_demo' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.info.yml',
        'basename' => 'paragraphs_demo.info.yml',
        'name' => 'Paragraphs Demo',
        'info' => 
        array (
          'description' => 'Provides multilingual demo Paragraphs types.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:field',
            2 => 'drupal:image',
            3 => 'drupal:field_ui',
            4 => 'drupal:block',
            5 => 'drupal:language',
            6 => 'drupal:content_translation',
            7 => 'drupal:node',
            8 => 'search_api:search_api_db',
            9 => 'search_api:search_api',
            10 => 'drupal:views',
            11 => 'drupal:taxonomy',
            12 => 'paragraphs:paragraphs_library',
            13 => 'drupal:entity_browser',
            14 => 'drupal:content_moderation',
          ),
          'hidden' => false,
          'name' => 'Paragraphs Demo',
          'package' => 'Paragraphs',
          'type' => 'module',
          'version' => '8.x-1.11',
          'project' => 'paragraphs',
          'datestamp' => 1581850832,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'paragraphs_type_permissions' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.info.yml',
        'basename' => 'paragraphs_type_permissions.info.yml',
        'name' => 'Paragraphs Type Permissions',
        'info' => 
        array (
          'name' => 'Paragraphs Type Permissions',
          'type' => 'module',
          'description' => 'Allows users to configure permissions for individual Paragraphs types.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Paragraphs',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
          ),
          'version' => '8.x-1.11',
          'project' => 'paragraphs',
          'datestamp' => 1581850832,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'paragraphs_library' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/paragraphs/modules/paragraphs_library/paragraphs_library.info.yml',
        'basename' => 'paragraphs_library.info.yml',
        'name' => 'Paragraphs Library',
        'info' => 
        array (
          'name' => 'Paragraphs Library',
          'type' => 'module',
          'description' => 'Provides a library for reusing paragraphs.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Paragraphs',
          'configure' => 'paragraphs_library_item.settings',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:views',
            2 => 'entity_usage:entity_usage',
          ),
          'test_dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
          ),
          'version' => '8.x-1.11',
          'project' => 'paragraphs',
          'datestamp' => 1581850832,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.11',
      ),
      'paragraphs' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/paragraphs/paragraphs.info.yml',
        'basename' => 'paragraphs.info.yml',
        'name' => 'Paragraphs',
        'info' => 
        array (
          'name' => 'Paragraphs',
          'type' => 'module',
          'description' => 'Enables the creation of paragraphs entities.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Paragraphs',
          'configure' => 'entity.paragraphs_type.collection',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'drupal:file',
          ),
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
            1 => 'replicate:replicate',
            2 => 'inline_entity_form:inline_entity_form',
            3 => 'field_group:field_group',
            4 => 'block_field:block_field',
          ),
          'version' => '8.x-1.11',
          'project' => 'paragraphs',
          'datestamp' => 1581850832,
        ),
        'schema_version' => '8022',
        'version' => '8.x-1.11',
      ),
      'config_update_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/config_update/config_update_ui/config_update_ui.info.yml',
        'basename' => 'config_update_ui.info.yml',
        'name' => 'Configuration Update Reports',
        'info' => 
        array (
          'name' => 'Configuration Update Reports',
          'type' => 'module',
          'description' => 'Adds an updates report and revert functionality to configuration management',
          'configure' => 'config_update.report',
          'dependencies' => 
          array (
            0 => 'config_update:config_update',
            1 => 'drupal:config',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'config_update',
          'datestamp' => 1545090489,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'config_update' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/config_update/config_update.info.yml',
        'basename' => 'config_update.info.yml',
        'name' => 'Configuration Update Base',
        'info' => 
        array (
          'name' => 'Configuration Update Base',
          'type' => 'module',
          'description' => 'Provides basic revert and update functionality for other modules',
          'dependencies' => 
          array (
            0 => 'drupal:config',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'config_update',
          'datestamp' => 1545090489,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'address_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/address/tests/modules/address_test/address_test.info.yml',
        'basename' => 'address_test.info.yml',
        'name' => 'Address test',
        'info' => 
        array (
          'name' => 'Address test',
          'type' => 'module',
          'description' => 'Provides functionality for testing the address module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'address',
            1 => 'views',
          ),
          'version' => '8.x-1.7',
          'core' => '8.x',
          'project' => 'address',
          'datestamp' => 1559642892,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.7',
      ),
      'address' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/address/address.info.yml',
        'basename' => 'address.info.yml',
        'name' => 'Address',
        'info' => 
        array (
          'name' => 'Address',
          'type' => 'module',
          'description' => 'Provides functionality for handling postal addresses.',
          'package' => 'Field types',
          'config' => 'entity.address_format.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:system (>=8.6.0)',
          ),
          'test_dependencies' => 
          array (
            0 => 'token:token',
          ),
          'version' => '8.x-1.7',
          'core' => '8.x',
          'project' => 'address',
          'datestamp' => 1559642892,
        ),
        'schema_version' => '8104',
        'version' => '8.x-1.7',
      ),
      'activity_send_push' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/social_pwa/modules/activity_send_push/activity_send_push.info.yml',
        'basename' => 'activity_send_push.info.yml',
        'name' => 'Activity Send Web Push',
        'info' => 
        array (
          'name' => 'Activity Send Web Push',
          'type' => 'module',
          'description' => 'Used to send activity notifications by Web Push',
          'core' => '8.x',
          'package' => 'Social',
          'dependencies' => 
          array (
            0 => 'activity_send',
          ),
          'version' => '8.x-1.0-alpha8',
          'project' => 'social_pwa',
          'datestamp' => 1586443913,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-alpha8',
      ),
      'social_pwa' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/social_pwa/social_pwa.info.yml',
        'basename' => 'social_pwa.info.yml',
        'name' => 'Social PWA',
        'info' => 
        array (
          'name' => 'Social PWA',
          'description' => 'Makes the website "Installable" like an App on smartphones and enhances it with Service Workers for the use of Push Notifications and an Offline User Experience.',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Social',
          'configure' => 'social_pwa.settings',
          'dependencies' => 
          array (
            0 => 'social:activity_send_push_notification',
            1 => 'social_pwa:activity_send_push',
          ),
          'version' => '8.x-1.0-alpha8',
          'project' => 'social_pwa',
          'datestamp' => 1586443913,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.0-alpha8',
      ),
      'shariff' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/shariff/shariff.info.yml',
        'basename' => 'shariff.info.yml',
        'name' => 'Shariff Sharing Buttons',
        'info' => 
        array (
          'name' => 'Shariff Sharing Buttons',
          'description' => 'Shariff enables website users to share their favorite content without compromising their privacy. This module integrates this plugin in Drupal.',
          'dependencies' => NULL,
          'type' => 'module',
          'libraries' => 
          array (
            0 => 'shariff/shariff',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'shariff',
          'datestamp' => 1553187724,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.5',
      ),
      'update_helper_checklist_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/update_helper/modules/update_helper_checklist/tests/modules/update_helper_checklist_test/update_helper_checklist_test.info.yml',
        'basename' => 'update_helper_checklist_test.info.yml',
        'name' => 'Update Helper Checklist Test',
        'info' => 
        array (
          'name' => 'Update Helper Checklist Test',
          'description' => 'Helper module to test Update Helper Checklist.',
          'type' => 'module',
          'core' => '8.x',
          'version' => '8.x-1.3',
          'project' => 'update_helper',
          'datestamp' => 1583400007,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'update_helper_checklist' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/update_helper/modules/update_helper_checklist/update_helper_checklist.info.yml',
        'basename' => 'update_helper_checklist.info.yml',
        'name' => 'Update Helper Checklist',
        'info' => 
        array (
          'name' => 'Update Helper Checklist',
          'description' => 'Provide integration of Update Helper module with checklist.',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'update_helper:update_helper',
            1 => 'checklistapi:checklistapi',
          ),
          'package' => 'Configuration',
          'version' => '8.x-1.3',
          'project' => 'update_helper',
          'datestamp' => 1583400007,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.3',
      ),
      'update_helper' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/update_helper/update_helper.info.yml',
        'basename' => 'update_helper.info.yml',
        'name' => 'Update Helper',
        'info' => 
        array (
          'name' => 'Update Helper',
          'description' => 'Helper tool for generation and applying of configuration updates.',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'config_update:config_update',
          ),
          'package' => 'Configuration',
          'version' => '8.x-1.3',
          'project' => 'update_helper',
          'datestamp' => 1583400007,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'like_and_dislike' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/like_and_dislike/like_and_dislike.info.yml',
        'basename' => 'like_and_dislike.info.yml',
        'name' => 'Like & Dislike',
        'info' => 
        array (
          'name' => 'Like & Dislike',
          'type' => 'module',
          'description' => 'Enable like and dislike widgets and statistics',
          'package' => 'Voting',
          'configure' => 'like_and_dislike.admin_settings',
          'dependencies' => 
          array (
            0 => 'votingapi',
          ),
          'version' => '8.x-1.0-alpha2',
          'core' => '8.x',
          'project' => 'like_and_dislike',
          'datestamp' => 1476452345,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-alpha2',
      ),
      'embed_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/embed/tests/embed_test/embed_test.info.yml',
        'basename' => 'embed_test.info.yml',
        'name' => 'Embed test',
        'info' => 
        array (
          'name' => 'Embed test',
          'type' => 'module',
          'description' => 'Support module for the Embed module tests.',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'embed',
            1 => 'node',
          ),
          'version' => '8.x-1.4',
          'project' => 'embed',
          'datestamp' => 1590176834,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.4',
      ),
      'embed' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/embed/embed.info.yml',
        'basename' => 'embed.info.yml',
        'name' => 'Embed',
        'info' => 
        array (
          'name' => 'Embed',
          'type' => 'module',
          'description' => 'Provides a framework for different types of embeds in text editors.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'configure' => 'entity.embed_button.collection',
          'version' => '8.x-1.4',
          'project' => 'embed',
          'datestamp' => 1590176834,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.4',
      ),
      'gin_toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/gin_toolbar/gin_toolbar.info.yml',
        'basename' => 'gin_toolbar.info.yml',
        'name' => 'Gin Toolbar',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Gin Toolbar',
          'description' => 'Gin Toolbar for Gin Theme',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:toolbar',
          ),
          'version' => '8.x-1.0-beta12',
          'project' => 'gin_toolbar',
          'datestamp' => 1597406477,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-beta12',
      ),
      'views_infinite_scroll' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/views_infinite_scroll/views_infinite_scroll.info.yml',
        'basename' => 'views_infinite_scroll.info.yml',
        'name' => 'Views Infinite Scroll',
        'info' => 
        array (
          'name' => 'Views Infinite Scroll',
          'type' => 'module',
          'description' => 'A pager which allows an infinite scroll effect for views.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'views_infinite_scroll',
          'datestamp' => 1561996387,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'social_auth' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/social_auth/social_auth.info.yml',
        'basename' => 'social_auth.info.yml',
        'name' => 'Social API Auth',
        'info' => 
        array (
          'name' => 'Social API Auth',
          'type' => 'module',
          'description' => 'Allows login using different social networking services',
          'package' => 'Social',
          'dependencies' => 
          array (
            0 => 'social_api',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'social_auth',
          'datestamp' => 1501779246,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.0',
      ),
      'bef_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/better_exposed_filters/tests/bef_test/bef_test.info.yml',
        'basename' => 'bef_test.info.yml',
        'name' => 'BEF Test',
        'info' => 
        array (
          'name' => 'BEF Test',
          'type' => 'module',
          'description' => 'Test module for Better Exposed Filters',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'better_exposed_filters',
            1 => 'datetime',
            2 => 'node',
            3 => 'options',
            4 => 'user',
          ),
          'version' => '8.x-3.0-alpha6',
          'core' => '8.x',
          'project' => 'better_exposed_filters',
          'datestamp' => 1550449395,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0-alpha6',
      ),
      'better_exposed_filters' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/better_exposed_filters/better_exposed_filters.info.yml',
        'basename' => 'better_exposed_filters.info.yml',
        'name' => 'Better Exposed Filters',
        'info' => 
        array (
          'name' => 'Better Exposed Filters',
          'description' => 'Provides advanced options (such as links, checkboxes, or jQueryUI widgets) for exposed Views elements.',
          'type' => 'module',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-3.0-alpha6',
          'core' => '8.x',
          'project' => 'better_exposed_filters',
          'datestamp' => 1550449395,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0-alpha6',
      ),
      'devel_generate_example' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/devel_generate/tests/modules/devel_generate_example/devel_generate_example.info.yml',
        'basename' => 'devel_generate_example.info.yml',
        'name' => 'Devel Generate Example',
        'info' => 
        array (
          'name' => 'Devel Generate Example',
          'type' => 'module',
          'description' => 'Create an example of a Devel Generate plugin type for testing purposes.',
          'package' => 'Development',
          'configure' => 'admin/config/development/generate',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'devel_generate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/devel_generate/devel_generate.info.yml',
        'basename' => 'devel_generate.info.yml',
        'name' => 'Devel Generate',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel Generate',
          'description' => 'Generate dummy users, nodes, menus, taxonomy terms...',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'webprofiler' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/webprofiler/webprofiler.info.yml',
        'basename' => 'webprofiler.info.yml',
        'name' => 'Web Profiler',
        'info' => 
        array (
          'name' => 'Web Profiler',
          'type' => 'module',
          'description' => 'Drupal Web Profiler.',
          'package' => 'Development',
          'configure' => 'webprofiler.settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'dependencies' => 
          array (
            0 => 'devel:devel',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => '8001',
        'version' => '8.x-2.1',
      ),
      'devel_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/tests/modules/devel_test/devel_test.info.yml',
        'basename' => 'devel_test.info.yml',
        'name' => 'Devel test module',
        'info' => 
        array (
          'name' => 'Devel test module',
          'type' => 'module',
          'description' => 'Support module for Devel testing.',
          'package' => 'Testing',
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'devel_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/tests/modules/devel_entity_test/devel_entity_test.info.yml',
        'basename' => 'devel_entity_test.info.yml',
        'name' => 'Devel entity test module',
        'info' => 
        array (
          'name' => 'Devel entity test module',
          'type' => 'module',
          'description' => 'Provides entity types for Devel tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
            2 => 'drupal:entity_test',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'devel_dumper_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/tests/modules/devel_dumper_test/devel_dumper_test.info.yml',
        'basename' => 'devel_dumper_test.info.yml',
        'name' => 'Devel dumper test module',
        'info' => 
        array (
          'name' => 'Devel dumper test module',
          'type' => 'module',
          'description' => 'Test pluggable dumpers.',
          'package' => 'Testing',
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'kint' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/kint/kint.info.yml',
        'basename' => 'kint.info.yml',
        'name' => 'Devel Kint',
        'info' => 
        array (
          'name' => 'Devel Kint',
          'type' => 'module',
          'description' => 'Wrapper for Kint debugging tool.',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'devel' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/devel/devel.info.yml',
        'basename' => 'devel.info.yml',
        'name' => 'Devel',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'configure' => 'devel.admin_settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1556799504,
        ),
        'schema_version' => '8002',
        'version' => '8.x-2.1',
      ),
      'exif_orientation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/exif_orientation/exif_orientation.info.yml',
        'basename' => 'exif_orientation.info.yml',
        'name' => 'EXIF Orientation',
        'info' => 
        array (
          'name' => 'EXIF Orientation',
          'type' => 'module',
          'description' => 'Rotates images per their EXIF Orientation',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'package' => 'Media',
          'version' => '8.x-1.1',
          'project' => 'exif_orientation',
          'datestamp' => 1593659919,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'editor_advanced_link' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/editor_advanced_link/editor_advanced_link.info.yml',
        'basename' => 'editor_advanced_link.info.yml',
        'name' => 'Advanced Link',
        'info' => 
        array (
          'name' => 'Advanced Link',
          'description' => 'Add title, target etc. attributes to Text Editor\'s link dialog if the text format allows them.',
          'type' => 'module',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
          ),
          'version' => '8.x-1.8',
          'project' => 'editor_advanced_link',
          'datestamp' => 1588757017,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.8',
      ),
      'image_effects_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/image_effects/tests/modules/image_effects_module_test/image_effects_module_test.info.yml',
        'basename' => 'image_effects_module_test.info.yml',
        'name' => 'Image Effects test module',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Image Effects test module',
          'description' => 'Provides implementations for testing Image Effects module functionality.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'image_effects:image_effects',
          ),
          'version' => '8.x-2.3',
          'core' => '8.x',
          'project' => 'image_effects',
          'datestamp' => 1547928184,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.3',
      ),
      'image_effects' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/image_effects/image_effects.info.yml',
        'basename' => 'image_effects.info.yml',
        'name' => 'Image Effects',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Image Effects',
          'description' => 'Provides effects and operations for the Image API.',
          'package' => 'Media',
          'configure' => 'image_effects.settings',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:system (>=8.2.0)',
            2 => 'file_mdm:file_mdm_exif',
            3 => 'file_mdm:file_mdm_font',
          ),
          'test_dependencies' => 
          array (
            0 => 'imagemagick:imagemagick',
            1 => 'jquery_colorpicker:jquery_colorpicker',
          ),
          'version' => '8.x-2.3',
          'core' => '8.x',
          'project' => 'image_effects',
          'datestamp' => 1547928184,
        ),
        'schema_version' => '8203',
        'version' => '8.x-2.3',
      ),
      'file_mdm_exif' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/file_mdm/file_mdm_exif/file_mdm_exif.info.yml',
        'basename' => 'file_mdm_exif.info.yml',
        'name' => 'File metadata - EXIF',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'File metadata - EXIF',
          'description' => 'Provides a file metadata plugin for EXIF image information.',
          'package' => 'File metadata',
          'configure' => 'file_mdm.settings',
          'php' => 5.6,
          'dependencies' => 
          array (
            0 => 'file_mdm',
          ),
          'test_dependencies' => 
          array (
            0 => 'image_effects',
          ),
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'file_mdm',
          'datestamp' => 1488273795,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'file_mdm_font' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/file_mdm/file_mdm_font/file_mdm_font.info.yml',
        'basename' => 'file_mdm_font.info.yml',
        'name' => 'File metadata - Font',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'File metadata - Font',
          'description' => 'Provides a file metadata plugin for TTF/OTF/WOFF font information.',
          'package' => 'File metadata',
          'configure' => 'file_mdm.settings',
          'php' => 5.6,
          'dependencies' => 
          array (
            0 => 'file_mdm',
          ),
          'test_dependencies' => 
          array (
            0 => 'image_effects',
          ),
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'file_mdm',
          'datestamp' => 1488273795,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'file_mdm' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/file_mdm/file_mdm.info.yml',
        'basename' => 'file_mdm.info.yml',
        'name' => 'File metadata manager',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'File metadata manager',
          'description' => 'Provides a service to manage file metadata.',
          'package' => 'File metadata',
          'configure' => 'file_mdm.settings',
          'php' => 5.6,
          'test_dependencies' => 
          array (
            0 => 'image_effects',
          ),
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'file_mdm',
          'datestamp' => 1488273795,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'role_delegation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/role_delegation/role_delegation.info.yml',
        'basename' => 'role_delegation.info.yml',
        'name' => 'Role Delegation',
        'info' => 
        array (
          'name' => 'Role Delegation',
          'type' => 'module',
          'description' => 'Allows site administrators to grant some roles the authority to assign selected roles to users.',
          'package' => 'Permissions',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
          'version' => '8.x-1.1',
          'project' => 'role_delegation',
          'datestamp' => 1580498754,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'pathauto_views_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/pathauto/tests/modules/pathauto_views_test/pathauto_views_test.info.yml',
        'basename' => 'pathauto_views_test.info.yml',
        'name' => 'Views Test Config',
        'info' => 
        array (
          'name' => 'Views Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-1.6',
          'project' => 'pathauto',
          'datestamp' => 1575467315,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'pathauto_string_id_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/pathauto/tests/modules/pathauto_string_id_test/pathauto_string_id_test.info.yml',
        'basename' => 'pathauto_string_id_test.info.yml',
        'name' => 'Pathauto testing module',
        'info' => 
        array (
          'name' => 'Pathauto testing module',
          'type' => 'module',
          'core' => '8.x',
          'description' => 'Pathauto for Entity with string ID.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'token:token',
          ),
          'version' => '8.x-1.6',
          'project' => 'pathauto',
          'datestamp' => 1575467315,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/pathauto/pathauto.info.yml',
        'basename' => 'pathauto.info.yml',
        'name' => 'Pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'core' => '8.x',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
            1 => 'drupal:path',
            2 => 'drupal:system (>=8.6)',
            3 => 'token:token',
          ),
          'configure' => 'entity.pathauto_pattern.collection',
          'recommends' => 
          array (
            0 => 'redirect:redirect',
          ),
          'version' => '8.x-1.6',
          'project' => 'pathauto',
          'datestamp' => 1575467315,
        ),
        'schema_version' => '8107',
        'version' => '8.x-1.6',
      ),
      'image_widget_crop_examples' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/image_widget_crop/modules/image_widget_crop_examples/image_widget_crop_examples.info.yml',
        'basename' => 'image_widget_crop_examples.info.yml',
        'name' => 'ImageWidgetCrop examples',
        'info' => 
        array (
          'name' => 'ImageWidgetCrop examples',
          'type' => 'module',
          'description' => 'Provides an out of box example implementation of ImageWidgetCrop.',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'crop',
            2 => 'image',
            3 => 'user',
            4 => 'image_widget_crop',
            5 => 'inline_entity_form',
            6 => 'media',
            7 => 'responsive_image',
            8 => 'entity_browser',
            9 => 'ctools',
          ),
          'theme' => 
          array (
            0 => 'bartik',
          ),
          'version' => '8.x-2.2',
          'core' => '8.x',
          'project' => 'image_widget_crop',
          'datestamp' => 1530698928,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.2',
      ),
      'image_widget_crop' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/image_widget_crop/image_widget_crop.info.yml',
        'basename' => 'image_widget_crop.info.yml',
        'name' => 'ImageWidgetCrop',
        'info' => 
        array (
          'name' => 'ImageWidgetCrop',
          'type' => 'module',
          'description' => 'Provides an interface for using the features of the Crop API.',
          'package' => 'Media',
          'configure' => 'image_widget_crop.crop_widget_settings',
          'dependencies' => 
          array (
            0 => 'crop',
            1 => 'image',
          ),
          'test_dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'version' => '8.x-2.2',
          'core' => '8.x',
          'project' => 'image_widget_crop',
          'datestamp' => 1530698928,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.2',
      ),
      'views_bulk_operations_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/views_bulk_operations/tests/views_bulk_operations_test/views_bulk_operations_test.info.yml',
        'basename' => 'views_bulk_operations_test.info.yml',
        'name' => 'Views Bulk Operations test',
        'info' => 
        array (
          'name' => 'Views Bulk Operations test',
          'type' => 'module',
          'description' => 'Support module for testing Views Bulk Operations.',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views_bulk_operations',
            1 => 'drupal:node',
          ),
          'version' => '8.x-3.4',
          'project' => 'views_bulk_operations',
          'datestamp' => 1580807961,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.4',
      ),
      'views_bulk_operations_example' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/views_bulk_operations/modules/views_bulk_operations_example/views_bulk_operations_example.info.yml',
        'basename' => 'views_bulk_operations_example.info.yml',
        'name' => 'Views Bulk Operations example',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Views Bulk Operations example',
          'description' => 'Defines an example action with all possible options.',
          'package' => 'Examples',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views_bulk_operations',
          ),
          'version' => '8.x-3.4',
          'project' => 'views_bulk_operations',
          'datestamp' => 1580807961,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.4',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/views_bulk_operations/modules/actions_permissions/actions_permissions.info.yml',
        'basename' => 'actions_permissions.info.yml',
        'name' => 'Actions Permissions',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Actions Permissions',
          'description' => 'Adds access permissions on all actions allowing admins to restrict access on a per-role basis.',
          'package' => 'Views Bulk Operations',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views_bulk_operations',
          ),
          'version' => '8.x-3.4',
          'project' => 'views_bulk_operations',
          'datestamp' => 1580807961,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.4',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/views_bulk_operations/views_bulk_operations.info.yml',
        'basename' => 'views_bulk_operations.info.yml',
        'name' => 'Views Bulk Operations',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Views Bulk Operations',
          'description' => 'Adds an ability to perform bulk operations on selected entities from view results.',
          'package' => 'Views',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views (>=8.5)',
          ),
          'version' => '8.x-3.4',
          'project' => 'views_bulk_operations',
          'datestamp' => 1580807961,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.4',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/token/token.info.yml',
        'basename' => 'token.info.yml',
        'name' => 'Token',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'dependencies' => 
          array (
            0 => 'drupal:system (>= 8.5)',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'token',
          'datestamp' => 1537557488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'block_field_widget_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/block_field/tests/modules/block_field_widget_test/block_field_widget_test.info.yml',
        'basename' => 'block_field_widget_test.info.yml',
        'name' => 'Block field module widget tests',
        'info' => 
        array (
          'name' => 'Block field module widget tests',
          'type' => 'module',
          'description' => 'Support module for block field that provides some default configuration to test the field widget.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'block_field',
            2 => 'field',
            3 => 'node',
            4 => 'path',
            5 => 'user',
            6 => 'views',
          ),
          'version' => '8.x-1.0-alpha8',
          'core' => '8.x',
          'project' => 'block_field',
          'datestamp' => 1536732484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-alpha8',
      ),
      'block_field_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/block_field/tests/modules/block_field_test/block_field_test.info.yml',
        'basename' => 'block_field_test.info.yml',
        'name' => 'Block field module tests',
        'info' => 
        array (
          'name' => 'Block field module tests',
          'type' => 'module',
          'description' => 'Support module for Block field that provides a working example of a block field.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'block_field',
            1 => 'field',
            2 => 'menu_ui',
            3 => 'node',
            4 => 'path',
            5 => 'user',
          ),
          'version' => '8.x-1.0-alpha8',
          'core' => '8.x',
          'project' => 'block_field',
          'datestamp' => 1536732484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-alpha8',
      ),
      'block_field' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/block_field/block_field.info.yml',
        'basename' => 'block_field.info.yml',
        'name' => 'Block Field',
        'info' => 
        array (
          'name' => 'Block Field',
          'type' => 'module',
          'description' => 'Provides a field that allows a content entity to create and configure custom block instances.',
          'package' => 'Field',
          'version' => '8.x-1.0-alpha8',
          'core' => '8.x',
          'project' => 'block_field',
          'datestamp' => 1536732484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-alpha8',
      ),
      'metatag_google_cse' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_google_cse/metatag_google_cse.info.yml',
        'basename' => 'metatag_google_cse.info.yml',
        'name' => 'Metatag: Google Custom Search Engine (CSE)',
        'info' => 
        array (
          'name' => 'Metatag: Google Custom Search Engine (CSE)',
          'type' => 'module',
          'description' => 'Provides support for meta tags used for Google Custom Search Engine.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_open_graph_products' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_open_graph_products/metatag_open_graph_products.info.yml',
        'basename' => 'metatag_open_graph_products.info.yml',
        'name' => 'Metatag: Open Graph Products',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph Products',
          'type' => 'module',
          'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_open_graph',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_test_custom_route' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/tests/modules/metatag_test_custom_route/metatag_test_custom_route.info.yml',
        'basename' => 'metatag_test_custom_route.info.yml',
        'name' => 'Metatag: Test Custom Route',
        'info' => 
        array (
          'name' => 'Metatag: Test Custom Route',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom route that only inherits the global configuration.',
          'core' => '8.x',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_test_tag' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/tests/modules/metatag_test_tag/metatag_test_tag.info.yml',
        'basename' => 'metatag_test_tag.info.yml',
        'name' => 'Metatag Tests: Tag',
        'info' => 
        array (
          'name' => 'Metatag Tests: Tag',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom meta tag.',
          'core' => '8.x',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_views/metatag_views.info.yml',
        'basename' => 'metatag_views.info.yml',
        'name' => 'Metatag: Views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'type' => 'module',
          'description' => 'Provides views integration for metatags.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'drupal:views',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => '8100',
        'version' => '8.x-1.11',
      ),
      'metatag_google_plus' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_google_plus/metatag_google_plus.info.yml',
        'basename' => 'metatag_google_plus.info.yml',
        'name' => 'Metatag: Google Plus',
        'info' => 
        array (
          'name' => 'Metatag: Google Plus',
          'type' => 'module',
          'description' => 'Provides support for Google\'s Plus meta tags.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_open_graph' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_open_graph/metatag_open_graph.info.yml',
        'basename' => 'metatag_open_graph.info.yml',
        'name' => 'Metatag: Open Graph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'type' => 'module',
          'description' => 'Provides support for Open Graph Protocol meta tags.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.11',
      ),
      'metatag_verification' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_verification/metatag_verification.info.yml',
        'basename' => 'metatag_verification.info.yml',
        'name' => 'Metatag: Verification',
        'info' => 
        array (
          'name' => 'Metatag: Verification',
          'type' => 'module',
          'description' => 'Verifies ownership of a site for search engines and other services.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_favicons' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_favicons/metatag_favicons.info.yml',
        'basename' => 'metatag_favicons.info.yml',
        'name' => 'Metatag: Favicons',
        'info' => 
        array (
          'name' => 'Metatag: Favicons',
          'type' => 'module',
          'description' => 'Provides support for many different favicons.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_page_manager' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_page_manager/metatag_page_manager.info.yml',
        'basename' => 'metatag_page_manager.info.yml',
        'name' => 'Metatag Page Manager',
        'info' => 
        array (
          'name' => 'Metatag Page Manager',
          'type' => 'module',
          'description' => 'Provides metatag support for Page Manager variants.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'page_manager:page_manager',
            1 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_hreflang' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.info.yml',
        'basename' => 'metatag_hreflang.info.yml',
        'name' => 'Metatag: hreflang',
        'info' => 
        array (
          'name' => 'Metatag: hreflang',
          'type' => 'module',
          'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_dc/metatag_dc.info.yml',
        'basename' => 'metatag_dc.info.yml',
        'name' => 'Metatag: Dublin Core',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core',
          'type' => 'module',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_mobile' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_mobile/metatag_mobile.info.yml',
        'basename' => 'metatag_mobile.info.yml',
        'name' => 'Metatag: Mobile & UI Adjustments',
        'info' => 
        array (
          'name' => 'Metatag: Mobile & UI Adjustments',
          'type' => 'module',
          'description' => 'Provides support for meta tags used to control the mobile browser experience.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_pinterest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_pinterest/metatag_pinterest.info.yml',
        'basename' => 'metatag_pinterest.info.yml',
        'name' => 'Metatag: Pinterest',
        'info' => 
        array (
          'name' => 'Metatag: Pinterest',
          'type' => 'module',
          'description' => 'Provides support for Pinterest\'s custom meta tags.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
        'basename' => 'metatag_twitter_cards.info.yml',
        'name' => 'Metatag: Twitter Cards',
        'info' => 
        array (
          'name' => 'Metatag: Twitter Cards',
          'type' => 'module',
          'description' => 'Provides support for Twitter\'s Card meta tags.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_facebook' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_facebook/metatag_facebook.info.yml',
        'basename' => 'metatag_facebook.info.yml',
        'name' => 'Metatag: Facebook',
        'info' => 
        array (
          'name' => 'Metatag: Facebook',
          'type' => 'module',
          'description' => 'A set of meta tags specially for controlling advanced functionality with Facebook.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_dc_advanced' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.info.yml',
        'basename' => 'metatag_dc_advanced.info.yml',
        'name' => 'Metatag: Dublin Core Advanced',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core Advanced',
          'type' => 'module',
          'description' => 'Provides forty additional meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_dc',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag_app_links' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag_app_links/metatag_app_links.info.yml',
        'basename' => 'metatag_app_links.info.yml',
        'name' => 'Metatag: App Links',
        'info' => 
        array (
          'name' => 'Metatag: App Links',
          'type' => 'module',
          'description' => 'Provides support for applinks.org meta tags.',
          'core' => '8.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.11',
      ),
      'metatag' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/metatag/metatag.info.yml',
        'basename' => 'metatag.info.yml',
        'name' => 'Metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'type' => 'module',
          'description' => 'Manage meta tags for all entities.',
          'core' => '8.x',
          'package' => 'SEO',
          'configure' => 'entity.metatag_defaults.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'token:token',
          ),
          'test_dependencies' => 
          array (
            0 => 'devel:devel',
            1 => 'redirect:redirect',
            2 => 'restui:restui',
            3 => 'schema_metatag:schema_web_page',
          ),
          'version' => '8.x-1.11',
          'project' => 'metatag',
          'datestamp' => 1576870688,
        ),
        'schema_version' => '8107',
        'version' => '8.x-1.11',
      ),
      'ajax_comments' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/ajax_comments/ajax_comments.info.yml',
        'basename' => 'ajax_comments.info.yml',
        'name' => 'AJAX Comments',
        'info' => 
        array (
          'name' => 'AJAX Comments',
          'type' => 'module',
          'description' => 'Module makes comments load without a page refresh via AJAX',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
          'configure' => 'ajax_comments.settings',
          'version' => '8.x-1.0-beta2',
          'core' => '8.x',
          'project' => 'ajax_comments',
          'datestamp' => 1539818494,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-beta2',
      ),
      'social_api' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/social_api/social_api.info.yml',
        'basename' => 'social_api.info.yml',
        'name' => 'Social API',
        'info' => 
        array (
          'name' => 'Social API',
          'description' => 'Common interface for communicating with social networking services.',
          'package' => 'Social',
          'type' => 'module',
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'social_api',
          'datestamp' => 1501779546,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'profile_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/profile/tests/profile_test/profile_test.info.yml',
        'basename' => 'profile_test.info.yml',
        'name' => 'Profile',
        'info' => 
        array (
          'name' => 'Profile',
          'type' => 'module',
          'description' => 'Test module for Profile.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'dependencies' => 
          array (
            0 => 'profile',
          ),
          'version' => '8.x-1.1',
          'project' => 'profile',
          'datestamp' => 1582048363,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/profile/profile.info.yml',
        'basename' => 'profile.info.yml',
        'name' => 'Profile',
        'info' => 
        array (
          'name' => 'Profile',
          'type' => 'module',
          'description' => 'Provides configurable user profiles.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'configure' => 'entity.profile_type.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:user',
            2 => 'drupal:views',
            3 => 'entity:entity',
          ),
          'version' => '8.x-1.1',
          'project' => 'profile',
          'datestamp' => 1582048363,
        ),
        'schema_version' => '8010',
        'version' => '8.x-1.1',
      ),
      'link_css' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/link_css/link_css.info.yml',
        'basename' => 'link_css.info.yml',
        'name' => 'Link CSS',
        'info' => 
        array (
          'name' => 'Link CSS',
          'type' => 'module',
          'description' => 'Include CSS files using <link> element instead of @import.',
          'package' => 'Development',
          'core' => '8.x',
          'configure' => 'link_css.admin',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'url_embed' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/url_embed/url_embed.info.yml',
        'basename' => 'url_embed.info.yml',
        'name' => 'URL Embed',
        'info' => 
        array (
          'name' => 'URL Embed',
          'type' => 'module',
          'description' => 'Allows URLs to be embedded using a text editor.',
          'core_version_requirement' => '^8.8 || ^9',
          'package' => 'Filters',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
            1 => 'embed:embed',
            2 => 'drupal:filter',
          ),
          'version' => '8.x-1.0-beta1',
          'project' => 'url_embed',
          'datestamp' => 1593694014,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.0-beta1',
      ),
      'select2_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/select2/tests/modules/select2_form_test/select2_form_test.info.yml',
        'basename' => 'select2_form_test.info.yml',
        'name' => 'Select2 form test',
        'info' => 
        array (
          'name' => 'Select2 form test',
          'type' => 'module',
          'description' => 'Support module for select2 form tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'select2:select2',
          ),
          'version' => '8.x-1.8',
          'project' => 'select2',
          'datestamp' => 1590479026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.8',
      ),
      'select2_facets_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/select2/modules/select2_facets/tests/modules/select2_facets_test/select2_facets_test.info.yml',
        'basename' => 'select2_facets_test.info.yml',
        'name' => 'Select2 facets test',
        'info' => 
        array (
          'name' => 'Select2 facets test',
          'type' => 'module',
          'description' => 'Support module for select2 facets tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'facets:facets',
            1 => 'search_api:search_api_db',
            2 => 'drupal:entity_test',
            3 => 'select2:select2_facets',
            4 => 'drupal:views',
            5 => 'drupal:block',
          ),
          'version' => '8.x-1.8',
          'project' => 'select2',
          'datestamp' => 1590479026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.8',
      ),
      'select2_facets' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/select2/modules/select2_facets/select2_facets.info.yml',
        'basename' => 'select2_facets.info.yml',
        'name' => 'Select2 Facets',
        'info' => 
        array (
          'name' => 'Select2 Facets',
          'type' => 'module',
          'description' => 'Provides a Select2 Facet widget.',
          'package' => 'Search',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'facets:facets (>=8.x-1.4)',
            1 => 'select2:select2',
          ),
          'version' => '8.x-1.8',
          'project' => 'select2',
          'datestamp' => 1590479026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.8',
      ),
      'select2_publish' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/select2/modules/select2_publish/select2_publish.info.yml',
        'basename' => 'select2_publish.info.yml',
        'name' => 'Select2 Publish',
        'info' => 
        array (
          'name' => 'Select2 Publish',
          'type' => 'module',
          'description' => 'Indicates the status of referenced entities.',
          'package' => 'User interface',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'select2:select2',
            1 => 'form_options_attributes:form_options_attributes',
          ),
          'version' => '8.x-1.8',
          'project' => 'select2',
          'datestamp' => 1590479026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.8',
      ),
      'select2' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/select2/select2.info.yml',
        'basename' => 'select2.info.yml',
        'name' => 'Select2',
        'info' => 
        array (
          'name' => 'Select2',
          'type' => 'module',
          'description' => 'Makes entity reference fields more user-friendly using <a href="https://github.com/select2/select2">Select2</a>.',
          'package' => 'User interface',
          'core_version_requirement' => '^8.8 || ^9',
          'version' => '8.x-1.8',
          'project' => 'select2',
          'datestamp' => 1590479026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.8',
      ),
      'mailsystem_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/mailsystem/tests/themes/mailsystem_test_theme/mailsystem_test_theme.info.yml',
        'basename' => 'mailsystem_test_theme.info.yml',
        'name' => 'Mailsystem test theme',
        'info' => 
        array (
          'name' => 'Mailsystem test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing mailsystem',
          'core_version_requirement' => '^8.7.7  || ^9',
          'regions' => 
          array (
            'sidebar_first' => 'Left sidebar',
            'sidebar_second' => 'Right sidebar',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
            1 => 'sidebar_second',
          ),
          'version' => '8.x-4.3',
          'project' => 'mailsystem',
          'datestamp' => 1586203026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.3',
      ),
      'mailsystem' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/mailsystem/mailsystem.info.yml',
        'basename' => 'mailsystem.info.yml',
        'name' => 'Mail System',
        'info' => 
        array (
          'package' => 'Mail',
          'name' => 'Mail System',
          'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
          'type' => 'module',
          'core_version_requirement' => '^8.7.7  || ^9',
          'configure' => 'mailsystem.settings',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
          'version' => '8.x-4.3',
          'project' => 'mailsystem',
          'datestamp' => 1586203026,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.3',
      ),
      'votingapi_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/votingapi/tests/modules/votingapi_test/votingapi_test.info.yml',
        'basename' => 'votingapi_test.info.yml',
        'name' => 'Voting API test',
        'info' => 
        array (
          'name' => 'Voting API test',
          'type' => 'module',
          'description' => 'Support module for Voting API testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'votingapi',
          ),
          'version' => '8.x-3.0-beta1',
          'core' => '8.x',
          'project' => 'votingapi',
          'datestamp' => 1540711685,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0-beta1',
      ),
      'votingapi' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/votingapi/votingapi.info.yml',
        'basename' => 'votingapi.info.yml',
        'name' => 'Voting API',
        'info' => 
        array (
          'name' => 'Voting API',
          'type' => 'module',
          'description' => 'Provides a voting API that other modules can make use of.',
          'package' => 'Voting',
          'configure' => 'votingapi.admin_settings',
          'version' => '8.x-3.0-beta1',
          'core' => '8.x',
          'project' => 'votingapi',
          'datestamp' => 1540711685,
        ),
        'schema_version' => '8302',
        'version' => '8.x-3.0-beta1',
      ),
      'field_group_migrate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/field_group/contrib/field_group_migrate/field_group_migrate.info.yml',
        'basename' => 'field_group_migrate.info.yml',
        'name' => 'Field Group Migrate',
        'info' => 
        array (
          'name' => 'Field Group Migrate',
          'type' => 'module',
          'description' => 'Provides the ability to migrate field groups from D6/D7 to D8.',
          'package' => 'Migration',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'field_group:field_group',
          ),
          'version' => '8.x-3.1',
          'project' => 'field_group',
          'datestamp' => 1591772570,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.1',
      ),
      'field_group' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/field_group/field_group.info.yml',
        'basename' => 'field_group.info.yml',
        'name' => 'Field Group',
        'info' => 
        array (
          'name' => 'Field Group',
          'type' => 'module',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'version' => '8.x-3.1',
          'project' => 'field_group',
          'datestamp' => 1591772570,
        ),
        'schema_version' => '8302',
        'version' => '8.x-3.1',
      ),
      'entity_composite_relationship_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/entity_reference_revisions/tests/modules/entity_composite_relationship_test/entity_composite_relationship_test.info.yml',
        'basename' => 'entity_composite_relationship_test.info.yml',
        'name' => 'ERR Composite relationship test',
        'info' => 
        array (
          'name' => 'ERR Composite relationship test',
          'type' => 'module',
          'description' => 'Entity with parent type and ID.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions',
            1 => 'entity_test',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1539588784,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'entity_reference_revisions' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/entity_reference_revisions/entity_reference_revisions.info.yml',
        'basename' => 'entity_reference_revisions.info.yml',
        'name' => 'Entity Reference Revisions',
        'info' => 
        array (
          'name' => 'Entity Reference Revisions',
          'type' => 'module',
          'description' => 'Adds a Entity Reference field type with revision support.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1539588784,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.6',
      ),
      'message_example' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/message/modules/message_example/message_example.info.yml',
        'basename' => 'message_example.info.yml',
        'name' => 'Message example',
        'info' => 
        array (
          'name' => 'Message example',
          'type' => 'module',
          'description' => 'Example message for working with the message module.',
          'core' => '8.x',
          'package' => 'Message',
          'dependencies' => 
          array (
            0 => 'message:message',
            1 => 'token:token',
            2 => 'drupal:node',
            3 => 'drupal:comment',
          ),
          'version' => '8.x-1.0',
          'project' => 'message',
          'datestamp' => 1570139303,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'message' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/message/message.info.yml',
        'basename' => 'message.info.yml',
        'name' => 'Message',
        'info' => 
        array (
          'name' => 'Message',
          'type' => 'module',
          'description' => 'A general message logging utility.',
          'core' => '8.x',
          'package' => 'Message',
          'configure' => 'message.main_settings',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
          'version' => '8.x-1.0',
          'project' => 'message',
          'datestamp' => 1570139303,
        ),
        'schema_version' => '8100',
        'version' => '8.x-1.0',
      ),
      'private_message' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/private_message/private_message.info.yml',
        'basename' => 'private_message.info.yml',
        'name' => 'Private Message',
        'info' => 
        array (
          'name' => 'Private Message',
          'description' => 'A private message system for users to send messages to each other',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
          'configure' => 'private_message.admin_config.config',
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'private_message',
          'datestamp' => 1527808685,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.2',
      ),
      'crop' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/crop/crop.info.yml',
        'basename' => 'crop.info.yml',
        'name' => 'Crop API',
        'info' => 
        array (
          'name' => 'Crop API',
          'description' => 'Provides storage and API for image crops.',
          'package' => 'Media',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'user',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'crop',
          'datestamp' => 1516357097,
        ),
        'schema_version' => '8003',
        'version' => '8.x-1.5',
      ),
      'csv_serialization' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/csv_serialization/csv_serialization.info.yml',
        'basename' => 'csv_serialization.info.yml',
        'name' => 'Serialization (CSV)',
        'info' => 
        array (
          'name' => 'Serialization (CSV)',
          'type' => 'module',
          'description' => 'Provides CSV as a serialization format.',
          'core' => '8.x',
          'package' => 'Web services',
          'dependencies' => 
          array (
            0 => 'drupal:serialization (>=8.0.4)',
          ),
          'version' => '8.x-2.0-beta1',
          'project' => 'csv_serialization',
          'datestamp' => 1568995190,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.0-beta1',
      ),
      'r4032login' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/r4032login/r4032login.info.yml',
        'basename' => 'r4032login.info.yml',
        'name' => 'Redirect 403 to User Login',
        'info' => 
        array (
          'name' => 'Redirect 403 to User Login',
          'type' => 'module',
          'description' => 'Redirect anonymous users from 403 Access Denied pages to the /user/login page.',
          'configure' => 'system.site_information_settings',
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'r4032login',
          'datestamp' => 1533913693,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'override_node_options' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/override_node_options/override_node_options.info.yml',
        'basename' => 'override_node_options.info.yml',
        'name' => 'Override Node Options',
        'info' => 
        array (
          'name' => 'Override Node Options',
          'description' => 'Allow non-admins to override the default publishing options for nodes they can edit.',
          'type' => 'module',
          'package' => 'Permissions',
          'configure' => 'override_node_options.settings',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:system (>=8.4.0)',
          ),
          'version' => '8.x-2.4',
          'core' => '8.x',
          'project' => 'override_node_options',
          'datestamp' => 1522490887,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.4',
      ),
      'group_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/tests/modules/group_test_views/group_test_views.info.yml',
        'basename' => 'group_test_views.info.yml',
        'name' => 'Group test views',
        'info' => 
        array (
          'name' => 'Group test views',
          'description' => 'Provides default views for group views tests.',
          'package' => 'Testing',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'group:group',
            1 => 'drupal:views',
            2 => 'drupal:language',
          ),
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc5',
      ),
      'group_test_plugin' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/tests/modules/group_test_plugin/group_test_plugin.info.yml',
        'basename' => 'group_test_plugin.info.yml',
        'name' => 'Group test plugin',
        'info' => 
        array (
          'name' => 'Group test plugin',
          'description' => 'Provides group plugins to run tests with.',
          'package' => 'Testing',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'group:group',
            1 => 'drupal:language',
          ),
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc5',
      ),
      'group_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/tests/modules/group_test_config/group_test_config.info.yml',
        'basename' => 'group_test_config.info.yml',
        'name' => 'Group configuration tests',
        'info' => 
        array (
          'name' => 'Group configuration tests',
          'description' => 'Support module for group configuration tests.',
          'package' => 'Testing',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'group:group',
          ),
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc5',
      ),
      'group_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/tests/modules/group_test/group_test.info.yml',
        'basename' => 'group_test.info.yml',
        'name' => 'Group test',
        'info' => 
        array (
          'name' => 'Group test',
          'description' => 'Support module for Group tests.',
          'package' => 'Testing',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'group:group',
            1 => 'drupal:user',
          ),
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc5',
      ),
      'gvbo' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/modules/gvbo/gvbo.info.yml',
        'basename' => 'gvbo.info.yml',
        'name' => 'Group Views Bulk Operations',
        'info' => 
        array (
          'name' => 'Group Views Bulk Operations',
          'description' => 'Use Views Bulk Operations together with group permission.',
          'package' => 'Group',
          'type' => 'module',
          'version' => 1,
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'group',
            1 => 'views_bulk_operations',
          ),
        ),
        'schema_version' => 8000,
        'version' => 1,
      ),
      'ginvite' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/modules/ginvite/ginvite.info.yml',
        'basename' => 'ginvite.info.yml',
        'name' => 'Group invite',
        'info' => 
        array (
          'name' => 'Group invite',
          'description' => 'Allows group managers to invite people into their group',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Group',
          'dependencies' => 
          array (
            0 => 'group:group',
          ),
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'gnode' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/modules/gnode/gnode.info.yml',
        'basename' => 'gnode.info.yml',
        'name' => 'Group Node',
        'info' => 
        array (
          'name' => 'Group Node',
          'description' => 'Enables Group functionality for the Node module',
          'package' => 'Group',
          'type' => 'module',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'group:group',
          ),
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => '8006',
        'version' => '8.x-1.0-rc5',
      ),
      'grequest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/modules/grequest/grequest.info.yml',
        'basename' => 'grequest.info.yml',
        'name' => 'Group request',
        'info' => 
        array (
          'name' => 'Group request',
          'type' => 'module',
          'description' => 'Allows users to request access to Groups',
          'package' => 'Group',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'group:group',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'grolesync' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/modules/grolesync/grolesync.info.yml',
        'basename' => 'grolesync.info.yml',
        'name' => 'Group role sync',
        'info' => 
        array (
          'name' => 'Group role sync',
          'description' => 'THIS IS NOW PART OF THE MAIN MODULE. Will be removed by 8.x-1.0!',
          'package' => 'Group (Obsolete)',
          'type' => 'module',
          'core' => '8.x',
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc5',
      ),
      'group' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/group/group.info.yml',
        'basename' => 'group.info.yml',
        'name' => 'Group',
        'info' => 
        array (
          'name' => 'Group',
          'description' => 'Allows you to group users, content and other entities',
          'package' => 'Group',
          'type' => 'module',
          'core' => '8.x',
          'configure' => 'group.settings',
          'dependencies' => 
          array (
            0 => 'drupal:options',
            1 => 'drupal:system (>=8.6.0)',
            2 => 'entity:entity',
          ),
          'version' => '8.x-1.0-rc5',
          'project' => 'group',
          'datestamp' => 1576854204,
        ),
        'schema_version' => '8017',
        'version' => '8.x-1.0-rc5',
      ),
      'data_policy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/data_policy/data_policy.info.yml',
        'basename' => 'data_policy.info.yml',
        'name' => 'Data Policy',
        'info' => 
        array (
          'name' => 'Data Policy',
          'description' => 'Create data policies and track user agreements as well as informing users.',
          'configure' => 'entity.informblock.collection',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
          'type' => 'module',
          'version' => '8.x-1.0-beta6',
          'core' => '8.x',
          'project' => 'data_policy',
          'datestamp' => 1562252592,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.0-beta6',
      ),
      'lazy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/lazy/lazy.info.yml',
        'basename' => 'lazy.info.yml',
        'name' => 'Lazy-load',
        'info' => 
        array (
          'name' => 'Lazy-load',
          'type' => 'module',
          'description' => 'This module integrates bLazy script to lazy load inline images and/or iframes via input-filters.',
          'package' => 'Input filters',
          'configure' => 'lazy.config_form',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
          'version' => '8.x-2.0',
          'core' => '8.x',
          'project' => 'lazy',
          'datestamp' => 1555907896,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.0',
      ),
      'entity_module_bundle_plugin_examples_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/entity/tests/modules/entity_module_bundle_plugin_examples_test/entity_module_bundle_plugin_examples_test.info.yml',
        'basename' => 'entity_module_bundle_plugin_examples_test.info.yml',
        'name' => 'Entity bundle plugin examples test',
        'info' => 
        array (
          'name' => 'Entity bundle plugin examples test',
          'type' => 'module',
          'description' => 'Module for testing bundle plugins.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '8.x-1.0-rc3',
          'core' => '8.x',
          'project' => 'entity',
          'datestamp' => 1559579890,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc3',
      ),
      'entity_module_bundle_plugin_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/entity/tests/modules/entity_module_bundle_plugin_test/entity_module_bundle_plugin_test.info.yml',
        'basename' => 'entity_module_bundle_plugin_test.info.yml',
        'name' => 'Entity bundle plugin test',
        'info' => 
        array (
          'name' => 'Entity bundle plugin test',
          'type' => 'module',
          'description' => 'Module for testing bundle plugins.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '8.x-1.0-rc3',
          'core' => '8.x',
          'project' => 'entity',
          'datestamp' => 1559579890,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc3',
      ),
      'entity_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/entity/tests/modules/entity_module_test/entity_module_test.info.yml',
        'basename' => 'entity_module_test.info.yml',
        'name' => 'Entity test',
        'info' => 
        array (
          'name' => 'Entity test',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.x-1.0-rc3',
          'core' => '8.x',
          'project' => 'entity',
          'datestamp' => 1559579890,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc3',
      ),
      'entity' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/entity/entity.info.yml',
        'basename' => 'entity.info.yml',
        'name' => 'Entity',
        'info' => 
        array (
          'name' => 'Entity',
          'description' => 'Provides expanded entity APIs, which will be moved to Drupal core one day.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:system (>=8.6.0)',
          ),
          'version' => '8.x-1.0-rc3',
          'core' => '8.x',
          'project' => 'entity',
          'datestamp' => 1559579890,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc3',
      ),
      'admin_toolbar_links_access_filter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.info.yml',
        'basename' => 'admin_toolbar_links_access_filter.info.yml',
        'name' => 'Admin Toolbar Links Access Filter',
        'info' => 
        array (
          'name' => 'Admin Toolbar Links Access Filter',
          'description' => 'Provides a workaround for the common problem that users with \'Use the administration pages and help\' permission see menu links they don\'t have access permission for. Once the issue <a href=\'https://www.drupal.org/node/296693\'>https://www.drupal.org/node/296693</a> be solved, this module will be deprecated.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'version' => '8.x-1.27',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1558552277,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.27',
      ),
      'admin_toolbar_tools' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
        'basename' => 'admin_toolbar_tools.info.yml',
        'name' => 'Admin Toolbar Extra Tools',
        'info' => 
        array (
          'name' => 'Admin Toolbar Extra Tools',
          'description' => 'Adds menu links to the Admin Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
            1 => 'drupal:system (>=8.6)',
          ),
          'version' => '8.x-1.27',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1558552277,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.27',
      ),
      'admin_toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/admin_toolbar/admin_toolbar.info.yml',
        'basename' => 'admin_toolbar.info.yml',
        'name' => 'Admin Toolbar',
        'info' => 
        array (
          'name' => 'Admin Toolbar',
          'description' => 'Provides an improved drop-down menu interface to the site Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:toolbar',
          ),
          'version' => '8.x-1.27',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1558552277,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.27',
      ),
      'redirect_404' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/redirect/modules/redirect_404/redirect_404.info.yml',
        'basename' => 'redirect_404.info.yml',
        'name' => 'Redirect 404',
        'info' => 
        array (
          'name' => 'Redirect 404',
          'type' => 'module',
          'description' => 'Logs 404 errors and allows users to create redirects for often requested but missing pages.',
          'dependencies' => 
          array (
            0 => 'redirect',
            1 => 'views',
          ),
          'version' => '8.x-1.4',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1561757587,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.4',
      ),
      'redirect_domain' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/redirect/modules/redirect_domain/redirect_domain.info.yml',
        'basename' => 'redirect_domain.info.yml',
        'name' => 'Redirect Domain',
        'info' => 
        array (
          'name' => 'Redirect Domain',
          'type' => 'module',
          'description' => 'Allows users to redirect between domains.',
          'dependencies' => 
          array (
            0 => 'redirect',
          ),
          'version' => '8.x-1.4',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1561757587,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.4',
      ),
      'redirect' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/redirect/redirect.info.yml',
        'basename' => 'redirect.info.yml',
        'name' => 'Redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'type' => 'module',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'configure' => 'redirect.settings',
          'dependencies' => 
          array (
            0 => 'drupal:link',
            1 => 'drupal:views',
            2 => 'drupal:system (>= 8.5)',
          ),
          'version' => '8.x-1.4',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1561757587,
        ),
        'schema_version' => '8108',
        'version' => '8.x-1.4',
      ),
      'flag_event_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/flag/tests/modules/flag_event_test/flag_event_test.info.yml',
        'basename' => 'flag_event_test.info.yml',
        'name' => 'Flag event test module',
        'info' => 
        array (
          'name' => 'Flag event test module',
          'description' => 'Functionality to assist Flag event testing.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Testing',
          'version' => '8.x-4.0-alpha3',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1521598690,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha3',
      ),
      'flag_test_plugins' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/flag/tests/modules/flag_test_plugins/flag_test_plugins.info.yml',
        'basename' => 'flag_test_plugins.info.yml',
        'name' => 'Flag test plugins',
        'info' => 
        array (
          'name' => 'Flag test plugins',
          'description' => 'Provides dummy Flag plugins for use in tests.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
          ),
          'package' => 'Testing',
          'version' => '8.x-4.0-alpha3',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1521598690,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha3',
      ),
      'flagging_admin' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/flag/tests/modules/flagging_admin/flagging_admin.info.yml',
        'basename' => 'flagging_admin.info.yml',
        'name' => 'Flagging Admin',
        'info' => 
        array (
          'name' => 'Flagging Admin',
          'description' => 'Provides an admin view for Flaggings.',
          'core' => '8.x',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag',
            1 => 'flag_follower',
            2 => 'flag_bookmark',
            3 => 'views',
            4 => 'node',
            5 => 'user',
          ),
          'package' => 'Testing',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'flag_follower' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/flag/modules/flag_follower/flag_follower.info.yml',
        'basename' => 'flag_follower.info.yml',
        'name' => 'Flag Follower',
        'info' => 
        array (
          'name' => 'Flag Follower',
          'description' => 'Provides an example user flag and supporting views.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
          'version' => '8.x-4.0-alpha3',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1521598690,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha3',
      ),
      'flag_bookmark' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/flag/modules/flag_bookmark/flag_bookmark.info.yml',
        'basename' => 'flag_bookmark.info.yml',
        'name' => 'Flag Bookmark',
        'info' => 
        array (
          'name' => 'Flag Bookmark',
          'description' => 'Provides an example bookmark flag and supporting views.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
          'version' => '8.x-4.0-alpha3',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1521598690,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha3',
      ),
      'flag' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/flag/flag.info.yml',
        'basename' => 'flag.info.yml',
        'name' => 'Flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on entities.',
          'type' => 'module',
          'package' => 'Flags',
          'test_dependencies' => 
          array (
            0 => 'rules:rules',
          ),
          'configure' => 'entity.flag.collection',
          'version' => '8.x-4.0-alpha3',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1521598690,
        ),
        'schema_version' => '8401',
        'version' => '8.x-4.0-alpha3',
      ),
      'swiftmailer_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/swiftmailer/tests/modules/swiftmailer_test/swiftmailer_test.info.yml',
        'basename' => 'swiftmailer_test.info.yml',
        'name' => 'SwiftMailer Test Module',
        'info' => 
        array (
          'name' => 'SwiftMailer Test Module',
          'type' => 'module',
          'description' => 'Support module for SwiftMailer testing.',
          'package' => 'Testing',
          'version' => '8.x-1.0-beta2',
          'core' => '8.x',
          'project' => 'swiftmailer',
          'datestamp' => 1519655297,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-beta2',
      ),
      'swiftmailer' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/swiftmailer/swiftmailer.info.yml',
        'basename' => 'swiftmailer.info.yml',
        'name' => 'Swift Mailer',
        'info' => 
        array (
          'name' => 'Swift Mailer',
          'type' => 'module',
          'description' => 'Installs Swift Mailer as a mail system.',
          'package' => 'Mail',
          'configure' => 'swiftmailer.transport_settings',
          'dependencies' => 
          array (
            0 => 'mailsystem',
          ),
          'version' => '8.x-1.0-beta2',
          'core' => '8.x',
          'project' => 'swiftmailer',
          'datestamp' => 1519655297,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.0-beta2',
      ),
      'search_api_db_defaults' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/search_api/modules/search_api_db/search_api_db_defaults/search_api_db_defaults.info.yml',
        'basename' => 'search_api_db_defaults.info.yml',
        'name' => 'Database Search Defaults',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Database Search Defaults',
          'description' => 'Enable this module for a best-practice default setup of Search API with the Database backend. After installation it is recommended to uninstall this module again for performance reasons. The provided configuration will not be removed.',
          'package' => 'Search',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:field',
            2 => 'drupal:image',
            3 => 'drupal:node',
            4 => 'drupal:text',
            5 => 'drupal:user',
            6 => 'drupal:views',
            7 => 'search_api:search_api_db',
          ),
          'version' => '8.x-1.15',
          'project' => 'search_api',
          'datestamp' => 1573122789,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.15',
      ),
      'search_api_db' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/search_api/modules/search_api_db/search_api_db.info.yml',
        'basename' => 'search_api_db.info.yml',
        'name' => 'Database Search',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Database Search',
          'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
          'package' => 'Search',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'search_api:search_api',
          ),
          'version' => '8.x-1.15',
          'project' => 'search_api',
          'datestamp' => 1573122789,
        ),
        'schema_version' => '8103',
        'version' => '8.x-1.15',
      ),
      'search_api' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/modules/contrib/search_api/search_api.info.yml',
        'basename' => 'search_api.info.yml',
        'name' => 'Search API',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Search API',
          'description' => 'Provides a generic framework for modules offering search capabilities.',
          'package' => 'Search',
          'core' => '8.x',
          'configure' => 'search_api.overview',
          'dependencies' => 
          array (
            0 => 'drupal:system (>=8.6)',
          ),
          'version' => '8.x-1.15',
          'project' => 'search_api',
          'datestamp' => 1573122789,
        ),
        'schema_version' => '8106',
        'version' => '8.x-1.15',
      ),
      'action' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/action/action.info.yml',
        'basename' => 'action.info.yml',
        'name' => 'Actions',
        'info' => 
        array (
          'name' => 'Actions',
          'type' => 'module',
          'description' => 'Perform tasks on specific events triggered within the system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.action.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'aggregator_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/aggregator/tests/modules/aggregator_test_views/aggregator_test_views.info.yml',
        'basename' => 'aggregator_test_views.info.yml',
        'name' => 'Aggregator test views',
        'info' => 
        array (
          'name' => 'Aggregator test views',
          'type' => 'module',
          'description' => 'Provides default views for views aggregator tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:aggregator',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'aggregator_display_configurable_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/aggregator/tests/modules/aggregator_display_configurable_test/aggregator_display_configurable_test.info.yml',
        'basename' => 'aggregator_display_configurable_test.info.yml',
        'name' => 'Aggregator configurable display module tests',
        'info' => 
        array (
          'name' => 'Aggregator configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for aggregator \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/aggregator/tests/modules/aggregator_test/aggregator_test.info.yml',
        'basename' => 'aggregator_test.info.yml',
        'name' => 'Aggregator module tests',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'type' => 'module',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/aggregator/aggregator.info.yml',
        'basename' => 'aggregator.info.yml',
        'name' => 'Aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'type' => 'module',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds) from external sources.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'aggregator.admin_settings',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:options',
          ),
        ),
        'schema_version' => '8501',
        'version' => '8.8.10',
      ),
      'field_ui_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field_ui/tests/modules/field_ui_test/field_ui_test.info.yml',
        'basename' => 'field_ui_test.info.yml',
        'name' => 'Field UI test',
        'info' => 
        array (
          'name' => 'Field UI test',
          'type' => 'module',
          'description' => 'Support module for Field UI tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field_ui/field_ui.info.yml',
        'basename' => 'field_ui.info.yml',
        'name' => 'Field UI',
        'info' => 
        array (
          'name' => 'Field UI',
          'type' => 'module',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'telephone' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/telephone/telephone.info.yml',
        'basename' => 'telephone.info.yml',
        'name' => 'Telephone',
        'info' => 
        array (
          'name' => 'Telephone',
          'type' => 'module',
          'description' => 'Defines a field type for telephone numbers.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'ban' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/ban/ban.info.yml',
        'basename' => 'ban.info.yml',
        'name' => 'Ban',
        'info' => 
        array (
          'name' => 'Ban',
          'type' => 'module',
          'description' => 'Enables banning of IP addresses.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'ban.admin_page',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'contextual_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/contextual/tests/modules/contextual_test/contextual_test.info.yml',
        'basename' => 'contextual_test.info.yml',
        'name' => 'Contextual Test',
        'info' => 
        array (
          'name' => 'Contextual Test',
          'type' => 'module',
          'description' => 'Provides test contextual links.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:contextual',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'contextual' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/contextual/contextual.info.yml',
        'basename' => 'contextual.info.yml',
        'name' => 'Contextual Links',
        'info' => 
        array (
          'name' => 'Contextual Links',
          'type' => 'module',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_discovery_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/field_discovery_test/field_discovery_test.info.yml',
        'basename' => 'field_discovery_test.info.yml',
        'name' => 'Migrate drupal field discovery tet',
        'info' => 
        array (
          'name' => 'Migrate drupal field discovery tet',
          'type' => 'module',
          'description' => 'Module containing a test class exposing protected field discovery methods',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_cckfield_plugin_manager_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_cckfield_plugin_manager_test/migrate_cckfield_plugin_manager_test.info.yml',
        'basename' => 'migrate_cckfield_plugin_manager_test.info.yml',
        'name' => 'Migrate cck field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate cck field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the cck field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_field_plugin_manager_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_field_plugin_manager_test/migrate_field_plugin_manager_test.info.yml',
        'basename' => 'migrate_field_plugin_manager_test.info.yml',
        'name' => 'Migrate field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_overwrite_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_overwrite_test/migrate_overwrite_test.info.yml',
        'basename' => 'migrate_overwrite_test.info.yml',
        'name' => 'Migrate property overwrite test',
        'info' => 
        array (
          'name' => 'Migrate property overwrite test',
          'type' => 'module',
          'description' => 'Example module demonstrating property overwrite support in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_state_finished_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_state_finished_test/migrate_state_finished_test.info.yml',
        'basename' => 'migrate_state_finished_test.info.yml',
        'name' => 'Migrate state active test',
        'info' => 
        array (
          'name' => 'Migrate state active test',
          'type' => 'module',
          'description' => 'Tests the \'active\' migrate state',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_state_no_file_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_state_no_file_test/migrate_state_no_file_test.info.yml',
        'basename' => 'migrate_state_no_file_test.info.yml',
        'name' => 'Migrate state no migrate_drupal.yml file test',
        'info' => 
        array (
          'name' => 'Migrate state no migrate_drupal.yml file test',
          'type' => 'module',
          'description' => 'Has a migration but Does not have a migrate_drupal.yml file.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_state_not_finished_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_state_not_finished_test/migrate_state_not_finished_test.info.yml',
        'basename' => 'migrate_state_not_finished_test.info.yml',
        'name' => 'Migrate state incomplete test',
        'info' => 
        array (
          'name' => 'Migrate state incomplete test',
          'type' => 'module',
          'description' => 'Tests the \'incomplete\' migrate state',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_state_no_upgrade_path' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/tests/modules/migrate_state_no_upgrade_path/migrate_state_no_upgrade_path.info.yml',
        'basename' => 'migrate_state_no_upgrade_path.info.yml',
        'name' => 'Migrate state no migration and no migrate_drupal.yml file test',
        'info' => 
        array (
          'name' => 'Migrate state no migration and no migrate_drupal.yml file test',
          'type' => 'module',
          'description' => 'Does not have a migration or migrate_drupal.yml file.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_drupal' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal/migrate_drupal.info.yml',
        'basename' => 'migrate_drupal.info.yml',
        'name' => 'Migrate Drupal',
        'info' => 
        array (
          'name' => 'Migrate Drupal',
          'type' => 'module',
          'description' => 'Contains migrations from older Drupal versions.',
          'package' => 'Migration',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => '8601',
        'version' => '8.8.10',
      ),
      'layout_builder_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/tests/modules/layout_builder_test/layout_builder_test.info.yml',
        'basename' => 'layout_builder_test.info.yml',
        'name' => 'Layout Builder test',
        'info' => 
        array (
          'name' => 'Layout Builder test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_builder_views_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/tests/modules/layout_builder_views_test/layout_builder_views_test.info.yml',
        'basename' => 'layout_builder_views_test.info.yml',
        'name' => 'Layout Builder Views Test',
        'info' => 
        array (
          'name' => 'Layout Builder Views Test',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_builder_overrides_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/tests/modules/layout_builder_overrides_test/layout_builder_overrides_test.info.yml',
        'basename' => 'layout_builder_overrides_test.info.yml',
        'name' => 'Layout Builder overrides test',
        'info' => 
        array (
          'name' => 'Layout Builder overrides test',
          'type' => 'module',
          'description' => 'Support module for testing overriding layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_builder_defaults_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/tests/modules/layout_builder_defaults_test/layout_builder_defaults_test.info.yml',
        'basename' => 'layout_builder_defaults_test.info.yml',
        'name' => 'Layout Builder defaults test',
        'info' => 
        array (
          'name' => 'Layout Builder defaults test',
          'type' => 'module',
          'description' => 'Support module for testing layout building defaults.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_builder_field_block_theme_suggestions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/tests/modules/layout_builder_field_block_theme_suggestions_test/layout_builder_field_block_theme_suggestions_test.info.yml',
        'basename' => 'layout_builder_field_block_theme_suggestions_test.info.yml',
        'name' => 'Layout Builder Field Block Theme Suggestions Test',
        'info' => 
        array (
          'name' => 'Layout Builder Field Block Theme Suggestions Test',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_builder_fieldblock_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/tests/modules/layout_builder_fieldblock_test/layout_builder_fieldblock_test.info.yml',
        'basename' => 'layout_builder_fieldblock_test.info.yml',
        'name' => 'Layout Builder test',
        'info' => 
        array (
          'name' => 'Layout Builder test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_builder' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_builder/layout_builder.info.yml',
        'basename' => 'layout_builder.info.yml',
        'name' => 'Layout Builder',
        'info' => 
        array (
          'name' => 'Layout Builder',
          'type' => 'module',
          'description' => 'Allows users to add and arrange blocks and content fields directly on the content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
            1 => 'drupal:contextual',
            2 => 'drupal:field_ui',
            3 => 'drupal:block',
          ),
        ),
        'schema_version' => '8602',
        'version' => '8.8.10',
      ),
      'settings_tray_test_css' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/settings_tray/tests/modules/settings_tray_test_css/settings_tray_test_css.info.yml',
        'basename' => 'settings_tray_test_css.info.yml',
        'name' => 'CSS Test fix',
        'info' => 
        array (
          'name' => 'CSS Test fix',
          'type' => 'module',
          'description' => 'Provides CSS fixes for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'settings_tray_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/settings_tray/tests/modules/settings_tray_test/settings_tray_test.info.yml',
        'basename' => 'settings_tray_test.info.yml',
        'name' => 'Settings Tray Test',
        'info' => 
        array (
          'name' => 'Settings Tray Test',
          'type' => 'module',
          'description' => 'Provides Settings Tray test functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'settings_tray_override_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/settings_tray/tests/modules/settings_tray_override_test/settings_tray_override_test.info.yml',
        'basename' => 'settings_tray_override_test.info.yml',
        'name' => 'Configuration override test for Settings Tray',
        'info' => 
        array (
          'name' => 'Configuration override test for Settings Tray',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'settings_tray' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/settings_tray/settings_tray.info.yml',
        'basename' => 'settings_tray.info.yml',
        'name' => 'Settings Tray',
        'info' => 
        array (
          'name' => 'Settings Tray',
          'type' => 'module',
          'description' => 'Allows users to directly edit the configuration of blocks on the current page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:toolbar',
            2 => 'drupal:contextual',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'automated_cron' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/automated_cron/automated_cron.info.yml',
        'basename' => 'automated_cron.info.yml',
        'name' => 'Automated Cron',
        'info' => 
        array (
          'name' => 'Automated Cron',
          'type' => 'module',
          'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.cron_settings',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'workflow_type_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/workflows/tests/modules/workflow_type_test/workflow_type_test.info.yml',
        'basename' => 'workflow_type_test.info.yml',
        'name' => 'Workflow Type Test',
        'info' => 
        array (
          'name' => 'Workflow Type Test',
          'type' => 'module',
          'description' => 'Provides a workflow type plugin for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'workflow_third_party_settings_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/workflows/tests/modules/workflow_third_party_settings_test/workflow_third_party_settings_test.info.yml',
        'basename' => 'workflow_third_party_settings_test.info.yml',
        'name' => 'Workflow Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Workflow Third Party Settings Test',
          'type' => 'module',
          'description' => 'Allows third party settings on workflows to be tested.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'workflows' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/workflows/workflows.info.yml',
        'basename' => 'workflows.info.yml',
        'name' => 'Workflows',
        'info' => 
        array (
          'name' => 'Workflows',
          'type' => 'module',
          'description' => 'Provides an interface to create workflows with transitions between different states (for example publication or user status) provided by other modules.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'help_topics_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/help_topics/tests/themes/help_topics_test_theme/help_topics_test_theme.info.yml',
        'basename' => 'help_topics_test_theme.info.yml',
        'name' => 'Test Help Topics',
        'info' => 
        array (
          'name' => 'Test Help Topics',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'A theme to test help topics.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'help_topics_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/help_topics/tests/modules/help_topics_test/help_topics_test.info.yml',
        'basename' => 'help_topics_test.info.yml',
        'name' => 'ABC Help Test',
        'info' => 
        array (
          'name' => 'ABC Help Test',
          'type' => 'module',
          'description' => 'Support module for help testing.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'help_topics' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/help_topics/help_topics.info.yml',
        'basename' => 'help_topics.info.yml',
        'name' => 'Help Topics',
        'info' => 
        array (
          'name' => 'Help Topics',
          'type' => 'module',
          'description' => 'Displays help topics provided by themes and modules.',
          'core' => '8.x',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'dynamic_page_cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/dynamic_page_cache/tests/dynamic_page_cache_test/dynamic_page_cache_test.info.yml',
        'basename' => 'dynamic_page_cache_test.info.yml',
        'name' => 'Test Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Test Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Provides test routes/responses for Dynamic Page Cache.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'dynamic_page_cache' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
        'basename' => 'dynamic_page_cache.info.yml',
        'name' => 'Internal Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Internal Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for any user, handling dynamic content correctly.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_libraries_override_with_drupal_settings' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_libraries_override_with_drupal_settings/test_theme_libraries_override_with_drupal_settings.info.yml',
        'basename' => 'test_theme_libraries_override_with_drupal_settings.info.yml',
        'name' => 'Test theme libraries-override',
        'info' => 
        array (
          'name' => 'Test theme libraries-override',
          'type' => 'theme',
          'description' => 'Theme with drupalSettings libraries-override',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
          'libraries-override' => 
          array (
            'core/drupal.ajax' => 
            array (
              'drupalSettings' => 
              array (
                'ajaxPageState' => 
                array (
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_twig_registry_loader_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_twig_registry_loader_subtheme/test_theme_twig_registry_loader_subtheme.info.yml',
        'basename' => 'test_theme_twig_registry_loader_subtheme.info.yml',
        'name' => 'Twig registry loader test subtheme',
        'info' => 
        array (
          'name' => 'Twig registry loader test subtheme',
          'type' => 'theme',
          'base theme' => 'test_theme_twig_registry_loader_theme',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_libraries_extend' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_libraries_extend/test_theme_libraries_extend.info.yml',
        'basename' => 'test_theme_libraries_extend.info.yml',
        'name' => 'Test theme libraries-extend',
        'info' => 
        array (
          'name' => 'Test theme libraries-extend',
          'type' => 'theme',
          'description' => 'Test Theme with libraries-extend',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
          'libraries-extend' => 
          array (
            'classy/book-navigation' => 
            array (
              0 => 'test_theme_libraries_extend/extend_one',
              1 => 'test_theme_libraries_extend/extend_two',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'test_theme_libraries_extend/non_existent_library',
            ),
            'test_theme/collapse' => 
            array (
              0 => 
              array (
                'not_a_string' => 
                array (
                  'expected' => 'an exception',
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_nyan_cat_engine' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_nyan_cat_engine/test_theme_nyan_cat_engine.info.yml',
        'basename' => 'test_theme_nyan_cat_engine.info.yml',
        'name' => 'Test theme for Nyan Cat engine',
        'info' => 
        array (
          'name' => 'Test theme for Nyan Cat engine',
          'type' => 'theme',
          'description' => 'Theme for testing the theme system with the Nyan Cat theme engine',
          'version' => 'VERSION',
          'core' => '8.x',
          'engine' => 'nyan_cat',
          'base theme' => false,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_subsubtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_subsubtheme/test_subsubtheme.info.yml',
        'basename' => 'test_subsubtheme.info.yml',
        'name' => 'Theme test subsubtheme',
        'info' => 
        array (
          'name' => 'Theme test subsubtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_subtheme as the base theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'test_subtheme',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'nyan_cat' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/engines/nyan_cat/nyan_cat.info.yml',
        'basename' => 'nyan_cat.info.yml',
        'name' => 'Nyan cat',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Nyan cat',
          'core' => '8.x',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'experimental_theme_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/experimental_theme_dependency_test/experimental_theme_dependency_test.info.yml',
        'basename' => 'experimental_theme_dependency_test.info.yml',
        'name' => 'Experimental dependency test',
        'info' => 
        array (
          'name' => 'Experimental dependency test',
          'type' => 'theme',
          'description' => 'Experimental dependency test theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'experimental_theme_test',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_invalid_region' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_invalid_region/test_invalid_region.info.yml',
        'basename' => 'test_invalid_region.info.yml',
        'name' => 'Theme test with missing content region',
        'info' => 
        array (
          'name' => 'Theme test with missing content region',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has a non-existent content region.',
          'version' => 'VERSION',
          'core' => '8.x',
          'regions' => 
          array (
            0 => 
            array (
              'foo' => 'Foo',
            ),
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_invalid_basetheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_invalid_basetheme/test_invalid_basetheme.info.yml',
        'basename' => 'test_invalid_basetheme.info.yml',
        'name' => 'Theme test with invalid base theme',
        'info' => 
        array (
          'name' => 'Theme test with invalid base theme',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent base theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'not_real_test_basetheme',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_messages' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_messages/test_messages.info.yml',
        'basename' => 'test_messages.info.yml',
        'name' => 'Theme test messages',
        'info' => 
        array (
          'name' => 'Theme test messages',
          'type' => 'theme',
          'description' => 'Test theme which provides another div for messages.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'classy',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_twig_registry_loader_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_twig_registry_loader_theme/test_theme_twig_registry_loader_theme.info.yml',
        'basename' => 'test_theme_twig_registry_loader_theme.info.yml',
        'name' => 'Twig registry loader test theme',
        'info' => 
        array (
          'name' => 'Twig registry loader test theme',
          'type' => 'theme',
          'base theme' => 'test_theme_twig_registry_loader',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_ckeditor_stylesheets_protocol_relative' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_ckeditor_stylesheets_protocol_relative/test_ckeditor_stylesheets_protocol_relative.info.yml',
        'basename' => 'test_ckeditor_stylesheets_protocol_relative.info.yml',
        'name' => 'Test protocol-relative CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test protocol-relative CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a protocol-relative CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'core' => '8.x',
          'ckeditor_stylesheets' => 
          array (
            0 => '//fonts.googleapis.com/css?family=Open+Sans',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_invalid_core' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_invalid_core/test_invalid_core.info.yml',
        'basename' => 'test_invalid_core.info.yml',
        'name' => 'Theme test with invalid core version',
        'info' => 
        array (
          'name' => 'Theme test with invalid core version',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has an invalid core version.',
          'version' => 'VERSION',
          'core' => '7.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_subtheme/test_subtheme.info.yml',
        'basename' => 'test_subtheme.info.yml',
        'name' => 'Theme test subtheme',
        'info' => 
        array (
          'name' => 'Theme test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_basetheme as the base theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'test_basetheme',
          'libraries' => 
          array (
            0 => 'test_subtheme/global-styling',
          ),
          'stylesheets-remove' => 
          array (
            0 => '@theme_test/css/sub-remove.css',
            1 => '@test_basetheme/base-add.sub-remove.css',
          ),
          'libraries-extend' => 
          array (
            'classy/base' => 
            array (
              0 => 'test_subtheme/global-styling',
            ),
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_subseven' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_subseven/test_subseven.info.yml',
        'basename' => 'test_subseven.info.yml',
        'name' => 'Theme test subseven',
        'info' => 
        array (
          'name' => 'Theme test subseven',
          'type' => 'theme',
          'description' => 'Test theme which uses seven as the base theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'seven',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_ckeditor_stylesheets_relative' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_ckeditor_stylesheets_relative/test_ckeditor_stylesheets_relative.info.yml',
        'basename' => 'test_ckeditor_stylesheets_relative.info.yml',
        'name' => 'Test relative CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test relative CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a relative CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'core' => '8.x',
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/yokotsoko.css',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_settings' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_settings/test_theme_settings.info.yml',
        'basename' => 'test_theme_settings.info.yml',
        'name' => 'Theme test theme-settings.php',
        'info' => 
        array (
          'name' => 'Theme test theme-settings.php',
          'type' => 'theme',
          'description' => 'Test theme that extends theme settings options via theme-settings.php file',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'experimental_theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/experimental_theme_test/experimental_theme_test.info.yml',
        'basename' => 'experimental_theme_test.info.yml',
        'name' => 'Experimental test',
        'info' => 
        array (
          'name' => 'Experimental test',
          'type' => 'theme',
          'description' => 'Experimental test theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
          'experimental' => true,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_having_veery_long_name_which_is_too_long' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_having_veery_long_name_which_is_too_long/test_theme_having_veery_long_name_which_is_too_long.info.yml',
        'basename' => 'test_theme_having_veery_long_name_which_is_too_long.info.yml',
        'name' => 'Test theme with a too long name',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => 'stable',
          'core' => '8.x',
          'name' => 'Test theme with a too long name',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_core_semver' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_core_semver/test_core_semver.info.yml',
        'basename' => 'test_core_semver.info.yml',
        'name' => 'Theme test with semver core version',
        'info' => 
        array (
          'name' => 'Theme test with semver core version',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has semver core version.',
          'version' => 'VERSION',
          'core_version_requirement' => '^8 || ^9',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_ckeditor_stylesheets_external' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_ckeditor_stylesheets_external/test_ckeditor_stylesheets_external.info.yml',
        'basename' => 'test_ckeditor_stylesheets_external.info.yml',
        'name' => 'Test external CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test external CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses an external CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'core' => '8.x',
          'ckeditor_stylesheets' => 
          array (
            0 => 'https://fonts.googleapis.com/css?family=Open+Sans',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_invalid_basetheme_sub' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_invalid_basetheme_sub/test_invalid_basetheme_sub.info.yml',
        'basename' => 'test_invalid_basetheme_sub.info.yml',
        'name' => 'Theme test with valid base theme but no grandparent base theme',
        'info' => 
        array (
          'name' => 'Theme test with valid base theme but no grandparent base theme',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent base theme in the base chain.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'test_invalid_basetheme',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_settings_features' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_settings_features/test_theme_settings_features.info.yml',
        'basename' => 'test_theme_settings_features.info.yml',
        'name' => 'Test features',
        'info' => 
        array (
          'name' => 'Test features',
          'type' => 'theme',
          'base theme' => 'stable',
          'core' => '8.x',
          'description' => 'Test theme to test theme settings with limited features.',
          'features' => 
          array (
            0 => 'node_user_picture',
            1 => 'comment_user_picture',
            2 => 'comment_user_verification',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme/test_theme.info.yml',
        'basename' => 'test_theme.info.yml',
        'name' => '<strong>Test theme</strong>',
        'info' => 
        array (
          'name' => '<strong>Test theme</strong>',
          'type' => 'theme',
          'description' => 'Theme for testing the theme system',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
          'logo' => 'images/logo2.svg',
          'stylesheets-remove' => 
          array (
            0 => '@stable/css/system/components/js.module.css',
          ),
          'libraries' => 
          array (
            0 => 'test_theme/global-styling',
          ),
          'libraries-override' => 
          array (
            'core/drupal.collapse' => 'test_theme/collapse',
            'core/drupal.progress' => false,
            'classy/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/button.css' => 'css/my-button.css',
                  'css/components/collapse-processed.css' => 'css/my-collapse-processed.css',
                  'css/components/container-inline.css' => '/themes/my_theme/css/my-container-inline.css',
                  'css/components/details.css' => '/themes/my_theme/css/my-details.css',
                ),
              ),
            ),
            'classy/dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/dialog.css' => false,
                ),
              ),
            ),
            'core/jquery' => 
            array (
              'js' => 
              array (
                'assets/vendor/jquery/jquery.min.js' => 'js/collapse.js',
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/dropbutton/dropbutton.css' => '/themes/my_theme/css/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/vertical-tabs.css' => 'public://my_css/vertical-tabs.css',
                ),
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/core.css' => '//my-server/my_theme/css/jquery_ui.css',
                ),
              ),
            ),
            'core/jquery.farbtastic' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/farbtastic/farbtastic.css' => 'http://example.com/my_theme/css/farbtastic.css',
                ),
              ),
            ),
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'left' => 'Left',
            'right' => 'Right',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_invalid_core_semver' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_invalid_core_semver/test_invalid_core_semver.info.yml',
        'basename' => 'test_invalid_core_semver.info.yml',
        'name' => 'Theme test with invalid semver core version',
        'info' => 
        array (
          'name' => 'Theme test with invalid semver core version',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has an invalid semver core version.',
          'version' => 'VERSION',
          'core_version_requirement' => '^7',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_theme/test_theme_theme.info.yml',
        'basename' => 'test_theme_theme.info.yml',
        'name' => 'Theme test theme.theme file',
        'info' => 
        array (
          'name' => 'Theme test theme.theme file',
          'type' => 'theme',
          'description' => 'Test theme that extends theme settings options via theme.theme file',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_libraries_empty' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_libraries_empty/test_theme_libraries_empty.info.yml',
        'basename' => 'test_theme_libraries_empty.info.yml',
        'name' => 'Test theme libraries empty',
        'info' => 
        array (
          'name' => 'Test theme libraries empty',
          'type' => 'theme',
          'description' => 'Test theme with empty libraries in theme.info.yml',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
          'libraries' => NULL,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_twig_registry_loader' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_twig_registry_loader/test_theme_twig_registry_loader.info.yml',
        'basename' => 'test_theme_twig_registry_loader.info.yml',
        'name' => 'Twig registry loader test',
        'info' => 
        array (
          'name' => 'Twig registry loader test',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_invalid_engine' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_invalid_engine/test_invalid_engine.info.yml',
        'basename' => 'test_invalid_engine.info.yml',
        'name' => 'Theme test with invalid theme engine',
        'info' => 
        array (
          'name' => 'Theme test with invalid theme engine',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent theme engine.',
          'version' => 'VERSION',
          'core' => '8.x',
          'engine' => 'not_real_engine',
          'base theme' => false,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_theme_libraries_override_with_invalid_asset' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_theme_libraries_override_with_invalid_asset/test_theme_libraries_override_with_invalid_asset.info.yml',
        'basename' => 'test_theme_libraries_override_with_invalid_asset.info.yml',
        'name' => 'Test theme libraries-override',
        'info' => 
        array (
          'name' => 'Test theme libraries-override',
          'type' => 'theme',
          'description' => 'Theme with invalid libraries-override asset spec.',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
          'libraries-override' => 
          array (
            'core/drupal.dialog' => 
            array (
              'css' => false,
            ),
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_wild_west' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/themes/test_wild_west/test_wild_west.info.yml',
        'basename' => 'test_wild_west.info.yml',
        'name' => 'Test Wild West',
        'info' => 
        array (
          'name' => 'Test Wild West',
          'type' => 'theme',
          'description' => 'A theme that doesn\'t use Stable as its base. It tests the wild west instead.',
          'version' => 'VERSION',
          'base theme' => false,
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'twig_namespace_b' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/twig_theme_test/modules/twig_namespace_b/twig_namespace_b.info.yml',
        'basename' => 'twig_namespace_b.info.yml',
        'name' => 'Twig namespace test: Module A',
        'info' => 
        array (
          'name' => 'Twig namespace test: Module A',
          'type' => 'module',
          'description' => 'Support module for Twig namespace testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'twig_namespace_a' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/twig_theme_test/modules/twig_namespace_a/twig_namespace_a.info.yml',
        'basename' => 'twig_namespace_a.info.yml',
        'name' => 'Twig namespace test: Module A',
        'info' => 
        array (
          'name' => 'Twig namespace test: Module A',
          'type' => 'module',
          'description' => 'Support module for Twig namespace testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'twig_theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/twig_theme_test/twig_theme_test.info.yml',
        'basename' => 'twig_theme_test.info.yml',
        'name' => 'Twig theme test',
        'info' => 
        array (
          'name' => 'Twig theme test',
          'type' => 'module',
          'description' => 'Support module for Twig theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'render_attached_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/render_attached_test/render_attached_test.info.yml',
        'basename' => 'render_attached_test.info.yml',
        'name' => 'Rendering #attached test',
        'info' => 
        array (
          'name' => 'Rendering #attached test',
          'type' => 'module',
          'description' => 'Support module for HtmlResponseAttachmentsTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'plugin_test_extended' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/plugin_test_extended/plugin_test_extended.info.yml',
        'basename' => 'plugin_test_extended.info.yml',
        'name' => 'Plugin Test Extended',
        'info' => 
        array (
          'name' => 'Plugin Test Extended',
          'type' => 'module',
          'description' => 'Test annotations can extend other annotations in a different namespace.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'dialog_renderer_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/dialog_renderer_test/dialog_renderer_test.info.yml',
        'basename' => 'dialog_renderer_test.info.yml',
        'name' => 'Dialog Renderer Test',
        'info' => 
        array (
          'name' => 'Dialog Renderer Test',
          'type' => 'module',
          'description' => 'Support module for Dialog Renderer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_test_update' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_update/entity_test_update.info.yml',
        'basename' => 'entity_test_update.info.yml',
        'name' => 'Entity Update Test',
        'info' => 
        array (
          'name' => 'Entity Update Test',
          'type' => 'module',
          'description' => 'Provides an entity type for testing definition and schema updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_incompatible_php_version_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_incompatible_php_version_test/system_incompatible_php_version_test.info.yml',
        'basename' => 'system_incompatible_php_version_test.info.yml',
        'name' => 'System incompatible PHP version test',
        'info' => 
        array (
          'name' => 'System incompatible PHP version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'php' => 6502,
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_dependencies_test/system_dependencies_test.info.yml',
        'basename' => 'system_dependencies_test.info.yml',
        'name' => 'System dependency test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:_missing_dependency',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_0' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_0/update_test_0.info.yml',
        'basename' => 'update_test_0.info.yml',
        'name' => 'Update test 0',
        'info' => 
        array (
          'name' => 'Update test 0',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8003',
        'version' => '8.8.10',
      ),
      'off_canvas_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/off_canvas_test/off_canvas_test.info.yml',
        'basename' => 'off_canvas_test.info.yml',
        'name' => 'Off-canvas tests',
        'info' => 
        array (
          'name' => 'Off-canvas tests',
          'type' => 'module',
          'description' => 'Provides off-canvas test links.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'trusted_hosts_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/trusted_hosts_test/trusted_hosts_test.info.yml',
        'basename' => 'trusted_hosts_test.info.yml',
        'name' => 'Trusted hosts test module',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Trusted hosts test module',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_page_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/test_page_test/test_page_test.info.yml',
        'basename' => 'test_page_test.info.yml',
        'name' => 'Test page',
        'info' => 
        array (
          'name' => 'Test page',
          'type' => 'module',
          'description' => 'Provides a test page for automated tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_last_removed' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_last_removed/update_test_last_removed.info.yml',
        'basename' => 'update_test_last_removed.info.yml',
        'name' => 'Update test with hook_update_last_removed() implementation',
        'info' => 
        array (
          'name' => 'Update test with hook_update_last_removed() implementation',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => '8003',
        'version' => '8.8.10',
      ),
      'token_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/token_test/token_test.info.yml',
        'basename' => 'token_test.info.yml',
        'name' => 'Token test',
        'info' => 
        array (
          'name' => 'Token test',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_reference_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_reference_test/entity_reference_test.info.yml',
        'basename' => 'entity_reference_test.info.yml',
        'name' => 'Entity Reference Test',
        'info' => 
        array (
          'name' => 'Entity Reference Test',
          'type' => 'module',
          'description' => 'Support module for the Entity Reference tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:user',
            2 => 'drupal:views',
            3 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'tabledrag_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/tabledrag_test/tabledrag_test.info.yml',
        'basename' => 'tabledrag_test.info.yml',
        'name' => 'TableDrag test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'TableDrag test',
          'description' => 'Draggable table test module.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_incompatible_module_version_dependencies_test/system_incompatible_module_version_dependencies_test.info.yml',
        'basename' => 'system_incompatible_module_version_dependencies_test.info.yml',
        'name' => 'System incompatible module version dependencies test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:system_incompatible_module_version_test (>2.0)',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'error_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/error_test/error_test.info.yml',
        'basename' => 'error_test.info.yml',
        'name' => 'Error test',
        'info' => 
        array (
          'name' => 'Error test',
          'type' => 'module',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'invalid_module_name_over_the_maximum_allowed_character_length' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/invalid_module_name_over_the_maximum_allowed_character_length/invalid_module_name_over_the_maximum_allowed_character_length.info.yml',
        'basename' => 'invalid_module_name_over_the_maximum_allowed_character_length.info.yml',
        'name' => 'Module name length test',
        'info' => 
        array (
          'name' => 'Module name length test',
          'type' => 'module',
          'description' => 'Test module with a name over the maximum allowed characters.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_module_test/system_module_test.info.yml',
        'basename' => 'system_module_test.info.yml',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing System module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'image_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/image_test/image_test.info.yml',
        'basename' => 'image_test.info.yml',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'experimental_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/experimental_module_test/experimental_module_test.info.yml',
        'basename' => 'experimental_module_test.info.yml',
        'name' => 'Experimental Test',
        'info' => 
        array (
          'name' => 'Experimental Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test experimental functionality.',
          'package' => 'Core (Experimental)',
          'version' => '8.y.x-unstable',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.y.x-unstable',
      ),
      'mail_cancel_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/mail_cancel_test/mail_cancel_test.info.yml',
        'basename' => 'mail_cancel_test.info.yml',
        'name' => 'Cancel mail test support',
        'info' => 
        array (
          'name' => 'Cancel mail test support',
          'description' => 'Test that the mail can be cancelled.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_script_test/update_script_test.info.yml',
        'basename' => 'update_script_test.info.yml',
        'name' => 'Update script test',
        'info' => 
        array (
          'name' => 'Update script test',
          'type' => 'module',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'entity_schema_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_schema_test/entity_schema_test.info.yml',
        'basename' => 'entity_schema_test.info.yml',
        'name' => 'Entity schema test module',
        'info' => 
        array (
          'name' => 'Entity schema test module',
          'type' => 'module',
          'description' => 'Provides entity and field definitions to test entity schema.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'default_format_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/default_format_test/default_format_test.info.yml',
        'basename' => 'default_format_test.info.yml',
        'name' => 'Default format test',
        'info' => 
        array (
          'name' => 'Default format test',
          'type' => 'module',
          'description' => 'Support module for testing default route format.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'ajax_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/ajax_test/ajax_test.info.yml',
        'basename' => 'ajax_test.info.yml',
        'name' => 'AJAX Test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'type' => 'module',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_project_namespace_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_project_namespace_test/system_project_namespace_test.info.yml',
        'basename' => 'system_project_namespace_test.info.yml',
        'name' => 'System project namespace',
        'info' => 
        array (
          'name' => 'System project namespace',
          'type' => 'module',
          'description' => 'Support module for testing project namespace system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'service_provider_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/service_provider_test/service_provider_test.info.yml',
        'basename' => 'service_provider_test.info.yml',
        'name' => 'Service Provider test',
        'info' => 
        array (
          'name' => 'Service Provider test',
          'type' => 'module',
          'description' => 'Support module for service provider testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_batch_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/test_batch_test/test_batch_test.info.yml',
        'basename' => 'test_batch_test.info.yml',
        'name' => 'Test install batch test',
        'info' => 
        array (
          'name' => 'Test install batch test',
          'type' => 'module',
          'description' => 'Support module for functional tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'hold_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/hold_test/hold_test.info.yml',
        'basename' => 'hold_test.info.yml',
        'name' => 'Hold test',
        'info' => 
        array (
          'name' => 'Hold test',
          'type' => 'module',
          'description' => 'Support testing with request/response hold.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'module_install_class_loader_test2' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/module_install_class_loader_test2/module_install_class_loader_test2.info.yml',
        'basename' => 'module_install_class_loader_test2.info.yml',
        'name' => 'Module install class loader test2',
        'info' => 
        array (
          'name' => 'Module install class loader test2',
          'description' => 'Support module for tests that the class loader behaves as expected during module install.',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:module_install_class_loader_test1',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'module_installer_config_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/module_installer_config_test/module_installer_config_test.info.yml',
        'basename' => 'module_installer_config_test.info.yml',
        'name' => 'Module installer config test',
        'info' => 
        array (
          'name' => 'Module installer config test',
          'description' => 'Support module for tests that require a failed module install.',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/theme_test/theme_test.info.yml',
        'basename' => 'theme_test.info.yml',
        'name' => 'Theme test',
        'info' => 
        array (
          'name' => 'Theme test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'theme_region_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/theme_region_test/theme_region_test.info.yml',
        'basename' => 'theme_region_test.info.yml',
        'name' => 'Theme region test',
        'info' => 
        array (
          'name' => 'Theme region test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing regions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/cache_test/cache_test.info.yml',
        'basename' => 'cache_test.info.yml',
        'name' => 'Cache test',
        'info' => 
        array (
          'name' => 'Cache test',
          'type' => 'module',
          'description' => 'Support module for cache system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/requirements1_test/requirements1_test.info.yml',
        'basename' => 'requirements1_test.info.yml',
        'name' => 'Requirements 1 Test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'type' => 'module',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_test_operation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_operation/entity_test_operation.info.yml',
        'basename' => 'entity_test_operation.info.yml',
        'name' => 'Entity Operation Test',
        'info' => 
        array (
          'name' => 'Entity Operation Test',
          'type' => 'module',
          'description' => 'Provides a test operation to entities.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_incompatible_core_version_test/system_incompatible_core_version_test.info.yml',
        'basename' => 'system_incompatible_core_version_test.info.yml',
        'name' => 'System incompatible core version test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '5.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_reference_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_reference_test_views/entity_reference_test_views.info.yml',
        'basename' => 'entity_reference_test_views.info.yml',
        'name' => 'Entity reference test views',
        'info' => 
        array (
          'name' => 'Entity reference test views',
          'type' => 'module',
          'description' => 'Provides default views for views entity reference tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_postupdate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_postupdate/update_test_postupdate.info.yml',
        'basename' => 'update_test_postupdate.info.yml',
        'name' => 'Update test after',
        'info' => 
        array (
          'core' => '8.x',
          'name' => 'Update test after',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'entity_test_extra' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_extra/entity_test_extra.info.yml',
        'basename' => 'entity_test_extra.info.yml',
        'name' => 'Entity test extra',
        'info' => 
        array (
          'name' => 'Entity test extra',
          'type' => 'module',
          'description' => 'Provides extra fields for entity test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'twig_extension_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/twig_extension_test/twig_extension_test.info.yml',
        'basename' => 'twig_extension_test.info.yml',
        'name' => 'Twig Extension Test',
        'info' => 
        array (
          'name' => 'Twig Extension Test',
          'type' => 'module',
          'description' => 'Support module for testing Twig extensions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_3' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_3/update_test_3.info.yml',
        'basename' => 'update_test_3.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'js_message_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/js_message_test/js_message_test.info.yml',
        'basename' => 'js_message_test.info.yml',
        'name' => 'JS Message test module',
        'info' => 
        array (
          'name' => 'JS Message test module',
          'type' => 'module',
          'description' => 'Module for the JSMessageTest test.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'css_disable_transitions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/css_disable_transitions_test/css_disable_transitions_test.info.yml',
        'basename' => 'css_disable_transitions_test.info.yml',
        'name' => 'Test disable CSS animations',
        'info' => 
        array (
          'name' => 'Test disable CSS animations',
          'type' => 'module',
          'description' => 'Disables CSS animations for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'link_generation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/link_generation_test/link_generation_test.info.yml',
        'basename' => 'link_generation_test.info.yml',
        'name' => 'Link generation test support',
        'info' => 
        array (
          'name' => 'Link generation test support',
          'type' => 'module',
          'description' => 'Test hooks fired in link generation.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/module_test/module_test.info.yml',
        'basename' => 'module_test.info.yml',
        'name' => 'Module test',
        'info' => 
        array (
          'name' => 'Module test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_no_preexisting' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_no_preexisting/update_test_no_preexisting.info.yml',
        'basename' => 'update_test_no_preexisting.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'layout_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/layout_test/layout_test.info.yml',
        'basename' => 'layout_test.info.yml',
        'name' => 'Layout test',
        'info' => 
        array (
          'name' => 'Layout test',
          'type' => 'module',
          'description' => 'Support module for testing layouts.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'new_dependency_test_with_service' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/new_dependency_test_with_service/new_dependency_test_with_service.info.yml',
        'basename' => 'new_dependency_test_with_service.info.yml',
        'name' => 'New Dependency test with service',
        'info' => 
        array (
          'name' => 'New Dependency test with service',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_core_semver_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_core_semver_test/system_core_semver_test.info.yml',
        'basename' => 'system_core_semver_test.info.yml',
        'name' => 'System core ^8 version test',
        'info' => 
        array (
          'name' => 'System core ^8 version test',
          'type' => 'module',
          'description' => 'Support module for testing core using semver.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core_version_requirement' => '^8',
        ),
        'schema_version' => 8000,
        'version' => '1.0.0',
      ),
      'module_install_class_loader_test1' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/module_install_class_loader_test1/module_install_class_loader_test1.info.yml',
        'basename' => 'module_install_class_loader_test1.info.yml',
        'name' => 'Module install class loader test1',
        'info' => 
        array (
          'name' => 'Module install class loader test1',
          'description' => 'Support module for tests that the class loader behaves as expected during module install.',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'pager_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/pager_test/pager_test.info.yml',
        'basename' => 'pager_test.info.yml',
        'name' => 'Pager Test',
        'info' => 
        array (
          'type' => 'module',
          'core' => '8.x',
          'name' => 'Pager Test',
          'description' => 'Support module for pager tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_invalid_hook' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_invalid_hook/update_test_invalid_hook.info.yml',
        'basename' => 'update_test_invalid_hook.info.yml',
        'name' => 'Update test with an invalid hook_update_8000().',
        'info' => 
        array (
          'name' => 'Update test with an invalid hook_update_8000().',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_incompatible_core_version_test_1x' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_incompatible_core_version_test_1x/system_incompatible_core_version_test_1x.info.yml',
        'basename' => 'system_incompatible_core_version_test_1x.info.yml',
        'name' => 'System incompatible core 1.x version test',
        'info' => 
        array (
          'name' => 'System incompatible core 1.x version test',
          'type' => 'module',
          'description' => 'Support module for testing system core incompatibility.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core' => '1.x',
        ),
        'schema_version' => 8000,
        'version' => '1.0.0',
      ),
      'entity_test_revlog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_revlog/entity_test_revlog.info.yml',
        'basename' => 'entity_test_revlog.info.yml',
        'name' => 'Entity test revision log',
        'info' => 
        array (
          'name' => 'Entity test revision log',
          'type' => 'module',
          'description' => 'Provides two entity types with revision logging capabilities.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8801',
        'version' => '8.8.10',
      ),
      'path_encoded_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/path_encoded_test/path_encoded_test.info.yml',
        'basename' => 'path_encoded_test.info.yml',
        'name' => 'Path encoded character test',
        'info' => 
        array (
          'name' => 'Path encoded character test',
          'type' => 'module',
          'description' => 'Support module for testing path aliases on a route with encoded characters in the path.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_test_schema_converter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_schema_converter/entity_test_schema_converter.info.yml',
        'basename' => 'entity_test_schema_converter.info.yml',
        'name' => 'Entity Schema Converter Test',
        'info' => 
        array (
          'name' => 'Entity Schema Converter Test',
          'type' => 'module',
          'description' => 'Provides testing for the entity schema converter.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test_update',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_core_incompatible_semver_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_core_incompatible_semver_test/system_core_incompatible_semver_test.info.yml',
        'basename' => 'system_core_incompatible_semver_test.info.yml',
        'name' => 'System core incompatible semver test',
        'info' => 
        array (
          'name' => 'System core incompatible semver test',
          'type' => 'module',
          'description' => 'Support module for testing core incompatible semver.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core_version_requirement' => '^7',
        ),
        'schema_version' => 8000,
        'version' => '1.0.0',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/requirements2_test/requirements2_test.info.yml',
        'basename' => 'requirements2_test.info.yml',
        'name' => 'Requirements 2 Test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'type' => 'module',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'drupal:requirements1_test',
            1 => 'drupal:comment',
          ),
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'plugin_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/plugin_test/plugin_test.info.yml',
        'basename' => 'plugin_test.info.yml',
        'name' => 'Plugin Test Support',
        'info' => 
        array (
          'name' => 'Plugin Test Support',
          'type' => 'module',
          'description' => 'Test that plugins can provide plugins and provide namespace discovery for plugin test implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'delay_cache_tags_invalidation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/delay_cache_tags_invalidation/delay_cache_tags_invalidation.info.yml',
        'basename' => 'delay_cache_tags_invalidation.info.yml',
        'name' => 'Delay Cache Tags Invalidation Test',
        'info' => 
        array (
          'name' => 'Delay Cache Tags Invalidation Test',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_test_constraints' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_constraints/entity_test_constraints.info.yml',
        'basename' => 'entity_test_constraints.info.yml',
        'name' => 'Entity constraints test module',
        'info' => 
        array (
          'name' => 'Entity constraints test module',
          'type' => 'module',
          'description' => 'Tests extending and altering entity constraints.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test/entity_test.info.yml',
        'basename' => 'entity_test.info.yml',
        'name' => 'Entity CRUD test module',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'type' => 'module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
            2 => 'drupal:system',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.info.yml',
        'basename' => 'drupal_system_listing_compatible_test.info.yml',
        'name' => 'Drupal system listing compatible test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'type' => 'module',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'twig_loader_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/twig_loader_test/twig_loader_test.info.yml',
        'basename' => 'twig_loader_test.info.yml',
        'name' => 'Twig Loader Test',
        'info' => 
        array (
          'name' => 'Twig Loader Test',
          'type' => 'module',
          'description' => 'Support module for testing adding Twig loaders.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_incompatible_core_version_dependencies_test/system_incompatible_core_version_dependencies_test.info.yml',
        'basename' => 'system_incompatible_core_version_dependencies_test.info.yml',
        'name' => 'System incompatible core version dependencies test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:system_incompatible_core_version_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'deprecation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/deprecation_test/deprecation_test.info.yml',
        'basename' => 'deprecation_test.info.yml',
        'name' => 'Deprecation test',
        'info' => 
        array (
          'name' => 'Deprecation test',
          'type' => 'module',
          'description' => 'Support module for testing deprecation behaviors.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'error_service_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/error_service_test/error_service_test.info.yml',
        'basename' => 'error_service_test.info.yml',
        'name' => 'Error service test',
        'info' => 
        array (
          'name' => 'Error service test',
          'type' => 'module',
          'description' => 'Support module for causing bedlam in container rebuilds.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'early_rendering_controller_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/early_rendering_controller_test/early_rendering_controller_test.info.yml',
        'basename' => 'early_rendering_controller_test.info.yml',
        'name' => 'Early rendering controller test',
        'info' => 
        array (
          'name' => 'Early rendering controller test',
          'type' => 'module',
          'description' => 'Support module for EarlyRenderingControllerTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'csrf_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/csrf_test/csrf_test.info.yml',
        'basename' => 'csrf_test.info.yml',
        'name' => 'CSRF test',
        'info' => 
        array (
          'name' => 'CSRF test',
          'type' => 'module',
          'description' => 'Support testing protecting routes with CSRF token.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'phpunit_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/phpunit_test/phpunit_test.info.yml',
        'basename' => 'phpunit_test.info.yml',
        'name' => 'PHPUnit Test',
        'info' => 
        array (
          'name' => 'PHPUnit Test',
          'type' => 'module',
          'description' => 'Provides dummy classes for use by SimpleTest tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'session_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/session_test/session_test.info.yml',
        'basename' => 'session_test.info.yml',
        'name' => 'Session test',
        'info' => 
        array (
          'name' => 'Session test',
          'type' => 'module',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_crud_hook_test/entity_crud_hook_test.info.yml',
        'basename' => 'entity_crud_hook_test.info.yml',
        'name' => 'Entity CRUD Hooks Test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'type' => 'module',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_test_third_party' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/entity_test_third_party/entity_test_third_party.info.yml',
        'basename' => 'entity_test_third_party.info.yml',
        'name' => 'Entity test third-party settings module',
        'info' => 
        array (
          'name' => 'Entity test third-party settings module',
          'type' => 'module',
          'description' => 'Provides third-party settings for test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_failing' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_failing/update_test_failing.info.yml',
        'basename' => 'update_test_failing.info.yml',
        'name' => 'Update test failing',
        'info' => 
        array (
          'name' => 'Update test failing',
          'type' => 'module',
          'description' => 'Support module for update testing when an update hook is failing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8002',
        'version' => '8.8.10',
      ),
      'module_autoload_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/module_autoload_test/module_autoload_test.info.yml',
        'basename' => 'module_autoload_test.info.yml',
        'name' => 'Module autoload test',
        'info' => 
        array (
          'name' => 'Module autoload test',
          'type' => 'module',
          'description' => 'Support module for module system tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_test/system_test.info.yml',
        'basename' => 'system_test.info.yml',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system_test.configure',
          'configure_parameters' => 
          array (
            'foo' => 'bar',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'common_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/common_test/common_test.info.yml',
        'basename' => 'common_test.info.yml',
        'name' => 'Common Test',
        'info' => 
        array (
          'name' => 'Common Test',
          'type' => 'module',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/ajax_forms_test/ajax_forms_test.info.yml',
        'basename' => 'ajax_forms_test.info.yml',
        'name' => 'AJAX form test mock module',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'type' => 'module',
          'description' => 'Test for AJAX form calls.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'render_array_non_html_subscriber_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/render_array_non_html_subscriber_test/render_array_non_html_subscriber_test.info.yml',
        'basename' => 'render_array_non_html_subscriber_test.info.yml',
        'name' => 'Array rendering for non-HTML requests subscriber test',
        'info' => 
        array (
          'name' => 'Array rendering for non-HTML requests subscriber test',
          'type' => 'module',
          'description' => 'Support module for RenderArrayNonHtmlSubscriberTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system_mail_failure_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_mail_failure_test/system_mail_failure_test.info.yml',
        'basename' => 'system_mail_failure_test.info.yml',
        'name' => 'System mail failure test',
        'info' => 
        array (
          'name' => 'System mail failure test',
          'type' => 'module',
          'description' => 'Provides a malfunctioning mail service for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'conneg_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/conneg_test/conneg_test.info.yml',
        'basename' => 'conneg_test.info.yml',
        'name' => 'Content negotiation test',
        'info' => 
        array (
          'name' => 'Content negotiation test',
          'type' => 'module',
          'description' => 'Support testing content negotiation variations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'js_webassert_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/js_webassert_test/js_webassert_test.info.yml',
        'basename' => 'js_webassert_test.info.yml',
        'name' => 'JS WebAssert test module',
        'info' => 
        array (
          'name' => 'JS WebAssert test module',
          'type' => 'module',
          'description' => 'Module for the JSWebAssert test.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'js_deprecation_log_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/js_deprecation_log_test/js_deprecation_log_test.info.yml',
        'basename' => 'js_deprecation_log_test.info.yml',
        'name' => 'JS Deprecation log test',
        'info' => 
        array (
          'name' => 'JS Deprecation log test',
          'description' => 'Stores all JS deprecation calls to allow JS tests to determine if they have been called.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_1' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_1/update_test_1.info.yml',
        'basename' => 'update_test_1.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8003',
        'version' => '8.8.10',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/system_incompatible_module_version_test/system_incompatible_module_version_test.info.yml',
        'basename' => 'system_incompatible_module_version_test.info.yml',
        'name' => 'System incompatible module version test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '1.0',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '1.0',
      ),
      'theme_suggestions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/theme_suggestions_test/theme_suggestions_test.info.yml',
        'basename' => 'theme_suggestions_test.info.yml',
        'name' => 'Theme suggestions test',
        'info' => 
        array (
          'name' => 'Theme suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'js_ajax_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/js_ajax_test/js_ajax_test.info.yml',
        'basename' => 'js_ajax_test.info.yml',
        'name' => 'JS Ajax test',
        'info' => 
        array (
          'name' => 'JS Ajax test',
          'description' => 'Provides custom ajax commands used for tests',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'accept_header_routing_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/accept_header_routing_test/accept_header_routing_test.info.yml',
        'basename' => 'accept_header_routing_test.info.yml',
        'name' => 'Accept header based routing test',
        'info' => 
        array (
          'name' => 'Accept header based routing test',
          'core' => '8.x',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_schema' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_schema/update_test_schema.info.yml',
        'basename' => 'update_test_schema.info.yml',
        'name' => 'Update test schema',
        'info' => 
        array (
          'name' => 'Update test schema',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8003',
        'version' => '8.8.10',
      ),
      'element_info_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/element_info_test/element_info_test.info.yml',
        'basename' => 'element_info_test.info.yml',
        'name' => 'Element info test',
        'info' => 
        array (
          'name' => 'Element info test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'lazy_route_provider_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/lazy_route_provider_install_test/lazy_route_provider_install_test.info.yml',
        'basename' => 'lazy_route_provider_install_test.info.yml',
        'name' => 'Lazy route provider install test',
        'info' => 
        array (
          'name' => 'Lazy route provider install test',
          'description' => 'Helps test a bug triggered by the url_generator maintaining a stale route provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'new_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/new_dependency_test/new_dependency_test.info.yml',
        'basename' => 'new_dependency_test.info.yml',
        'name' => 'New Dependency test',
        'info' => 
        array (
          'name' => 'New Dependency test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'new_dependency_test_with_service',
          ),
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'render_placeholder_message_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/render_placeholder_message_test/render_placeholder_message_test.info.yml',
        'basename' => 'render_placeholder_message_test.info.yml',
        'name' => 'Placeholder setting a message test',
        'info' => 
        array (
          'name' => 'Placeholder setting a message test',
          'type' => 'module',
          'description' => 'Support module for PlaceholderMessageTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'router_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/router_test_directory/router_test.info.yml',
        'basename' => 'router_test.info.yml',
        'name' => 'Router test',
        'info' => 
        array (
          'name' => 'Router test',
          'type' => 'module',
          'description' => 'Support module for routing testing. In a directory that does not match the module name to test that use case.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'theme_page_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/theme_page_test/theme_page_test.info.yml',
        'basename' => 'theme_page_test.info.yml',
        'name' => 'Theme page test',
        'info' => 
        array (
          'name' => 'Theme page test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'action_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/action_test/action_test.info.yml',
        'basename' => 'action_test.info.yml',
        'name' => 'Action test',
        'info' => 
        array (
          'name' => 'Action test',
          'type' => 'module',
          'description' => 'Support module for action testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_with_7x' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_with_7x/update_test_with_7x.info.yml',
        'basename' => 'update_test_with_7x.info.yml',
        'name' => 'Update test with 7.x updates left in the codebase.',
        'info' => 
        array (
          'name' => 'Update test with 7.x updates left in the codebase.',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'experimental_module_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/experimental_module_dependency_test/experimental_module_dependency_test.info.yml',
        'basename' => 'experimental_module_dependency_test.info.yml',
        'name' => 'Experimental Dependency Test',
        'info' => 
        array (
          'name' => 'Experimental Dependency Test',
          'type' => 'module',
          'description' => 'Module with a dependency in the experimental package.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:experimental_module_test',
          ),
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/common_test_cron_helper/common_test_cron_helper.info.yml',
        'basename' => 'common_test_cron_helper.info.yml',
        'name' => 'Common Test Cron Helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'type' => 'module',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_2' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_2/update_test_2.info.yml',
        'basename' => 'update_test_2.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8003',
        'version' => '8.8.10',
      ),
      'experimental_module_requirements_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/experimental_module_requirements_test/experimental_module_requirements_test.info.yml',
        'basename' => 'experimental_module_requirements_test.info.yml',
        'name' => 'Experimental Requirements Test',
        'info' => 
        array (
          'name' => 'Experimental Requirements Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test hook_requirements() with an experimental module.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/batch_test/batch_test.info.yml',
        'basename' => 'batch_test.info.yml',
        'name' => 'Batch API test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'type' => 'module',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'database_statement_monitoring_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/database_statement_monitoring_test/database_statement_monitoring_test.info.yml',
        'basename' => 'database_statement_monitoring_test.info.yml',
        'name' => 'Database Statement Monitoring Test',
        'info' => 
        array (
          'name' => 'Database Statement Monitoring Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests that need to monitor executed database statements.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'csrf_race_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/csrf_race_test/csrf_race_test.info.yml',
        'basename' => 'csrf_race_test.info.yml',
        'name' => 'CSRF race test',
        'info' => 
        array (
          'name' => 'CSRF race test',
          'type' => 'module',
          'description' => 'Check that CSRF token is generated once.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'cron_queue_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/cron_queue_test/cron_queue_test.info.yml',
        'basename' => 'cron_queue_test.info.yml',
        'name' => 'Cron Queue test',
        'info' => 
        array (
          'name' => 'Cron Queue test',
          'type' => 'module',
          'description' => 'Support module for the cron queue runner.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_semver_update_n' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/update_test_semver_update_n/update_test_semver_update_n.info.yml',
        'basename' => 'update_test_semver_update_n.info.yml',
        'name' => 'Update test hook_update_n semver',
        'info' => 
        array (
          'name' => 'Update test hook_update_n semver',
          'type' => 'module',
          'description' => 'Support module for update testing with core semver value.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core_version_requirement' => '^8',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'mail_html_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/mail_html_test/mail_html_test.info.yml',
        'basename' => 'mail_html_test.info.yml',
        'name' => 'HTML mail test support',
        'info' => 
        array (
          'name' => 'HTML mail test support',
          'description' => 'Test if HTML in mails works as expected.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'httpkernel_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/httpkernel_test/httpkernel_test.info.yml',
        'basename' => 'httpkernel_test.info.yml',
        'name' => 'HttpKernel test',
        'info' => 
        array (
          'name' => 'HttpKernel test',
          'type' => 'module',
          'description' => 'Support module for httpkernel tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/menu_test/menu_test.info.yml',
        'basename' => 'menu_test.info.yml',
        'name' => 'Hook menu tests',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'type' => 'module',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:test_page_test',
            1 => 'drupal:menu_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'database_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/database_test/database_test.info.yml',
        'basename' => 'database_test.info.yml',
        'name' => 'Database Test',
        'info' => 
        array (
          'name' => 'Database Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'paramconverter_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/paramconverter_test/paramconverter_test.info.yml',
        'basename' => 'paramconverter_test.info.yml',
        'name' => 'ParamConverter test',
        'info' => 
        array (
          'name' => 'ParamConverter test',
          'type' => 'module',
          'description' => 'Support module for paramconverter testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'path_deprecated_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/path_deprecated_test/path_deprecated_test.info.yml',
        'basename' => 'path_deprecated_test.info.yml',
        'name' => 'Path deprecated test',
        'info' => 
        array (
          'name' => 'Path deprecated test',
          'type' => 'module',
          'description' => 'Support module for testing deprecated functionality for path aliases.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'display_variant_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/display_variant_test/display_variant_test.info.yml',
        'basename' => 'display_variant_test.info.yml',
        'name' => 'Display variant tests',
        'info' => 
        array (
          'name' => 'Display variant tests',
          'type' => 'module',
          'description' => 'Support module for testing display variants.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/form_test/form_test.info.yml',
        'basename' => 'form_test.info.yml',
        'name' => 'FormAPI Test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'type' => 'module',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'module_required_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/module_required_test/module_required_test.info.yml',
        'basename' => 'module_required_test.info.yml',
        'name' => 'Module required test',
        'info' => 
        array (
          'name' => 'Module required test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node (>=8.x)',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'js_deprecation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/js_deprecation_test/js_deprecation_test.info.yml',
        'basename' => 'js_deprecation_test.info.yml',
        'name' => 'JS Deprecation test',
        'info' => 
        array (
          'name' => 'JS Deprecation test',
          'description' => 'Provides deprecated code that can be used for tests',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'condition_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/condition_test/condition_test.info.yml',
        'basename' => 'condition_test.info.yml',
        'name' => 'Condition Test Support',
        'info' => 
        array (
          'name' => 'Condition Test Support',
          'type' => 'module',
          'description' => 'Test general form component for condition plugins.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'unique_field_constraint_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/unique_field_constraint_test/unique_field_constraint_test.info.yml',
        'basename' => 'unique_field_constraint_test.info.yml',
        'name' => 'UniqueField Constraint Test',
        'info' => 
        array (
          'name' => 'UniqueField Constraint Test',
          'type' => 'module',
          'description' => 'Support module for UniqueField Constraint testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/url_alter_test/url_alter_test.info.yml',
        'basename' => 'url_alter_test.info.yml',
        'name' => 'Url_alter tests',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'type' => 'module',
          'description' => 'A support module to test altering the inbound and outbound path.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'session_exists_cache_context_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/tests/modules/session_exists_cache_context_test/session_exists_cache_context_test.info.yml',
        'basename' => 'session_exists_cache_context_test.info.yml',
        'name' => 'session.exists cache context test',
        'info' => 
        array (
          'name' => 'session.exists cache context test',
          'type' => 'module',
          'description' => 'Support module for session.exists cache context testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/system/system.info.yml',
        'basename' => 'system.info.yml',
        'name' => 'System',
        'info' => 
        array (
          'name' => 'System',
          'type' => 'module',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'required' => true,
          'configure' => 'system.admin_config_system',
        ),
        'schema_version' => '8805',
        'version' => '8.8.10',
      ),
      'content_moderation_test_local_task' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/content_moderation/tests/modules/content_moderation_test_local_task/content_moderation_test_local_task.info.yml',
        'basename' => 'content_moderation_test_local_task.info.yml',
        'name' => 'Content moderation test local task',
        'info' => 
        array (
          'name' => 'Content moderation test local task',
          'type' => 'module',
          'description' => 'Provides a local task for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'content_moderation_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/content_moderation/tests/modules/content_moderation_test_views/content_moderation_test_views.info.yml',
        'basename' => 'content_moderation_test_views.info.yml',
        'name' => 'Content moderation test views',
        'info' => 
        array (
          'name' => 'Content moderation test views',
          'type' => 'module',
          'description' => 'Provides default views for views Content moderation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
            1 => 'drupal:node',
            2 => 'drupal:views',
            3 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'content_moderation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/content_moderation/content_moderation.info.yml',
        'basename' => 'content_moderation.info.yml',
        'name' => 'Content Moderation',
        'info' => 
        array (
          'name' => 'Content Moderation',
          'type' => 'module',
          'description' => 'Provides moderation states for content.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => '8700',
        'version' => '8.8.10',
      ),
      'config_translation_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config_translation/tests/themes/config_translation_test_theme/config_translation_test_theme.info.yml',
        'basename' => 'config_translation_test_theme.info.yml',
        'name' => 'Configuration Translation Test Theme',
        'info' => 
        array (
          'name' => 'Configuration Translation Test Theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the configuration translation mapper system',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config_translation/tests/modules/config_translation_test/config_translation_test.info.yml',
        'basename' => 'config_translation_test.info.yml',
        'name' => 'Configuration Translation Test',
        'info' => 
        array (
          'name' => 'Configuration Translation Test',
          'description' => 'Helpers to test the configuration translation system',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_translation',
            1 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_translation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config_translation/config_translation.info.yml',
        'basename' => 'config_translation.info.yml',
        'name' => 'Configuration Translation',
        'info' => 
        array (
          'name' => 'Configuration Translation',
          'type' => 'module',
          'description' => 'Provides a translation interface for configuration.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'config_translation.mapper_list',
          'dependencies' => 
          array (
            0 => 'drupal:locale',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/search/tests/modules/search_embedded_form/search_embedded_form.info.yml',
        'basename' => 'search_embedded_form.info.yml',
        'name' => 'Search Embedded Form',
        'info' => 
        array (
          'name' => 'Search Embedded Form',
          'type' => 'module',
          'description' => 'Support module for Search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'search_date_query_alter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/search/tests/modules/search_date_query_alter/search_date_query_alter.info.yml',
        'basename' => 'search_date_query_alter.info.yml',
        'name' => 'Search Date Query Alter',
        'info' => 
        array (
          'name' => 'Search Date Query Alter',
          'type' => 'module',
          'description' => 'Test module that adds date conditions to node searches.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'search_query_alter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/search/tests/modules/search_query_alter/search_query_alter.info.yml',
        'basename' => 'search_query_alter.info.yml',
        'name' => 'Test Search Query Alter',
        'info' => 
        array (
          'name' => 'Test Search Query Alter',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/search/tests/modules/search_extra_type/search_extra_type.info.yml',
        'basename' => 'search_extra_type.info.yml',
        'name' => 'Test Search Type',
        'info' => 
        array (
          'name' => 'Test Search Type',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:test_page_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'search_langcode_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/search/tests/modules/search_langcode_test/search_langcode_test.info.yml',
        'basename' => 'search_langcode_test.info.yml',
        'name' => 'Test search entity langcode',
        'info' => 
        array (
          'name' => 'Test search entity langcode',
          'type' => 'module',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/search/search.info.yml',
        'basename' => 'search.info.yml',
        'name' => 'Search',
        'info' => 
        array (
          'name' => 'Search',
          'type' => 'module',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.search_page.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'tour_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/tour/tests/tour_test/tour_test.info.yml',
        'basename' => 'tour_test.info.yml',
        'name' => 'Tour module tests',
        'info' => 
        array (
          'name' => 'Tour module tests',
          'type' => 'module',
          'description' => 'Tests module for tour module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:tour',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'tour' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/tour/tour.info.yml',
        'basename' => 'tour.info.yml',
        'name' => 'Tour',
        'info' => 
        array (
          'name' => 'Tour',
          'type' => 'module',
          'description' => 'Provides guided tours.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'datetime_range_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/datetime_range/tests/modules/datetime_range_test/datetime_range_test.info.yml',
        'basename' => 'datetime_range_test.info.yml',
        'name' => 'Datetime range test',
        'info' => 
        array (
          'name' => 'Datetime range test',
          'type' => 'module',
          'description' => 'Provides a testing module for datetime_range.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'datetime_range' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/datetime_range/datetime_range.info.yml',
        'basename' => 'datetime_range.info.yml',
        'name' => 'Datetime Range',
        'info' => 
        array (
          'name' => 'Datetime Range',
          'type' => 'module',
          'description' => 'Provides the ability to store end dates.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:datetime',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/shortcut/shortcut.info.yml',
        'basename' => 'shortcut.info.yml',
        'name' => 'Shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'type' => 'module',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.shortcut_set.collection',
          'dependencies' => 
          array (
            0 => 'drupal:link',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_checkboxes_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/themes/views_test_checkboxes_theme/views_test_checkboxes_theme.info.yml',
        'basename' => 'views_test_checkboxes_theme.info.yml',
        'name' => 'Views test checkboxes theme',
        'info' => 
        array (
          'name' => 'Views test checkboxes theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing Views rendering of checkboxes.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/themes/views_test_theme/views_test_theme.info.yml',
        'basename' => 'views_test_theme.info.yml',
        'name' => 'Views test theme',
        'info' => 
        array (
          'name' => 'Views test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing Views functionality.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_data' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_data/views_test_data.info.yml',
        'basename' => 'views_test_data.info.yml',
        'name' => 'Views Test',
        'info' => 
        array (
          'name' => 'Views Test',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_entity_test/views_entity_test.info.yml',
        'basename' => 'views_entity_test.info.yml',
        'name' => 'Views Entity Test',
        'info' => 
        array (
          'name' => 'Views Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for views tests of entity_test entity type.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'action_bulk_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/action_bulk_test/action_bulk_test.info.yml',
        'basename' => 'action_bulk_test.info.yml',
        'name' => 'Action bulk form test',
        'info' => 
        array (
          'name' => 'Action bulk form test',
          'type' => 'module',
          'description' => 'Support module for action bulk form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_rss' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_rss/views_test_rss.info.yml',
        'basename' => 'views_test_rss.info.yml',
        'name' => 'Views Test RSS',
        'info' => 
        array (
          'name' => 'Views Test RSS',
          'type' => 'module',
          'description' => 'Provides hooks to alter RSS output for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_modal' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_modal/views_test_modal.info.yml',
        'basename' => 'views_test_modal.info.yml',
        'name' => 'Views Test Modal',
        'info' => 
        array (
          'name' => 'Views Test Modal',
          'type' => 'module',
          'description' => 'Provides a test page that renders a View in a modal.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_language/views_test_language.info.yml',
        'basename' => 'views_test_language.info.yml',
        'name' => 'Views Test Language',
        'info' => 
        array (
          'name' => 'Views Test Language',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:language',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_batch_action_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/user_batch_action_test/user_batch_action_test.info.yml',
        'basename' => 'user_batch_action_test.info.yml',
        'name' => 'User batch action test',
        'info' => 
        array (
          'name' => 'User batch action test',
          'type' => 'module',
          'description' => 'Support module for user batch action testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_formatter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_formatter/views_test_formatter.info.yml',
        'basename' => 'views_test_formatter.info.yml',
        'name' => 'Views Test Formatter',
        'info' => 
        array (
          'name' => 'Views Test Formatter',
          'type' => 'module',
          'description' => 'Provides test field formatters.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_config/views_test_config.info.yml',
        'basename' => 'views_test_config.info.yml',
        'name' => 'Views Test Config',
        'info' => 
        array (
          'name' => 'Views Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_cacheable_metadata_calculation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_cacheable_metadata_calculation/views_test_cacheable_metadata_calculation.info.yml',
        'basename' => 'views_test_cacheable_metadata_calculation.info.yml',
        'name' => 'Views test cacheable metadata calculation',
        'info' => 
        array (
          'name' => 'Views test cacheable metadata calculation',
          'type' => 'module',
          'description' => 'Module to test cacheable metadata calculation in Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_test_query_access' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/tests/modules/views_test_query_access/views_test_query_access.info.yml',
        'basename' => 'views_test_query_access.info.yml',
        'name' => 'Views test query access',
        'info' => 
        array (
          'name' => 'Views test query access',
          'type' => 'module',
          'description' => 'Module to test entity query access in Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views/views.info.yml',
        'basename' => 'views.info.yml',
        'name' => 'Views',
        'info' => 
        array (
          'name' => 'Views',
          'type' => 'module',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => '8500',
        'version' => '8.8.10',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/path/path.info.yml',
        'basename' => 'path.info.yml',
        'name' => 'Path',
        'info' => 
        array (
          'name' => 'Path',
          'type' => 'module',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.path_alias.collection',
          'dependencies' => 
          array (
            0 => 'drupal:path_alias',
          ),
        ),
        'schema_version' => '8200',
        'version' => '8.8.10',
      ),
      'dblog_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/dblog/tests/modules/dblog_test_views/dblog_test_views.info.yml',
        'basename' => 'dblog_test_views.info.yml',
        'name' => 'Dblog test views',
        'info' => 
        array (
          'name' => 'Dblog test views',
          'type' => 'module',
          'description' => 'Provides default views for views dblog tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:dblog',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/dblog/dblog.info.yml',
        'basename' => 'dblog.info.yml',
        'name' => 'Database Logging',
        'info' => 
        array (
          'name' => 'Database Logging',
          'type' => 'module',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => '8600',
        'version' => '8.8.10',
      ),
      'inline_form_errors' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/inline_form_errors/inline_form_errors.info.yml',
        'basename' => 'inline_form_errors.info.yml',
        'name' => 'Inline Form Errors',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Inline Form Errors',
          'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'datetime_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/datetime/tests/modules/datetime_test/datetime_test.info.yml',
        'basename' => 'datetime_test.info.yml',
        'name' => 'Datetime test',
        'info' => 
        array (
          'name' => 'Datetime test',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'datetime' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/datetime/datetime.info.yml',
        'basename' => 'datetime.info.yml',
        'name' => 'Datetime',
        'info' => 
        array (
          'name' => 'Datetime',
          'type' => 'module',
          'description' => 'Defines datetime form elements and a datetime field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/tests/themes/user_test_theme/user_test_theme.info.yml',
        'basename' => 'user_test_theme.info.yml',
        'name' => 'User Test theme',
        'info' => 
        array (
          'name' => 'User Test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the available fields in user twig template',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/tests/modules/user_test_views/user_test_views.info.yml',
        'basename' => 'user_test_views.info.yml',
        'name' => 'User test views',
        'info' => 
        array (
          'name' => 'User test views',
          'type' => 'module',
          'description' => 'Provides default views for views user tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_hooks_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/tests/modules/user_hooks_test/user_hooks_test.info.yml',
        'basename' => 'user_hooks_test.info.yml',
        'name' => 'User module hooks tests',
        'info' => 
        array (
          'name' => 'User module hooks tests',
          'type' => 'module',
          'description' => 'Support module for user hooks testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_custom_phpass_params_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/tests/modules/user_custom_phpass_params_test/user_custom_phpass_params_test.info.yml',
        'basename' => 'user_custom_phpass_params_test.info.yml',
        'name' => 'User custom phpass params test',
        'info' => 
        array (
          'name' => 'User custom phpass params test',
          'type' => 'module',
          'description' => 'Support module for testing custom phpass password algorithm parameters.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/tests/modules/user_form_test/user_form_test.info.yml',
        'basename' => 'user_form_test.info.yml',
        'name' => 'User module form tests',
        'info' => 
        array (
          'name' => 'User module form tests',
          'type' => 'module',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/tests/modules/user_access_test/user_access_test.info.yml',
        'basename' => 'user_access_test.info.yml',
        'name' => 'User access tests',
        'info' => 
        array (
          'name' => 'User access tests',
          'type' => 'module',
          'description' => 'Support module for user access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/user/user.info.yml',
        'basename' => 'user.info.yml',
        'name' => 'User',
        'info' => 
        array (
          'name' => 'User',
          'type' => 'module',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'required' => true,
          'configure' => 'user.admin_index',
          'dependencies' => 
          array (
            0 => 'drupal:system',
          ),
        ),
        'schema_version' => '8100',
        'version' => '8.8.10',
      ),
      'early_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/locale/tests/modules/early_translation_test/early_translation_test.info.yml',
        'basename' => 'early_translation_test.info.yml',
        'name' => 'Early translation test',
        'info' => 
        array (
          'name' => 'Early translation test',
          'type' => 'module',
          'description' => 'Support module for testing early bootstrap getting of annotations with translations.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/locale/locale.info.yml',
        'basename' => 'locale.info.yml',
        'name' => 'Interface Translation',
        'info' => 
        array (
          'name' => 'Interface Translation',
          'type' => 'module',
          'description' => 'Translates the built-in user interface.',
          'configure' => 'locale.translate_page',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:language',
            1 => 'drupal:file',
          ),
        ),
        'schema_version' => '8800',
        'version' => '8.8.10',
      ),
      'language_elements_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/language/tests/language_elements_test/language_elements_test.info.yml',
        'basename' => 'language_elements_test.info.yml',
        'name' => 'Language form elements test',
        'info' => 
        array (
          'name' => 'Language form elements test',
          'type' => 'module',
          'description' => 'Support module for the language form elements tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'language_entity_field_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/language/tests/language_entity_field_access_test/language_entity_field_access_test.info.yml',
        'basename' => 'language_entity_field_access_test.info.yml',
        'name' => 'Language entity field access test',
        'info' => 
        array (
          'name' => 'Language entity field access test',
          'type' => 'module',
          'description' => 'Support module for verifying entity field access and the language selector.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:text',
            2 => 'drupal:field',
            3 => 'drupal:filter',
            4 => 'drupal:language',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'language_config_override_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/language/tests/language_config_override_test/language_config_override_test.info.yml',
        'basename' => 'language_config_override_test.info.yml',
        'name' => 'Language config overridetest',
        'info' => 
        array (
          'name' => 'Language config overridetest',
          'type' => 'module',
          'description' => 'Support module for the language config override test.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_module' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/language/tests/test_module/test_module.info.yml',
        'basename' => 'test_module.info.yml',
        'name' => 'Test Module',
        'info' => 
        array (
          'name' => 'Test Module',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'language_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/language/tests/language_test/language_test.info.yml',
        'basename' => 'language_test.info.yml',
        'name' => 'Language test',
        'info' => 
        array (
          'name' => 'Language test',
          'type' => 'module',
          'description' => 'Support module for the language layer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/language/language.info.yml',
        'basename' => 'language.info.yml',
        'name' => 'Language',
        'info' => 
        array (
          'name' => 'Language',
          'type' => 'module',
          'description' => 'Allows users to configure languages and apply them to content.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.configurable_language.collection',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'statistics_test_attached' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/statistics/tests/themes/statistics_test_attached/statistics_test_attached.info.yml',
        'basename' => 'statistics_test_attached.info.yml',
        'name' => 'Statistics test attached theme',
        'info' => 
        array (
          'name' => 'Statistics test attached theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing attached library',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'statistics_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/statistics/tests/modules/statistics_test_views/statistics_test_views.info.yml',
        'basename' => 'statistics_test_views.info.yml',
        'name' => 'Statistics test views',
        'info' => 
        array (
          'name' => 'Statistics test views',
          'type' => 'module',
          'description' => 'Provides default views for views statistics tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:statistics',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/statistics/statistics.info.yml',
        'basename' => 'statistics.info.yml',
        'name' => 'Statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'type' => 'module',
          'description' => 'Logs content statistics for your site.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'statistics.settings',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
        ),
        'schema_version' => '8300',
        'version' => '8.8.10',
      ),
      'test_layout_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_discovery/tests/themes/test_layout_theme/test_layout_theme.info.yml',
        'basename' => 'test_layout_theme.info.yml',
        'name' => 'Test layout theme',
        'info' => 
        array (
          'name' => 'Test layout theme',
          'type' => 'theme',
          'description' => 'Theme for testing a theme-provided layout',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'layout_discovery' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/layout_discovery/layout_discovery.info.yml',
        'basename' => 'layout_discovery.info.yml',
        'name' => 'Layout Discovery',
        'info' => 
        array (
          'name' => 'Layout Discovery',
          'type' => 'module',
          'description' => 'Provides a way for modules or themes to register layouts.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_layout_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field_layout/tests/modules/field_layout_test/field_layout_test.info.yml',
        'basename' => 'field_layout_test.info.yml',
        'name' => 'Field Layout test',
        'info' => 
        array (
          'name' => 'Field Layout test',
          'type' => 'module',
          'description' => 'Support module for Field Layout tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_layout' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field_layout/field_layout.info.yml',
        'basename' => 'field_layout.info.yml',
        'name' => 'Field Layout',
        'info' => 
        array (
          'name' => 'Field Layout',
          'type' => 'module',
          'description' => 'Allows users to configure the display and form display by arranging fields in several columns.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_plugins_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_plugins_test/field_plugins_test.info.yml',
        'basename' => 'field_plugins_test.info.yml',
        'name' => 'Field Plugins Test',
        'info' => 
        array (
          'name' => 'Field Plugins Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_test/field_test.info.yml',
        'basename' => 'field_test.info.yml',
        'name' => 'Field API Test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_test_views/field_test_views.info.yml',
        'basename' => 'field_test_views.info.yml',
        'name' => 'Field test views',
        'info' => 
        array (
          'name' => 'Field test views',
          'type' => 'module',
          'description' => 'Provides default views for views field tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_test_config/field_test_config.info.yml',
        'basename' => 'field_test_config.info.yml',
        'name' => 'Field API configuration tests',
        'info' => 
        array (
          'name' => 'Field API configuration tests',
          'type' => 'module',
          'description' => 'Support module for the Field API configuration tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_test_boolean_access_denied' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_test_boolean_access_denied/field_test_boolean_access_denied.info.yml',
        'basename' => 'field_test_boolean_access_denied.info.yml',
        'name' => 'Boolean field Test',
        'info' => 
        array (
          'name' => 'Boolean field Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_timestamp_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_timestamp_test/field_timestamp_test.info.yml',
        'basename' => 'field_timestamp_test.info.yml',
        'name' => 'Field Timestamp Test',
        'info' => 
        array (
          'name' => 'Field Timestamp Test',
          'type' => 'module',
          'description' => 'Support module for the Timestamp field item test.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_third_party_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/tests/modules/field_third_party_test/field_third_party_test.info.yml',
        'basename' => 'field_third_party_test.info.yml',
        'name' => 'Field Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Field Third Party Settings Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/field/field.info.yml',
        'basename' => 'field.info.yml',
        'name' => 'Field',
        'info' => 
        array (
          'name' => 'Field',
          'type' => 'module',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8500',
        'version' => '8.8.10',
      ),
      'workspace_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/workspaces/tests/modules/workspace_update_test/workspace_update_test.info.yml',
        'basename' => 'workspace_update_test.info.yml',
        'name' => 'Workspace Update Test',
        'info' => 
        array (
          'name' => 'Workspace Update Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing workspaces during database updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'workspace_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/workspaces/tests/modules/workspace_access_test/workspace_access_test.info.yml',
        'basename' => 'workspace_access_test.info.yml',
        'name' => 'Workspace Access Test',
        'info' => 
        array (
          'name' => 'Workspace Access Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing access for workspaces.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'workspaces' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/workspaces/workspaces.info.yml',
        'basename' => 'workspaces.info.yml',
        'name' => 'Workspaces',
        'info' => 
        array (
          'name' => 'Workspaces',
          'type' => 'module',
          'description' => 'Allows users to stage content or preview a full site by using multiple workspaces on a single site.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core (Experimental)',
          'configure' => 'entity.workspace.collection',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => '8803',
        'version' => '8.8.10',
      ),
      'quickedit_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/quickedit/tests/modules/quickedit_test.info.yml',
        'basename' => 'quickedit_test.info.yml',
        'name' => 'Quick Edit test',
        'info' => 
        array (
          'name' => 'Quick Edit test',
          'type' => 'module',
          'description' => 'Support module for the Quick Edit module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'quickedit' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/quickedit/quickedit.info.yml',
        'basename' => 'quickedit.info.yml',
        'name' => 'Quick Edit',
        'info' => 
        array (
          'name' => 'Quick Edit',
          'type' => 'module',
          'description' => 'In-place content editing.',
          'package' => 'Core',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contextual',
            1 => 'drupal:field',
            2 => 'drupal:filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'history' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/history/history.info.yml',
        'basename' => 'history.info.yml',
        'name' => 'History',
        'info' => 
        array (
          'name' => 'History',
          'type' => 'module',
          'description' => 'Records which user has read which content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
        ),
        'schema_version' => '8101',
        'version' => '8.8.10',
      ),
      'block_content_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block_content/tests/modules/block_content_test/block_content_test.info.yml',
        'basename' => 'block_content_test.info.yml',
        'name' => 'Custom Block module tests',
        'info' => 
        array (
          'name' => 'Custom Block module tests',
          'type' => 'module',
          'description' => 'Support module for custom block related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block_content_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block_content/tests/modules/block_content_test_views/block_content_test_views.info.yml',
        'basename' => 'block_content_test_views.info.yml',
        'name' => 'Block Content test views',
        'info' => 
        array (
          'name' => 'Block Content test views',
          'type' => 'module',
          'description' => 'Provides default views for views block_content tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block_content' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block_content/block_content.info.yml',
        'basename' => 'block_content.info.yml',
        'name' => 'Custom Block',
        'info' => 
        array (
          'name' => 'Custom Block',
          'type' => 'module',
          'description' => 'Allows the creation of custom blocks through the user interface.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:text',
            2 => 'drupal:user',
          ),
          'configure' => 'entity.block_content.collection',
        ),
        'schema_version' => '8600',
        'version' => '8.8.10',
      ),
      'rest_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rest/tests/modules/rest_test_views/rest_test_views.info.yml',
        'basename' => 'rest_test_views.info.yml',
        'name' => 'REST test views',
        'info' => 
        array (
          'name' => 'REST test views',
          'type' => 'module',
          'description' => 'Provides default views for views REST tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:rest',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'rest_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rest/tests/modules/rest_test/rest_test.info.yml',
        'basename' => 'rest_test.info.yml',
        'name' => 'REST test',
        'info' => 
        array (
          'name' => 'REST test',
          'type' => 'module',
          'description' => 'Provides test hooks and resources for REST module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_test_rest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rest/tests/modules/config_test_rest/config_test_rest.info.yml',
        'basename' => 'config_test_rest.info.yml',
        'name' => 'Configuration test REST',
        'info' => 
        array (
          'name' => 'Configuration test REST',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'rest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rest/rest.info.yml',
        'basename' => 'rest.info.yml',
        'name' => 'RESTful Web Services',
        'info' => 
        array (
          'name' => 'RESTful Web Services',
          'type' => 'module',
          'description' => 'Exposes entities and other resources as RESTful web API',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
        ),
        'schema_version' => '8401',
        'version' => '8.8.10',
      ),
      'menu_link_content' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/menu_link_content/menu_link_content.info.yml',
        'basename' => 'menu_link_content.info.yml',
        'name' => 'Custom Menu Links',
        'info' => 
        array (
          'name' => 'Custom Menu Links',
          'type' => 'module',
          'description' => 'Allows administrators to create custom menu links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:link',
          ),
        ),
        'schema_version' => '8601',
        'version' => '8.8.10',
      ),
      'syslog_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/syslog/tests/modules/syslog_test/syslog_test.info.yml',
        'basename' => 'syslog_test.info.yml',
        'name' => 'Syslog test',
        'info' => 
        array (
          'name' => 'Syslog test',
          'type' => 'module',
          'description' => 'Provides a test logger for syslog module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:syslog',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/syslog/syslog.info.yml',
        'basename' => 'syslog.info.yml',
        'name' => 'Syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'type' => 'module',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => '8400',
        'version' => '8.8.10',
      ),
      'responsive_image_test_module' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/responsive_image/tests/modules/responsive_image_test_module/responsive_image_test_module.info.yml',
        'basename' => 'responsive_image_test_module.info.yml',
        'name' => 'Responsive image test theme',
        'info' => 
        array (
          'name' => 'Responsive image test theme',
          'type' => 'module',
          'description' => 'Test theme for responsive image.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'responsive_image' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/responsive_image/responsive_image.info.yml',
        'basename' => 'responsive_image.info.yml',
        'name' => 'Responsive Image',
        'info' => 
        array (
          'name' => 'Responsive Image',
          'type' => 'module',
          'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
            1 => 'drupal:image',
          ),
          'configure' => 'entity.responsive_image_style.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'page_cache_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/page_cache/tests/modules/page_cache_form_test.info.yml',
        'basename' => 'page_cache_form_test.info.yml',
        'name' => 'Page Cache Form Test',
        'info' => 
        array (
          'name' => 'Page Cache Form Test',
          'type' => 'module',
          'description' => 'Support module for the Page Cache module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'page_cache' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/page_cache/page_cache.info.yml',
        'basename' => 'page_cache.info.yml',
        'name' => 'Internal Page Cache',
        'info' => 
        array (
          'name' => 'Internal Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block_test_specialchars_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block/tests/modules/block_test/themes/block_test_specialchars_theme/block_test_specialchars_theme.info.yml',
        'basename' => 'block_test_specialchars_theme.info.yml',
        'name' => '<"Cat" & \'Mouse\'>',
        'info' => 
        array (
          'name' => '<"Cat" & \'Mouse\'>',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing special characters in block admin.',
          'core' => '8.x',
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block/tests/modules/block_test/themes/block_test_theme/block_test_theme.info.yml',
        'basename' => 'block_test_theme.info.yml',
        'name' => 'Block test theme',
        'info' => 
        array (
          'name' => 'Block test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the block system',
          'version' => 'VERSION',
          'core' => '8.x',
          'regions' => 
          array (
            'sidebar_first' => 'Left sidebar',
            'sidebar_second' => 'Right sidebar',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
            1 => 'sidebar_second',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block/tests/modules/block_test/block_test.info.yml',
        'basename' => 'block_test.info.yml',
        'name' => 'Block test',
        'info' => 
        array (
          'name' => 'Block test',
          'type' => 'module',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block/tests/modules/block_test_views/block_test_views.info.yml',
        'basename' => 'block_test_views.info.yml',
        'name' => 'Block test views',
        'info' => 
        array (
          'name' => 'Block test views',
          'type' => 'module',
          'description' => 'Provides a view and block to test block displays in views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/block/block.info.yml',
        'basename' => 'block.info.yml',
        'name' => 'Block',
        'info' => 
        array (
          'name' => 'Block',
          'type' => 'module',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'block.admin_display',
        ),
        'schema_version' => '8003',
        'version' => '8.8.10',
      ),
      'hal_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/hal/tests/modules/hal_test/hal_test.info.yml',
        'basename' => 'hal_test.info.yml',
        'name' => 'HAL test module',
        'info' => 
        array (
          'name' => 'HAL test module',
          'type' => 'module',
          'description' => 'Support module for HAL tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'hal' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/hal/hal.info.yml',
        'basename' => 'hal.info.yml',
        'name' => 'HAL',
        'info' => 
        array (
          'name' => 'HAL',
          'type' => 'module',
          'description' => 'Serializes entities using Hypertext Application Language.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
        ),
        'schema_version' => '8501',
        'version' => '8.8.10',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/filter/tests/filter_test/filter_test.info.yml',
        'basename' => 'filter_test.info.yml',
        'name' => 'Filter test module',
        'info' => 
        array (
          'name' => 'Filter test module',
          'type' => 'module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'filter_test_plugin' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/filter/tests/filter_test_plugin/filter_test_plugin.info.yml',
        'basename' => 'filter_test_plugin.info.yml',
        'name' => 'Filter test plugin',
        'info' => 
        array (
          'name' => 'Filter test plugin',
          'type' => 'module',
          'description' => 'Tests enabling of modules which provide filter plugins.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/filter/filter.info.yml',
        'basename' => 'filter.info.yml',
        'name' => 'Filter',
        'info' => 
        array (
          'name' => 'Filter',
          'type' => 'module',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'editor_private_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/editor/tests/editor_private_test/editor_private_test.info.yml',
        'basename' => 'editor_private_test.info.yml',
        'name' => 'Text Editor Private test',
        'info' => 
        array (
          'name' => 'Text Editor Private test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor Private module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:ckeditor',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'editor_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/editor/tests/modules/editor_test.info.yml',
        'basename' => 'editor_test.info.yml',
        'name' => 'Text Editor test',
        'info' => 
        array (
          'name' => 'Text Editor test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'editor' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/editor/editor.info.yml',
        'basename' => 'editor.info.yml',
        'name' => 'Text Editor',
        'info' => 
        array (
          'name' => 'Text Editor',
          'type' => 'module',
          'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:file',
          ),
          'configure' => 'filter.admin_overview',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'rdf_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rdf/tests/rdf_test/rdf_test.info.yml',
        'basename' => 'rdf_test.info.yml',
        'name' => 'RDF test module',
        'info' => 
        array (
          'name' => 'RDF test module',
          'type' => 'module',
          'description' => 'Test functionality for the RDF module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'rdf_conflicting_namespaces' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rdf/tests/rdf_conflicting_namespaces/rdf_conflicting_namespaces.info.yml',
        'basename' => 'rdf_conflicting_namespaces.info.yml',
        'name' => 'RDF module conflicting namespaces test',
        'info' => 
        array (
          'name' => 'RDF module conflicting namespaces test',
          'type' => 'module',
          'description' => 'Test conflicting namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'rdf_test_namespaces' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rdf/tests/rdf_test_namespaces/rdf_test_namespaces.info.yml',
        'basename' => 'rdf_test_namespaces.info.yml',
        'name' => 'RDF module namespaces test',
        'info' => 
        array (
          'name' => 'RDF module namespaces test',
          'type' => 'module',
          'description' => 'Test namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/rdf/rdf.info.yml',
        'basename' => 'rdf.info.yml',
        'name' => 'RDF',
        'info' => 
        array (
          'name' => 'RDF',
          'type' => 'module',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_drupal_multilingual' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal_multilingual/migrate_drupal_multilingual.info.yml',
        'basename' => 'migrate_drupal_multilingual.info.yml',
        'name' => 'Migrate Drupal Multilingual',
        'info' => 
        array (
          'name' => 'Migrate Drupal Multilingual',
          'type' => 'module',
          'description' => 'Provides a requirement for multilingual migrations.',
          'package' => 'Core (Experimental)',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'migrate_drupal',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_entity_test/migrate_entity_test.info.yml',
        'basename' => 'migrate_entity_test.info.yml',
        'name' => 'Migrate entity test',
        'info' => 
        array (
          'name' => 'Migrate entity test',
          'type' => 'module',
          'description' => 'Support module for entity destination test.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_events_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_events_test/migrate_events_test.info.yml',
        'basename' => 'migrate_events_test.info.yml',
        'name' => 'Migrate events test',
        'info' => 
        array (
          'name' => 'Migrate events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_high_water_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_high_water_test/migrate_high_water_test.info.yml',
        'basename' => 'migrate_high_water_test.info.yml',
        'name' => 'Migration High Water Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migration High Water Test',
          'description' => 'Provides test fixtures for testing high water marks.',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_no_migrate_drupal_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_no_migrate_drupal_test/migrate_no_migrate_drupal_test.info.yml',
        'basename' => 'migrate_no_migrate_drupal_test.info.yml',
        'name' => 'Migrate No Migrate Drupal Test',
        'info' => 
        array (
          'name' => 'Migrate No Migrate Drupal Test',
          'type' => 'module',
          'description' => 'Provides fixture for testing without migrate_drupal.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_query_batch_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_query_batch_test/migrate_query_batch_test.info.yml',
        'basename' => 'migrate_query_batch_test.info.yml',
        'name' => 'Migrate query batch Source test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migrate query batch Source test',
          'description' => 'Provides a database table and records for SQL import with batch testing.',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_external_translated_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_external_translated_test/migrate_external_translated_test.info.yml',
        'basename' => 'migrate_external_translated_test.info.yml',
        'name' => 'Migration external translated test',
        'info' => 
        array (
          'name' => 'Migration external translated test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_lookup_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_lookup_test/migrate_lookup_test.info.yml',
        'basename' => 'migrate_lookup_test.info.yml',
        'name' => 'Migration Lookup Test',
        'info' => 
        array (
          'name' => 'Migration Lookup Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test migration lookup service.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_prepare_row_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_prepare_row_test/migrate_prepare_row_test.info.yml',
        'basename' => 'migrate_prepare_row_test.info.yml',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_stub_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_stub_test/migrate_stub_test.info.yml',
        'basename' => 'migrate_stub_test.info.yml',
        'name' => 'Migration Stub Test',
        'info' => 
        array (
          'name' => 'Migration Stub Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test migration  stub service.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migration_directory_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migration_directory_test/migration_directory_test.info.yml',
        'basename' => 'migration_directory_test.info.yml',
        'name' => 'Migration directory test',
        'info' => 
        array (
          'name' => 'Migration directory test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_track_changes_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/tests/modules/migrate_track_changes_test/migrate_track_changes_test.info.yml',
        'basename' => 'migrate_track_changes_test.info.yml',
        'name' => 'Migration Track Changes Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migration Track Changes Test',
          'description' => 'Provides test fixtures for testing track changes marks.',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate/migrate.info.yml',
        'basename' => 'migrate.info.yml',
        'name' => 'Migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'type' => 'module',
          'description' => 'Handles migrations',
          'package' => 'Migration',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'views_test_classy_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views_ui/tests/themes/views_test_classy_subtheme/views_test_classy_subtheme.info.yml',
        'basename' => 'views_test_classy_subtheme.info.yml',
        'name' => 'Theme test subtheme',
        'info' => 
        array (
          'name' => 'Theme test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_basetheme as the base theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'classy',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_ui_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views_ui/tests/modules/views_ui_test/views_ui_test.info.yml',
        'basename' => 'views_ui_test.info.yml',
        'name' => 'Views UI Test',
        'info' => 
        array (
          'name' => 'Views UI Test',
          'type' => 'module',
          'description' => 'Test module for Views UI.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_ui_test_field' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views_ui/tests/modules/views_ui_test_field/views_ui_test_field.info.yml',
        'basename' => 'views_ui_test_field.info.yml',
        'name' => 'Views test field',
        'info' => 
        array (
          'name' => 'Views test field',
          'type' => 'module',
          'description' => 'Add custom global field for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:views_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/views_ui/views_ui.info.yml',
        'basename' => 'views_ui.info.yml',
        'name' => 'Views UI',
        'info' => 
        array (
          'name' => 'Views UI',
          'type' => 'module',
          'description' => 'Administrative interface for Views.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.view.collection',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'ckeditor_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/ckeditor/tests/modules/ckeditor_test.info.yml',
        'basename' => 'ckeditor_test.info.yml',
        'name' => 'CKEditor test',
        'info' => 
        array (
          'name' => 'CKEditor test',
          'type' => 'module',
          'description' => 'Support module for the CKEditor module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/ckeditor/ckeditor.info.yml',
        'basename' => 'ckeditor.info.yml',
        'name' => 'CKEditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'type' => 'module',
          'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
          'package' => 'Core',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'basic_auth_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/basic_auth/tests/modules/basic_auth_test/basic_auth_test.info.yml',
        'basename' => 'basic_auth_test.info.yml',
        'name' => 'HTTP Basic Authentication test',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication test',
          'type' => 'module',
          'description' => 'Support module for HTTP Basic Authentication testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'basic_auth' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/basic_auth/basic_auth.info.yml',
        'basename' => 'basic_auth.info.yml',
        'name' => 'HTTP Basic Authentication',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'type' => 'module',
          'description' => 'Provides the HTTP Basic authentication provider',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/tests/themes/update_test_subtheme/update_test_subtheme.info.yml',
        'basename' => 'update_test_subtheme.info.yml',
        'name' => 'Update test subtheme',
        'info' => 
        array (
          'name' => 'Update test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses update_test_basetheme as the base theme.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'update_test_basetheme',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test_basetheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/tests/themes/update_test_basetheme/update_test_basetheme.info.yml',
        'basename' => 'update_test_basetheme.info.yml',
        'name' => 'Update test base theme',
        'info' => 
        array (
          'name' => 'Update test base theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which acts as a base theme for other test subthemes.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/tests/modules/bbb_update_test/bbb_update_test.info.yml',
        'basename' => 'bbb_update_test.info.yml',
        'name' => 'BBB Update test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/tests/modules/ccc_update_test/ccc_update_test.info.yml',
        'basename' => 'ccc_update_test.info.yml',
        'name' => 'CCC Update test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/tests/modules/aaa_update_test/aaa_update_test.info.yml',
        'basename' => 'aaa_update_test.info.yml',
        'name' => 'AAA Update test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/tests/modules/update_test/update_test.info.yml',
        'basename' => 'update_test.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/update/update.info.yml',
        'basename' => 'update.info.yml',
        'name' => 'Update Manager',
        'info' => 
        array (
          'name' => 'Update Manager',
          'type' => 'module',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => 'VERSION',
          'package' => 'Core',
          'core' => '8.x',
          'configure' => 'update.settings',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
        ),
        'schema_version' => '8001',
        'version' => '8.8.10',
      ),
      'breakpoint_theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/breakpoint/tests/themes/breakpoint_theme_test/breakpoint_theme_test.info.yml',
        'basename' => 'breakpoint_theme_test.info.yml',
        'name' => 'Breakpoint test theme',
        'info' => 
        array (
          'name' => 'Breakpoint test theme',
          'type' => 'theme',
          'description' => 'Test theme for breakpoint.',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => 'bartik',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'breakpoint_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/breakpoint/tests/modules/breakpoint_module_test/breakpoint_module_test.info.yml',
        'basename' => 'breakpoint_module_test.info.yml',
        'name' => 'Breakpoint test module',
        'info' => 
        array (
          'name' => 'Breakpoint test module',
          'type' => 'module',
          'description' => 'Test module for breakpoint.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'breakpoint' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/breakpoint/breakpoint.info.yml',
        'basename' => 'breakpoint.info.yml',
        'name' => 'Breakpoint',
        'info' => 
        array (
          'name' => 'Breakpoint',
          'type' => 'module',
          'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'book_breadcrumb_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/book/tests/modules/book_breadcrumb_test/book_breadcrumb_test.info.yml',
        'basename' => 'book_breadcrumb_test.info.yml',
        'name' => 'Book module breadcrumb tests',
        'info' => 
        array (
          'name' => 'Book module breadcrumb tests',
          'type' => 'module',
          'description' => 'Support module for book module breadcrumb testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'book_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/book/tests/modules/book_test/book_test.info.yml',
        'basename' => 'book_test.info.yml',
        'name' => 'Book module tests',
        'info' => 
        array (
          'name' => 'Book module tests',
          'type' => 'module',
          'description' => 'Support module for book module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'book_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/book/tests/modules/book_test_views/book_test_views.info.yml',
        'basename' => 'book_test_views.info.yml',
        'name' => 'Book test views',
        'info' => 
        array (
          'name' => 'Book test views',
          'type' => 'module',
          'description' => 'Provides default views for views book tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:book',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/book/book.info.yml',
        'basename' => 'book.info.yml',
        'name' => 'Book',
        'info' => 
        array (
          'name' => 'Book',
          'type' => 'module',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
          'configure' => 'book.settings',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'content_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/content_translation/tests/modules/content_translation_test/content_translation_test.info.yml',
        'basename' => 'content_translation_test.info.yml',
        'name' => 'Content translation tests',
        'info' => 
        array (
          'name' => 'Content translation tests',
          'type' => 'module',
          'description' => 'Provides content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:content_translation',
            1 => 'drupal:language',
            2 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'content_translation_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/content_translation/tests/modules/content_translation_test_views/content_translation_test_views.info.yml',
        'basename' => 'content_translation_test_views.info.yml',
        'name' => 'Content translation test views',
        'info' => 
        array (
          'name' => 'Content translation test views',
          'type' => 'module',
          'description' => 'Provides default views for views content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:content_translation',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'content_translation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/content_translation/content_translation.info.yml',
        'basename' => 'content_translation.info.yml',
        'name' => 'Content Translation',
        'info' => 
        array (
          'name' => 'Content Translation',
          'type' => 'module',
          'description' => 'Allows users to translate content entities.',
          'dependencies' => 
          array (
            0 => 'drupal:language',
          ),
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'language.content_settings_page',
        ),
        'schema_version' => '8400',
        'version' => '8.8.10',
      ),
      'link_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/link/tests/modules/link_test_views/link_test_views.info.yml',
        'basename' => 'link_test_views.info.yml',
        'name' => 'Link test views',
        'info' => 
        array (
          'name' => 'Link test views',
          'type' => 'module',
          'description' => 'Provides default views for views link tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'drupal:link',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'link' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/link/link.info.yml',
        'basename' => 'link.info.yml',
        'name' => 'Link',
        'info' => 
        array (
          'name' => 'Link',
          'type' => 'module',
          'description' => 'Provides a simple link field type.',
          'core' => '8.x',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_test_ckeditor' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/tests/modules/media_test_ckeditor/media_test_ckeditor.info.yml',
        'basename' => 'media_test_ckeditor.info.yml',
        'name' => 'Media CKEditor plugin test',
        'info' => 
        array (
          'name' => 'Media CKEditor plugin test',
          'description' => 'Provides functionality to test the Media Embed CKEditor integration.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_test_source' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/tests/modules/media_test_source/media_test_source.info.yml',
        'basename' => 'media_test_source.info.yml',
        'name' => 'Test media source',
        'info' => 
        array (
          'name' => 'Test media source',
          'type' => 'module',
          'description' => 'Provides test media source to test configuration forms.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/tests/modules/media_test_views/media_test_views.info.yml',
        'basename' => 'media_test_views.info.yml',
        'name' => 'Media test views',
        'info' => 
        array (
          'name' => 'Media test views',
          'type' => 'module',
          'description' => 'Provides default views for views media tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_test_filter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/tests/modules/media_test_filter/media_test_filter.info.yml',
        'basename' => 'media_test_filter.info.yml',
        'name' => 'Media Filter test',
        'info' => 
        array (
          'name' => 'Media Filter test',
          'description' => 'Provides functionality to test the Media Embed filter.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_test_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/tests/modules/media_test_type/media_test_type.info.yml',
        'basename' => 'media_test_type.info.yml',
        'name' => 'Media test type',
        'info' => 
        array (
          'name' => 'Media test type',
          'type' => 'module',
          'description' => 'Provides test type for a media item.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:media_test_source',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_test_oembed' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/tests/modules/media_test_oembed/media_test_oembed.info.yml',
        'basename' => 'media_test_oembed.info.yml',
        'name' => 'Media oEmbed test',
        'info' => 
        array (
          'name' => 'Media oEmbed test',
          'description' => 'Provides functionality to mimic an oEmbed provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media/media.info.yml',
        'basename' => 'media.info.yml',
        'name' => 'Media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Manages the creation, configuration, and display of media items.',
          'type' => 'module',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:image',
            2 => 'drupal:user',
          ),
          'configure' => 'media.settings',
        ),
        'schema_version' => '8700',
        'version' => '8.8.10',
      ),
      'big_pipe_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/big_pipe/tests/themes/big_pipe_test_theme/big_pipe_test_theme.info.yml',
        'basename' => 'big_pipe_test_theme.info.yml',
        'name' => 'BigPipe test theme',
        'info' => 
        array (
          'name' => 'BigPipe test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing BigPipe edge cases.',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'big_pipe_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/big_pipe/tests/modules/big_pipe_test/big_pipe_test.info.yml',
        'basename' => 'big_pipe_test.info.yml',
        'name' => 'BigPipe test',
        'info' => 
        array (
          'name' => 'BigPipe test',
          'type' => 'module',
          'description' => 'Support module for BigPipe testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'big_pipe_regression_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/big_pipe/tests/modules/big_pipe_regression_test/big_pipe_regression_test.info.yml',
        'basename' => 'big_pipe_regression_test.info.yml',
        'name' => 'BigPipe regression test',
        'info' => 
        array (
          'name' => 'BigPipe regression test',
          'type' => 'module',
          'description' => 'Support module for BigPipe regression testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'big_pipe' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/big_pipe/big_pipe.info.yml',
        'basename' => 'big_pipe.info.yml',
        'name' => 'BigPipe',
        'info' => 
        array (
          'name' => 'BigPipe',
          'type' => 'module',
          'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'comment_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/comment/tests/modules/comment_test_views/comment_test_views.info.yml',
        'basename' => 'comment_test_views.info.yml',
        'name' => 'Comment test views',
        'info' => 
        array (
          'name' => 'Comment test views',
          'type' => 'module',
          'description' => 'Provides default views for views comment tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'comment_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/comment/tests/modules/comment_test/comment_test.info.yml',
        'basename' => 'comment_test.info.yml',
        'name' => 'Comment test',
        'info' => 
        array (
          'name' => 'Comment test',
          'type' => 'module',
          'description' => 'Support module for Comment module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'comment_empty_title_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/comment/tests/modules/comment_empty_title_test/comment_empty_title_test.info.yml',
        'basename' => 'comment_empty_title_test.info.yml',
        'name' => 'Comment empty titles test',
        'info' => 
        array (
          'name' => 'Comment empty titles test',
          'type' => 'module',
          'description' => 'Support module for testing empty title accessibility with Comment module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/comment/comment.info.yml',
        'basename' => 'comment.info.yml',
        'name' => 'Comment',
        'info' => 
        array (
          'name' => 'Comment',
          'type' => 'module',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
          'configure' => 'comment.admin',
        ),
        'schema_version' => '8701',
        'version' => '8.8.10',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/text/text.info.yml',
        'basename' => 'text.info.yml',
        'name' => 'Text',
        'info' => 
        array (
          'name' => 'Text',
          'type' => 'module',
          'description' => 'Defines simple text field types.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_test/node_test.info.yml',
        'basename' => 'node_test.info.yml',
        'name' => 'Node module tests',
        'info' => 
        array (
          'name' => 'Node module tests',
          'type' => 'module',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_access_test_language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_access_test_language/node_access_test_language.info.yml',
        'basename' => 'node_access_test_language.info.yml',
        'name' => 'Node module access tests language',
        'info' => 
        array (
          'name' => 'Node module access tests language',
          'type' => 'module',
          'description' => 'Support module for language-aware node access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:options',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_test_config/node_test_config.info.yml',
        'basename' => 'node_test_config.info.yml',
        'name' => 'Node configuration tests',
        'info' => 
        array (
          'name' => 'Node configuration tests',
          'type' => 'module',
          'description' => 'Support module for node configuration tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_access_test/node_access_test.info.yml',
        'basename' => 'node_access_test.info.yml',
        'name' => 'Node module access tests',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_access_test_empty' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_access_test_empty/node_access_test_empty.info.yml',
        'basename' => 'node_access_test_empty.info.yml',
        'name' => 'Node module empty access tests',
        'info' => 
        array (
          'name' => 'Node module empty access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides empty grants hook implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_test_exception/node_test_exception.info.yml',
        'basename' => 'node_test_exception.info.yml',
        'name' => 'Node module exception tests',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'type' => 'module',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_display_configurable_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_display_configurable_test/node_display_configurable_test.info.yml',
        'basename' => 'node_display_configurable_test.info.yml',
        'name' => 'Node configurable display module tests',
        'info' => 
        array (
          'name' => 'Node configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for node \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/modules/node_test_views/node_test_views.info.yml',
        'basename' => 'node_test_views.info.yml',
        'name' => 'Node test views',
        'info' => 
        array (
          'name' => 'Node test views',
          'type' => 'module',
          'description' => 'Provides default views for views node tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'drupal:language',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node_access_test_auto_bubbling' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/tests/node_access_test_auto_bubbling/node_access_test_auto_bubbling.info.yml',
        'basename' => 'node_access_test_auto_bubbling.info.yml',
        'name' => 'Node module access automatic cacheability bubbling tests',
        'info' => 
        array (
          'name' => 'Node module access automatic cacheability bubbling tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides a route which does a node access query without explicitly specifying the corresponding cache context.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/node/node.info.yml',
        'basename' => 'node.info.yml',
        'name' => 'Node',
        'info' => 
        array (
          'name' => 'Node',
          'type' => 'module',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.node_type.collection',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
        ),
        'schema_version' => '8700',
        'version' => '8.8.10',
      ),
      'taxonomy_crud' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/tests/modules/taxonomy_crud/taxonomy_crud.info.yml',
        'basename' => 'taxonomy_crud.info.yml',
        'name' => 'Taxonomy CRUD tests',
        'info' => 
        array (
          'name' => 'Taxonomy CRUD tests',
          'type' => 'module',
          'description' => 'Provides 3rd party settings for vocabulary.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/tests/modules/taxonomy_test/taxonomy_test.info.yml',
        'basename' => 'taxonomy_test.info.yml',
        'name' => 'Taxonomy test',
        'info' => 
        array (
          'name' => 'Taxonomy test',
          'type' => 'module',
          'description' => 'Provides test hook implementations for taxonomy tests',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'taxonomy_term_display_configurable_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/tests/modules/taxonomy_term_display_configurable_test/taxonomy_term_display_configurable_test.info.yml',
        'basename' => 'taxonomy_term_display_configurable_test.info.yml',
        'name' => 'Taxonomy term configurable display module tests',
        'info' => 
        array (
          'name' => 'Taxonomy term configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for taxonomy_term \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'vocabulary_serialization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/tests/modules/vocabulary_serialization_test/vocabulary_serialization_test.info.yml',
        'basename' => 'vocabulary_serialization_test.info.yml',
        'name' => 'Vocabulary serialization test',
        'info' => 
        array (
          'name' => 'Vocabulary serialization test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'taxonomy_term_stub_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/tests/modules/taxonomy_term_stub_test/taxonomy_term_stub_test.info.yml',
        'basename' => 'taxonomy_term_stub_test.info.yml',
        'name' => 'Taxonomy Migrate stub test',
        'info' => 
        array (
          'name' => 'Taxonomy Migrate stub test',
          'type' => 'module',
          'description' => 'Provides a migration plugin for stub testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'taxonomy_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/tests/modules/taxonomy_test_views/taxonomy_test_views.info.yml',
        'basename' => 'taxonomy_test_views.info.yml',
        'name' => 'Taxonomy test views',
        'info' => 
        array (
          'name' => 'Taxonomy test views',
          'type' => 'module',
          'description' => 'Provides default views for views taxonomy tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/taxonomy/taxonomy.info.yml',
        'basename' => 'taxonomy.info.yml',
        'name' => 'Taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'type' => 'module',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:text',
          ),
          'configure' => 'entity.taxonomy_vocabulary.collection',
        ),
        'schema_version' => '8702',
        'version' => '8.8.10',
      ),
      'forum_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/forum/tests/modules/forum_test_views/forum_test_views.info.yml',
        'basename' => 'forum_test_views.info.yml',
        'name' => 'Forum test views',
        'info' => 
        array (
          'name' => 'Forum test views',
          'type' => 'module',
          'description' => 'Provides default views for views forum tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:forum',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/forum/forum.info.yml',
        'basename' => 'forum.info.yml',
        'name' => 'Forum',
        'info' => 
        array (
          'name' => 'Forum',
          'type' => 'module',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:history',
            2 => 'drupal:taxonomy',
            3 => 'drupal:comment',
            4 => 'drupal:options',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'forum.overview',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'menu_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/menu_ui/menu_ui.info.yml',
        'basename' => 'menu_ui.info.yml',
        'name' => 'Menu UI',
        'info' => 
        array (
          'name' => 'Menu UI',
          'type' => 'module',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.menu.collection',
          'dependencies' => 
          array (
            0 => 'drupal:menu_link_content',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_datatype_boolean_emoji_normalizer' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/serialization/tests/modules/test_datatype_boolean_emoji_normalizer/test_datatype_boolean_emoji_normalizer.info.yml',
        'basename' => 'test_datatype_boolean_emoji_normalizer.info.yml',
        'name' => 'Test @DataType normalizer',
        'info' => 
        array (
          'name' => 'Test @DataType normalizer',
          'type' => 'module',
          'description' => 'Provides test support for @DataType-level normalization.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'field_normalization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/serialization/tests/modules/field_normalization_test/field_normalization_test.info.yml',
        'basename' => 'field_normalization_test.info.yml',
        'name' => 'FieldItem normalization test support',
        'info' => 
        array (
          'name' => 'FieldItem normalization test support',
          'type' => 'module',
          'description' => 'Provides test support for fieldItem normalization test support.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'test_fieldtype_boolean_emoji_normalizer' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/serialization/tests/modules/test_fieldtype_boolean_emoji_normalizer/test_fieldtype_boolean_emoji_normalizer.info.yml',
        'basename' => 'test_fieldtype_boolean_emoji_normalizer.info.yml',
        'name' => 'Test @FieldType normalizer',
        'info' => 
        array (
          'name' => 'Test @FieldType normalizer',
          'type' => 'module',
          'description' => 'Provides test support for @FieldType-level normalization.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'entity_serialization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/serialization/tests/modules/entity_serialization_test/entity_serialization_test.info.yml',
        'basename' => 'entity_serialization_test.info.yml',
        'name' => 'Entity serialization test support',
        'info' => 
        array (
          'name' => 'Entity serialization test support',
          'type' => 'module',
          'description' => 'Provides test support for entity serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'serialization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/serialization/tests/serialization_test/serialization_test.info.yml',
        'basename' => 'serialization_test.info.yml',
        'name' => 'Serialization test module',
        'info' => 
        array (
          'name' => 'Serialization test module',
          'type' => 'module',
          'description' => 'Support module for serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'serialization' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/serialization/serialization.info.yml',
        'basename' => 'serialization.info.yml',
        'name' => 'Serialization',
        'info' => 
        array (
          'name' => 'Serialization',
          'type' => 'module',
          'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8401',
        'version' => '8.8.10',
      ),
      'color_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/color/tests/modules/color_test/themes/color_test_theme/color_test_theme.info.yml',
        'basename' => 'color_test_theme.info.yml',
        'name' => 'Color test theme',
        'info' => 
        array (
          'name' => 'Color test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the color module',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'color_test_theme/base',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'color_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/color/tests/modules/color_test/color_test.info.yml',
        'basename' => 'color_test.info.yml',
        'name' => 'Color test',
        'info' => 
        array (
          'name' => 'Color test',
          'type' => 'module',
          'description' => 'Provides test helpers for color module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/color/color.info.yml',
        'basename' => 'color.info.yml',
        'name' => 'Color',
        'info' => 
        array (
          'name' => 'Color',
          'type' => 'module',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_normalizers_kernel' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_normalizers_kernel/jsonapi_test_normalizers_kernel.info.yml',
        'basename' => 'jsonapi_test_normalizers_kernel.info.yml',
        'name' => 'JSON API test: normalizers kernel tests, public aliases for select JSON API normalizers',
        'info' => 
        array (
          'name' => 'JSON API test: normalizers kernel tests, public aliases for select JSON API normalizers',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_field_filter_access' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_field_filter_access/jsonapi_test_field_filter_access.info.yml',
        'basename' => 'jsonapi_test_field_filter_access.info.yml',
        'name' => 'JSON:API filter access',
        'info' => 
        array (
          'name' => 'JSON:API filter access',
          'type' => 'module',
          'description' => 'Provides custom access related code to test JSON:API filter security.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_resource_type_building' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_resource_type_building/jsonapi_test_resource_type_building.info.yml',
        'basename' => 'jsonapi_test_resource_type_building.info.yml',
        'name' => 'JSON:API test resource type building API',
        'info' => 
        array (
          'name' => 'JSON:API test resource type building API',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_user' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_user/jsonapi_test_user.info.yml',
        'basename' => 'jsonapi_test_user.info.yml',
        'name' => 'JSON:API user tests',
        'info' => 
        array (
          'name' => 'JSON:API user tests',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_field_aliasing' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_field_aliasing/jsonapi_test_field_aliasing.info.yml',
        'basename' => 'jsonapi_test_field_aliasing.info.yml',
        'name' => 'JSON:API test field aliasing',
        'info' => 
        array (
          'name' => 'JSON:API test field aliasing',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_collection_count' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_collection_count/jsonapi_test_collection_count.info.yml',
        'basename' => 'jsonapi_test_collection_count.info.yml',
        'name' => 'JSON API test collection counts',
        'info' => 
        array (
          'name' => 'JSON API test collection counts',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_field_access' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_field_access/jsonapi_test_field_access.info.yml',
        'basename' => 'jsonapi_test_field_access.info.yml',
        'name' => 'JSON API field access',
        'info' => 
        array (
          'name' => 'JSON API field access',
          'type' => 'module',
          'description' => 'Provides a custom field access hook to test JSON API field access security.',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_data_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_data_type/jsonapi_test_data_type.info.yml',
        'basename' => 'jsonapi_test_data_type.info.yml',
        'name' => 'JSON API test format-agnostic @DataType normalizers',
        'info' => 
        array (
          'name' => 'JSON API test format-agnostic @DataType normalizers',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi_test_field_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/tests/modules/jsonapi_test_field_type/jsonapi_test_field_type.info.yml',
        'basename' => 'jsonapi_test_field_type.info.yml',
        'name' => 'JSON API test format-agnostic @FieldType normalizers',
        'info' => 
        array (
          'name' => 'JSON API test format-agnostic @FieldType normalizers',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'jsonapi' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/jsonapi/jsonapi.info.yml',
        'basename' => 'jsonapi.info.yml',
        'name' => 'JSON:API',
        'info' => 
        array (
          'name' => 'JSON:API',
          'type' => 'module',
          'description' => 'Exposes entities as a JSON:API-specification-compliant web API.',
          'core' => '8.x',
          'package' => 'Web services',
          'configure' => 'jsonapi.settings',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
        ),
        'schema_version' => '8701',
        'version' => '8.8.10',
      ),
      'help_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/help/tests/modules/help_test/help_test.info.yml',
        'basename' => 'help_test.info.yml',
        'name' => 'help_test',
        'info' => 
        array (
          'name' => 'help_test',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/help/help.info.yml',
        'basename' => 'help.info.yml',
        'name' => 'Help',
        'info' => 
        array (
          'name' => 'Help',
          'type' => 'module',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'file_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/file/tests/file_module_test/file_module_test.info.yml',
        'basename' => 'file_module_test.info.yml',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'file_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/file/tests/file_test/file_test.info.yml',
        'basename' => 'file_test.info.yml',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'file_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/file/tests/modules/file_test_views/file_test_views.info.yml',
        'basename' => 'file_test_views.info.yml',
        'name' => 'File test views',
        'info' => 
        array (
          'name' => 'File test views',
          'type' => 'module',
          'description' => 'Provides default views for views file tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/file/file.info.yml',
        'basename' => 'file.info.yml',
        'name' => 'File',
        'info' => 
        array (
          'name' => 'File',
          'type' => 'module',
          'description' => 'Defines a file field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => '8700',
        'version' => '8.8.10',
      ),
      'migration_provider_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal_ui/tests/modules/migration_provider_test/migration_provider_test.info.yml',
        'basename' => 'migration_provider_test.info.yml',
        'name' => 'Migration provider missing',
        'info' => 
        array (
          'name' => 'Migration provider missing',
          'type' => 'module',
          'description' => 'Add a migration missing a source and destination migration provider and a source plugin missing a migration provider.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'migrate_drupal_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
        'basename' => 'migrate_drupal_ui.info.yml',
        'name' => 'Migrate Drupal UI',
        'info' => 
        array (
          'name' => 'Migrate Drupal UI',
          'type' => 'module',
          'description' => 'Provides a user interface for migrating from older Drupal versions.',
          'package' => 'Migration',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'migrate_drupal_ui.upgrade',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:migrate_drupal',
            2 => 'drupal:dblog',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'path_alias_deprecated_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/path_alias/tests/modules/path_alias_deprecated_test/path_alias_deprecated_test.info.yml',
        'basename' => 'path_alias_deprecated_test.info.yml',
        'name' => 'Path Alias deprecated test',
        'info' => 
        array (
          'name' => 'Path Alias deprecated test',
          'type' => 'module',
          'description' => 'Support module for testing deprecated functionality for path aliases.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_library_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media_library/tests/modules/media_library_test/media_library_test.info.yml',
        'basename' => 'media_library_test.info.yml',
        'name' => 'Media Library test',
        'info' => 
        array (
          'name' => 'Media Library test',
          'type' => 'module',
          'description' => 'Test module for Media Library.',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:media_test_source',
            3 => 'drupal:menu_ui',
            4 => 'drupal:node',
            5 => 'drupal:path',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_library_test_widget' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media_library/tests/modules/media_library_test_widget/media_library_test_widget.info.yml',
        'basename' => 'media_library_test_widget.info.yml',
        'name' => 'Media Library test widget',
        'info' => 
        array (
          'name' => 'Media Library test widget',
          'type' => 'module',
          'description' => 'Test widget that has a nested media library widget',
          'package' => 'Testing',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:media_test_source',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'media_library' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/media_library/media_library.info.yml',
        'basename' => 'media_library.info.yml',
        'name' => 'Media Library',
        'info' => 
        array (
          'name' => 'Media Library',
          'type' => 'module',
          'description' => 'Enhances the media list with additional features to more easily find and use existing media items.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:views',
            2 => 'drupal:user',
          ),
        ),
        'schema_version' => '8704',
        'version' => '8.8.10',
      ),
      'simpletest_deprecation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/simpletest/tests/modules/simpletest_deprecation_test/simpletest_deprecation_test.info.yml',
        'basename' => 'simpletest_deprecation_test.info.yml',
        'name' => 'Simpletest deprecation test',
        'info' => 
        array (
          'name' => 'Simpletest deprecation test',
          'type' => 'module',
          'description' => 'Support module for Simpletest deprecation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/simpletest/simpletest.info.yml',
        'basename' => 'simpletest.info.yml',
        'name' => 'Testing',
        'info' => 
        array (
          'name' => 'Testing',
          'type' => 'module',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'simpletest.settings',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'contact_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/contact/tests/modules/contact_test_views/contact_test_views.info.yml',
        'basename' => 'contact_test_views.info.yml',
        'name' => 'Contact test views',
        'info' => 
        array (
          'name' => 'Contact test views',
          'type' => 'module',
          'description' => 'Provides default views for views contact tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:views',
            2 => 'drupal:user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'contact_storage_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/contact/tests/modules/contact_storage_test/contact_storage_test.info.yml',
        'basename' => 'contact_storage_test.info.yml',
        'name' => 'Contact test storage',
        'info' => 
        array (
          'name' => 'Contact test storage',
          'type' => 'module',
          'description' => 'Tests that contact messages can be stored.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'contact_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/contact/tests/modules/contact_test/contact_test.info.yml',
        'basename' => 'contact_test.info.yml',
        'name' => 'Contact test module',
        'info' => 
        array (
          'name' => 'Contact test module',
          'type' => 'module',
          'description' => 'Contains test contact form.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/contact/contact.info.yml',
        'basename' => 'contact.info.yml',
        'name' => 'Contact',
        'info' => 
        array (
          'name' => 'Contact',
          'type' => 'module',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.contact_form.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'tracker_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/tracker/tests/modules/tracker_test_views/tracker_test_views.info.yml',
        'basename' => 'tracker_test_views.info.yml',
        'name' => 'Tracker test views',
        'info' => 
        array (
          'name' => 'Tracker test views',
          'type' => 'module',
          'description' => 'Provides default views for views tracker tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:tracker',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/tracker/tracker.info.yml',
        'basename' => 'tracker.info.yml',
        'name' => 'Activity Tracker',
        'info' => 
        array (
          'name' => 'Activity Tracker',
          'type' => 'module',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:comment',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'options_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/options/tests/options_test/options_test.info.yml',
        'basename' => 'options_test.info.yml',
        'name' => 'Options test',
        'info' => 
        array (
          'name' => 'Options test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'options_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/options/tests/options_test_views/options_test_views.info.yml',
        'basename' => 'options_test_views.info.yml',
        'name' => 'Options test views',
        'info' => 
        array (
          'name' => 'Options test views',
          'type' => 'module',
          'description' => 'Provides default views for views options tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:options',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'options_config_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/options/tests/options_config_install_test/options_config_install_test.info.yml',
        'basename' => 'options_config_install_test.info.yml',
        'name' => 'Options config install test',
        'info' => 
        array (
          'name' => 'Options config install test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:options',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/options/options.info.yml',
        'basename' => 'options.info.yml',
        'name' => 'Options',
        'info' => 
        array (
          'name' => 'Options',
          'type' => 'module',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'toolbar_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/toolbar/tests/modules/toolbar_test/toolbar_test.info.yml',
        'basename' => 'toolbar_test.info.yml',
        'name' => 'Toolbar module API tests',
        'info' => 
        array (
          'name' => 'Toolbar module API tests',
          'type' => 'module',
          'description' => 'Support module for toolbar testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'toolbar_disable_user_toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/toolbar/tests/modules/toolbar_disable_user_toolbar/toolbar_disable_user_toolbar.info.yml',
        'basename' => 'toolbar_disable_user_toolbar.info.yml',
        'name' => 'Disable user toolbar',
        'info' => 
        array (
          'name' => 'Disable user toolbar',
          'type' => 'module',
          'description' => 'Support module for testing toolbar without user toolbar',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/toolbar/toolbar.info.yml',
        'basename' => 'toolbar.info.yml',
        'name' => 'Toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'type' => 'module',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '8.x',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'image_access_test_hidden' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/image/tests/modules/image_access_test_hidden/image_access_test_hidden.info.yml',
        'basename' => 'image_access_test_hidden.info.yml',
        'name' => 'Image access test for hidden fields',
        'info' => 
        array (
          'name' => 'Image access test for hidden fields',
          'type' => 'module',
          'description' => 'Provides an entity field access hook implementation to set an image field as hidden.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'image_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/image/tests/modules/image_test_views/image_test_views.info.yml',
        'basename' => 'image_test_views.info.yml',
        'name' => 'Image test views',
        'info' => 
        array (
          'name' => 'Image test views',
          'type' => 'module',
          'description' => 'Provides default views for views image tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/image/tests/modules/image_module_test/image_module_test.info.yml',
        'basename' => 'image_module_test.info.yml',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/image/image.info.yml',
        'basename' => 'image.info.yml',
        'name' => 'Image',
        'info' => 
        array (
          'name' => 'Image',
          'type' => 'module',
          'description' => 'Defines an image field type and provides image manipulation tools.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
          'configure' => 'entity.image_style.collection',
        ),
        'schema_version' => '8201',
        'version' => '8.8.10',
      ),
      'config_events_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_events_test/config_events_test.info.yml',
        'basename' => 'config_events_test.info.yml',
        'name' => 'Configuration events test',
        'info' => 
        array (
          'name' => 'Configuration events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_exclude_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_exclude_test/config_exclude_test.info.yml',
        'basename' => 'config_exclude_test.info.yml',
        'name' => 'Configuration Module Exclude Test',
        'info' => 
        array (
          'name' => 'Configuration Module Exclude Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_other_module_config_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_other_module_config_test/config_other_module_config_test.info.yml',
        'basename' => 'config_other_module_config_test.info.yml',
        'name' => 'Config other module config',
        'info' => 
        array (
          'name' => 'Config other module config',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_test_id_mismatch' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_test_id_mismatch/config_test_id_mismatch.info.yml',
        'basename' => 'config_test_id_mismatch.info.yml',
        'name' => 'Configuration test ID mismatch',
        'info' => 
        array (
          'name' => 'Configuration test ID mismatch',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_install_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_install_dependency_test/config_install_dependency_test.info.yml',
        'basename' => 'config_install_dependency_test.info.yml',
        'name' => 'Config install dependency test',
        'info' => 
        array (
          'name' => 'Config install dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_override_integration_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_override_integration_test/config_override_integration_test.info.yml',
        'basename' => 'config_override_integration_test.info.yml',
        'name' => 'Configuration override integration test',
        'info' => 
        array (
          'name' => 'Configuration override integration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:block_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_test_language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_test_language/config_test_language.info.yml',
        'basename' => 'config_test_language.info.yml',
        'name' => 'Configuration test languages',
        'info' => 
        array (
          'name' => 'Configuration test languages',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_collection_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_collection_install_test/config_collection_install_test.info.yml',
        'basename' => 'config_collection_install_test.info.yml',
        'name' => 'Configuration events test',
        'info' => 
        array (
          'name' => 'Configuration events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_override_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_override_test/config_override_test.info.yml',
        'basename' => 'config_override_test.info.yml',
        'name' => 'Configuration override test',
        'info' => 
        array (
          'name' => 'Configuration override test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:block_content',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_install_double_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_install_double_dependency_test/config_install_double_dependency_test.info.yml',
        'basename' => 'config_install_double_dependency_test.info.yml',
        'name' => 'Config install double dependency test',
        'info' => 
        array (
          'name' => 'Config install double dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_entity_static_cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_entity_static_cache_test/config_entity_static_cache_test.info.yml',
        'basename' => 'config_entity_static_cache_test.info.yml',
        'name' => 'Configuration entity static cache test',
        'info' => 
        array (
          'name' => 'Configuration entity static cache test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_collection_clash_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_collection_clash_install_test/config_collection_clash_install_test.info.yml',
        'basename' => 'config_collection_clash_install_test.info.yml',
        'name' => 'Config collection clash test module',
        'info' => 
        array (
          'name' => 'Config collection clash test module',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_collection_install_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_test/config_test.info.yml',
        'basename' => 'config_test.info.yml',
        'name' => 'Configuration test',
        'info' => 
        array (
          'name' => 'Configuration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_transformer_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_transformer_test/config_transformer_test.info.yml',
        'basename' => 'config_transformer_test.info.yml',
        'name' => 'Configuration Storage Transformer Test',
        'info' => 
        array (
          'name' => 'Configuration Storage Transformer Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_import_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_import_test/config_import_test.info.yml',
        'basename' => 'config_import_test.info.yml',
        'name' => 'Configuration import test',
        'info' => 
        array (
          'name' => 'Configuration import test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_integration_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_integration_test/config_integration_test.info.yml',
        'basename' => 'config_integration_test.info.yml',
        'name' => 'ConfigTest integration',
        'info' => 
        array (
          'name' => 'ConfigTest integration',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_install_fail_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_install_fail_test/config_install_fail_test.info.yml',
        'basename' => 'config_install_fail_test.info.yml',
        'name' => 'Configuration install fail test',
        'info' => 
        array (
          'name' => 'Configuration install fail test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config_clash_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/tests/config_clash_test_theme/config_clash_test_theme.info.yml',
        'basename' => 'config_clash_test_theme.info.yml',
        'name' => 'Test theme for configuration clash detection',
        'info' => 
        array (
          'name' => 'Test theme for configuration clash detection',
          'type' => 'theme',
          'description' => 'Test theme for configuration clash detection',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'core' => '8.x',
          'regions' => 
          array (
            'content' => 'Content',
            'left' => 'Left',
            'right' => 'Right',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
      'config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/modules/config/config.info.yml',
        'basename' => 'config.info.yml',
        'name' => 'Configuration Manager',
        'info' => 
        array (
          'name' => 'Configuration Manager',
          'type' => 'module',
          'description' => 'Allows administrators to manage configuration changes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'config.sync',
        ),
        'schema_version' => 8000,
        'version' => '8.8.10',
      ),
    ),
    'themes' => 
    array (
      'bootstrap' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/themes/contrib/bootstrap/bootstrap.info.yml',
        'basename' => 'bootstrap.info.yml',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => false,
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'package' => 'Bootstrap',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'navigation_collapsible' => 'Navigation (Collapsible)',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'libraries' => 
          array (
            0 => 'bootstrap/theme',
          ),
          'libraries-extend' => 
          array (
            'core/drupal.ajax' => 
            array (
              0 => 'bootstrap/drupal.ajax',
            ),
            'core/drupal.autocomplete' => 
            array (
              0 => 'bootstrap/drupal.autocomplete',
            ),
            'core/drupal.dialog.ajax' => 
            array (
              0 => 'bootstrap/drupal.dialog.ajax',
            ),
            'core/drupal.form' => 
            array (
              0 => 'bootstrap/drupal.form',
            ),
            'core/drupal.message' => 
            array (
              0 => 'bootstrap/drupal.message',
            ),
            'core/drupal.progress' => 
            array (
              0 => 'bootstrap/drupal.progress',
            ),
            'core/drupal.states' => 
            array (
              0 => 'bootstrap/drupal.states',
            ),
            'core/drupal.tabledrag' => 
            array (
              0 => 'bootstrap/drupal.tabledrag',
            ),
            'core/drupal.tableheader' => 
            array (
              0 => 'bootstrap/drupal.tableheader',
            ),
            'image_widget_crop/cropper.integration' => 
            array (
              0 => 'bootstrap/image_widget_crop',
            ),
            'views/views.ajax' => 
            array (
              0 => 'bootstrap/views.ajax',
            ),
          ),
          'libraries-override' => 
          array (
            'core/drupal.batch' => 'bootstrap/drupal.batch',
            'core/drupal.dropbutton' => 'bootstrap/dropdown',
            'core/drupal.vertical-tabs' => 'bootstrap/drupal.vertical-tabs',
            'filter/drupal.filter' => 'bootstrap/drupal.filter',
            'system/admin' => false,
            'text/drupal.text' => 'bootstrap/drupal.text',
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/ajax-progress.module.css' => false,
                  'css/components/autocomplete-loading.module.css' => false,
                  'css/components/tabledrag.module.css' => false,
                ),
              ),
            ),
            'file/drupal.file' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/file.admin.css' => false,
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => false,
                ),
              ),
            ),
            'node/drupal.node.preview' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.preview.css' => false,
                ),
              ),
            ),
          ),
          'version' => '8.x-3.20',
          'core' => '8.x',
          'project' => 'bootstrap',
          'datestamp' => 1561051706,
        ),
        'version' => '8.x-3.20',
      ),
      'gin' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/themes/contrib/gin/gin.info.yml',
        'basename' => 'gin.info.yml',
        'name' => 'Gin',
        'info' => 
        array (
          'name' => 'Gin',
          'type' => 'theme',
          'base theme' => 'claro',
          'description' => 'For a better Content Editor Experience on top of Claro',
          'core_version_requirement' => '^8.8 || ^9',
          'libraries' => 
          array (
            0 => 'claro/global-styling',
            1 => 'gin/gin',
          ),
          'libraries-override' => 
          array (
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/ajax-progress.module.css' => '/core/themes/claro/css/components/ajax-progress.module.css',
                  '/core/themes/stable/css/system/components/autocomplete-loading.module.css' => '/core/themes/claro/css/components/autocomplete-loading.module.css',
                  '/core/themes/stable/css/system/components/system-status-counter.css' => '/core/themes/claro/css/components/system-status-counter.css',
                  '/core/themes/stable/css/system/components/system-status-report-counters.css' => '/core/themes/claro/css/components/system-status-report-counters.css',
                  '/core/themes/stable/css/system/components/system-status-report-general-info.css' => '/core/themes/claro/css/components/system-status-report-general-info.css',
                  '/core/themes/stable/css/system/components/tabledrag.module.css' => '/core/themes/claro/css/components/tabledrag.css',
                ),
              ),
            ),
            'system/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/system/system.admin.css' => false,
                ),
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/dropbutton/dropbutton.css' => '/core/themes/claro/css/components/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.tabledrag' => 
            array (
              'js' => 
              array (
                'misc/tabledrag.js' => '/core/themes/claro/js/tabledrag.js',
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/vertical-tabs.css' => false,
                ),
              ),
              'js' => 
              array (
                'misc/vertical-tabs.js' => '/core/themes/claro/js/vertical-tabs.js',
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                ),
              ),
            ),
            'core/jquery.ui.dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                ),
              ),
            ),
            'classy/dialog' => 'claro/claro.drupal.dialog',
            'classy/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/action-links.css' => false,
                  'css/components/breadcrumb.css' => false,
                  'css/components/button.css' => false,
                  'css/components/details.css' => false,
                  'css/components/dropbutton.css' => false,
                  'css/components/form.css' => false,
                  'css/components/tabs.css' => false,
                  'css/components/pager.css' => false,
                  'css/components/tableselect.css' => '/core/themes/claro/css/components/tableselect.css',
                  'css/components/tabledrag.css' => false,
                  'css/components/collapse-processed.css' => false,
                ),
              ),
            ),
            'classy/dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/dropbutton.css' => false,
                ),
              ),
            ),
            'classy/messages' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/messages.css' => false,
                ),
              ),
            ),
            'classy/progress' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/progress.css' => '/core/themes/claro/css/components/progress.css',
                ),
              ),
            ),
            'classy/user' => false,
            'user/drupal.user' => 'claro/form.password-confirm',
            'field_ui/drupal.field_ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/field_ui/field_ui.admin.css' => '/core/themes/claro/css/theme/field-ui.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/filter/filter.admin.css' => '/core/themes/claro/css/theme/filter.theme.css',
                ),
              ),
            ),
            'filter/drupal.filter' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/filter/filter.admin.css' => '/core/themes/claro/css/theme/filter.theme.css',
                ),
              ),
            ),
            'views_ui/admin.styling' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/views_ui/views_ui.admin.theme.css' => '/core/themes/claro/css/theme/views_ui.admin.theme.css',
                ),
              ),
            ),
            'core/drupal.tableselect' => 
            array (
              'js' => 
              array (
                'misc/tableselect.js' => 'js/gin_tableselect.js',
              ),
            ),
            'media_library/view' => 
            array (
              'js' => 
              array (
                'js/media_library.view.js' => 'js/gin_media_library.view.js',
              ),
            ),
          ),
          'libraries-extend' => 
          array (
            'ckeditor/drupal.ckeditor' => 
            array (
              0 => 'claro/ckeditor-editor',
            ),
            'classy/image-widget' => 
            array (
              0 => 'claro/image-widget',
            ),
            'core/ckeditor' => 
            array (
              0 => 'claro/ckeditor-dialog',
            ),
            'core/drupal.collapse' => 
            array (
              0 => 'claro/details-focus',
            ),
            'core/drupal.dropbutton' => 
            array (
              0 => 'claro/dropbutton',
            ),
            'core/drupal.checkbox' => 
            array (
              0 => 'claro/checkbox',
            ),
            'core/drupal.message' => 
            array (
              0 => 'claro/messages',
            ),
            'core/drupal.vertical-tabs' => 
            array (
              0 => 'claro/vertical-tabs',
            ),
            'core/jquery.ui' => 
            array (
              0 => 'claro/claro.jquery.ui',
            ),
            'file/drupal.file' => 
            array (
              0 => 'claro/file',
            ),
            'system/admin' => 
            array (
              0 => 'claro/system.admin',
            ),
            'core/drupal.autocomplete' => 
            array (
              0 => 'claro/autocomplete',
            ),
            'tour/tour-styling' => 
            array (
              0 => 'claro/tour-styling',
            ),
            'shortcut/drupal.shortcut' => 
            array (
              0 => 'claro/drupal.shortcut',
            ),
            'core/drupal.ajax' => 
            array (
              0 => 'claro/ajax',
            ),
            'views/views.module' => 
            array (
              0 => 'claro/views',
            ),
          ),
          'quickedit_stylesheets' => 
          array (
            0 => '../../../core/themes/claro/css/components/quickedit.css',
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => '../../../core/themes/claro/css/base/elements.css',
            1 => '../../../core/themes/claro/css/base/typography.css',
            2 => '../../../core/themes/claro/css/theme/ckeditor-frame.css',
            3 => 'dist/css/gin_accent.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'pre_content' => 'Pre-content',
            'breadcrumb' => 'Breadcrumb',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'version' => '8.x-3.0-alpha20',
          'project' => 'gin',
          'datestamp' => 1592855615,
        ),
        'version' => '8.x-3.0-alpha20',
      ),
      'bartik' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/bartik/bartik.info.yml',
        'basename' => 'bartik.info.yml',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'bartik/global-styling',
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/base/elements.css',
            1 => 'css/components/captions.css',
            2 => 'css/components/table.css',
            3 => 'css/components/text-formatted.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'primary_menu' => 'Primary menu',
            'secondary_menu' => 'Secondary menu',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured_top' => 'Featured top',
            'breadcrumb' => 'Breadcrumb',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'featured_bottom_first' => 'Featured bottom first',
            'featured_bottom_second' => 'Featured bottom second',
            'featured_bottom_third' => 'Featured bottom third',
            'footer_first' => 'Footer first',
            'footer_second' => 'Footer second',
            'footer_third' => 'Footer third',
            'footer_fourth' => 'Footer fourth',
            'footer_fifth' => 'Footer fifth',
          ),
        ),
        'version' => '8.8.10',
      ),
      'twig' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/engines/twig/twig.info.yml',
        'basename' => 'twig.info.yml',
        'name' => 'Twig',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Twig',
          'core' => '8.x',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'version' => '8.8.10',
      ),
      'classy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/classy/classy.info.yml',
        'basename' => 'classy.info.yml',
        'name' => 'Classy',
        'info' => 
        array (
          'name' => 'Classy',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'hidden' => true,
          'libraries' => 
          array (
            0 => 'classy/base',
            1 => 'classy/messages',
            2 => 'core/normalize',
          ),
          'libraries-extend' => 
          array (
            'user/drupal.user' => 
            array (
              0 => 'classy/user',
            ),
            'core/drupal.dropbutton' => 
            array (
              0 => 'classy/dropbutton',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'classy/dialog',
            ),
            'file/drupal.file' => 
            array (
              0 => 'classy/file',
            ),
            'core/drupal.progress' => 
            array (
              0 => 'classy/progress',
            ),
            'media/media_embed_ckeditor_theme' => 
            array (
              0 => 'classy/media_embed_ckeditor_theme',
            ),
            'media_library/view' => 
            array (
              0 => 'classy/media_library',
            ),
            'media_library/widget' => 
            array (
              0 => 'classy/media_library',
            ),
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/components/media-embed-error.css',
          ),
        ),
        'version' => '8.8.10',
      ),
      'claro' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/claro/claro.info.yml',
        'basename' => 'claro.info.yml',
        'name' => 'Claro',
        'info' => 
        array (
          'name' => 'Claro',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'A clean, accessible, and powerful Drupal administration theme.',
          'alt text' => 'Screenshot of Claro, Drupal administration theme.',
          'package' => 'Core',
          'version' => 'VERSION',
          'experimental' => true,
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'claro/global-styling',
          ),
          'libraries-override' => 
          array (
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/ajax-progress.module.css' => 'css/components/ajax-progress.module.css',
                  '/core/themes/stable/css/system/components/autocomplete-loading.module.css' => 'css/components/autocomplete-loading.module.css',
                  '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
                  '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
                  '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
                  '/core/themes/stable/css/system/components/tabledrag.module.css' => 'css/components/tabledrag.css',
                ),
              ),
            ),
            'system/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/system/system.admin.css' => false,
                ),
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/dropbutton/dropbutton.css' => 'css/components/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.tabledrag' => 
            array (
              'js' => 
              array (
                'misc/tabledrag.js' => 'js/tabledrag.js',
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/vertical-tabs.css' => false,
                ),
              ),
              'js' => 
              array (
                'misc/vertical-tabs.js' => 'js/vertical-tabs.js',
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                ),
              ),
            ),
            'core/jquery.ui.dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                ),
              ),
            ),
            'classy/dialog' => 'claro/claro.drupal.dialog',
            'classy/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/action-links.css' => false,
                  'css/components/breadcrumb.css' => false,
                  'css/components/button.css' => false,
                  'css/components/details.css' => false,
                  'css/components/dropbutton.css' => false,
                  'css/components/form.css' => false,
                  'css/components/tabs.css' => false,
                  'css/components/pager.css' => false,
                  'css/components/tableselect.css' => 'css/components/tableselect.css',
                  'css/components/tabledrag.css' => false,
                  'css/components/collapse-processed.css' => false,
                ),
              ),
            ),
            'classy/dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/dropbutton.css' => false,
                ),
              ),
            ),
            'classy/messages' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/messages.css' => false,
                ),
              ),
            ),
            'classy/progress' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/progress.css' => 'css/components/progress.css',
                ),
              ),
            ),
            'classy/user' => false,
            'user/drupal.user' => 'claro/form.password-confirm',
            'field_ui/drupal.field_ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/field_ui/field_ui.admin.css' => 'css/theme/field-ui.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/filter/filter.admin.css' => 'css/theme/filter.theme.css',
                ),
              ),
            ),
            'filter/drupal.filter' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/filter/filter.admin.css' => 'css/theme/filter.theme.css',
                ),
              ),
            ),
            'views_ui/admin.styling' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  '/core/themes/stable/css/views_ui/views_ui.admin.theme.css' => 'css/theme/views_ui.admin.theme.css',
                ),
              ),
            ),
            'classy/media_library' => 'claro/empty',
          ),
          'libraries-extend' => 
          array (
            'ckeditor/drupal.ckeditor' => 
            array (
              0 => 'claro/ckeditor-editor',
            ),
            'classy/image-widget' => 
            array (
              0 => 'claro/image-widget',
            ),
            'core/ckeditor' => 
            array (
              0 => 'claro/ckeditor-dialog',
            ),
            'core/drupal.collapse' => 
            array (
              0 => 'claro/details-focus',
            ),
            'core/drupal.dropbutton' => 
            array (
              0 => 'claro/dropbutton',
            ),
            'core/drupal.checkbox' => 
            array (
              0 => 'claro/checkbox',
            ),
            'core/drupal.message' => 
            array (
              0 => 'claro/messages',
            ),
            'core/drupal.vertical-tabs' => 
            array (
              0 => 'claro/vertical-tabs',
            ),
            'core/jquery.ui' => 
            array (
              0 => 'claro/claro.jquery.ui',
            ),
            'file/drupal.file' => 
            array (
              0 => 'claro/file',
            ),
            'system/admin' => 
            array (
              0 => 'claro/system.admin',
            ),
            'core/drupal.autocomplete' => 
            array (
              0 => 'claro/autocomplete',
            ),
            'tour/tour-styling' => 
            array (
              0 => 'claro/tour-styling',
            ),
            'shortcut/drupal.shortcut' => 
            array (
              0 => 'claro/drupal.shortcut',
            ),
            'core/drupal.ajax' => 
            array (
              0 => 'claro/ajax',
            ),
            'views/views.module' => 
            array (
              0 => 'claro/views',
            ),
            'media_library/view' => 
            array (
              0 => 'claro/media_library.theme',
            ),
            'media_library/widget' => 
            array (
              0 => 'claro/media_library.theme',
            ),
          ),
          'quickedit_stylesheets' => 
          array (
            0 => 'css/components/quickedit.css',
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/base/elements.css',
            1 => 'css/base/typography.css',
            2 => 'css/theme/ckeditor-frame.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'pre_content' => 'Pre-content',
            'breadcrumb' => 'Breadcrumb',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
        ),
        'version' => '8.8.10',
      ),
      'stark' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/stark/stark.info.yml',
        'basename' => 'stark.info.yml',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'type' => 'theme',
          'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
        ),
        'version' => '8.8.10',
      ),
      'stable' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/stable/stable.info.yml',
        'basename' => 'stable.info.yml',
        'name' => 'Stable',
        'info' => 
        array (
          'name' => 'Stable',
          'type' => 'theme',
          'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
          'hidden' => true,
          'libraries-override' => 
          array (
            'block/drupal.block.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/block.admin.css' => 'css/block/block.admin.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.language' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
                ),
              ),
            ),
            'color/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/color.admin.css' => 'css/color/color.admin.css',
                ),
              ),
            ),
            'config_translation/drupal.config_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
                ),
              ),
            ),
            'content_translation/drupal.content_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
                ),
              ),
            ),
            'content_moderation/content_moderation' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
                ),
                'theme' => 
                array (
                  'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-links' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.module.css' => 'css/contextual/contextual.module.css',
                ),
                'theme' => 
                array (
                  'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
                  'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
                ),
              ),
            ),
            'core/drupal.dialog.off_canvas' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'misc/dialog/off-canvas.reset.css' => 'css/core/dialog/off-canvas.reset.css',
                  'misc/dialog/off-canvas.base.css' => 'css/core/dialog/off-canvas.base.css',
                  'misc/dialog/off-canvas.css' => 'css/core/dialog/off-canvas.css',
                  'misc/dialog/off-canvas.theme.css' => 'css/core/dialog/off-canvas.theme.css',
                ),
                'component' => 
                array (
                  'misc/dialog/off-canvas.motion.css' => 'css/core/dialog/off-canvas.motion.css',
                  'misc/dialog/off-canvas.button.css' => 'css/core/dialog/off-canvas.button.css',
                  'misc/dialog/off-canvas.form.css' => 'css/core/dialog/off-canvas.form.css',
                  'misc/dialog/off-canvas.table.css' => 'css/core/dialog/off-canvas.table.css',
                  'misc/dialog/off-canvas.details.css' => 'css/core/dialog/off-canvas.details.css',
                  'misc/dialog/off-canvas.tabledrag.css' => 'css/core/dialog/off-canvas.tabledrag.css',
                  'misc/dialog/off-canvas.dropbutton.css' => 'css/core/dialog/off-canvas.dropbutton.css',
                  'misc/dialog/off-canvas.layout.css' => 'css/core/dialog/off-canvas.layout.css',
                ),
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
                ),
              ),
            ),
            'dblog/drupal.dblog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/dblog.module.css' => 'css/dblog/dblog.module.css',
                ),
              ),
            ),
            'field_ui/drupal.field_ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
                ),
              ),
            ),
            'file/drupal.file' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/file.admin.css' => 'css/file/file.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/caption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/filter.caption.css' => 'css/filter/filter.caption.css',
                ),
              ),
            ),
            'image/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/image.admin.css' => 'css/image/image.admin.css',
                ),
              ),
            ),
            'image/quickedit.inPlaceEditor.image' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/editors/image.css' => 'css/image/editors/image.css',
                ),
                'theme' => 
                array (
                  'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
                ),
              ),
            ),
            'language/drupal.language.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/language.admin.css' => 'css/language/language.admin.css',
                ),
              ),
            ),
            'layout_builder/drupal.layout_builder' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/layout-builder.css' => 'css/layout_builder/layout-builder.css',
                ),
              ),
            ),
            'locale/drupal.locale.admin' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/locale.admin.css' => 'css/locale/locale.admin.css',
                ),
              ),
            ),
            'media/filter.caption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/filter.caption.css' => 'css/media/filter.caption.css',
                ),
              ),
            ),
            'media/oembed.formatter' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/oembed.formatter.css' => 'css/media/oembed.formatter.css',
                ),
              ),
            ),
            'media/oembed.frame' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/oembed.frame.css' => 'css/media/oembed.frame.css',
                ),
              ),
            ),
            'menu_ui/drupal.menu_ui.adminforms' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
                ),
              ),
            ),
            'migrate_drupal_ui/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/upgrade-analysis-report-tables.css' => 'css/migrate_drupal_ui/components/upgrade-analysis-report-tables.css',
                ),
              ),
            ),
            'node/drupal.node' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.preview' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.preview.css' => 'css/node/node.preview.css',
                ),
              ),
            ),
            'node/form' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.admin.css' => 'css/node/node.admin.css',
                ),
              ),
            ),
            'quickedit/quickedit' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
                ),
                'theme' => 
                array (
                  'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
                  'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
                ),
              ),
            ),
            'settings_tray/drupal.settings_tray' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
                  'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
                  'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
                ),
                'theme' => 
                array (
                  'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
                ),
              ),
            ),
            'shortcut/drupal.shortcut' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
                  'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
                ),
              ),
            ),
            'simpletest/drupal.simpletest' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/simpletest.module.css' => 'css/simpletest/simpletest.module.css',
                ),
              ),
            ),
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
                  'css/components/align.module.css' => 'css/system/components/align.module.css',
                  'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
                  'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
                  'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
                  'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
                  'css/components/details.module.css' => 'css/system/components/details.module.css',
                  'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
                  'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
                  'css/components/js.module.css' => 'css/system/components/js.module.css',
                  'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
                  'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
                  'css/components/progress.module.css' => 'css/system/components/progress.module.css',
                  'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
                  'css/components/resize.module.css' => 'css/system/components/resize.module.css',
                  'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
                  'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
                  'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
                  'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
                  'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
                  'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
                  'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
                ),
              ),
            ),
            'system/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.admin.css' => 'css/system/system.admin.css',
                ),
              ),
            ),
            'system/maintenance' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.maintenance.css' => 'css/system/system.maintenance.css',
                ),
              ),
            ),
            'system/diff' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/system.diff.css' => 'css/system/system.diff.css',
                ),
              ),
            ),
            'taxonomy/drupal.taxonomy' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
                ),
                'theme' => 
                array (
                  'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
                  'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar.menu' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
                ),
              ),
            ),
            'tour/tour-styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/tour.module.css' => 'css/tour/tour.module.css',
                ),
              ),
            ),
            'update/drupal.update.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
                ),
              ),
            ),
            'user/drupal.user' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/user.module.css' => 'css/user/user.module.css',
                ),
              ),
            ),
            'user/drupal.user.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.admin.css' => 'css/user/user.admin.css',
                ),
              ),
            ),
            'user/drupal.user.icons' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
                ),
              ),
            ),
            'views/views.module' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views.module.css' => 'css/views/views.module.css',
                ),
              ),
            ),
            'views_ui/admin.styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
                ),
                'theme' => 
                array (
                  'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
                  'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
                ),
              ),
            ),
          ),
          'libraries-extend' => 
          array (
            'core/drupal.ajax' => 
            array (
              0 => 'stable/drupal.ajax',
            ),
            'user/drupal.user' => 
            array (
              0 => 'stable/drupal.user',
            ),
          ),
        ),
        'version' => '8.8.10',
      ),
      'seven' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/core/themes/seven/seven.info.yml',
        'basename' => 'seven.info.yml',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
          'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'seven/global-styling',
          ),
          'libraries-override' => 
          array (
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
                  '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
                  '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/vertical-tabs.css' => false,
                ),
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                ),
              ),
            ),
            'core/jquery.ui.dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                ),
              ),
            ),
            'classy/dialog' => 'seven/seven.drupal.dialog',
            'classy/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/details.css' => false,
                ),
              ),
            ),
            'classy/media_library' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/layout/media-library.css' => false,
                ),
              ),
            ),
          ),
          'libraries-extend' => 
          array (
            'core/ckeditor' => 
            array (
              0 => 'seven/ckeditor-dialog',
            ),
            'core/drupal.vertical-tabs' => 
            array (
              0 => 'seven/vertical-tabs',
            ),
            'core/jquery.ui' => 
            array (
              0 => 'seven/seven.jquery.ui',
            ),
            'media_library/view' => 
            array (
              0 => 'seven/media_library',
            ),
            'media_library/widget' => 
            array (
              0 => 'seven/media_library',
            ),
            'tour/tour-styling' => 
            array (
              0 => 'seven/tour-styling',
            ),
          ),
          'quickedit_stylesheets' => 
          array (
            0 => 'css/components/quickedit.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'pre_content' => 'Pre-content',
            'breadcrumb' => 'Breadcrumb',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
        ),
        'version' => '8.8.10',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '8.8.10',
        'description' => 'This platform is running Drupal 8.8.10',
      ),
    ),
    'profiles' => 
    array (
      'social' => 
      array (
        'name' => 'Social',
        'info' => 
        array (
          'name' => 'Social',
          'type' => 'profile',
          'description' => 'Open Social install profile.',
          'core_version_requirement' => '^8.8',
          'version' => '8.x-9.2',
          'project' => 'social',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
            1 => 'drupal:color',
            2 => 'drupal:config',
            3 => 'drupal:node',
            4 => 'drupal:user',
            5 => 'drupal:views',
            6 => 'improved_theme_settings:improved_theme_settings',
            7 => 'social:social_activity',
            8 => 'social:social_core',
            9 => 'social:social_group',
            10 => 'social:social_swiftmail',
            11 => 'social:social_user',
          ),
          'install' => 
          array (
            0 => 'social:social_comment',
            1 => 'social:social_editor',
            2 => 'social:social_event',
            3 => 'social:social_follow_content',
            4 => 'social:social_font',
            5 => 'social:social_group_gvbo',
            6 => 'social:social_like',
            7 => 'social:social_mentions',
            8 => 'social:social_page',
            9 => 'social:social_post',
            10 => 'social:social_post_photo',
            11 => 'social:social_profile',
            12 => 'social:social_queue_storage',
            13 => 'social:social_search',
            14 => 'social:social_topic',
            15 => 'social:social_group_invite',
            16 => 'social:social_group_request',
            17 => 'social:social_event_invite',
          ),
          'themes' => 
          array (
            0 => 'gin',
            1 => 'socialbase',
            2 => 'socialblue',
          ),
          'distribution' => 
          array (
            'name' => 'Open Social',
          ),
          'languages' => 
          array (
            0 => 'en',
            1 => 'gl_gpi',
            2 => 'es_MX_gpi',
            3 => 'it_CH_gpi',
            4 => 'pt-br',
            5 => 'ca_gpi',
            6 => 'es',
            7 => 'es_gpi',
            8 => 'fr_GPI',
            9 => 'en_GB',
            10 => 'de',
            11 => 'fr_CH_gpi',
            12 => 'eu_gpi',
            13 => 'de_CH_gpi',
            14 => 'it',
            15 => 'fr',
            16 => 'nl',
            17 => 'ru',
          ),
        ),
        'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/social.info.yml',
        'path' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social',
        'version' => '8.8.10',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'social' => 
    array (
      'modules' => 
      array (
        'social_path_manager' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_path_manager/social_path_manager.info.yml',
          'basename' => 'social_path_manager.info.yml',
          'name' => 'Social Path Manager',
          'info' => 
          array (
            'name' => 'Social Path Manager',
            'type' => 'module',
            'description' => 'Module for managing path aliases. Currently in an experimental stage. NOTE, This module is a work in progress and has some serious peformance issues still.',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'pathauto:pathauto',
              1 => 'redirect:redirect',
              2 => 'social:social_core',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'group_core_comments' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/group_core_comments/group_core_comments.info.yml',
          'basename' => 'group_core_comments.info.yml',
          'name' => 'Group Core Comments support',
          'info' => 
          array (
            'name' => 'Group Core Comments support',
            'type' => 'module',
            'description' => 'Enables Group functionality for the Comment module',
            'core' => '8.x',
            'package' => 'Group',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'drupal:node',
              2 => 'group:group',
            ),
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'activity_logger' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_logger/activity_logger.info.yml',
          'basename' => 'activity_logger.info.yml',
          'name' => 'Activity Logger',
          'info' => 
          array (
            'name' => 'Activity Logger',
            'type' => 'module',
            'description' => 'Used to log activities based on the message module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:activity_creator',
              1 => 'drupal:block_content',
              2 => 'drupal:comment',
              3 => 'dynamic_entity_reference:dynamic_entity_reference',
              4 => 'drupal:file',
              5 => 'group:group',
              6 => 'drupal:menu_link_content',
              7 => 'message:message',
              8 => 'drupal:node',
              9 => 'drupal:options',
              10 => 'profile:profile',
              11 => 'drupal:taxonomy',
              12 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_demo' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_demo/social_demo.info.yml',
          'basename' => 'social_demo.info.yml',
          'name' => 'Social Demo',
          'info' => 
          array (
            'name' => 'Social Demo',
            'type' => 'module',
            'description' => 'Provides demo content.',
            'core' => '8.x',
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_auth_extra' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_auth_extra/social_auth_extra.info.yml',
          'basename' => 'social_auth_extra.info.yml',
          'name' => 'Social Auth Extra',
          'info' => 
          array (
            'name' => 'Social Auth Extra',
            'type' => 'module',
            'description' => 'Open Social coupling for the Social API Auth module.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_auth',
              1 => 'profile:profile',
            ),
          ),
          'schema_version' => '8002',
          'version' => '8.8.10',
        ),
        'social_gdpr' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_gdpr/social_gdpr.info.yml',
          'basename' => 'social_gdpr.info.yml',
          'name' => 'Social GDPR',
          'info' => 
          array (
            'name' => 'Social GDPR',
            'type' => 'module',
            'description' => 'Integrate Data Policy module.',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'social_gdpr.data_policy.revisions',
            'dependencies' => 
            array (
              0 => 'data_policy:data_policy',
              1 => 'social:social_core',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'sitewide_js' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/sitewide_js/sitewide_js.info.yml',
          'basename' => 'sitewide_js.info.yml',
          'name' => 'Sitewide JS',
          'info' => 
          array (
            'name' => 'Sitewide JS',
            'type' => 'module',
            'description' => 'Module to insert site wide custom JS.',
            'core' => '8.x',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'drupal:options',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_devel' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_devel/social_devel.info.yml',
          'basename' => 'social_devel.info.yml',
          'name' => 'Social Devel',
          'info' => 
          array (
            'name' => 'Social Devel',
            'type' => 'module',
            'description' => 'Social development modules.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'features_ui:features_ui',
              1 => 'config_update:config_update',
              2 => 'config_update_ui:config_update_ui',
              3 => 'devel:devel',
              4 => 'kint:kint',
              5 => 'devel_generate:devel_generate',
              6 => 'drupal:dblog',
              7 => 'drupal:views_ui',
              8 => 'drupal:field_ui',
              9 => 'drupal:contextual',
              10 => 'link_css:link_css',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_auth_google' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_auth_google/social_auth_google.info.yml',
          'basename' => 'social_auth_google.info.yml',
          'name' => 'Social Auth Google',
          'info' => 
          array (
            'name' => 'Social Auth Google',
            'description' => 'Social Auth integration for Google',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_auth_facebook' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_auth_facebook/social_auth_facebook.info.yml',
          'basename' => 'social_auth_facebook.info.yml',
          'name' => 'Social Auth Facebook',
          'info' => 
          array (
            'name' => 'Social Auth Facebook',
            'description' => 'Social Auth integration for Facebook',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_auth_linkedin' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_auth_linkedin/social_auth_linkedin.info.yml',
          'basename' => 'social_auth_linkedin.info.yml',
          'name' => 'Social Auth LinkedIn',
          'info' => 
          array (
            'name' => 'Social Auth LinkedIn',
            'description' => 'Social Auth integration for LinkedIn',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_file_private' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_file_private/social_file_private.info.yml',
          'basename' => 'social_file_private.info.yml',
          'name' => 'Social File Private',
          'info' => 
          array (
            'name' => 'Social File Private',
            'description' => 'Enforces the use of Private Files for content, posts and file uploads (highly recommended!). More info: https://www.drupal.org/docs/8/distributions/open-social/private-files',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:file',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_magic_login' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_magic_login/social_magic_login.info.yml',
          'basename' => 'social_magic_login.info.yml',
          'name' => 'Social Magic login',
          'info' => 
          array (
            'name' => 'Social Magic login',
            'description' => 'Redirect users to a destination while using a magic login link.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'token:token',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'dropdown' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/dropdown/dropdown.info.yml',
          'basename' => 'dropdown.info.yml',
          'name' => 'Dropdown',
          'info' => 
          array (
            'name' => 'Dropdown',
            'type' => 'module',
            'description' => 'Dropdown field.',
            'core' => '8.x',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'drupal:options',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_lets_connect_usage' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_lets_connect/modules/social_lets_connect_usage/social_lets_connect_usage.info.yml',
          'basename' => 'social_lets_connect_usage.info.yml',
          'name' => 'Social Lets Connect Usage',
          'info' => 
          array (
            'name' => 'Social Lets Connect Usage',
            'type' => 'module',
            'description' => 'Share usage data Open Social development team and help us improve the product.',
            'core' => '8.x',
            'package' => 'Social Lets Connect',
            'dependencies' => 
            array (
              0 => 'social_lets_connect',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_lets_connect_contact' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_lets_connect/modules/social_lets_connect_contact/social_lets_connect_contact.info.yml',
          'basename' => 'social_lets_connect_contact.info.yml',
          'name' => 'Social Lets Connect Contact',
          'info' => 
          array (
            'name' => 'Social Lets Connect Contact',
            'type' => 'module',
            'description' => 'Contact the Open Social development team and help us improve the product.',
            'core' => '8.x',
            'package' => 'Social Lets Connect',
            'dependencies' => 
            array (
              0 => 'social_lets_connect',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_lets_connect' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_lets_connect/social_lets_connect.info.yml',
          'basename' => 'social_lets_connect.info.yml',
          'name' => 'Social Lets Connect',
          'info' => 
          array (
            'name' => 'Social Lets Connect',
            'type' => 'module',
            'description' => 'Adds a link to https://www.getopensocial.com in the admin menu.',
            'core' => '8.x',
            'package' => 'Social Lets Connect',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_metatag' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_metatag/social_metatag.info.yml',
          'basename' => 'social_metatag.info.yml',
          'name' => 'Social Metatag',
          'info' => 
          array (
            'name' => 'Social Metatag',
            'description' => 'Implement defaults for the Metatag module',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'metatag:metatag',
              1 => 'metatag:metatag_open_graph',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_queue_storage' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_queue_storage/social_queue_storage.info.yml',
          'basename' => 'social_queue_storage.info.yml',
          'name' => 'Social Queue item Storage',
          'info' => 
          array (
            'name' => 'Social Queue item Storage',
            'type' => 'module',
            'description' => 'Storage for queue item data to be used in processes that run in the background with a long duration.',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'social:activity_logger',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_lazy_loading_images' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_lazy_loading/social_lazy_loading_images/social_lazy_loading_images.info.yml',
          'basename' => 'social_lazy_loading_images.info.yml',
          'name' => 'Social Lazy Loading Image',
          'info' => 
          array (
            'name' => 'Social Lazy Loading Image',
            'type' => 'module',
            'description' => 'Module for lazy loading images using the blazy library.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:lazy',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_lazy_loading' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_lazy_loading/social_lazy_loading.info.yml',
          'basename' => 'social_lazy_loading.info.yml',
          'name' => 'Social Lazy Loading',
          'info' => 
          array (
            'name' => 'Social Lazy Loading',
            'type' => 'module',
            'description' => 'Module for lazy loading content using the blazy library.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'lazy:lazy',
            ),
          ),
          'schema_version' => '8601',
          'version' => '8.8.10',
        ),
        'social_auth_twitter' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_auth_twitter/social_auth_twitter.info.yml',
          'basename' => 'social_auth_twitter.info.yml',
          'name' => 'Social Auth Twitter',
          'info' => 
          array (
            'name' => 'Social Auth Twitter',
            'description' => 'Social Auth integration for Twitter',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'mentions' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/mentions/mentions.info.yml',
          'basename' => 'mentions.info.yml',
          'name' => 'Mentions',
          'info' => 
          array (
            'name' => 'Mentions',
            'type' => 'module',
            'description' => 'Record, render and react to specified patterns within content.',
            'core' => '8.x',
            'package' => 'Filters',
            'configure' => 'entity.mentions_type.list',
            'dependencies' => 
            array (
              0 => 'drupal:filter',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'alternative_frontpage' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/alternative_frontpage/alternative_frontpage.info.yml',
          'basename' => 'alternative_frontpage.info.yml',
          'name' => 'Alternative Frontpage',
          'info' => 
          array (
            'name' => 'Alternative Frontpage',
            'description' => 'Provides an alternative frontpage option for authenticated users via redirect.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'activity_basics' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_basics/activity_basics.info.yml',
          'basename' => 'activity_basics.info.yml',
          'name' => 'Activity Basics',
          'info' => 
          array (
            'name' => 'Activity Basics',
            'type' => 'module',
            'description' => 'Basic implementation of activites in Open Social',
            'core' => '8.x',
            'package' => 'Custom',
            'dependencies' => 
            array (
              0 => 'social:activity_creator',
              1 => 'social:activity_logger',
              2 => 'social:activity_viewer',
              3 => 'drupal:block_content',
              4 => 'drupal:comment',
              5 => 'dynamic_entity_reference:dynamic_entity_reference',
              6 => 'drupal:field',
              7 => 'drupal:file',
              8 => 'group:group',
              9 => 'drupal:menu_link_content',
              10 => 'message:message',
              11 => 'drupal:node',
              12 => 'drupal:options',
              13 => 'profile:profile',
              14 => 'drupal:taxonomy',
              15 => 'token:token',
              16 => 'drupal:text',
              17 => 'drupal:user',
            ),
          ),
          'schema_version' => '8103',
          'version' => '8.8.10',
        ),
        'template_suggestions_extra' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/template_suggestions_extra/template_suggestions_extra.info.yml',
          'basename' => 'template_suggestions_extra.info.yml',
          'name' => 'template_suggestions_extra',
          'info' => 
          array (
            'name' => 'template_suggestions_extra',
            'type' => 'module',
            'description' => 'Add extra useful template suggestsions',
            'core' => '8.x',
            'package' => 'Custom',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_font' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_font/social_font.info.yml',
          'basename' => 'social_font.info.yml',
          'name' => 'Social Font',
          'info' => 
          array (
            'name' => 'Social Font',
            'type' => 'module',
            'description' => 'Social font module',
            'core' => '8.x',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'activity_send_push_notification' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_send/modules/activity_send_push_notification/activity_send_push_notification.info.yml',
          'basename' => 'activity_send_push_notification.info.yml',
          'name' => 'Activity Send Push Notification',
          'info' => 
          array (
            'name' => 'Activity Send Push Notification',
            'type' => 'module',
            'description' => 'Used to send activity notifications by Push service',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:activity_send',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'activity_send_email' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_send/modules/activity_send_email/activity_send_email.info.yml',
          'basename' => 'activity_send_email.info.yml',
          'name' => 'Activity Send Email',
          'info' => 
          array (
            'name' => 'Activity Send Email',
            'type' => 'module',
            'description' => 'Used to send activity notifications by Email',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:activity_send',
            ),
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'activity_send' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_send/activity_send.info.yml',
          'basename' => 'activity_send.info.yml',
          'name' => 'Activity Send',
          'info' => 
          array (
            'name' => 'Activity Send',
            'type' => 'module',
            'description' => 'Used to store and manage external notifications',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'activity_send.settings',
            'dependencies' => 
            array (
              0 => 'social:activity_basics',
            ),
          ),
          'schema_version' => '8002',
          'version' => '8.8.10',
        ),
        'social_ajax_comments' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_ajax_comments/social_ajax_comments.info.yml',
          'basename' => 'social_ajax_comments.info.yml',
          'name' => 'Social Ajax Comments',
          'info' => 
          array (
            'name' => 'Social Ajax Comments',
            'type' => 'module',
            'description' => 'Integration with Ajax Comments.',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'ajax_comments:ajax_comments',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_content_translation' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_language/modules/social_content_translation/social_content_translation.info.yml',
          'basename' => 'social_content_translation.info.yml',
          'name' => 'Social Language - Content Translation',
          'info' => 
          array (
            'name' => 'Social Language - Content Translation',
            'type' => 'module',
            'description' => 'Enables translation of static site content (such as Basic Pages, Landing Pages and Book Pages).',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'social:social_language',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_language' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_language/social_language.info.yml',
          'basename' => 'social_language.info.yml',
          'name' => 'Social Language',
          'info' => 
          array (
            'name' => 'Social Language',
            'type' => 'module',
            'description' => 'Support for multilingual interface translations.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:config_translation',
              1 => 'drupal:content_translation',
              2 => 'drupal:language',
              3 => 'drupal:locale',
            ),
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'improved_theme_settings' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/improved_theme_settings/improved_theme_settings.info.yml',
          'basename' => 'improved_theme_settings.info.yml',
          'name' => 'Improved Theme Settings',
          'info' => 
          array (
            'name' => 'Improved Theme Settings',
            'type' => 'module',
            'description' => 'Makes the theme pages a bit UI friendly for people with the permissions.',
            'core' => '8.x',
            'package' => 'Custom',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'activity_viewer' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_viewer/activity_viewer.info.yml',
          'basename' => 'activity_viewer.info.yml',
          'name' => 'Activity Viewer',
          'info' => 
          array (
            'name' => 'Activity Viewer',
            'type' => 'module',
            'description' => 'Used to display activities with support for views',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:activity_creator',
              1 => 'social:activity_logger',
              2 => 'drupal:block_content',
              3 => 'drupal:comment',
              4 => 'dynamic_entity_reference:dynamic_entity_reference',
              5 => 'drupal:file',
              6 => 'group:group',
              7 => 'drupal:menu_link_content',
              8 => 'message:message',
              9 => 'drupal:node',
              10 => 'drupal:options',
              11 => 'profile:profile',
              12 => 'drupal:taxonomy',
              13 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'entity_access_by_field' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/entity_access_by_field/entity_access_by_field.info.yml',
          'basename' => 'entity_access_by_field.info.yml',
          'name' => 'Entity Access By Field',
          'info' => 
          array (
            'name' => 'Entity Access By Field',
            'type' => 'module',
            'description' => 'Enables site-builders to create custom view permissions for entities based on field values in the entity_access field.',
            'core' => '8.x',
            'package' => 'Custom',
          ),
          'schema_version' => '8003',
          'version' => '8.8.10',
        ),
        'social_tour' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_tour/social_tour.info.yml',
          'basename' => 'social_tour.info.yml',
          'name' => 'Social Tour',
          'info' => 
          array (
            'name' => 'Social Tour',
            'description' => 'The tour specific feature settings for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:tour',
            ),
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'download_count' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/download_count/download_count.info.yml',
          'basename' => 'download_count.info.yml',
          'name' => 'Download Count',
          'info' => 
          array (
            'name' => 'Download Count',
            'type' => 'module',
            'description' => 'Tracks file downloads for Drupal private core file fields.',
            'dependencies' => 
            array (
              0 => 'drupal:field',
              1 => 'drupal:file',
            ),
            'core' => '8.x',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'activity_creator' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/activity_creator/activity_creator.info.yml',
          'basename' => 'activity_creator.info.yml',
          'name' => 'Activity Creator',
          'info' => 
          array (
            'name' => 'Activity Creator',
            'type' => 'module',
            'description' => 'Creates Activity Entities.',
            'core' => '8.x',
            'package' => 'Custom',
            'dependencies' => 
            array (
              0 => 'drupal:block_content',
              1 => 'drupal:comment',
              2 => 'dynamic_entity_reference:dynamic_entity_reference',
              3 => 'drupal:file',
              4 => 'group:group',
              5 => 'drupal:menu_link_content',
              6 => 'message:message',
              7 => 'drupal:node',
              8 => 'drupal:options',
              9 => 'profile:profile',
              10 => 'drupal:taxonomy',
              11 => 'drupal:user',
              12 => 'social:social_editor',
            ),
          ),
          'schema_version' => '8802',
          'version' => '8.8.10',
        ),
        'social_node_statistics' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_node_statistics/social_node_statistics.info.yml',
          'basename' => 'social_node_statistics.info.yml',
          'name' => 'Social Node Statistics',
          'info' => 
          array (
            'name' => 'Social Node Statistics',
            'description' => 'Tracks views for nodes.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_admin_menu' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_admin_menu/social_admin_menu.info.yml',
          'basename' => 'social_admin_menu.info.yml',
          'name' => 'Social Admin Menu',
          'info' => 
          array (
            'name' => 'Social Admin Menu',
            'type' => 'module',
            'description' => 'Social Admin Menu enhancements.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:toolbar',
              1 => 'admin_toolbar:admin_toolbar',
              2 => 'admin_toolbar_tools:admin_toolbar_tools',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_react' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/custom/social_react/social_react.info.yml',
          'basename' => 'social_react.info.yml',
          'name' => 'Social React',
          'info' => 
          array (
            'name' => 'Social React',
            'description' => 'Provides the React library for use by other modules. This module should not be enabled on its own.
Other modules that require React should not load React themselves but instead depend on this module. The libraries in those modules should depend on the React library contained in this module to ensure React is properly loaded.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_embed' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_embed/social_embed.info.yml',
          'basename' => 'social_embed.info.yml',
          'name' => 'Social Embed',
          'info' => 
          array (
            'name' => 'Social Embed',
            'type' => 'module',
            'description' => 'Module for embedding social media links. Currently in an experimental stage. NOTE, This module is a work in progress and has some serious peformance issues still.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'embed:embed',
              1 => 'url_embed:url_embed',
              2 => 'social:social_editor',
            ),
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_page' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_page/social_page.info.yml',
          'basename' => 'social_page.info.yml',
          'name' => 'Social Page',
          'info' => 
          array (
            'name' => 'Social Page',
            'description' => 'Provide basic pages content type for your static content, such as an About us page.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'social:entity_access_by_field',
              2 => 'drupal:field',
              3 => 'field_group:field_group',
              4 => 'drupal:file',
              5 => 'drupal:image',
              6 => 'image_widget_crop:image_widget_crop',
              7 => 'drupal:menu_ui',
              8 => 'drupal:options',
              9 => 'drupal:path',
              10 => 'social:social_comment',
              11 => 'social:social_node',
              12 => 'social:social_event',
              13 => 'drupal:text',
              14 => 'drupal:user',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8002',
          'version' => '8.8.10',
        ),
        'social_profile_privacy' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_profile/modules/social_profile_privacy/social_profile_privacy.info.yml',
          'basename' => 'social_profile_privacy.info.yml',
          'name' => 'Social Profile Privacy',
          'info' => 
          array (
            'name' => 'Social Profile Privacy',
            'description' => 'Provides ability to set visibility of profile fields',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'social_profile.settings',
            'dependencies' => 
            array (
              0 => 'social:social_profile',
              1 => 'social:social_search',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_profile_fields' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_profile/modules/social_profile_fields/social_profile_fields.info.yml',
          'basename' => 'social_profile_fields.info.yml',
          'name' => 'Social Profile Fields',
          'info' => 
          array (
            'name' => 'Social Profile Fields',
            'description' => 'Provides hiding fields on a per profile_type basis',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'social_profile_fields.settings',
            'dependencies' => 
            array (
              0 => 'drupal:user',
              1 => 'social:social_profile',
            ),
          ),
          'schema_version' => '8002',
          'version' => '8.8.10',
        ),
        'social_profile_organization_tag' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_profile/modules/social_profile_organization_tag/social_profile_organization_tag.info.yml',
          'basename' => 'social_profile_organization_tag.info.yml',
          'name' => 'Social Profile Organization Tag',
          'info' => 
          array (
            'name' => 'Social Profile Organization Tag',
            'description' => 'Provides Profile Organization Tag field and vocabulary',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_profile',
              1 => 'drupal:taxonomy',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_profile_manager_notes' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_profile/modules/social_profile_manager_notes/social_profile_manager_notes.info.yml',
          'basename' => 'social_profile_manager_notes.info.yml',
          'name' => 'Social Profile Manager Notes',
          'info' => 
          array (
            'name' => 'Social Profile Manager Notes',
            'description' => 'Provides profile notes that can created by Managers',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'drupal:user',
              1 => 'social:social_profile',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_profile' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_profile/social_profile.info.yml',
          'basename' => 'social_profile.info.yml',
          'name' => 'Social Profile',
          'info' => 
          array (
            'name' => 'Social Profile',
            'description' => 'Provides user profiles.',
            'type' => 'module',
            'core' => '8.x',
            'configure' => 'social_profile.settings',
            'dependencies' => 
            array (
              0 => 'address:address',
              1 => 'drupal:block',
              2 => 'drupal:field',
              3 => 'field_group:field_group',
              4 => 'drupal:file',
              5 => 'drupal:image',
              6 => 'image_widget_crop:image_widget_crop',
              7 => 'profile:profile',
              8 => 'social:social_core',
              9 => 'social:social_editor',
              10 => 'drupal:taxonomy',
              11 => 'drupal:telephone',
              12 => 'drupal:text',
              13 => 'drupal:user',
              14 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8802',
          'version' => '8.8.10',
        ),
        'social_post_photo' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_post/modules/social_post_photo/social_post_photo.info.yml',
          'basename' => 'social_post_photo.info.yml',
          'name' => 'Social Post Photo',
          'info' => 
          array (
            'name' => 'Social Post Photo',
            'description' => 'Provides an new post type bundle.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'social:dropdown',
              2 => 'drupal:field',
              3 => 'drupal:file',
              4 => 'drupal:image',
              5 => 'image_effects:image_effects',
              6 => 'social:social_post',
              7 => 'drupal:text',
              8 => 'drupal:user',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_post' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_post/social_post.info.yml',
          'basename' => 'social_post.info.yml',
          'name' => 'Social Post',
          'info' => 
          array (
            'name' => 'Social Post',
            'description' => 'Provides Post functionality for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:comment',
              2 => 'social:dropdown',
              3 => 'drupal:field',
              4 => 'group:group',
              5 => 'drupal:options',
              6 => 'social:social_comment',
              7 => 'drupal:text',
              8 => 'drupal:user',
              9 => 'drupal:views',
              10 => 'social:activity_creator',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8901',
          'version' => '8.8.10',
        ),
        'social_sharing' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_sharing/social_sharing.info.yml',
          'basename' => 'social_sharing.info.yml',
          'name' => 'Social Sharing',
          'info' => 
          array (
            'name' => 'Social Sharing',
            'description' => 'Provides sharing of content to social media.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:shariff',
              1 => 'drupal:block',
              2 => 'drupal:node',
              3 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_user' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_user/social_user.info.yml',
          'basename' => 'social_user.info.yml',
          'name' => 'Social User',
          'info' => 
          array (
            'name' => 'Social User',
            'description' => 'Provides User related configuration.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:user',
              2 => 'drupal:views',
              3 => 'field_group:field_group',
              4 => 'group:group',
              5 => 'profile:profile',
              6 => 'social:social_editor',
              7 => 'social:social_profile',
              8 => 'role_delegation:role_delegation',
              9 => 'views_bulk_operations:views_bulk_operations',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8810',
          'version' => '8.8.10',
        ),
        'social_mentions' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_mentions/social_mentions.info.yml',
          'basename' => 'social_mentions.info.yml',
          'name' => 'Social Mentions',
          'info' => 
          array (
            'name' => 'Social Mentions',
            'description' => 'Provide mentions feature for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:activity_logger',
              1 => 'dynamic_entity_reference:dynamic_entity_reference',
              2 => 'drupal:field',
              3 => 'drupal:image',
              4 => 'social:mentions',
              5 => 'message:message',
              6 => 'drupal:options',
              7 => 'profile:profile',
              8 => 'social:social_core',
              9 => 'social:social_editor',
              10 => 'social:social_profile',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_landing_page' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_landing_page/social_landing_page.info.yml',
          'basename' => 'social_landing_page.info.yml',
          'name' => 'Social Landing Page',
          'info' => 
          array (
            'name' => 'Social Landing Page',
            'type' => 'module',
            'description' => 'Provides landing page content type for dynamic content, such as a home page.',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'activity_creator:activity_creator',
              1 => 'activity_creator:activity_viewer',
              2 => 'address:address',
              3 => 'block_field:block_field',
              4 => 'crop:crop',
              5 => 'drupal:field',
              6 => 'drupal:file',
              7 => 'drupal:image',
              8 => 'drupal:link',
              9 => 'drupal:menu_ui',
              10 => 'drupal:options',
              11 => 'drupal:path',
              12 => 'drupal:text',
              13 => 'drupal:user',
              14 => 'drupal:views',
              15 => 'dynamic_entity_reference:dynamic_entity_reference',
              16 => 'social:entity_access_by_field',
              17 => 'entity_reference_revisions:entity_reference_revisions',
              18 => 'field_group:field_group',
              19 => 'group:group',
              20 => 'image_effects:image_effects',
              21 => 'image_widget_crop:image_widget_crop',
              22 => 'paragraphs:paragraphs',
              23 => 'social:social_node',
              24 => 'social:social_event',
              25 => 'social:social_featured_content',
              26 => 'social:social_featured_items',
              27 => 'social:social_group',
              28 => 'social:social_page',
              29 => 'social:social_post',
              30 => 'social:social_profile',
              31 => 'social:social_topic',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8808',
          'version' => '8.8.10',
        ),
        'social_core' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_core/social_core.info.yml',
          'basename' => 'social_core.info.yml',
          'name' => 'Social Core',
          'info' => 
          array (
            'name' => 'Social Core',
            'description' => 'Provides core components required by other features.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'admin_toolbar_tools:admin_toolbar_tools',
              1 => 'drupal:block',
              2 => 'drupal:block_content',
              3 => 'crop:crop',
              4 => 'drupal:field',
              5 => 'field_group:field_group',
              6 => 'drupal:file',
              7 => 'drupal:image',
              8 => 'image_effects:image_effects',
              9 => 'image_widget_crop:image_widget_crop',
              10 => 'drupal:link',
              11 => 'drupal:node',
              12 => 'override_node_options:override_node_options',
              13 => 'r4032login:r4032login',
              14 => 'social:template_suggestions_extra',
              15 => 'drupal:text',
              16 => 'drupal:user',
              17 => 'drupal:views',
              18 => 'drupal:select2',
              19 => 'exif_orientation:exif_orientation',
              20 => 'social:social_editor',
              21 => 'update_helper:update_helper',
              22 => 'views_bulk_operations:views_bulk_operations',
              23 => 'gin_toolbar:gin_toolbar',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8901',
          'version' => '8.8.10',
        ),
        'social_group_invite' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_invite/social_group_invite.info.yml',
          'basename' => 'social_group_invite.info.yml',
          'name' => 'Social Group Invite',
          'info' => 
          array (
            'name' => 'Social Group Invite',
            'description' => 'Provides Group Invite member feature.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'group:group',
              1 => 'group:ginvite',
              2 => 'social:social_group',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8005',
          'version' => '8.8.10',
        ),
        'social_group_secret' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_secret/social_group_secret.info.yml',
          'basename' => 'social_group_secret.info.yml',
          'name' => 'Social Secret Group',
          'info' => 
          array (
            'name' => 'Social Secret Group',
            'description' => 'Adds Secret Group as a group type.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_group',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8801',
          'version' => '8.8.10',
        ),
        'social_flexible_group_featured' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_flexible_group/modules/social_flexible_group_featured/social_flexible_group_featured.info.yml',
          'basename' => 'social_flexible_group_featured.info.yml',
          'name' => 'Social Flexible Group on Landing pages',
          'info' => 
          array (
            'name' => 'Social Flexible Group on Landing pages',
            'description' => 'Provides a flexible Group featured view mode for use on landing pages.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_group_flexible_group',
              1 => 'social:social_landing_page',
            ),
            'package' => 'Social',
            'core_incompatible' => false,
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_flexible_group' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_flexible_group/social_group_flexible_group.info.yml',
          'basename' => 'social_group_flexible_group.info.yml',
          'name' => 'Social Flexible Group',
          'info' => 
          array (
            'name' => 'Social Flexible Group',
            'description' => 'Provides a flexible Group feature allowing members to configure the group to their liking.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'address',
              1 => 'field',
              2 => 'field_group',
              3 => 'gnode',
              4 => 'group',
              5 => 'image',
              6 => 'image_widget_crop',
              7 => 'node',
              8 => 'options',
              9 => 'path',
              10 => 'social:social_group',
              11 => 'social_core',
              12 => 'social_event',
              13 => 'social_group',
              14 => 'social_topic',
              15 => 'text',
              16 => 'user',
            ),
            'package' => 'Social',
            'core_incompatible' => false,
          ),
          'schema_version' => '8802',
          'version' => '8.8.10',
        ),
        'social_group_request' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_request/social_group_request.info.yml',
          'basename' => 'social_group_request.info.yml',
          'name' => 'Social Group request',
          'info' => 
          array (
            'name' => 'Social Group request',
            'type' => 'module',
            'description' => 'Allows users to request access to Groups',
            'package' => 'Social',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'group:group',
              1 => 'grequest:grequest',
              2 => 'social:social_group',
              3 => 'social:social_activity',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_default_route' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_default_route/social_group_default_route.info.yml',
          'basename' => 'social_group_default_route.info.yml',
          'name' => 'Social Group Default Route',
          'info' => 
          array (
            'name' => 'Social Group Default Route',
            'type' => 'module',
            'description' => 'This module allows group managers to set the default routes on a group for member and non-members.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_group',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_welcome_message' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_welcome_message/social_group_welcome_message.info.yml',
          'basename' => 'social_group_welcome_message.info.yml',
          'name' => 'Social Group Welcome Message',
          'info' => 
          array (
            'name' => 'Social Group Welcome Message',
            'description' => 'Implements group welcome message functionality.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_editor',
              1 => 'social:social_group',
              2 => 'social:social_private_message',
            ),
            'package' => 'Social (experimental)',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_quickjoin' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_quickjoin/social_group_quickjoin.info.yml',
          'basename' => 'social_group_quickjoin.info.yml',
          'name' => 'Social Group Quickjoin',
          'info' => 
          array (
            'name' => 'Social Group Quickjoin',
            'description' => 'Allows users to skip confirmation when joining a group.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_group',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_gvbo' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_gvbo/social_group_gvbo.info.yml',
          'basename' => 'social_group_gvbo.info.yml',
          'name' => 'Social Group VBO integration with Groups and Open Social',
          'info' => 
          array (
            'name' => 'Social Group VBO integration with Groups and Open Social',
            'description' => 'Adds ability to act on Group Content.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_group',
              1 => 'group:gvbo',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_members_export' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/modules/social_group_members_export/social_group_members_export.info.yml',
          'basename' => 'social_group_members_export.info.yml',
          'name' => 'Social Group Members Export',
          'info' => 
          array (
            'name' => 'Social Group Members Export',
            'description' => 'Adds ability to export group members to a CSV.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_group',
              1 => 'social:social_group_gvbo',
              2 => 'social:social_user_export',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_group/social_group.info.yml',
          'basename' => 'social_group.info.yml',
          'name' => 'Social Group',
          'info' => 
          array (
            'name' => 'Social Group',
            'description' => 'Provides Group feature.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'address:address',
              1 => 'drupal:block',
              2 => 'drupal:datetime',
              3 => 'drupal:field',
              4 => 'field_group:field_group',
              5 => 'drupal:file',
              6 => 'gnode:gnode',
              7 => 'group:group',
              8 => 'group:gvbo',
              9 => 'drupal:image',
              10 => 'image_widget_crop:image_widget_crop',
              11 => 'drupal:node',
              12 => 'drupal:path',
              13 => 'profile:profile',
              14 => 'social:activity_creator',
              15 => 'social:social_core',
              16 => 'social:social_editor',
              17 => 'social:social_event',
              18 => 'social:social_profile',
              19 => 'social:social_topic',
              20 => 'drupal:taxonomy',
              21 => 'drupal:text',
              22 => 'drupal:user',
              23 => 'drupal:views',
              24 => 'views_bulk_operations:views_bulk_operations',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8902',
          'version' => '8.8.10',
        ),
        'social_comment' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_comment/social_comment.info.yml',
          'basename' => 'social_comment.info.yml',
          'name' => 'Social Comment',
          'info' => 
          array (
            'name' => 'Social Comment',
            'description' => 'Provides deafult comment type and related configuration',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'social:activity_creator',
              2 => 'social:social_core',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8901',
          'version' => '8.8.10',
        ),
        'social_activity' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_activity/social_activity.info.yml',
          'basename' => 'social_activity.info.yml',
          'name' => 'Social Activity',
          'info' => 
          array (
            'name' => 'Social Activity',
            'description' => 'Provides activity stream for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:activity_basics',
              1 => 'social:activity_send_email',
              2 => 'drupal:block',
              3 => 'drupal:block_content',
              4 => 'drupal:comment',
              5 => 'crop:crop',
              6 => 'dynamic_entity_reference:dynamic_entity_reference',
              7 => 'drupal:field',
              8 => 'drupal:file',
              9 => 'flag:flag',
              10 => 'group:group',
              11 => 'social:mentions',
              12 => 'drupal:menu_link_content',
              13 => 'message:message',
              14 => 'drupal:node',
              15 => 'drupal:options',
              16 => 'profile:profile',
              17 => 'search_api:search_api',
              18 => 'social:social_comment',
              19 => 'social:social_editor',
              20 => 'social:social_event',
              21 => 'social:social_font',
              22 => 'social:social_group',
              23 => 'social:social_post',
              24 => 'social:social_topic',
              25 => 'social:social_queue_storage',
              26 => 'drupal:taxonomy',
              27 => 'drupal:text',
              28 => 'drupal:user',
              29 => 'drupal:views',
              30 => 'votingapi:votingapi',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8803',
          'version' => '8.8.10',
        ),
        'social_book_featured' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_book/modules/social_book_featured/social_book_featured.info.yml',
          'basename' => 'social_book_featured.info.yml',
          'name' => 'Social Book on Landing pages',
          'info' => 
          array (
            'name' => 'Social Book on Landing pages',
            'description' => 'Provides a book featured view mode for use on landing pages.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_book',
              1 => 'social:social_landing_page',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_book' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_book/social_book.info.yml',
          'basename' => 'social_book.info.yml',
          'name' => 'Social Book',
          'info' => 
          array (
            'name' => 'Social Book',
            'description' => 'Provides book feature.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:book',
              2 => 'drupal:comment',
              3 => 'social:entity_access_by_field',
              4 => 'drupal:field',
              5 => 'field_group:field_group',
              6 => 'drupal:file',
              7 => 'social:group_core_comments',
              8 => 'drupal:image',
              9 => 'drupal:options',
              10 => 'drupal:path',
              11 => 'social:social_core',
              12 => 'social:social_node',
              13 => 'social:social_event',
              14 => 'drupal:text',
              15 => 'drupal:user',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8803',
          'version' => '8.8.10',
        ),
        'social_swiftmail' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_swiftmail/social_swiftmail.info.yml',
          'basename' => 'social_swiftmail.info.yml',
          'name' => 'Social Swiftmailer',
          'info' => 
          array (
            'name' => 'Social Swiftmailer',
            'type' => 'module',
            'description' => 'Social Swiftmailer implementation',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'swiftmailer:swiftmailer',
              1 => 'mailsystem:mailsystem',
              2 => 'social:social_editor',
            ),
          ),
          'schema_version' => '8003',
          'version' => '8.8.10',
        ),
        'social_editor' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_editor/social_editor.info.yml',
          'basename' => 'social_editor.info.yml',
          'name' => 'Social Editor',
          'info' => 
          array (
            'name' => 'Social Editor',
            'description' => 'Provides site editor components.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:ckeditor',
              1 => 'drupal:editor',
              2 => 'drupal:filter',
              3 => 'editor_advanced_link:editor_advanced_link',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8902',
          'version' => '8.8.10',
        ),
        'social_private_message' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_private_message/social_private_message.info.yml',
          'basename' => 'social_private_message.info.yml',
          'name' => 'Social Private Message',
          'info' => 
          array (
            'name' => 'Social Private Message',
            'type' => 'module',
            'description' => 'Allow users to send private messages to each other',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'private_message:private_message',
              1 => 'social:social_editor',
              2 => 'social:social_profile',
            ),
          ),
          'schema_version' => '8802',
          'version' => '8.8.10',
        ),
        'social_sso' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_sso/social_sso.info.yml',
          'basename' => 'social_sso.info.yml',
          'name' => 'Social SSO',
          'info' => 
          array (
            'name' => 'Social SSO',
            'type' => 'module',
            'description' => 'Provides autorizathion with social networks for Open Social',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_user_export' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_user_export/social_user_export.info.yml',
          'basename' => 'social_user_export.info.yml',
          'name' => 'Social User Export',
          'info' => 
          array (
            'name' => 'Social User Export',
            'description' => 'Adds ability to export users to a CSV.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:user',
              1 => 'csv_serialization:csv_serialization',
              2 => 'social:social_profile',
              3 => 'profile:profile',
              4 => 'views_bulk_operations',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_topic' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_topic/social_topic.info.yml',
          'basename' => 'social_topic.info.yml',
          'name' => 'Social Topic',
          'info' => 
          array (
            'name' => 'Social Topic',
            'description' => 'Provides Topic content type and related configuration. ',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:comment',
              2 => 'social:entity_access_by_field',
              3 => 'drupal:field',
              4 => 'field_group:field_group',
              5 => 'drupal:file',
              6 => 'group:group',
              7 => 'social:group_core_comments',
              8 => 'drupal:image',
              9 => 'image_widget_crop:image_widget_crop',
              10 => 'drupal:menu_ui',
              11 => 'drupal:options',
              12 => 'drupal:path',
              13 => 'social:social_comment',
              14 => 'social:social_editor',
              15 => 'social:social_node',
              16 => 'social:social_event',
              17 => 'drupal:taxonomy',
              18 => 'drupal:text',
              19 => 'drupal:user',
              20 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8901',
          'version' => '8.8.10',
        ),
        'social_download_count' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_download_count/social_download_count.info.yml',
          'basename' => 'social_download_count.info.yml',
          'name' => 'Social Download Count',
          'info' => 
          array (
            'name' => 'Social Download Count',
            'description' => 'Tracks file downloads for Drupal private core file fields for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:download_count',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_event_invite' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_invite/social_event_invite.info.yml',
          'basename' => 'social_event_invite.info.yml',
          'name' => 'Social Event Invite Enrolments',
          'info' => 
          array (
            'name' => 'Social Event Invite Enrolments',
            'description' => 'Provides ability to invite enroll to an event.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_event',
              1 => 'social:social_event_managers',
            ),
          ),
          'schema_version' => '8005',
          'version' => '8.8.10',
        ),
        'social_event_type' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_type/social_event_type.info.yml',
          'basename' => 'social_event_type.info.yml',
          'name' => 'Social Event Type',
          'info' => 
          array (
            'name' => 'Social Event Type',
            'description' => 'Provides and event types taxonomy for the event content type.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_event',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_event_max_enroll' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_max_enroll/social_event_max_enroll.info.yml',
          'basename' => 'social_event_max_enroll.info.yml',
          'name' => 'Social Event Max Enroll',
          'info' => 
          array (
            'name' => 'Social Event Max Enroll',
            'description' => 'Allow setting the maximum participant number for events.',
            'type' => 'module',
            'core' => '8.x',
            'configure' => 'social_event_max_enroll.settings',
            'dependencies' => 
            array (
              0 => 'social:social_event',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_event_enrolments_export' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_enrolments_export/social_event_enrolments_export.info.yml',
          'basename' => 'social_event_enrolments_export.info.yml',
          'name' => 'Social Event Enrolments Export',
          'info' => 
          array (
            'name' => 'Social Event Enrolments Export',
            'description' => 'Adds ability to export event enrolments to a CSV.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_event',
              1 => 'social:social_user_export',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_event_an_enroll' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_an_enroll/social_event_an_enroll.info.yml',
          'basename' => 'social_event_an_enroll.info.yml',
          'name' => 'Social Event Anonymous Enrolments',
          'info' => 
          array (
            'name' => 'Social Event Anonymous Enrolments',
            'description' => 'Provides ability to enroll to an event without having to create an account.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_editor',
              1 => 'social:social_event_managers',
            ),
          ),
          'schema_version' => '8004',
          'version' => '8.8.10',
        ),
        'social_event_managers' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_managers/social_event_managers.info.yml',
          'basename' => 'social_event_managers.info.yml',
          'name' => 'Social Event Organisers',
          'info' => 
          array (
            'name' => 'Social Event Organisers',
            'type' => 'module',
            'description' => 'Social Event Organisers',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:field',
              2 => 'drupal:node',
              3 => 'drupal:options',
              4 => 'drupal:profile',
              5 => 'social:social_editor',
              6 => 'social:social_event',
              7 => 'social:social_profile',
              8 => 'social:social_user',
              9 => 'drupal:views',
              10 => 'views_bulk_operations:views_bulk_operations',
            ),
          ),
          'schema_version' => '8004',
          'version' => '8.8.10',
        ),
        'social_event_an_enroll_enrolments_export' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_an_enroll_enrolments_export/social_event_an_enroll_enrolments_export.info.yml',
          'basename' => 'social_event_an_enroll_enrolments_export.info.yml',
          'name' => 'Social Event Anonymous Enrolments Export',
          'info' => 
          array (
            'name' => 'Social Event Anonymous Enrolments Export',
            'description' => 'Adds ability to export event enrolments (include guests) to a CSV.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social:social_event_an_enroll',
              1 => 'social:social_event_enrolments_export',
              2 => 'social:social_event_managers',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_event' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_event/social_event.info.yml',
          'basename' => 'social_event.info.yml',
          'name' => 'Social Event',
          'info' => 
          array (
            'name' => 'Social Event',
            'description' => 'Provides Event content type and related configuration. ',
            'type' => 'module',
            'core' => '8.x',
            'configure' => 'social_event.settings',
            'dependencies' => 
            array (
              0 => 'address:address',
              1 => 'drupal:block',
              2 => 'drupal:comment',
              3 => 'drupal:datetime',
              4 => 'social:entity_access_by_field',
              5 => 'drupal:field',
              6 => 'drupal:file',
              7 => 'drupal:image',
              8 => 'drupal:menu_ui',
              9 => 'drupal:options',
              10 => 'drupal:path',
              11 => 'profile:profile',
              12 => 'social:social_comment',
              13 => 'social:social_core',
              14 => 'social:social_node',
              15 => 'social:social_profile',
              16 => 'drupal:text',
              17 => 'drupal:user',
              18 => 'drupal:views',
              19 => 'entity_access_by_field:entity_access_by_field',
              20 => 'field_group:field_group',
              21 => 'group:group',
              22 => 'group_core_comments:group_core_comments',
              23 => 'image_widget_crop:image_widget_crop',
              24 => 'profile:profile',
              25 => 'social:social_editor',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8904',
          'version' => '8.8.10',
        ),
        'social_event_content_block' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_content_block/modules/social_event_content_block/social_event_content_block.info.yml',
          'basename' => 'social_event_content_block.info.yml',
          'name' => 'Social Event Content Block',
          'info' => 
          array (
            'name' => 'Social Event Content Block',
            'description' => 'Provides a content block for events.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_content_block',
              1 => 'social:social_event',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8002',
          'version' => '8.8.10',
        ),
        'social_content_block_landing_page' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_content_block/modules/social_content_block_landing_page/social_content_block_landing_page.info.yml',
          'basename' => 'social_content_block_landing_page.info.yml',
          'name' => 'Social Content Block on Landing pages',
          'info' => 
          array (
            'name' => 'Social Content Block on Landing pages',
            'description' => 'Provides "Custom content list block" paragraphs type for landing pages.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_content_block',
              1 => 'social:social_landing_page',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_group_content_block' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_content_block/modules/social_group_content_block/social_group_content_block.info.yml',
          'basename' => 'social_group_content_block.info.yml',
          'name' => 'Social Group Content Block',
          'info' => 
          array (
            'name' => 'Social Group Content Block',
            'description' => 'Provides a content block for groups.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:social_content_block',
              1 => 'social:social_group',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_content_block' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_content_block/social_content_block.info.yml',
          'basename' => 'social_content_block.info.yml',
          'name' => 'Social Content Block',
          'info' => 
          array (
            'name' => 'Social Content Block',
            'type' => 'module',
            'description' => 'A custom block to generate a list of content dynamically according to specific filters.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:entity_reference',
              2 => 'drupal:link',
              3 => 'drupal:options',
              4 => 'field_group:field_group',
              5 => 'social_tagging:social_tagging',
              6 => 'social:social_core',
            ),
          ),
          'schema_version' => '8801',
          'version' => '8.8.10',
        ),
        'social_follow_content' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_follow_content/social_follow_content.info.yml',
          'basename' => 'social_follow_content.info.yml',
          'name' => 'Social Follow Content',
          'info' => 
          array (
            'name' => 'Social Follow Content',
            'description' => 'Provides "Follow Content" flag type and related functionality.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:activity_logger',
              1 => 'drupal:block',
              2 => 'drupal:field',
              3 => 'drupal:node',
              4 => 'drupal:options',
              5 => 'drupal:user',
              6 => 'drupal:views',
              7 => 'dynamic_entity_reference:dynamic_entity_reference',
              8 => 'flag:flag',
              9 => 'message:message',
              10 => 'profile:profile',
              11 => 'social:social_editor',
              12 => 'social:social_event',
              13 => 'social:social_page',
              14 => 'social:social_topic',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_like' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_like/social_like.info.yml',
          'basename' => 'social_like.info.yml',
          'name' => 'Social Like',
          'info' => 
          array (
            'name' => 'Social Like',
            'description' => 'Provides Like voting functionality for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social:activity_logger',
              1 => 'drupal:block',
              2 => 'dynamic_entity_reference:dynamic_entity_reference',
              3 => 'drupal:field',
              4 => 'drupal:file',
              5 => 'social:group_core_comments',
              6 => 'like_and_dislike:like_and_dislike',
              7 => 'message:message',
              8 => 'drupal:node',
              9 => 'drupal:options',
              10 => 'profile:profile',
              11 => 'social:social_comment',
              12 => 'social:social_editor',
              13 => 'social:social_post',
              14 => 'social:social_profile',
              15 => 'social:social_topic',
              16 => 'drupal:text',
              17 => 'drupal:user',
              18 => 'drupal:views',
              19 => 'views_infinite_scroll:views_infinite_scroll',
              20 => 'votingapi:votingapi',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8005',
          'version' => '8.8.10',
        ),
        'social_tagging' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_tagging/social_tagging.info.yml',
          'basename' => 'social_tagging.info.yml',
          'name' => 'Social Tagging',
          'info' => 
          array (
            'name' => 'Social Tagging',
            'type' => 'module',
            'description' => 'Content tagging module',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'social_tagging.settings',
            'dependencies' => 
            array (
              0 => 'drupal:taxonomy',
              1 => 'social:social_core',
            ),
          ),
          'schema_version' => '8002',
          'version' => '8.8.10',
        ),
        'social_node' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_node/social_node.info.yml',
          'basename' => 'social_node.info.yml',
          'name' => 'Social Node',
          'info' => 
          array (
            'name' => 'Social Node',
            'description' => 'Provides core functionality around Nodes.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:node',
              1 => 'social:activity_creator',
              2 => 'social:social_core',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_content_report' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_content_report/social_content_report.info.yml',
          'basename' => 'social_content_report.info.yml',
          'name' => 'Social Content Report',
          'info' => 
          array (
            'name' => 'Social Content Report',
            'description' => 'Provides the ability to report inappropriate content.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'social_content_report.settings',
            'dependencies' => 
            array (
              0 => 'activity_logger:activity_logger',
              1 => 'drupal:comment',
              2 => 'drupal:field',
              3 => 'drupal:node',
              4 => 'drupal:taxonomy',
              5 => 'drupal:user',
              6 => 'drupal:views',
              7 => 'dynamic_entity_reference:dynamic_entity_reference',
              8 => 'flag:flag',
              9 => 'message:message',
              10 => 'social:social_editor',
              11 => 'social_post:social_post',
              12 => 'social:social_core',
            ),
          ),
          'schema_version' => 8000,
          'version' => '8.8.10',
        ),
        'social_comment_upload' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_comment_upload/social_comment_upload.info.yml',
          'basename' => 'social_comment_upload.info.yml',
          'name' => 'Social Comment Upload',
          'info' => 
          array (
            'name' => 'Social Comment Upload',
            'description' => 'Provides ability to upload files in comments',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'drupal:field',
              2 => 'field_group:field_group',
              3 => 'drupal:file',
              4 => 'social:social_comment',
              5 => 'drupal:text',
            ),
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_search_autocomplete' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_search/modules/social_search_autocomplete/social_search_autocomplete.info.yml',
          'basename' => 'social_search_autocomplete.info.yml',
          'name' => 'Social Search Autocomplete',
          'info' => 
          array (
            'name' => 'Social Search Autocomplete',
            'description' => 'Adds autocomplete suggestions to the site search.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:rest',
              1 => 'social:social_react',
              2 => 'social:social_search',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => '8.8.10',
        ),
        'social_search' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/modules/social_features/social_search/social_search.info.yml',
          'basename' => 'social_search.info.yml',
          'name' => 'Social Search',
          'info' => 
          array (
            'name' => 'Social Search',
            'description' => 'Provide Search API configuration and Search Views.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'better_exposed_filters:better_exposed_filters',
              1 => 'drupal:block',
              2 => 'drupal:node',
              3 => 'drupal:user',
              4 => 'drupal:views',
              5 => 'group:group',
              6 => 'profile:profile',
              7 => 'search_api:search_api',
              8 => 'search_api:search_api_db',
              9 => 'social:social_editor',
              10 => 'social:social_event',
              11 => 'social:social_group',
              12 => 'social:social_profile',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8902',
          'version' => '8.8.10',
        ),
      ),
      'themes' => 
      array (
        'socialblue' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/themes/socialblue/socialblue.info.yml',
          'basename' => 'socialblue.info.yml',
          'name' => 'Social Blue theme',
          'info' => 
          array (
            'name' => 'Social Blue theme',
            'description' => 'Demo theme for Open social installations.',
            'screenshot' => 'screenshot.png',
            'type' => 'theme',
            'base theme' => 'socialbase',
            'core' => '8.x',
            'libraries' => 
            array (
              0 => 'socialblue/brand',
              1 => 'socialblue/site-footer',
            ),
            'libraries-extend' => 
            array (
              'socialbase/base' => 
              array (
                0 => 'socialblue/base',
              ),
              'socialbase/alert' => 
              array (
                0 => 'socialblue/alert',
              ),
              'socialbase/badge' => 
              array (
                0 => 'socialblue/badge',
              ),
              'socialbase/button' => 
              array (
                0 => 'socialblue/button',
              ),
              'socialbase/cards' => 
              array (
                0 => 'socialblue/cards',
              ),
              'socialbase/form-controls' => 
              array (
                0 => 'socialblue/form-controls',
              ),
              'socialbase/list' => 
              array (
                0 => 'socialblue/list',
              ),
              'socialbase/spinner' => 
              array (
                0 => 'socialblue/spinner',
              ),
              'socialbase/block--informblock' => 
              array (
                0 => 'socialblue/block--informblock',
              ),
              'socialbase/breadcrumb' => 
              array (
                0 => 'socialblue/breadcrumb',
              ),
              'socialbase/dropdown' => 
              array (
                0 => 'socialblue/dropdown',
              ),
              'socialbase/file' => 
              array (
                0 => 'socialblue/file',
              ),
              'socialbase/form-elements' => 
              array (
                0 => 'socialblue/form-elements',
              ),
              'socialbase/form--input-groups' => 
              array (
                0 => 'socialblue/form--input-groups',
              ),
              'socialbase/like' => 
              array (
                0 => 'socialblue/like',
              ),
              'core/drupal.date' => 
              array (
                0 => 'socialblue/form--datepicker',
              ),
              'core/jquery.ui.datepicker' => 
              array (
                0 => 'socialblue/form--timepicker',
              ),
              'socialbase/form--password' => 
              array (
                0 => 'socialblue/form--password',
              ),
              'socialbase/pagination' => 
              array (
                0 => 'socialblue/pagination',
              ),
              'socialbase/popover' => 
              array (
                0 => 'socialblue/popover',
              ),
              'socialbase/nav-book' => 
              array (
                0 => 'socialblue/nav-book',
              ),
              'socialbase/nav-tabs' => 
              array (
                0 => 'socialblue/nav-tabs',
              ),
              'socialbase/navbar' => 
              array (
                0 => 'socialblue/navbar',
              ),
              'socialbase/select2' => 
              array (
                0 => 'socialblue/select2',
              ),
              'socialbase/teaser' => 
              array (
                0 => 'socialblue/teaser',
              ),
              'socialbase/tour' => 
              array (
                0 => 'socialblue/tour',
              ),
              'socialbase/comment' => 
              array (
                0 => 'socialblue/comment',
              ),
              'socialbase/hero' => 
              array (
                0 => 'socialblue/hero',
              ),
              'socialbase/message' => 
              array (
                0 => 'socialblue/message',
              ),
              'socialbase/meta' => 
              array (
                0 => 'socialblue/meta',
              ),
              'socialbase/modal' => 
              array (
                0 => 'socialblue/modal',
              ),
              'socialbase/offcanvas' => 
              array (
                0 => 'socialblue/offcanvas',
              ),
              'socialbase/stream' => 
              array (
                0 => 'socialblue/stream',
              ),
              'socialbase/page-node' => 
              array (
                0 => 'socialblue/page-node',
              ),
              'socialbase/layout' => 
              array (
                0 => 'socialblue/layout',
              ),
            ),
            'ckeditor_stylesheets' => 
            array (
              0 => 'assets/css/ckeditor.css',
            ),
            'component-libraries' => 
            array (
              'base' => 
              array (
                'paths' => 
                array (
                  0 => 'components/01-base',
                ),
              ),
              'atoms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/02-atoms',
                ),
              ),
              'molecules' => 
              array (
                'paths' => 
                array (
                  0 => 'components/03-molecules',
                ),
              ),
              'organisms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/04-organisms',
                ),
              ),
              'templates' => 
              array (
                'paths' => 
                array (
                  0 => 'components/05-templates',
                ),
              ),
            ),
            'regions' => 
            array (
              'hidden' => 'Hidden',
              'header' => 'Header',
              'breadcrumb' => 'Breadcrumb',
              'hero' => 'Hero',
              'secondary_navigation' => 'Secondary navigation',
              'content_top' => 'Content top',
              'title' => 'Page title',
              'content' => 'Content',
              'complementary_top' => 'Complementary top',
              'complementary_bottom' => 'Complementary bottom',
              'content_bottom' => 'Content bottom',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'footer' => 'Footer',
            ),
          ),
          'version' => '8.8.10',
        ),
        'socialbase' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/social-9.2-8.8/html/profiles/contrib/social/themes/socialbase/socialbase.info.yml',
          'basename' => 'socialbase.info.yml',
          'name' => 'Social Base theme',
          'info' => 
          array (
            'name' => 'Social Base theme',
            'description' => 'Base theme for Open social installations. Create your own subtheme or enable Social Blue',
            'screenshot' => 'screenshot.png',
            'type' => 'theme',
            'base theme' => 'bootstrap',
            'core' => '8.x',
            'libraries-extend' => 
            array (
              'core/drupal.ajax' => 
              array (
                0 => 'socialbase/form--autocomplete',
              ),
              'core/drupal.tabledrag' => 
              array (
                0 => 'socialbase/tabledrag',
              ),
              'core/drupal.date' => 
              array (
                0 => 'socialbase/form--datepicker',
              ),
              'core/jquery.ui.datepicker' => 
              array (
                0 => 'socialbase/form--timepicker',
              ),
              'bootstrap/popover' => 
              array (
                0 => 'socialbase/popover',
              ),
              'core/drupal.dialog.ajax' => 
              array (
                0 => 'socialbase/modal',
              ),
              'editor/drupal.editor' => 
              array (
                0 => 'socialbase/modal',
              ),
              'image_widget_crop/cropper.integration' => 
              array (
                0 => 'socialbase/cropper.integration',
              ),
              'layout_builder/drupal.layout_builder' => 
              array (
                0 => 'socialbase/layout_builder',
              ),
            ),
            'stylesheets-remove' => 
            array (
              0 => 'like_and_dislike.icons.css',
            ),
            'libraries-override' => 
            array (
              'core/normalize' => false,
              'core/jquery.ui' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/core.css' => false,
                  ),
                  'theme' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.button' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/button.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.datepicker' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/datepicker.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.dialog' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.menu' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/menu.css' => false,
                  ),
                ),
              ),
              'system/base' => false,
              'views/views.module' => false,
              'classy/file' => false,
              'like_and_dislike/behavior' => 
              array (
                'js' => 
                array (
                  'js/like_and_dislike_service.js' => false,
                ),
              ),
              'like_and_dislike/icons' => false,
              'private_message/inbox_block' => false,
            ),
            'libraries' => 
            array (
              0 => 'socialbase/print',
              1 => 'socialbase/base',
              2 => 'socialbase/alert',
              3 => 'socialbase/badge',
              4 => 'socialbase/button',
              5 => 'socialbase/cards',
              6 => 'socialbase/close-icon',
              7 => 'socialbase/form-controls',
              8 => 'socialbase/list',
              9 => 'socialbase/spinner',
              10 => 'socialbase/dropdown',
              11 => 'socialbase/form-elements',
              12 => 'socialbase/form-input-groups',
              13 => 'socialbase/imagecrop',
              14 => 'socialbase/media',
              15 => 'socialbase/mentions',
              16 => 'socialbase/navbar',
              17 => 'socialbase/tour',
              18 => 'socialbase/like',
              19 => 'socialbase/layout',
            ),
            'component-libraries' => 
            array (
              'base' => 
              array (
                'paths' => 
                array (
                  0 => 'components/01-base',
                ),
              ),
              'atoms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/02-atoms',
                ),
              ),
              'molecules' => 
              array (
                'paths' => 
                array (
                  0 => 'components/03-molecules',
                ),
              ),
              'organisms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/04-organisms',
                ),
              ),
              'templates' => 
              array (
                'paths' => 
                array (
                  0 => 'components/05-templates',
                ),
              ),
            ),
            'ckeditor_stylesheets' => 
            array (
              0 => 'assets/css/ckeditor.css',
            ),
            'regions' => 
            array (
              'hidden' => 'Hidden',
              'header' => 'Header',
              'breadcrumb' => 'Breadcrumb',
              'hero' => 'Hero',
              'secondary_navigation' => 'Secondary navigation',
              'content_top' => 'Content top',
              'title' => 'Page title',
              'content' => 'Content',
              'complementary_top' => 'Complementary top',
              'complementary_bottom' => 'Complementary bottom',
              'content_bottom' => 'Content bottom',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'footer' => 'Footer',
            ),
            'regions_hidden' => 
            array (
              0 => 'hidden',
            ),
          ),
          'version' => '8.8.10',
        ),
      ),
    ),
  ),
);