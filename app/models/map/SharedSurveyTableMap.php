<?php



/**
 * This class defines the structure of the 'shared_survey' table.
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
class SharedSurveyTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SharedSurveyTableMap';

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
		$this->setName('shared_survey');
		$this->setPhpName('SharedSurvey');
		$this->setClassname('SharedSurvey');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('SURVEY_ID', 'SurveyId', 'INTEGER', true, 10, null);
		$this->addColumn('CODE', 'Code', 'VARCHAR', false, 20, null);
		$this->addColumn('TITLE', 'Title', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SUBTITLE', 'Subtitle', 'LONGVARCHAR', false, null, null);
		$this->addColumn('AUTHOR', 'Author', 'VARCHAR', false, 250, null);
		$this->addColumn('LANG', 'Lang', 'VARCHAR', false, 20, null);
		$this->addColumn('TEMPLATE', 'Template', 'VARCHAR', false, 20, null);
		$this->addColumn('INTRO', 'Intro', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SURVEYTHANKS', 'Surveythanks', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CREATION_DATE', 'CreationDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', true, 40, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SharedSurveyTableMap
