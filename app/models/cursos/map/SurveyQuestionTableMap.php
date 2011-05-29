<?php



/**
 * This class defines the structure of the 'survey_question' table.
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
class SurveyQuestionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SurveyQuestionTableMap';

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
		$this->setName('survey_question');
		$this->setPhpName('SurveyQuestion');
		$this->setClassname('SurveyQuestion');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('QUESTION_ID', 'QuestionId', 'INTEGER', true, 10, null);
		$this->addColumn('SURVEY_ID', 'SurveyId', 'INTEGER', true, 10, null);
		$this->addColumn('SURVEY_QUESTION', 'SurveyQuestion', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SURVEY_QUESTION_COMMENT', 'SurveyQuestionComment', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', true, 250, null);
		$this->addColumn('DISPLAY', 'Display', 'VARCHAR', true, 10, null);
		$this->addColumn('SORT', 'Sort', 'INTEGER', true, 11, null);
		$this->addColumn('SHARED_QUESTION_ID', 'SharedQuestionId', 'INTEGER', false, 11, null);
		$this->addColumn('MAX_VALUE', 'MaxValue', 'INTEGER', false, 11, null);
		$this->addColumn('SURVEY_GROUP_PRI', 'SurveyGroupPri', 'INTEGER', true, 10, 0);
		$this->addColumn('SURVEY_GROUP_SEC1', 'SurveyGroupSec1', 'INTEGER', true, 10, 0);
		$this->addColumn('SURVEY_GROUP_SEC2', 'SurveyGroupSec2', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SurveyQuestionTableMap
