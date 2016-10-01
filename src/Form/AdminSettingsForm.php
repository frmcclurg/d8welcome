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
 *   
 * This code handles the building of an administration form to set configurations.
 */
class AdminSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   * 
   * Retrieve the configuration name(s)
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
   * 
   * Return the form's unique ID
   */
  public function getFormId() {
    return 'admin_settings_form';
  }

  /**
   * {@inheritdoc}
   * 
   * Builds the form by specifying the attribute values in an array
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    # Initialize the config variable using the module's configuration name.
    # This loads the admin settings:
    $config = $this->config('welcome.adminsettings');
    
    # Define the one element on the form, the welcome message textarea:
    $form['welcome_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Welcome message'),
      '#description' => $this->t('A welcome message displayed to users when they login.'),
      # Retrieve the value of the configuration via the configuration name:
      '#default_value' => $config->get('welcome_message'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   * 
   * Provides validation for the form
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   * 
   * Processes the form after submission.
   * The method is responsible for saving the form data.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    /* $this is the instance of the admin settings form class
     * -> is an object operator
     * config('welcome.adminsettings') is the configuration settings via the configuration name
     * ->set() get the value of 'welcome_message' and use it to set the current value
     * ->save() save the form data value(s)
     */
    $this->config('welcome.adminsettings')
      ->set('welcome_message', $form_state->getValue('welcome_message'))
      ->save();
  }

}
