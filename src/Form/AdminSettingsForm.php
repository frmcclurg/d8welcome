<?php

namespace Drupal\welcome\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AdminSettingsForm.
 *
 * @package Drupal\welcome\Form
 * 
 * This code was originally created by Drupal Console via the command:
 *   drupal generate:form:config --generate-inline --learning
 */
class AdminSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   * 
   * The current configuration value saved in the admin settings
   * form can be retrieved by specifying the configuration names
   * in the Drupal Console via the command:
   *   drupal config:debug welcome.adminsettings
   */
  protected function getEditableConfigNames() {
    /* these are the configuration names */
    return [
      'welcome.adminsettings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'admin_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('welcome.adminsettings');
    $form['welcome_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Welcome message'),
      '#description' => $this->t('A welcome message displayed to users when they login.'),
      '#default_value' => $config->get('welcome_message'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('welcome.adminsettings')
      ->set('welcome_message', $form_state->getValue('welcome_message'))
      ->save();
  }

}
