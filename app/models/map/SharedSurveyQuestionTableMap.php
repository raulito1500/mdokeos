<?php



/**
 * This class defines the structure of the 'shared_survey_question' table.
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
class SharedSurveyQuestionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SharedSurveyQuestionTableMap';

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
		$this->setName('shared_survey_question');
		$this->setPhpName('SharedSurveyQuestion');
		$this->setClassname('SharedSurveyQuestion');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('QUESTION_ID', 'QuestionId', 'INTEGER', true, 11, null);
		$this->addColumn('SURVEY_ID', 'SurveyId', 'INTEGER', true, 11, 0);
		$this->addColumn('SURVEY_QUESTION', 'SurveyQuestion', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SURVEY_QUESTION_COMMENT', 'SurveyQuestionComment', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', true, 250, '');
		$this->addColumn('DISPLAY', 'Display', 'VARCHAR', true, 10, '');
		$this->addColumn('SORT', 'Sort', 'INTEGER', true, 11, 0);
		$this->addColumn('CODE', 'Code', 'VARCHAR', true, 40, '');
		$this->addColumn('MAX_VALUE', 'MaxValue', 'INTEGER', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SharedSurveyQuestionTableMap
