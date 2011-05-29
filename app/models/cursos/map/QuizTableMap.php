<?php



/**
 * This class defines the structure of the 'quiz' table.
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
class QuizTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.QuizTableMap';

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
		$this->setName('quiz');
		$this->setPhpName('Quiz');
		$this->setClassname('Quiz');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'SMALLINT', true, 8, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 200, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SOUND', 'Sound', 'VARCHAR', false, 50, null);
		$this->addColumn('TYPE', 'Type', 'TINYINT', true, 3, 1);
		$this->addColumn('RANDOM', 'Random', 'SMALLINT', true, 6, 0);
		$this->addColumn('ACTIVE', 'Active', 'TINYINT', true, 4, 0);
		$this->addColumn('RESULTS_DISABLED', 'ResultsDisabled', 'TINYINT', true, 3, 0);
		$this->addColumn('ACCESS_CONDITION', 'AccessCondition', 'LONGVARCHAR', false, null, null);
		$this->addColumn('MAX_ATTEMPT', 'MaxAttempt', 'INTEGER', true, 11, 0);
		$this->addColumn('START_TIME', 'StartTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('END_TIME', 'EndTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('FEEDBACK_TYPE', 'FeedbackType', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // QuizTableMap
