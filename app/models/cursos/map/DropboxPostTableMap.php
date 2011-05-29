<?php



/**
 * This class defines the structure of the 'dropbox_post' table.
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
class DropboxPostTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.DropboxPostTableMap';

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
		$this->setName('dropbox_post');
		$this->setPhpName('DropboxPost');
		$this->setClassname('DropboxPost');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('FILE_ID', 'FileId', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('DEST_USER_ID', 'DestUserId', 'INTEGER', true, 10, 0);
		$this->addColumn('FEEDBACK_DATE', 'FeedbackDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('FEEDBACK', 'Feedback', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CAT_ID', 'CatId', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'SMALLINT', true, 5, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DropboxPostTableMap
