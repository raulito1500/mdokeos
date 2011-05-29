<?php



/**
 * This class defines the structure of the 'user' table.
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
class UserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.UserTableMap';

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
		$this->setName('user');
		$this->setPhpName('User');
		$this->setClassname('User');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('USER_ID', 'UserId', 'INTEGER', true, 10, null);
		$this->addColumn('LASTNAME', 'Lastname', 'VARCHAR', false, 60, null);
		$this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', false, 60, null);
		$this->addColumn('USERNAME', 'Username', 'VARCHAR', true, 20, '');
		$this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 50, '');
		$this->addColumn('AUTH_SOURCE', 'AuthSource', 'VARCHAR', false, 50, 'platform');
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 100, null);
		$this->addColumn('STATUS', 'Status', 'TINYINT', true, 4, 5);
		$this->addColumn('OFFICIAL_CODE', 'OfficialCode', 'VARCHAR', false, 40, null);
		$this->addColumn('PHONE', 'Phone', 'VARCHAR', false, 30, null);
		$this->addColumn('PICTURE_URI', 'PictureUri', 'VARCHAR', false, 250, null);
		$this->addColumn('CREATOR_ID', 'CreatorId', 'INTEGER', false, 10, null);
		$this->addColumn('COMPETENCES', 'Competences', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DIPLOMAS', 'Diplomas', 'LONGVARCHAR', false, null, null);
		$this->addColumn('OPENAREA', 'Openarea', 'LONGVARCHAR', false, null, null);
		$this->addColumn('TEACH', 'Teach', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PRODUCTIONS', 'Productions', 'VARCHAR', false, 250, null);
		$this->addColumn('CHATCALL_USER_ID', 'ChatcallUserId', 'INTEGER', true, 10, 0);
		$this->addColumn('CHATCALL_DATE', 'ChatcallDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('CHATCALL_TEXT', 'ChatcallText', 'VARCHAR', true, 50, '');
		$this->addColumn('LANGUAGE', 'Language', 'VARCHAR', false, 40, null);
		$this->addColumn('REGISTRATION_DATE', 'RegistrationDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('EXPIRATION_DATE', 'ExpirationDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('ACTIVE', 'Active', 'TINYINT', true, 3, 1);
		$this->addColumn('OPENID', 'Openid', 'VARCHAR', false, 255, null);
		$this->addColumn('THEME', 'Theme', 'VARCHAR', false, 255, null);
		$this->addColumn('HR_DEPT_ID', 'HrDeptId', 'SMALLINT', true, 5, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UserTableMap
