<?php



/**
 * This class defines the structure of the 'survey_question_option' table.
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
class SurveyQuestionOptionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SurveyQuestionOptionTableMap';

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
		$this->setName('survey_question_option');
		$this->setPhpName('SurveyQuestionOption');
		$this->setClassname('SurveyQuestionOption');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('QUESTION_OPTION_ID', 'QuestionOptionId', 'INTEGER', true, 10, null);
		$this->addColumn('QUESTION_ID', 'QuestionId', 'INTEGER', true, 10, null);
		$this->addColumn('SURVEY_ID', 'SurveyId', 'INTEGER', true, 10, null);
		$this->addColumn('OPTION_TEXT', 'OptionText', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SORT', 'Sort', 'INTEGER', true, 11, null);
		$this->addColumn('VALUE', 'Value', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SurveyQuestionOptionTableMap
