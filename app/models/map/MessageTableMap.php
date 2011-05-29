<?php



/**
 * This class defines the structure of the 'message' table.
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
class MessageTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.MessageTableMap';

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
		$this->setName('message');
		$this->setPhpName('Message');
		$this->setClassname('Message');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		$this->addColumn('USER_SENDER_ID', 'UserSenderId', 'INTEGER', true, 10, null);
		$this->addColumn('USER_RECEIVER_ID', 'UserReceiverId', 'INTEGER', true, 10, null);
		$this->addColumn('MSG_STATUS', 'MsgStatus', 'TINYINT', true, 3, 0);
		$this->addColumn('SEND_DATE', 'SendDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // MessageTableMap
