<?php

require_once 'gapsumfields.civix.php';
use CRM_Gapsumfields_ExtensionUtil as E;

function gapsumfields_civicrm_sumfields_definitions(&$custom) {
  $custom['fields']['contribution_count_2016'] = array(
    'label' => ts('Count of Donations in 2016'),
    'data_type' => 'Int',
    'html_type' => 'Text',
    'weight' => '15',
    'text_length' => '255',
    'trigger_sql' => "(
      SELECT
        count(*)
      FROM
        civicrm_contribution c
      WHERE
        c.contact_id = NEW.contact_id
        AND c.financial_type_id = 1
        AND YEAR(c.receive_date) = '2016'
    )",
    'trigger_table' => 'civicrm_contribution',
    'optgroup' => 'fundraising',
  );
  $custom['fields']['contribution_count_2017'] = array(
    'label' => ts('Count of Donations in 2017'),
    'data_type' => 'Int',
    'html_type' => 'Text',
    'weight' => '15',
    'text_length' => '255',
    'trigger_sql' => "(
      SELECT
        count(*)
      FROM
        civicrm_contribution c
      WHERE
        c.contact_id = NEW.contact_id
        AND c.financial_type_id = 1
        AND YEAR(c.receive_date) = '2017'
    )",
    'trigger_table' => 'civicrm_contribution',
    'optgroup' => 'fundraising',
  );
  $custom['fields']['contribution_count_2018'] = array(
    'label' => ts('Count of Donations in 2018'),
    'data_type' => 'Int',
    'html_type' => 'Text',
    'weight' => '15',
    'text_length' => '255',
    'trigger_sql' => "(
      SELECT
        count(*)
      FROM
        civicrm_contribution c
      WHERE
        c.contact_id = NEW.contact_id
        AND c.financial_type_id = 1
        AND YEAR(c.receive_date) = '2018'
    )",
    'trigger_table' => 'civicrm_contribution',
    'optgroup' => 'fundraising',
  );
  $custom['fields']['contribution_count_2019'] = array(
    'label' => ts('Count of Donations in 2019'),
    'data_type' => 'Int',
    'html_type' => 'Text',
    'weight' => '15',
    'text_length' => '255',
    'trigger_sql' => "(
      SELECT
        count(*)
      FROM
        civicrm_contribution c
      WHERE
        c.contact_id = NEW.contact_id
        AND c.financial_type_id = 1
        AND YEAR(c.receive_date) = '2019'
    )",
    'trigger_table' => 'civicrm_contribution',
    'optgroup' => 'fundraising',
  );
  $custom['fields']['contribution_count_2020'] = array(
    'label' => ts('Count of Donations in 2020'),
    'data_type' => 'Int',
    'html_type' => 'Text',
    'weight' => '15',
    'text_length' => '255',
    'trigger_sql' => "(
      SELECT
        count(*)
      FROM
        civicrm_contribution c
      WHERE
        c.contact_id = NEW.contact_id
        AND c.financial_type_id = 1
        AND YEAR(c.receive_date) = '2020'
    )",
    'trigger_table' => 'civicrm_contribution',
    'optgroup' => 'fundraising',
  );

}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function gapsumfields_civicrm_config(&$config) {
  _gapsumfields_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function gapsumfields_civicrm_xmlMenu(&$files) {
  _gapsumfields_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function gapsumfields_civicrm_install() {
  _gapsumfields_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function gapsumfields_civicrm_postInstall() {
  _gapsumfields_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function gapsumfields_civicrm_uninstall() {
  _gapsumfields_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function gapsumfields_civicrm_enable() {
  _gapsumfields_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function gapsumfields_civicrm_disable() {
  _gapsumfields_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function gapsumfields_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _gapsumfields_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function gapsumfields_civicrm_managed(&$entities) {
  _gapsumfields_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function gapsumfields_civicrm_caseTypes(&$caseTypes) {
  _gapsumfields_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function gapsumfields_civicrm_angularModules(&$angularModules) {
  _gapsumfields_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function gapsumfields_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _gapsumfields_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function gapsumfields_civicrm_entityTypes(&$entityTypes) {
  _gapsumfields_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function gapsumfields_civicrm_themes(&$themes) {
  _gapsumfields_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
function gapsumfields_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function gapsumfields_civicrm_navigationMenu(&$menu) {
  _gapsumfields_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _gapsumfields_civix_navigationMenu($menu);
} // */
