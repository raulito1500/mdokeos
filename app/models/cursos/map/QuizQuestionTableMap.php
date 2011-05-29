<?php



/**
 * This class defines the structure of the 'quiz_question' table.
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
class QuizQuestionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.QuizQuestionTableMap';

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
		$this->setName('quiz_question');
		$this->setPhpName('QuizQuestion');
		$this->setClassname('QuizQuestion');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'SMALLINT', true, 8, null);
		$this->addColumn('QUESTION', 'Question', 'VARCHAR', true, 200, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PONDERATION', 'Ponderation', 'FLOAT', true, 6, 0);
		$this->addColumn('POSITION', 'Position', 'SMALLINT', true, 8, 1);
		$this->addColumn('TYPE', 'Type', 'TINYINT', true, 3, 2);
		$this->addColumn('PICTURE', 'Picture', 'VARCHAR', false, 50, null);
		$this->addColumn('LEVEL', 'Level', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // QuizQuestionTableMap
