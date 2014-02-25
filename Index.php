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
        
        
        <form name="Initialize" action="Initialize.php" >
            
            
            
            
            <input type="text" name="ApartmentInfoFile" value="" />
            <input type="submit" value="Initialize" name="Initialize" />
            
            
            
        </form>
        
        
        
        <form name="NewCredit" action="NewCredit.php">
        
        
            <input type="text" name="fname" value="" /> Paid By first name <br/>
            
            <input type="text" name="lname" value="" />
            <br/>
            
            <!should read list of different purpose from configuration file and return the ENUM values (1-N)>
            <select name="Purpose">
                <option>Amenity use</option>
                <option>Party hall rent</option>
                <option>Advertisement of service</option>
                <option>Renting of premise by External agency</option>
            </select> Purpose
            <br/>
            
            <textarea name="Remarks" rows="4" cols="20">
            </textarea>
            
            
            <input type="radio" name="PayingParty" value="Resident" checked="checked" />
            Resident     
           
            
            <input type="radio" name="PayingParty" value="EnternalAgency" /> External Agency
            
            
            <input type="text" name="agname" value="" /> Agency name
            <input type="text" name="street" value="" /> Address street
            <input type="text" name="area" value="" /> Area
            <input type="text" name="city" value="" /> city
            <input type="text" name="pin" value="" /> pin
            
        <br/>
  
        <!should read values from configuration file>
        <select name="block">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
        </select>
        Block   
        
        
        <select name="house_num">
            <option>101</option>
            <option>102</option>
            <option>103</option>
            <option>104</option>
            <option>105</option>
            <option>106</option>
            <option>107</option>
            <option>108</option>
            <option>109</option>
            <option>110</option>
            <option>111</option>
            <option>112</option>
            <option>113</option>
            <option>114</option>
            <option>115</option>
            <option>116</option>
            <option>201</option>
            <option>202</option>
            <option>203</option>
            <option>204</option>
            <option>205</option>
            <option>206</option>
            <option>207</option>
            <option>208</option>
            <option>209</option>
            <option>210</option>
            <option>211</option>
            <option>212</option>
            <option>213</option>
            <option>214</option>
            <option>215</option>
            <option>216</option>
            <option>301</option>
            <option>302</option>
            <option>303</option>
            <option>304</option>
            <option>305</option>
            <option>306</option>
            <option>307</option>
            <option>308</option>
            <option>309</option>
            <option>310</option>
            <option>311</option>
            <option>312</option>
            <option>313</option>
            <option>314</option>
            <option>315</option>
            <option>316</option>
            <option>401</option>
            <option>402</option>
            <option>403</option>
            <option>404</option>
            <option>405</option>
            <option>406</option>
            <option>407</option>
            <option>408</option>
            <option>409</option>
            <option>410</option>
            <option>411</option>
            <option>412</option>
            <option>413</option>
            <option>414</option>
            <option>415</option>
            <option>416</option>
            <option>501</option>
            <option>502</option>
            <option>503</option>
            <option>504</option>
            <option>505</option>
            <option>506</option>
            <option>507</option>
            <option>508</option>
            <option>509</option>
            <option>510</option>
            <option>511</option>
            <option>512</option>
            <option>513</option>
            <option>514</option>
            <option>515</option>
            <option>516</option>
            <option>601</option>
            <option>602</option>
            <option>603</option>
            <option>604</option>
            <option>605</option>
            <option>606</option>
            <option>607</option>
            <option>608</option>
            <option>609</option>
            <option>610</option>
            <option>611</option>
            <option>612</option>
            <option>613</option>
            <option>614</option>
            <option>615</option>
            <option>616</option>
            <option>701</option>
            <option>702</option>
            <option>703</option>
            <option>704</option>
            <option>705</option>
            <option>706</option>
            <option>707</option>
            <option>708</option>
            <option>709</option>
            <option>710</option>
            <option>711</option>
            <option>712</option>
            <option>713</option>
            <option>714</option>
            <option>715</option>
            <option>716</option>
        </select>
        <br/>
        
        
        <input type="radio" name="PaymentMode" value="Cash" /> Cash    
        <input type="radio" name="PaymentMode" value="CDD" /> Cheque/DD    
        <input type="radio" name="PaymentMode" value="BT" /> Bank Transfer    
        <br/>
        
        <input type="text" name="Amount" value="" /> Amount
        
        <br/>
        
        <input type="submit" value="Go" /> 
        <br/>
        
        
        
    </form>
    </body>
</html>
