<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PSW - Request a Quote</title>
        <link href="css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
         <?php include("include/head.php");?> 
         <link href="css/quote.css" rel="stylesheet" type="text/css" >
        <script src="js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
    </head >
    <body id="requestquote">
        <?php include("include/header.php");?>
        <?php include("include/navigation.php");?>
        <div id="container">
        <h2>Request a Quote</h2>
        <p>If you're interested in a quote for your customized project please fill out the form below.  One of our product specialists will be in touch with you to discus details shortly.</p>
        <form action="http://morpheus.dce.harvard.edu/cgi-bin/echo.cgi" method="post" id="form">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Tell us about your order
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                    <fieldset>
                    <span>
                        <label>What will your soap be used for?</label>
                        <label for="specialbox"><input type="radio" name="eventType" value="Special Event" id="specialbox" checked="checked"> A Special event </label>
                        <label for="promobox"><input type="radio" name="eventType" value="Promo Item" id="promobox"> A Promotional item </label>
                        <label for="brandbox"> <input type="radio" name="eventType" value="Branding Item" id="brandbox"> A company branding item</label>
                    </span>
                    <span>
                        <label for="qtybox">How many bars will you need? <input type=number name="qty" id="qtybox"> </label>
                    </span>
                    <span>
                          <label>Is this a </label> 
                          <label for="oncebox"><input type="radio" name="frequency" value="once" id="oncebox" checked="checked"> one time event.</label> 
                          <label for="recurringbox"><input type="radio" name="frequency" value="recurring" id="recurringbox"> a recurring order.</label>
                    </span>
                    <span>
                        <label>Do you want personalized packaging? </label>
                        <label for="packaging"><input type="radio" name="packaging" value="yes" id="packaging" checked="checked">Yes</label>
                        <label for="nopackaging"><input type="radio" name="packaging" value="no" id="nopackaging">No</label>
                    </span>
                    <span>
                        <label>Do you want a design consultation? </label>
                        <label for="consultyes"><input type="radio" name="consult" value="yes" id="consultyes">Yes</label>
                        <label for="consultno"><input type="radio" name="consult" value="no" id="consultno" checked="checked">No</label>  
                    </span>
                    </fieldset>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  What kind of soap would you like?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <fieldset>
                  <label>What type of bars would you like?</label><br/>
                  <span class="labelbelow">
                    <label for="moldedbox"><img src="images/thumbnails/molded.jpg" alt="Molded soap bar"><input type="radio" name="moldtype" value="molded" id="moldedbox">Molded</label>
                    <label for="stampedbox"><img src="images/thumbnails/treestamp.jpg" alt="Stamped soap bar"><input type="radio" name="moldtype" value="stamped" id="stampedbox" checked="checked">Stamped</label>
                    </span>
                    <span>
                        <label for="shape">What shape of soap? </label>
                        <select name="Shape" id="shape" >
                            <option>Round</option>
                            <option selected="selected">Standard Bar</option>
                            <option>Oval Bar</option>
                            <option>Cube</option>
                        </select>
                    </span>
                    <span>
                        <label for="size">Approximately how big do you want the bars? </label>
                        <select name="size" id="size">
                            <option>2-3 oz.(small gift size)</option>
                            <option selected="selected">4-5 oz.(facial size)</option>
                            <option>5-6 oz. (bath size)</option>
                            <option>6-7oz. (extra large></option>
                        </select>
                    </span>
                    <span>
                        <label>What scents are you interested in? </label>
                            <label for="floralbox"><input type="checkbox" name="scents" value="floral" id="floralbox">Floral</label>
                            <label for="spicebox"><input type="checkbox" name="scents" value="spice" id="spicebox">Spice</label>
                        <label for="sweetbox"><input type="checkbox" name="scents" value="sweet" id="sweetbox">Sweet</label>
                        <label for="herbalbox"><input type="checkbox" name="scents" value="herbal" id="herbalbox">Herbal</label>
                        <label for="fruitbox"><input type="checkbox" name="scents" value="fruity" id="fruitbox">Fruity</label>
                    </span>
                    <span>
                        <label for="additionalbox" class="aligntop">Is there anything else we should know? <textarea name="additionalDetails" id="additionalbox" rows=3 cols=50></textarea> </label>
                    </span>
                </fieldset>    
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Tell us who you are
                </a>
                 <input type="submit" value="Request Your Quote">
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <fieldset>
                <span>
                  <label for="namebox">Name: <input type="text" name="customerName" id="namebox" size=50 required></label>
                </span>
                <span>
                  <label for="addressbox">Address: <input type="text" name="customerAddress" id="addressbox" size="50"></label>
                </span>
                <span>
                  <label for="citybox">City: <input type="text" name="customerCity" id="citybox" size="25"></label>
                  <label for="statebox">State: <input type="text" name="customerState" size="2" id="statebox"></label>
                  <label for="zipbox">Zip: <input type="text" name="customerZip" id="zipbox" size="5"></label>
                </span>
                <span>
                  <label for="emailbox">E-mail: <input type="text" name="customerEmail" id="emailbox" size="50" required></label>
                </span>
                <span>
                  <label for="phonebox">Phone: <input type="text" name="customerPhone" id="phonebox" size="15"></label>
                </span>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
        
            
        </form>
        </div>
        

    </body>
</html>