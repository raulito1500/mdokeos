<?php



/**
 * This class defines the structure of the 'quiz_answer' table.
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
class QuizAnswerTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.QuizAnswerTableMap';

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
		$this->setName('quiz_answer');
		$this->setPhpName('QuizAnswer');
		$this->setClassname('QuizAnswer');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'SMALLINT', true, 8, null);
		$this->addPrimaryKey('QUESTION_ID', 'QuestionId', 'SMALLINT', true, 8, null);
		$this->addColumn('ANSWER', 'Answer', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CORRECT', 'Correct', 'SMALLINT', false, 8, null);
		$this->addColumn('COMMENT', 'Comment', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PONDERATION', 'Ponderation', 'FLOAT', true, 6, 0);
		$this->addColumn('POSITION', 'Position', 'SMALLINT', true, 8, 1);
		$this->addColumn('HOTSPOT_COORDINATES', 'HotspotCoordinates', 'LONGVARCHAR', false, null, null);
		$this->addColumn('HOTSPOT_TYPE', 'HotspotType', 'CHAR', false, null, null);
		$this->addColumn('DESTINATION', 'Destination', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // QuizAnswerTableMap
