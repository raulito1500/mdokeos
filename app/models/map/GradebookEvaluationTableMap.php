<?php



/**
 * This class defines the structure of the 'gradebook_evaluation' table.
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
class GradebookEvaluationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GradebookEvaluationTableMap';

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
		$this->setName('gradebook_evaluation');
		$this->setPhpName('GradebookEvaluation');
		$this->setClassname('GradebookEvaluation');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, null);
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', false, 40, null);
		$this->addColumn('CATEGORY_ID', 'CategoryId', 'INTEGER', false, 11, null);
		$this->addColumn('DATE', 'Date', 'INTEGER', false, 11, 0);
		$this->addColumn('WEIGHT', 'Weight', 'SMALLINT', true, 6, null);
		$this->addColumn('MAX', 'Max', 'FLOAT', true, null, null);
		$this->addColumn('VISIBLE', 'Visible', 'TINYINT', true, 4, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', true, 40, 'evaluation');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GradebookEvaluationTableMap
