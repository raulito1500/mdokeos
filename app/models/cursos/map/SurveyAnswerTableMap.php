<?php



/**
 * This class defines the structure of the 'survey_answer' table.
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
class SurveyAnswerTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SurveyAnswerTableMap';

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
		$this->setName('survey_answer');
		$this->setPhpName('SurveyAnswer');
		$this->setClassname('SurveyAnswer');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ANSWER_ID', 'AnswerId', 'INTEGER', true, 10, null);
		$this->addColumn('SURVEY_ID', 'SurveyId', 'INTEGER', true, 10, null);
		$this->addColumn('QUESTION_ID', 'QuestionId', 'INTEGER', true, 10, null);
		$this->addColumn('OPTION_ID', 'OptionId', 'LONGVARCHAR', true, null, null);
		$this->addColumn('VALUE', 'Value', 'INTEGER', true, 10, null);
		$this->addColumn('USER', 'User', 'VARCHAR', true, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SurveyAnswerTableMap
