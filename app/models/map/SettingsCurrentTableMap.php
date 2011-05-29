<?php



/**
 * This class defines the structure of the 'settings_current' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.dokeos.map
 */
class SettingsCurrentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SettingsCurrentTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('settings_current');
		$this->setPhpName('SettingsCurrent');
		$this->setClassname('SettingsCurrent');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('VARIABLE', 'Variable', 'VARCHAR', false, 255, null);
		$this->addColumn('SUBKEY', 'Subkey', 'VARCHAR', false, 255, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', false, 255, null);
		$this->addColumn('CATEGORY', 'Category', 'VARCHAR', false, 255, null);
		$this->addColumn('SELECTED_VALUE', 'SelectedValue', 'VARCHAR', false, 255, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, '');
		$this->addColumn('COMMENT', 'Comment', 'VARCHAR', false, 255, null);
		$this->addColumn('SCOPE', 'Scope', 'VARCHAR', false, 50, null);
		$this->addColumn('SUBKEYTEXT', 'Subkeytext', 'VARCHAR', false, 255, null);
		$this->addColumn('ACCESS_URL', 'AccessUrl', 'INTEGER', true, 10, 1);
		$this->addColumn('ACCESS_URL_CHANGEABLE', 'AccessUrlChangeable', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SettingsCurrentTableMap
