<?php



/**
 * This class defines the structure of the 'specific_field_values' table.
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
class SpecificFieldValuesTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SpecificFieldValuesTableMap';

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
		$this->setName('specific_field_values');
		$this->setPhpName('SpecificFieldValues');
		$this->setClassname('SpecificFieldValues');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', true, 40, null);
		$this->addColumn('TOOL_ID', 'ToolId', 'VARCHAR', true, 100, null);
		$this->addColumn('REF_ID', 'RefId', 'INTEGER', true, 11, null);
		$this->addColumn('FIELD_ID', 'FieldId', 'INTEGER', true, 11, null);
		$this->addColumn('VALUE', 'Value', 'VARCHAR', true, 200, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SpecificFieldValuesTableMap
