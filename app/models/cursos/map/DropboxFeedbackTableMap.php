<?php



/**
 * This class defines the structure of the 'dropbox_feedback' table.
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
class DropboxFeedbackTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.DropboxFeedbackTableMap';

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
		$this->setName('dropbox_feedback');
		$this->setPhpName('DropboxFeedback');
		$this->setClassname('DropboxFeedback');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('FEEDBACK_ID', 'FeedbackId', 'INTEGER', true, 11, null);
		$this->addColumn('FILE_ID', 'FileId', 'INTEGER', true, 11, 0);
		$this->addColumn('AUTHOR_USER_ID', 'AuthorUserId', 'INTEGER', true, 11, 0);
		$this->addColumn('FEEDBACK', 'Feedback', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FEEDBACK_DATE', 'FeedbackDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DropboxFeedbackTableMap
