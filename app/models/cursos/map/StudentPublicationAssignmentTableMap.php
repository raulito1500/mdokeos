<?php



/**
 * This class defines the structure of the 'student_publication_assignment' table.
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
class StudentPublicationAssignmentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.StudentPublicationAssignmentTableMap';

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
		$this->setName('student_publication_assignment');
		$this->setPhpName('StudentPublicationAssignment');
		$this->setClassname('StudentPublicationAssignment');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('EXPIRES_ON', 'ExpiresOn', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('ENDS_ON', 'EndsOn', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('ADD_TO_CALENDAR', 'AddToCalendar', 'TINYINT', true, 4, null);
		$this->addColumn('ENABLE_QUALIFICATION', 'EnableQualification', 'TINYINT', true, 4, null);
		$this->addColumn('PUBLICATION_ID', 'PublicationId', 'INTEGER', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // StudentPublicationAssignmentTableMap
