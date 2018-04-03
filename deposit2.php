<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Deposit Funds</title>
    <style>
        
    #type{
      width:100%;
      height:100%;
    }
    #expireMM{
      width:100%;
      height:100%;
      border-radius: 6px; 
                    background-color: white;                                            
                    -webkit-rtl-ordering: logical;
                    cursor: text;
                    padding: 0px;
                    border-width: 2px;
                    border-style: inset;
                    border-color: initial;
                    border-image: initial;position: relative;
                             
                    border-collapse: separate;
    }
    #expireYY{
      width:100%;
      height:100%;
   border-radius: 6px;   
                    background-color: white;                                         
                    -webkit-rtl-ordering: logical;
                    cursor: text;
                    padding: 1px;
                    border-width: 2px;
                    border-style: inset;
                    border-color: initial;
                    border-image: initial;position: relative;
                    border-collapse: separate; }
    .visa_box{
      width: 100%; height:100%; border-radius: 6px;    box-sizing:0px; border:0px;
    background-color: white;
                                            
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 0px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;position: relative;
    border-collapse: separate;
    }
    .paypal_box{
      width: 100%; height:100%; border-radius: 6px;    box-sizing: border-box;
    background-color: white;
                                            
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 1px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;position: relative;
    border-collapse: separate;
    }
        @media(max-width:768px){
  #expireYY{
   height:100%;
   width:100%;
border-radius: 6px;   
                    background-color: white;                                         
                    -webkit-rtl-ordering: logical;
                    cursor: text;
                    padding: 1px;
                    border-width: 2px;
                    border-style: inset;
                    border-color: initial;
                    border-image: initial;position: relative;
                    border-collapse: separate;
  }
  #expireMM{
      width:100%;
      height:100%;
      border-radius: 6px; 
                    background-color: white;                                            
                    -webkit-rtl-ordering: logical;
                    cursor: text;
                    padding: 0px;
                    border-width: 2px;
                    border-style: inset;
                    border-color: initial;
                    border-image: initial;position: relative;
                             
                    border-collapse: separate;
    }


}

</style>
  </head>
  <body>
<!-- navbar deposit ---->
<div class="container">
    <nav class = "navbar navbar-default navbar-fixed-top " align="center"><a  href = "#" style="font-size:40px; margin-top:30px; padding:15px; text-decoration:none; " class="navbar-brand">Deposit Funds</a></nav>
  </div>  
<!-- other info paypal and visa buttons -->
<div class="container" style="padding-left: 15%; padding-right: 15%; margin-top:110px; ">
      <p id="account"> ACCOUNT BALANCE</p><br><p>0</p><span class="sectionDetails-inr"></span>
         <sub><p id="type1"></p></sub>
                   <br>
        <div>
          Select Payment Method
            <br>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <button class="tablink" onclick="openPage('paypal', this, 'yellow')" id="defaultOpen" >
                         <i class="fa fa-cc-paypal" style="font-size:50px; color:blue; "> </i>  
                    </button>
                </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <button class="tablink" onclick="openPage('visa', this, 'yellow')">
                      <i class="fa fa-cc-visa" style="font-size:50px; color:blue;">
                      </i>
                  </button>
              </div>
            </div>                    
        </div>
        <br>
    <div id="visa" class="tabcontent">
         DEPOSIT FUNDS
          <br>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="form-contorl">
                <input type="number" class="input-group input-lg" min="100" name="amount" placeholder="Enter amount" id="myInput" oninput="myFunction()" required>
            


