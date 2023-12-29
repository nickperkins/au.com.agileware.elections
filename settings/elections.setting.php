<?php

use CRM_Elections_ExtensionUtil as E;

return [
  'elections_image_source' => [
    'name' => 'elections_image_source',
    'type' => 'String',
    'default' => 'CMS',
    'html_type' => 'select',
    'add' => '1.0',
    'title' => E::ts('Image Source'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Select the source of the image to use for the candidate.'),
    'settings_pages' => [
      'elections' => [
        'weight' => 15,
      ],
    ],
    'options' => [
      'CMS' => E::ts('CMS'),
      'Contact' => E::ts('Contact Image'),
    ],
  ],
    'elections_nominee_sort' => [
      'name' => 'elections_nominee_sort',
      'type' => 'String',
      'default' => 'Random',
      'html_type' => 'select',
      'add' => '1.0',
      'title' => E::ts('Nominee Sort'),
      'is_domain' => 1,
      'is_contact' => 0,
      'description' => E::ts('Select how the nominees are to be sorted for a position.'),
      'settings_pages' => [
        'elections' => [
          'weight' => 16,
        ],
      ],
      'options' => [
        'Random' => E::ts('Random'),
        'Alphabetical' => E::ts('Alphabetical'),
      ],
  ],
];
