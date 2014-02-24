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
           
        //Get read values
        $firstname = htmlentities($_GET["fname"]);
        $lastname = htmlentities($_GET["lname"]);
        //Resolve enum value
        if(htmlentities($_GET["Purpose"]) == "Amenity use")
            $purpose = 1;
        else if (htmlentities($_GET["Purpose"]) == "Party hall rent")
            $purpose = 2;
        else if (htmlentities($_GET["Purpose"]) == "Advertisement of service")
            $purpose = 3;
        else if (htmlentities($_GET["Purpose"]) == "Renting of premise by External agency")
            $purpose = 4;
        $remarks =  htmlentities($_GET["Remarks"]);
        $payingparty = htmlentities($_GET["PayingParty"]);
        $block = htmlentities($_GET["block"]);
        $housenum = htmlentities($_GET["house_num"]);
        $paymentmode = htmlentities($_GET["PaymentMode"]);
        $amount = htmlentities($_GET["Amount"]);
        $address = new address(htmlentities($_GET["street"]), htmlentities($_GET["area"]), htmlentities($_GET["city"]), htmlentities($_GET["PIN"]));
        
        echo "person named $paidbyname who is a $payingparty residing in $block$housenum paid $amount towards purpose $purpose $remarks by $paymentmode";
        
        //If the person is not in the database (first time)
        //****TO ADD LATER: confirm addition of new person with user*****
        $person = new personInfo($firstname, $lastname, NULL, $address, $contact, NULL, NULL, NULL, NULL, NULL);
        $person_id = $person->getAllFieldsFromDB();
        
        if($person_id == NULL)
        {
            $person->insertIntoDatabase(connectDB("NestAdmin", "nestadminpw"));
        }
        
        $party_id = NULL;
        if($payingparty == 'RESIDENT'){
            $apt = new AptInfo($block, $housenum);
            //Apartment number has to exist
            $party_id = $apt->getAllFieldsFromDB();  
            $person->setAptID($party_id);
        } else if($payingparty == 'EXTERNAL_AGENCY'){
            $agency = new ExtAgencyInfo($ag_name, $ag_phone, $ag_address, NULL, NULL, NULL);
            $party_id = $agency->getAllFieldsFromDB();     
            //If the agency is not in the database (first time)
            //****TO ADD LATER: confirm addition of new agency with user*****
            if($party_id == NULL){
                $agency->insertIntoDatabase(connectDB("NestAdmin", "nestadminpw"));
            }
            $person->setAptID($party_id);
        }
        $query =  "INSERT INTO MoneyTransactions VALUES (DEFAULT, 'CREDIT', 'root', CURRENT_TIMESTAMP, $paidbyname, $amount, $purpose, $remarks, OWNER, NULL, $block, $housenum) ";
echo $query;
                mysqli_query($con, $query );
       //$result = mysqli_query($con, "INSERT INTO MoneyTransactions VALUES (DEFAULT, 'CREDIT', 'root', CURRENT_TIMESTAMP, 'chetana', '32', '1', 'dsgdfghsfg', 'OWNER', NULL, 'C', 101') " );
       echo "result is $result";
       if (!$result) {
           echo "mysql query failed reason: ";
           echo " mysqli_error($con) ";
       }
       mysqli_close($con);
                
        ?>
        
        
    </body>
</html>
