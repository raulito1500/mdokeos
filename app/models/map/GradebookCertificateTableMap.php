<?php



/**
 * This class defines the structure of the 'gradebook_certificate' table.
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
class GradebookCertificateTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GradebookCertificateTableMap';

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
		$this->setName('gradebook_certificate');
		$this->setPhpName('GradebookCertificate');
		$this->setClassname('GradebookCertificate');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		$this->addColumn('CAT_ID', 'CatId', 'INTEGER', true, 10, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 10, null);
		$this->addColumn('SCORE_CERTIFICATE', 'ScoreCertificate', 'FLOAT', true, null, 0);
		$this->addColumn('DATE_CERTIFICATE', 'DateCertificate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('PATH_CERTIFICATE', 'PathCertificate', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GradebookCertificateTableMap
