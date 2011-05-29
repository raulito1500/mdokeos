<?php



/**
 * This class defines the structure of the 'student_publication' table.
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
class StudentPublicationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.StudentPublicationTableMap';

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
		$this->setName('student_publication');
		$this->setPhpName('StudentPublication');
		$this->setClassname('StudentPublication');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', false, 200, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 200, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 250, null);
		$this->addColumn('AUTHOR', 'Author', 'VARCHAR', false, 200, null);
		$this->addColumn('ACTIVE', 'Active', 'TINYINT', false, 4, null);
		$this->addColumn('ACCEPTED', 'Accepted', 'TINYINT', false, 4, 0);
		$this->addColumn('POST_GROUP_ID', 'PostGroupId', 'INTEGER', true, 11, 0);
		$this->addColumn('SENT_DATE', 'SentDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('FILETYPE', 'Filetype', 'CHAR', true, null, 'file');
		$this->addColumn('HAS_PROPERTIES', 'HasProperties', 'INTEGER', true, 10, 0);
		$this->addColumn('VIEW_PROPERTIES', 'ViewProperties', 'TINYINT', false, 4, null);
		$this->addColumn('QUALIFICATION', 'Qualification', 'FLOAT', true, 6, 0);
		$this->addColumn('DATE_OF_QUALIFICATION', 'DateOfQualification', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('PARENT_ID', 'ParentId', 'INTEGER', true, 10, 0);
		$this->addColumn('QUALIFICATOR_ID', 'QualificatorId', 'INTEGER', true, 10, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // StudentPublicationTableMap
