<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //Initialize the application
//Connect to mysql on localhost with admin user
//Replace username and password with logged in user and password 
$con = mysqli_connect("localhost", "NestAdmin", "nestadminpw");
if (!$con) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
} else {
    echo mysqli_connect_error();
}

//set the default client character set 
mysqli_set_charset($con, 'utf-8');

///Connect to Nest_DB Database
/* change db to world db */
mysqli_select_db($con, "Nest_DB");
echo mysqli_error($con);
/* return name of current default database */
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}
$query = "SET FOREIGN_KEY_CHECKS = 0;";
$result = mysqli_query($con, $query );
if ($result === FALSE)
    echo "foreign key setting failed";

$query = "CREATE TABLE IF NOT EXISTS apt_info
    (
apt_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
house_number varchar(10) NOT NULL,
block varchar(3) NOT NULL,
apt_area int,
apt_type enum('TYPE1', 'TYPE2', 'TYPE3', 'TYPE4', 'TYPE5', 'TYPE6', 'TYPE7', 'TYPE8', 'TYPE9', 'TYPE10'),
apt_usage enum('SELF_OCCUPIED', 'RENTED', 'UNOCCUPIED', 'COMMERCIAL'),
owner_id int,
KEY owner_id (owner_id),
CONSTRAINT apt_owner FOREIGN KEY (owner_id) REFERENCES owner_info(owner_id),
tenant_id INT,
KEY tenant_id (tenant_id),
CONSTRAINT apt_tenant FOREIGN KEY (tenant_id) REFERENCES tenant_info(tenant_id)
);";

$result = mysqli_query($con, $query );
if ($result === FALSE)
    echo "apt_info table creation failed";

$query = "ALTER TABLE apt_info ADD UNIQUE INDEX(block, house_number);";
$result = mysqli_query($con, $query );
if ($result === FALSE)
    echo "apt_info table creation failed";

$query = "CREATE TABLE IF NOT EXISTS owner_info 
(
owner_id int PRIMARY KEY REFERENCES person_info (id),
/*
All info below are now added to person_info table
firstname varchar(80),
lastname varchar(80),
nationality varchar(25),
current_address TEXT,
permanent_address TEXT,
contact_number VARCHAR(20),
other_info TEXT*/
);";

$result = mysqli_query($con, $query );
if ($result === FALSE)
    echo "owner_info table creation failed";

$query = "CREATE TABLE IF NOT EXISTS tenant_info 
(
tenant_id int PRIMARY KEY REFERENCES person_info (id),
/*
All info below are now added to person_info table
tenant_firstname varchar(80),
tenant_lastname varchar(80),
tenant_nationality varchar(25),
tenant_permanent_address TEXT,
tenant_contact_number VARCHAR(20),
tenant_other_info TEXT,
PRIMARY KEY (tenant_id), */
tenancy_start_date DATE,
tenancy_end_date DATE,
owner_id int,
KEY owner_id(owner_id),
CONSTRAINT tenant_owner FOREIGN KEY (owner_id) REFERENCES owner_info(owner_id),
apt_id INT,
KEY apt_id,
CONSTRAINT tenant_apt FOREIGN KEY (apt_id) REFERENCES apt_info(apt_id)
);";

$result = mysqli_query($con, $query );
if ($result === FALSE){
    echo "tenant_info table creation failed";
}

$query = "ALTER TABLE tenant_info ADD UNIQUE INDEX(apt_id);";
$result = mysqli_query($con, $query );
if ($result === FALSE){
    echo "tenant_info table creation failed";
}
//Read data from the CSV file and populate the Database

//dump the data into a temp data base

//populate owner_info table with unique entry for each owner

//populate apt_info table with apt related information in the temp table and 
//match the owner id from owner_info

//Create table for MoneyTransactions
$query = "CREATE TABLE IF NOT EXISTS MoneyTransaction(
transactionID INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
tr_type ENUM('DEBIT', 'CREDIT'),
tr_executor VARCHAR(20), 
tr_party ENUM('RESIDENT', 'EXTERNAL_AGENCY'),
tr_person_id INT,
KEY tr_person_id(tr_person_id),
CONSTRAINT tr_person FOREIGN KEY (tr_person_id) REFERENCES person_info(id),
tr_apt_id INT,
KEY tr_apt_id(tr_apt_id),
CONSTRAINT tr_apt FOREIGN KEY (tr_apt_id) REFERENCES apt_info(apt_id),
ext_agency_id INT,
KEY ext_agency_id(ext_agency_id),
tr_purpose ENUM('AMENITY_USAGE', 'PREMISE_RENTAL', 'FEES', 'SERVICE_PAYMENT', 'PURCHASE'),
tr_detail TEXT,
tr_remarks TEXT,
CONSTRAINT tr_agency FOREIGN KEY (ext_agency_id) REFERENCES ext_agency_info (agency_id),
tr_payment_mode ENUM('CASH', 'CARD', 'CHECK', 'ETRANSFER'),
tr_payment_ref VARCHAR(50),
tr_bankname VARCHAR(200),
tr_bankcode VARCHAR (50),
tr_amount DECIMAL(15,2)
);";
        
$result = mysqli_query($con, $query );
if ($result === FALSE)
    echo "Money_transaction table creation failed";        


$query = "CREATE TABLE IF NOT EXISTS ext_agency_info(
agency_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
ag_name VARCHAR(250),
ag_street VARCHAR(1000),
ag_area VARCHAR(1000),
ag_city VARCHAR (100),
ag_pin VARCHAR(25),
ag_phone VARCHAR(15),
ag_TIN VARCHAR(25),
ag_service TEXT,
ag_relation TEXT
);";
        
$result = mysqli_query($con, $query );
if ($result === FALSE)
    echo "agency_info table creation failed";        

$query = "alter table ext_agency_info add unique index(ag_name, ag_phone)";
$result = mysqli_query($con, $query );
if ($result === FALSE){
    echo "person_info table creation failed";        

}

$query = "CREATE TABLE IF NOT EXISTS person_info(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(250),
lastname VARCHAR(250),
phone VARCHAR(25),
phone2 VARCHAR(25),
apt_id INT,
KEY apt_id(apt_id),
CONSTRAINT p_apt FOREIGN KEY (apt_id) REFERENCES apt_info(apt_id),
street VARCHAR(1000),
area VARCHAR(1000),
city VARCHAR (100),
pin VARCHAR(25),
PAN VARCHAR(25),
personal_id_type ENUM('PASSPORT', 'DRV_LICENSE', 'GOVT_ID'),
personal_id_num VARCHAR(50),
personal_id_remarks TEXT
);";

$result = mysqli_query($con, $query );
if ($result === FALSE){
    echo "person_info table creation failed";        

}

$query = "alter table person_info add unique index(firstname, lastname, phone)";
$result = mysqli_query($con, $query );
if ($result === FALSE){
    echo "person_info table creation failed";        

}
?>
    </body>
</html>
