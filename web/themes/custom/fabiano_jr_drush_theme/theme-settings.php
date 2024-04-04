<?php declare(strict_types = 1);

/**
 * @file
 * Theme settings form for Fabiano_jr Drush Theme theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function fabiano_jr_drush_theme_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['fabiano_jr_drush_theme'] = [
    '#type' => 'details',
    '#title' => t('Fabiano_jr Drush Theme'),
    '#open' => TRUE,
  ];

  $form['fabiano_jr_drush_theme']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

  $form['fabiano_jr_drush_theme']['course_theme'] = [
    '#type' => 'textfield',
    '#title' => t('Another Example'),
    '#default_value' => theme_get_setting('another'),
  ];


}
