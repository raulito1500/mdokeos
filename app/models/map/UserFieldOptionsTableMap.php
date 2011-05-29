<?php



/**
 * This class defines the structure of the 'user_field_options' table.
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
class UserFieldOptionsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.UserFieldOptionsTableMap';

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
		$this->setName('user_field_options');
		$this->setPhpName('UserFieldOptions');
		$this->setClassname('UserFieldOptions');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('FIELD_ID', 'FieldId', 'INTEGER', true, 11, null);
		$this->addColumn('OPTION_VALUE', 'OptionValue', 'LONGVARCHAR', false, null, null);
		$this->addColumn('OPTION_DISPLAY_TEXT', 'OptionDisplayText', 'VARCHAR', false, 64, null);
		$this->addColumn('OPTION_ORDER', 'OptionOrder', 'INTEGER', false, 11, null);
		$this->addColumn('TMS', 'Tms', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UserFieldOptionsTableMap
