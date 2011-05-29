<?php



/**
 * This class defines the structure of the 'gradebook_category' table.
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
class GradebookCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GradebookCategoryTableMap';

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
		$this->setName('gradebook_category');
		$this->setPhpName('GradebookCategory');
		$this->setClassname('GradebookCategory');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('NAME', 'Name', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, null);
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', false, 40, null);
		$this->addColumn('PARENT_ID', 'ParentId', 'INTEGER', false, 11, null);
		$this->addColumn('WEIGHT', 'Weight', 'SMALLINT', true, 6, null);
		$this->addColumn('VISIBLE', 'Visible', 'TINYINT', true, 4, null);
		$this->addColumn('CERTIF_MIN_SCORE', 'CertifMinScore', 'INTEGER', false, 11, null);
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', false, 11, null);
		$this->addColumn('DOCUMENT_ID', 'DocumentId', 'INTEGER', false, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GradebookCategoryTableMap
