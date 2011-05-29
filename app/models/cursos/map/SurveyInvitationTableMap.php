<?php



/**
 * This class defines the structure of the 'survey_invitation' table.
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
class SurveyInvitationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SurveyInvitationTableMap';

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
		$this->setName('survey_invitation');
		$this->setPhpName('SurveyInvitation');
		$this->setClassname('SurveyInvitation');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('SURVEY_INVITATION_ID', 'SurveyInvitationId', 'INTEGER', true, 10, null);
		$this->addColumn('SURVEY_CODE', 'SurveyCode', 'VARCHAR', true, 20, null);
		$this->addColumn('USER', 'User', 'VARCHAR', true, 250, null);
		$this->addColumn('INVITATION_CODE', 'InvitationCode', 'VARCHAR', true, 250, null);
		$this->addColumn('INVITATION_DATE', 'InvitationDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMINDER_DATE', 'ReminderDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('ANSWERED', 'Answered', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'SMALLINT', true, 5, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SurveyInvitationTableMap
