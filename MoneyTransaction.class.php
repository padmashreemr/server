<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class MoneyTransaction extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='MoneyTransaction';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='MoneyTransaction';
	const SQL_INSERT='INSERT INTO `MoneyTransaction` (`tr_id`,`tr_type`,`tr_executor`,`tr_party`,`tr_person_id`,`ext_agency_id`,`tr_purpose`,`tr_detail`,`tr_remarks`,`tr_payment_mode`,`tr_payment_ref`,`tr_bankname`,`tr_bankcode`,`tr_amount`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `MoneyTransaction` (`tr_type`,`tr_executor`,`tr_party`,`tr_person_id`,`ext_agency_id`,`tr_purpose`,`tr_detail`,`tr_remarks`,`tr_payment_mode`,`tr_payment_ref`,`tr_bankname`,`tr_bankcode`,`tr_amount`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `MoneyTransaction` SET `tr_id`=?,`tr_type`=?,`tr_executor`=?,`tr_party`=?,`tr_person_id`=?,`ext_agency_id`=?,`tr_purpose`=?,`tr_detail`=?,`tr_remarks`=?,`tr_payment_mode`=?,`tr_payment_ref`=?,`tr_bankname`=?,`tr_bankcode`=?,`tr_amount`=? WHERE `tr_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `MoneyTransaction` WHERE `tr_id`=?';
	const SQL_DELETE_PK='DELETE FROM `MoneyTransaction` WHERE `tr_id`=?';
	const FIELD_TR_ID=-989860180;
	const FIELD_TR_TYPE=-2067509109;
	const FIELD_TR_EXECUTOR=-1811895900;
	const FIELD_TR_PARTY=327320501;
	const FIELD_TR_PERSON_ID=1609958292;
	const FIELD_EXT_AGENCY_ID=579796775;
	const FIELD_TR_PURPOSE=1594846765;
	const FIELD_TR_DETAIL=1217186146;
	const FIELD_TR_REMARKS=-1388241406;
	const FIELD_TR_PAYMENT_MODE=188871821;
	const FIELD_TR_PAYMENT_REF=-132450199;
	const FIELD_TR_BANKNAME=-1418284136;
	const FIELD_TR_BANKCODE=-1418598662;
	const FIELD_TR_AMOUNT=1138557289;
	private static $PRIMARY_KEYS=array(self::FIELD_TR_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_TR_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_TR_ID=>'tr_id',
		self::FIELD_TR_TYPE=>'tr_type',
		self::FIELD_TR_EXECUTOR=>'tr_executor',
		self::FIELD_TR_PARTY=>'tr_party',
		self::FIELD_TR_PERSON_ID=>'tr_person_id',
		self::FIELD_EXT_AGENCY_ID=>'ext_agency_id',
		self::FIELD_TR_PURPOSE=>'tr_purpose',
		self::FIELD_TR_DETAIL=>'tr_detail',
		self::FIELD_TR_REMARKS=>'tr_remarks',
		self::FIELD_TR_PAYMENT_MODE=>'tr_payment_mode',
		self::FIELD_TR_PAYMENT_REF=>'tr_payment_ref',
		self::FIELD_TR_BANKNAME=>'tr_bankname',
		self::FIELD_TR_BANKCODE=>'tr_bankcode',
		self::FIELD_TR_AMOUNT=>'tr_amount');
	private static $PROPERTY_NAMES=array(
		self::FIELD_TR_ID=>'trId',
		self::FIELD_TR_TYPE=>'trType',
		self::FIELD_TR_EXECUTOR=>'trExecutor',
		self::FIELD_TR_PARTY=>'trParty',
		self::FIELD_TR_PERSON_ID=>'trPersonId',
		self::FIELD_EXT_AGENCY_ID=>'extAgencyId',
		self::FIELD_TR_PURPOSE=>'trPurpose',
		self::FIELD_TR_DETAIL=>'trDetail',
		self::FIELD_TR_REMARKS=>'trRemarks',
		self::FIELD_TR_PAYMENT_MODE=>'trPaymentMode',
		self::FIELD_TR_PAYMENT_REF=>'trPaymentRef',
		self::FIELD_TR_BANKNAME=>'trBankname',
		self::FIELD_TR_BANKCODE=>'trBankcode',
		self::FIELD_TR_AMOUNT=>'trAmount');
	private static $PROPERTY_TYPES=array(
		self::FIELD_TR_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TR_TYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_EXECUTOR=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_PARTY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_PERSON_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EXT_AGENCY_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TR_PURPOSE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_DETAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_REMARKS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_PAYMENT_MODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_PAYMENT_REF=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_BANKNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_BANKCODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TR_AMOUNT=>Db2PhpEntity::PHP_TYPE_FLOAT);
	private static $FIELD_TYPES=array(
		self::FIELD_TR_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TR_TYPE=>array(Db2PhpEntity::JDBC_TYPE_CHAR,6,0,true),
		self::FIELD_TR_EXECUTOR=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true),
		self::FIELD_TR_PARTY=>array(Db2PhpEntity::JDBC_TYPE_CHAR,15,0,true),
		self::FIELD_TR_PERSON_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_EXT_AGENCY_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TR_PURPOSE=>array(Db2PhpEntity::JDBC_TYPE_CHAR,15,0,true),
		self::FIELD_TR_DETAIL=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_TR_REMARKS=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_TR_PAYMENT_MODE=>array(Db2PhpEntity::JDBC_TYPE_CHAR,9,0,true),
		self::FIELD_TR_PAYMENT_REF=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_TR_BANKNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,200,0,true),
		self::FIELD_TR_BANKCODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_TR_AMOUNT=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,15,2,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_TR_ID=>null,
		self::FIELD_TR_TYPE=>null,
		self::FIELD_TR_EXECUTOR=>null,
		self::FIELD_TR_PARTY=>null,
		self::FIELD_TR_PERSON_ID=>null,
		self::FIELD_EXT_AGENCY_ID=>null,
		self::FIELD_TR_PURPOSE=>null,
		self::FIELD_TR_DETAIL=>null,
		self::FIELD_TR_REMARKS=>null,
		self::FIELD_TR_PAYMENT_MODE=>null,
		self::FIELD_TR_PAYMENT_REF=>null,
		self::FIELD_TR_BANKNAME=>null,
		self::FIELD_TR_BANKCODE=>null,
		self::FIELD_TR_AMOUNT=>null);
	private $trId;
	private $trType;
	private $trExecutor;
	private $trParty;
	private $trPersonId;
	private $extAgencyId;
	private $trPurpose;
	private $trDetail;
	private $trRemarks;
	private $trPaymentMode;
	private $trPaymentRef;
	private $trBankname;
	private $trBankcode;
	private $trAmount;

	
        
        public function __construct($type, $executor, $party, $partyid, $purpose, $detail, $remarks, $paymentmode, $paymentref, $bankname, $bankcode, $amount) {
            $this->trAmount = $amount;
            $this->trBankcode = $bankcode;
            $this->trBankname = $bankname;
            $this->trDetail = $detail;
            $this->trExecutor = $executor;
            $this->trParty = $party;
            $this->trPaymentMode = $paymentmode;
            $this->trPaymentRef = $paymentref;
            if($this->trParty == "Resident"){
                $this->trPersonId = $partyid;
            }else if($this->trParty == "ExternalAgency"){
                $this->trAgencyId = $partyid;
            }
            $this->trPurpose = $purpose;
            $this->trRemarks = $remarks;
            $this->trType = $type;
            $this->trId = NULL;
              
        }

        /**
	 * set value for tr_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $trId
	 * @return MoneyTransaction
	 */
	public function &setTrId($trId) {
		$this->notifyChanged(self::FIELD_TR_ID,$this->trId,$trId);
		$this->trId=$trId;
		return $this;
	}

	/**
	 * get value for tr_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getTrId() {
		return $this->trId;
	}

	/**
	 * set value for tr_type 
	 *
	 * type:ENUM,size:6,default:null,nullable
	 *
	 * @param mixed $trType
	 * @return MoneyTransaction
	 */
	public function &setTrType($trType) {
		$this->notifyChanged(self::FIELD_TR_TYPE,$this->trType,$trType);
		$this->trType=$trType;
		return $this;
	}

	/**
	 * get value for tr_type 
	 *
	 * type:ENUM,size:6,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrType() {
		return $this->trType;
	}

	/**
	 * set value for tr_executor 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $trExecutor
	 * @return MoneyTransaction
	 */
	public function &setTrExecutor($trExecutor) {
		$this->notifyChanged(self::FIELD_TR_EXECUTOR,$this->trExecutor,$trExecutor);
		$this->trExecutor=$trExecutor;
		return $this;
	}

	/**
	 * get value for tr_executor 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrExecutor() {
		return $this->trExecutor;
	}

	/**
	 * set value for tr_party 
	 *
	 * type:ENUM,size:15,default:null,nullable
	 *
	 * @param mixed $trParty
	 * @return MoneyTransaction
	 */
	public function &setTrParty($trParty) {
		$this->notifyChanged(self::FIELD_TR_PARTY,$this->trParty,$trParty);
		$this->trParty=$trParty;
		return $this;
	}

	/**
	 * get value for tr_party 
	 *
	 * type:ENUM,size:15,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrParty() {
		return $this->trParty;
	}

	/**
	 * set value for tr_person_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $trPersonId
	 * @return MoneyTransaction
	 */
	public function &setTrPersonId($trPersonId) {
		$this->notifyChanged(self::FIELD_TR_PERSON_ID,$this->trPersonId,$trPersonId);
		$this->trPersonId=$trPersonId;
		return $this;
	}

	/**
	 * get value for tr_person_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTrPersonId() {
		return $this->trPersonId;
	}

	/**
	 * set value for ext_agency_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $extAgencyId
	 * @return MoneyTransaction
	 */
	public function &setExtAgencyId($extAgencyId) {
		$this->notifyChanged(self::FIELD_EXT_AGENCY_ID,$this->extAgencyId,$extAgencyId);
		$this->extAgencyId=$extAgencyId;
		return $this;
	}

	/**
	 * get value for ext_agency_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getExtAgencyId() {
		return $this->extAgencyId;
	}

	/**
	 * set value for tr_purpose 
	 *
	 * type:ENUM,size:15,default:null,nullable
	 *
	 * @param mixed $trPurpose
	 * @return MoneyTransaction
	 */
	public function &setTrPurpose($trPurpose) {
		$this->notifyChanged(self::FIELD_TR_PURPOSE,$this->trPurpose,$trPurpose);
		$this->trPurpose=$trPurpose;
		return $this;
	}

	/**
	 * get value for tr_purpose 
	 *
	 * type:ENUM,size:15,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrPurpose() {
		return $this->trPurpose;
	}

	/**
	 * set value for tr_detail 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $trDetail
	 * @return MoneyTransaction
	 */
	public function &setTrDetail($trDetail) {
		$this->notifyChanged(self::FIELD_TR_DETAIL,$this->trDetail,$trDetail);
		$this->trDetail=$trDetail;
		return $this;
	}

	/**
	 * get value for tr_detail 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrDetail() {
		return $this->trDetail;
	}

	/**
	 * set value for tr_remarks 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $trRemarks
	 * @return MoneyTransaction
	 */
	public function &setTrRemarks($trRemarks) {
		$this->notifyChanged(self::FIELD_TR_REMARKS,$this->trRemarks,$trRemarks);
		$this->trRemarks=$trRemarks;
		return $this;
	}

	/**
	 * get value for tr_remarks 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrRemarks() {
		return $this->trRemarks;
	}

	/**
	 * set value for tr_payment_mode 
	 *
	 * type:ENUM,size:9,default:null,nullable
	 *
	 * @param mixed $trPaymentMode
	 * @return MoneyTransaction
	 */
	public function &setTrPaymentMode($trPaymentMode) {
		$this->notifyChanged(self::FIELD_TR_PAYMENT_MODE,$this->trPaymentMode,$trPaymentMode);
		$this->trPaymentMode=$trPaymentMode;
		return $this;
	}

	/**
	 * get value for tr_payment_mode 
	 *
	 * type:ENUM,size:9,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrPaymentMode() {
		return $this->trPaymentMode;
	}

	/**
	 * set value for tr_payment_ref 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $trPaymentRef
	 * @return MoneyTransaction
	 */
	public function &setTrPaymentRef($trPaymentRef) {
		$this->notifyChanged(self::FIELD_TR_PAYMENT_REF,$this->trPaymentRef,$trPaymentRef);
		$this->trPaymentRef=$trPaymentRef;
		return $this;
	}

	/**
	 * get value for tr_payment_ref 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrPaymentRef() {
		return $this->trPaymentRef;
	}

	/**
	 * set value for tr_bankname 
	 *
	 * type:VARCHAR,size:200,default:null,nullable
	 *
	 * @param mixed $trBankname
	 * @return MoneyTransaction
	 */
	public function &setTrBankname($trBankname) {
		$this->notifyChanged(self::FIELD_TR_BANKNAME,$this->trBankname,$trBankname);
		$this->trBankname=$trBankname;
		return $this;
	}

	/**
	 * get value for tr_bankname 
	 *
	 * type:VARCHAR,size:200,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrBankname() {
		return $this->trBankname;
	}

	/**
	 * set value for tr_bankcode 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $trBankcode
	 * @return MoneyTransaction
	 */
	public function &setTrBankcode($trBankcode) {
		$this->notifyChanged(self::FIELD_TR_BANKCODE,$this->trBankcode,$trBankcode);
		$this->trBankcode=$trBankcode;
		return $this;
	}

	/**
	 * get value for tr_bankcode 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrBankcode() {
		return $this->trBankcode;
	}

	/**
	 * set value for tr_amount 
	 *
	 * type:DECIMAL,size:15,default:null,nullable
	 *
	 * @param mixed $trAmount
	 * @return MoneyTransaction
	 */
	public function &setTrAmount($trAmount) {
		$this->notifyChanged(self::FIELD_TR_AMOUNT,$this->trAmount,$trAmount);
		$this->trAmount=$trAmount;
		return $this;
	}

	/**
	 * get value for tr_amount 
	 *
	 * type:DECIMAL,size:15,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTrAmount() {
		return $this->trAmount;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_TR_ID=>$this->getTrId(),
			self::FIELD_TR_TYPE=>$this->getTrType(),
			self::FIELD_TR_EXECUTOR=>$this->getTrExecutor(),
			self::FIELD_TR_PARTY=>$this->getTrParty(),
			self::FIELD_TR_PERSON_ID=>$this->getTrPersonId(),
			self::FIELD_EXT_AGENCY_ID=>$this->getExtAgencyId(),
			self::FIELD_TR_PURPOSE=>$this->getTrPurpose(),
			self::FIELD_TR_DETAIL=>$this->getTrDetail(),
			self::FIELD_TR_REMARKS=>$this->getTrRemarks(),
			self::FIELD_TR_PAYMENT_MODE=>$this->getTrPaymentMode(),
			self::FIELD_TR_PAYMENT_REF=>$this->getTrPaymentRef(),
			self::FIELD_TR_BANKNAME=>$this->getTrBankname(),
			self::FIELD_TR_BANKCODE=>$this->getTrBankcode(),
			self::FIELD_TR_AMOUNT=>$this->getTrAmount());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_TR_ID=>$this->getTrId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (null===self::$stmts[$statement][$dbInstanceId]) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of MoneyTransaction instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param MoneyTransaction $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return MoneyTransaction[]
	 */
	public static function findByExample(PDO $db,MoneyTransaction $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of MoneyTransaction instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return MoneyTransaction[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `MoneyTransaction`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of MoneyTransaction instances
	 *
	 * @param PDOStatement $stmt
	 * @return MoneyTransaction[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of MoneyTransaction instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return MoneyTransaction[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new MoneyTransaction();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of MoneyTransaction instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return MoneyTransaction[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `MoneyTransaction`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setTrId($result['tr_id']);
		$this->setTrType($result['tr_type']);
		$this->setTrExecutor($result['tr_executor']);
		$this->setTrParty($result['tr_party']);
		$this->setTrPersonId($result['tr_person_id']);
		$this->setExtAgencyId($result['ext_agency_id']);
		$this->setTrPurpose($result['tr_purpose']);
		$this->setTrDetail($result['tr_detail']);
		$this->setTrRemarks($result['tr_remarks']);
		$this->setTrPaymentMode($result['tr_payment_mode']);
		$this->setTrPaymentRef($result['tr_payment_ref']);
		$this->setTrBankname($result['tr_bankname']);
		$this->setTrBankcode($result['tr_bankcode']);
		$this->setTrAmount($result['tr_amount']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return MoneyTransaction
	 */
	public static function findById(PDO $db,$trId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$trId);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new MoneyTransaction();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getTrId());
		$stmt->bindValue(2,$this->getTrType());
		$stmt->bindValue(3,$this->getTrExecutor());
		$stmt->bindValue(4,$this->getTrParty());
		$stmt->bindValue(5,$this->getTrPersonId());
		$stmt->bindValue(6,$this->getExtAgencyId());
		$stmt->bindValue(7,$this->getTrPurpose());
		$stmt->bindValue(8,$this->getTrDetail());
		$stmt->bindValue(9,$this->getTrRemarks());
		$stmt->bindValue(10,$this->getTrPaymentMode());
		$stmt->bindValue(11,$this->getTrPaymentRef());
		$stmt->bindValue(12,$this->getTrBankname());
		$stmt->bindValue(13,$this->getTrBankcode());
		$stmt->bindValue(14,$this->getTrAmount());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getTrId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getTrType());
			$stmt->bindValue(2,$this->getTrExecutor());
			$stmt->bindValue(3,$this->getTrParty());
			$stmt->bindValue(4,$this->getTrPersonId());
			$stmt->bindValue(5,$this->getExtAgencyId());
			$stmt->bindValue(6,$this->getTrPurpose());
			$stmt->bindValue(7,$this->getTrDetail());
			$stmt->bindValue(8,$this->getTrRemarks());
			$stmt->bindValue(9,$this->getTrPaymentMode());
			$stmt->bindValue(10,$this->getTrPaymentRef());
			$stmt->bindValue(11,$this->getTrBankname());
			$stmt->bindValue(12,$this->getTrBankcode());
			$stmt->bindValue(13,$this->getTrAmount());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setTrId($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(15,$this->getTrId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getTrId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch ExtAgencyInfo which references this MoneyTransaction. Will return null in case reference is invalid.
	 * `MoneyTransaction`.`ext_agency_id` -> `ext_agency_info`.`agency_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ExtAgencyInfo
	 */
	public function fetchExtAgencyInfo(PDO $db, $sort=null) {
		$filter=array(ExtAgencyInfo::FIELD_AGENCY_ID=>$this->getExtAgencyId());
		$result=ExtAgencyInfo::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch PersonInfo which references this MoneyTransaction. Will return null in case reference is invalid.
	 * `MoneyTransaction`.`tr_person_id` -> `person_info`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PersonInfo
	 */
	public function fetchPersonInfo(PDO $db, $sort=null) {
		$filter=array(PersonInfo::FIELD_ID=>$this->getTrPersonId());
		$result=PersonInfo::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'MoneyTransaction');
	}

	/**
	 * get single MoneyTransaction instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return MoneyTransaction
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new MoneyTransaction();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of MoneyTransaction from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return MoneyTransaction[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('MoneyTransaction') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>