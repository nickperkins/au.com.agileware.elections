<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from au.com.agileware.elections/xml/schema/CRM/Elections/ElectionNominationSeconder.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:4b06a188d47f2b835e47502c52d34c44)
 */
use CRM_Elections_ExtensionUtil as E;

/**
 * Database access object for the ElectionNominationSeconder entity.
 */
class CRM_Elections_DAO_ElectionNominationSeconder extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '5.3';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_election_nomination_seconder';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique ElectionNominationSeconder ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * @var string|null
   *   (SQL type: text)
   *   Note that values will be retrieved from the database as a string.
   */
  public $description;

  /**
   * FK to Contact who nominated member_nominee for particular position.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $member_nominator;

  /**
   * FK to ElectionNomination for which this seconder is added.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $election_nomination_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_election_nomination_seconder';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Election Nomination Seconders') : E::ts('Election Nomination Seconder');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'member_nominator', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'election_nomination_id', 'civicrm_election_nomination', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('ID'),
          'description' => E::ts('Unique ElectionNominationSeconder ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_election_nomination_seconder.id',
          'table_name' => 'civicrm_election_nomination_seconder',
          'entity' => 'ElectionNominationSeconder',
          'bao' => 'CRM_Elections_DAO_ElectionNominationSeconder',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => '5.3',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Description'),
          'usage' => [
            'import' => TRUE,
            'export' => TRUE,
            'duplicate_matching' => TRUE,
            'token' => FALSE,
          ],
          'import' => TRUE,
          'where' => 'civicrm_election_nomination_seconder.description',
          'export' => TRUE,
          'table_name' => 'civicrm_election_nomination_seconder',
          'entity' => 'ElectionNominationSeconder',
          'bao' => 'CRM_Elections_DAO_ElectionNominationSeconder',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.3',
        ],
        'member_nominator' => [
          'name' => 'member_nominator',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Member Nominator'),
          'description' => E::ts('FK to Contact who nominated member_nominee for particular position.'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_election_nomination_seconder.member_nominator',
          'table_name' => 'civicrm_election_nomination_seconder',
          'entity' => 'ElectionNominationSeconder',
          'bao' => 'CRM_Elections_DAO_ElectionNominationSeconder',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '5.3',
        ],
        'election_nomination_id' => [
          'name' => 'election_nomination_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Election Nomination ID'),
          'description' => E::ts('FK to ElectionNomination for which this seconder is added.'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_election_nomination_seconder.election_nomination_id',
          'table_name' => 'civicrm_election_nomination_seconder',
          'entity' => 'ElectionNominationSeconder',
          'bao' => 'CRM_Elections_DAO_ElectionNominationSeconder',
          'localizable' => 0,
          'FKClassName' => 'CRM_Elections_DAO_ElectionNomination',
          'add' => '5.3',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'election_nomination_seconder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'election_nomination_seconder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