<script>
    function openPage(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
function myFunction() {
    var x = document.getElementById("myInput").value;
    var type=document.getElementById("type").value;
     document.getElementById("type1").innerHTML = " "+type;
        document.getElementById("demo").innerHTML = "" + x+" "+type;
    var tax=0.17*x;
    var total;
    total=parseFloat(x)+parseFloat(tax);
    document.getElementById("tax").innerHTML=""+ tax+" "+type;
      
    document.getElementById("total").innerHTML=""+ total+" "+type;
    }
</script> 
                    </div>
        </div>
        
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <select name="visa" class="visa_box" style="" id="type" onclick="myFunction()">
<!-- list of currencytype -->                   
                  <option value="ARS">ARS</option>
                  <option value="AUD">AUD</option>
                  <option value="BRL">BRL</option>
                  <option value="CAD">CAD</option>
                  <option value="CLP">CLP</option>
                  <option value="CNY">CNY</option>
                  <option value="EUR">EUR</option>
                  <option value="GBP">GBP</option>
                  <option value="HKD">HKD</option>
                  <option value="IDR">IDR</option>
                  <option value="IDR">IDR</option>
                  <option value="INR">INR</option>
                  <option value="JMD">JMD</option>
                  <option value="JPY">JPY</option>
                  <option value="MXN">MXN</option>
                  <option value="MYR">MYR</option>
                  <option value="NZD">NZD</option>
                  <option value="PHP">PHP</option>
                  <option value="PLN">PLN</option>
                  <option value="SEK">SEK</option>
                  <option value="SGD">SGD</option>
                  <option value="USD">USD</option>
                  <option value="VND">VND</option>
                  <option value="ZAR">ZAR</option>

                </select>
              </div>
            </div>
          <br>
            CARDHOLDER NAME
              <input type="text" name="cardholdername" placeholder="CardHolder Name" class="input-group input-lg" required>
            <br>
            CARD NUMBER
            <div class="form-contorl">
              <input type="number" name="cardnumber" placeholder="xxxx xxxx xxxx xxxx" min="1000000000000" class="input-group input-lg" required>
            </div><br>
<div class="row" >
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
<!-- choose your month -->                
            <div class="row">
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                   
                       EXPIRY
                   <select name='expireMM' id='expireMM' >
                    <option value=''>Month</option>
                    <option value='01'>January</option>
                    <option value='02'>February</option>
                    <option value='03'>March</option>
                    <option value='04'>April</option>
                    <option value='05'>May</option>
                    <option value='06'>June</option>
                    <option value='07'>July</option>
                    <option value='08'>August</option>
                    <option value='09'>September</option>
                    <option value='10'>October</option>
                    <option value='11'>November</option>
                    <option value='12'>December</option>
                  </select> 
                </div>
<!-- choose your year -->                
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">YEAR
              <select name='expireYY' id='expireYY'>
                    <option value=''>Year</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                    <option value="22"> 2022</option>
                    <option value="23"> 2023</option>
                    <option value="24"> 2024</option>
                    <option value="25"> 2025</option>
                    <option value="26"> 2026</option>
                    <option value="27"> 2027</option>
                    <option value="28"> 2028</option>
                    <option value="29"> 2029</option>
                    <option value="30"> 2030</option>
                    <option value="31"> 2031</option>
                    <option value="32"> 2032</option>
                    <option value="33"> 2033</option>
                    <option value="34"> 2034</option>
                    <option value="35"> 2035</option>
                    <option value="36"> 2036</option>
                    <option value="37"> 2037</option>
                    <option value="38"> 2038</option>
                    <option value="39"> 2039</option>
                    <option value="40"> 2040</option>
                </select>
            </div>
          </div>
      </div>
 <!-- enter your cvv details -->     
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
    CCV/CVV
     <div class="form-contorl">
              <input type="number" type="password" name="cvv" placeholder="xxx" max="999" class="input-group input-lg" required>
            </div>
    </div>

  <div style="padding-left:5px;">You agree to authorize the use of your credit card for this deposit and future payments.
    </div>
    </div>

      </div>
     

    
    
 <!-- paypal tab content -->   
    <div id="paypal" class="tabcontent">
        DEPOSIT FUNDS
          <br>
    
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                <input type="number" class="input-group input-lg" min="100" name="amount" placeholder="Enter amount" id="myInputpaypal" oninput="myFunctionpaypal()" required>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <script>
        function myFunctionpaypal() {
    var x = document.getElementById("myInputpaypal").value;
    var type=document.getElementById("typepaypal").value;
     document.getElementById("type1").innerHTML = " "+type;
        document.getElementById("demo").innerHTML = "" + x+" "+type;
    var tax=0.17*x;
    var total;
    total=parseFloat(x)+parseFloat(tax);
    document.getElementById("tax").innerHTML=""+ tax+" "+type;
      
    document.getElementById("total").innerHTML=""+ total+" "+type;
    }
</script> 

                      <select name="paypal"  class="paypal_box" id="typepaypal" onclick="myFunctionpaypal()">
                    </div>
<!-- choose your currency -->                    
                  <option value="AUD">AUD</option>
                  <option value="CAD">CAD</option>
                  <option value="EUR">EUR</option>
                  <option value="GBP">GBP</option>
                  <option value="HKD">HKD</option>
                  <option value="MYR">MYR</option>
                  <option value="NZD">NZD</option>
                  <option value="PHP">PHP</option>
                  <option value="PLN">PLN</option>
                  <option value="SEK">SEK</option>
                  <option value="SGD">SGD</option>
                  <option value="USD">USD</option>
                  
                </select>
              </div>
            
                  
        </div>
    </div>
      </div>
      <br>
      <div class="container-fluid" style="background-color:#dcdfe5">
            <div class="row">
              <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                </div>
                
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                   <br><b>PAYMENT BREAKDOWN</b> 
                      <HR></HR>
                          DEPOSIT AMOUNT
                          <div style="text-align:right;"><p id="demo"></p>

                          </div>
                          
                      <HR></HR>
                              DEPOSIT FEE
                          <div style="text-align:right;"><p id="tax"></p>
                          </div>
                      <HR></HR>
                          <b>Total Amount
                              <div style="text-align:right;"><p id="total"></p>
                          </div>
                      </b>
                  </div>      
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                </div>  
            </div>
    </div>
          
    <div class="container-fluid" style="padding-left: 15%; padding-right: 15%;">
          <br><center>
         <button type="submit" class="btn btn-success" style="width:80%;">
           Confirm</button>
          </center>
          
                    </div>
<div class="container-fluid">
    <br><br>
    <p style="text-align:center;">CARDS ACCEPTED</p>
    <p style="text-align:center;">
    <i class="fa fa-cc-visa" style="font-size:48px;color:yellow"></i>
    <i class="fa fa-cc-paypal" style="font-size:48px;color:yellow"></i>
    </p>
    <p style="text-align:center;">
         <span class="glyphicon glyphicon-lock" style="color:yellow;"></span>    
  This is a secure 128 bit SSL encrypted payment.
    </p>
</div>
<br>
          
      

   </body>
</html>