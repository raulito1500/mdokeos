<?php



/**
 * This class defines the structure of the 'course_field' table.
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
class CourseFieldTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CourseFieldTableMap';

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
		$this->setName('course_field');
		$this->setPhpName('CourseField');
		$this->setClassname('CourseField');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('FIELD_TYPE', 'FieldType', 'INTEGER', true, 11, 1);
		$this->addColumn('FIELD_VARIABLE', 'FieldVariable', 'VARCHAR', true, 64, null);
		$this->addColumn('FIELD_DISPLAY_TEXT', 'FieldDisplayText', 'VARCHAR', false, 64, null);
		$this->addColumn('FIELD_DEFAULT_VALUE', 'FieldDefaultValue', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FIELD_ORDER', 'FieldOrder', 'INTEGER', false, 11, null);
		$this->addColumn('FIELD_VISIBLE', 'FieldVisible', 'TINYINT', false, 4, 0);
		$this->addColumn('FIELD_CHANGEABLE', 'FieldChangeable', 'TINYINT', false, 4, 0);
		$this->addColumn('FIELD_FILTER', 'FieldFilter', 'TINYINT', false, 4, 0);
		$this->addColumn('TMS', 'Tms', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CourseFieldTableMap
