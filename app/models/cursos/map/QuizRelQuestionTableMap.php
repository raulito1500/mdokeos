<?php



/**
 * This class defines the structure of the 'quiz_rel_question' table.
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
class QuizRelQuestionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.QuizRelQuestionTableMap';

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
		$this->setName('quiz_rel_question');
		$this->setPhpName('QuizRelQuestion');
		$this->setClassname('QuizRelQuestion');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('QUESTION_ID', 'QuestionId', 'SMALLINT', true, 8, null);
		$this->addPrimaryKey('EXERCICE_ID', 'ExerciceId', 'SMALLINT', true, 8, null);
		$this->addColumn('QUESTION_ORDER', 'QuestionOrder', 'SMALLINT', true, 8, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // QuizRelQuestionTableMap
