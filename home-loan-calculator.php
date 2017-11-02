<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Vakilbaba|anytime,anywhere</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body> 
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->

<!-- /Page Header--> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Loan |</title>
    <!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="http://pg.gaarsam.com//html/assets/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" >
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://pg.gaarsam.com//html/assets/js/jquery-2.1.4.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="http://pg.gaarsam.com//html/assets/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>-->
    <script type="text/javascript" src="http://pg.gaarsam.com//html/assets/js/jquery.validate.min.js"></script>
    <style>
      .wrap { max-width: 980px; margin: 10px auto 0; }
      #steps { margin: 80px 0 0 0 }
      .commands { overflow: hidden; margin-top: 30px; }
      .prev {float:left}
      .next, .submit {float:right}
      .error { color: #b33; }
      #progress { position: relative; height: 5px; background-color: #eee; margin-bottom: 20px; }
      #progress-complete { border: 0; position: absolute; height: 5px; min-width: 10px; background-color: #337ab7; transition: width .2s ease-in-out; }
    </style>
    <link rel="stylesheet" href="homeloan.css">
    <script src="jquery.formtowizard.js" type="text/javascript"></script>
    <script>
        $( function() {
            var $HomeLoan = $( '#HomeLoan' );
            $HomeLoan.validate({errorElement: 'em'});
            $HomeLoan.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });
    </script>
    
</head>

<body style="font-family: 'Montserrat Light', sans-serif;">
<div class="jumbotron text-center">
  <h2 style="color:White;">Home Loans Calculators</h2>
</div>

<div class="container">
<ul id="tabs" class="nav nav-pills nav-stacked col-md-2">
  <li class="active"><a href="#tab_a" data-toggle="pill">Loan Eligibility <br><span style="font-size:10px;">How much loan you are eligible for?</span></a></li>
  <li><a href="#tab_b" data-toggle="pill">EMI <br><span style="font-size:10px;">How much EMI you have to pay?</span></a></li>
  <li><a href="#tab_c" data-toggle="pill">Apply Loan</a></li>
</ul>
<div class="tab-content col-md-10">
        <div class="tab-pane active" id="tab_a">
    <script language="javascript" type="text/javascript">
    function eligiable()
        {
                var P1 = document.formval2.pr_amt2.value; // pick the form input value..
                var rate1 = document.formval2.int_rate2.value; // pick the form input value..
                var n1 = document.formval2.period2.value; // pick the form input value..
                var r1 = rate1/(12*100); // to calculate rate percentage..
                var prate1 = (P1 * r1 * Math.pow((1+r1),n1*12))/(Math.pow((1+r1),n1*12)-1); // to calculate compound interest..
                 var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..
        var existing = document.formval2.ExLoan.value;
        var existingLoan=(existing-(existing*60/100));
        var income1 = document.formval2.NetIncome.value;
        if (income1<=14999){
        var incomere=((income1)*40/100)-existingLoan;
        } else if (income1<=29999){
        var incomere=((income1)*45/100)-existingLoan;
        } else if (income1>=30000){
        var incomere=((income1)*50/100)-existingLoan;
        }
        var incomereq=Math.floor(incomere / emi1 * P1);
        var prate2 = (incomereq * r1 * Math.pow((1+r1),n1*12))/(Math.pow((1+r1),n1*12)-1); // to calculate compound interest2..
                 var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder
                // to assign value in field1 as fixed upto two decimal..
                if (incomereq > P1) {
        document.formval3.field13.value = ("You are Eligible for this loan ");
        document.formval3.field11.value = (("₹ "+P1+" at EMI "+"₹ "+emi1.toFixed(0)));
        document.formval3.field12.value = ("You are Eligible for a maximum loan of "+("₹ "+incomereq+" at EMI "+"₹ "+emi2.toFixed(0)));
        } else {
        document.formval3.field13.value = ("You are not Eligible for this loan");
        document.formval3.field11.value = ("");
        document.formval3.field12.value = ("You are Eligible for a maximum loan of "+("₹ "+incomereq+" at EMI "+"₹ "+emi2.toFixed(0)));
        }
        
         //to assign value in field2.. 
         } 
         </script>
        <form name="formval2" class="form-horizontal col-md-8" style="font-size:12px;">
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Home Loan Required:</label>
            <div class="col-sm-8">
            <div class="input-group">
            <span class="input-group-addon">₹</span>
            <input type="number" class="form-control input-sm" id="input" name="pr_amt2" placeholder="Enter Loan Amount">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Net income per month</label>
            <div class="col-sm-8">
            <div class="input-group">
            <span class="input-group-addon">₹</span>
            <input type="number" class="form-control input-sm" id="input" name="NetIncome" placeholder="Excluding LTA and Medical allowances">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label" >Existing loan commitments</label>
            <div class="col-sm-8">
            <div class="input-group">
            <span class="input-group-addon">₹</span>
            <input type="number" class="form-control input-sm" id="input" Name="ExLoan" placeholder="(per month)">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Loan Tenure</label>
            <div class="col-sm-8">
            <input type="number" class="form-control input-sm" id="input" name="period2" placeholder="(in years)">
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Rate of Interest</label>
            <div class="col-sm-8">
            <div class="input-group">
            <input type="number" class="form-control input-sm" id="input" disabled value="11.5" name="int_rate2">
            <span class="input-group-addon">%</span>
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-12">
            <button type="button" class="btn btn-primary" onclick="eligiable()">Check Eligibility</button>
            <button type="reset" class="btn btn-link">Reset All</button>
            </div>
          </div>
        </form>
        <form name="formval3" class="form-horizontal col-md-4" style="font-size:12px;">
          <div class="form-group">  
            <output class="col-sm-12" name="field13" style="font-size:20px; font-weight:bold; font-family:Roboto;"></output>
            <output class="col-sm-12" name="field11" style="font-size:15px; font-family:Roboto;"></output>
          </div>
          <div class="form-group">
            <output class="col-sm-12" name="field12" style="font-size:17px; font-family:Roboto"></output>
          </div>  
        </form>
    </div>
        <div class="tab-pane" id="tab_b">
    <script language="javascript" type="text/javascript">
        function emi()
        {
                var P = document.formval.pr_amt.value; // pick the form input value..
                var rate = document.formval.int_rate.value; // pick the form input value..
                var n = document.formval.period.value; // pick the form input value..
                var r = rate/(12*100); // to calculate rate percentage..
                var prate = (P * r * Math.pow((1+r),n*12))/(Math.pow((1+r),n*12)-1); // to calculate compound interest..
                var emi = Math.ceil(prate * 100) / 100; // to parse emi amount..
        // to assign value in field1 as fixed upto two decimal..        
                document.formval4.field1.value = ("Monthly EMI: "+"₹ "+emi.toFixed(0));
        } 
        </script>
        <form name="formval" class="form-horizontal col-md-8" style="font-size:12px;">
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Loan Amount</label>
            <div class="col-sm-8">
            <div class="input-group">
            <span class="input-group-addon">₹</span>
            <input type="text" class="form-control input-sm" id="idLoanAmount" name="pr_amt" placeholder="Enter Loan Amount">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Loan Tenure</label>
            <div class="col-sm-8">
            <input type="text" class="form-control input-sm" id="idLoanTenure" placeholder="(in years)" name="period">
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Rate of Interest</label>
            <div class="col-sm-8">
            <div class="input-group">
            <input type="text" class="form-control input-sm" id="idROI" name="int_rate">
            <span class="input-group-addon">%</span>
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-12">
            <button type="button" name="calculate" value="Calculate" onclick="emi()" class="btn btn-primary">Calculate EMI</button>
            <button type="reset" class="btn btn-link">Reset All</button>
            </div>
          </div>
          
        </form>
        <form name="formval4" class="form-horizontal col-md-4" style="font-size:12px;">
          <div class="form-group">
            <output class="col-sm-12" name="field1" style="font-size:20px; font-weight:bold; font-family:Roboto;"></output>
          </div>
            </form>
        </div>
    <div class="tab-pane" id="tab_c">
    <div class="row wrap">
    <form id="HomeLoan" class="form-horizontal col-md-8" style="font-size:12px;">
        <fieldset>
            <legend style="text-align:center; font-size:15px; font-weight:bold;">Personal Information</legend>
      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">You Are</label>
        <div class="col-sm-8">
        <label class="radio-inline"><input type="radio" name="optradio">Male</label>
        <label class="radio-inline"><input type="radio" name="optradio">Female</label>
        </div>
      </div>
            <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Full Name</label>
        <div class="col-sm-8">
        <input type="text" class="form-control input-sm" id="input" placeholder="Enter Your Full Name">
        </div>
      </div>
      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Phone No.</label>
        <div class="col-sm-8">
        <input type="text" class="form-control input-sm" id="input"  placeholder="Enter Your Phone No.">
        <small id="emailHelp" class="form-text text-muted">We'll never share your Phone No. with anyone else.</small>
        </div>
      </div>
      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Date of Birth</label>
        <div class="col-sm-8">
        <input type="text" class="form-control input-sm" id="input" placeholder="Enter Your Date of Birth">
        </div>
      </div>
            <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Email ID</label>
        <div class="col-sm-8">
        <input type="email" class="form-control input-sm" id="input"  placeholder="Enter Your Email ID">
        </div>
      </div>
        </fieldset>

        <fieldset>
            <legend style="text-align:center; font-size:15px; font-weight:bold;">Property Detail</legend>
        <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Pupose for Loan</label>
            <div class="col-sm-8">
            <select class="form-control input-sm" id="purpose">
              <option value="" disabled selected>Select Pupose for Loan</option>
                <option>Ready to move</option>
                <option>Under Construction</option>
                <option>Buy a Plot of Land</option>
                <option>Home Renovation</option>
              </select>
            </div>
          </div>
          <script type="text/javascript">
            function ShowHideDiv() {
              var chkYes = document.getElementById("chkYes");
              var dvFinalized = document.getElementById("dvFinalized");
              dvFinalized.style.display = chkYes.checked ? "block" : "none";
            }
          </script>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Property Finalized</label>
              <div class="col-sm-8">
              <label for="chkYes">
                <input type="radio" id="chkYes" name="chkFinalized" checked="checked" onclick="ShowHideDiv()" />  Yes      
              </label>
              <label for="chkNo">
                <input type="radio" id="chkNo" name="chkFinalized" onclick="ShowHideDiv()"/>  No
              </label>
              </div>
          </div>
          
          <div id="dvFinalized">
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Property Address</label>
              <div class="col-sm-8">
              <textarea rows="4" cols="41%" placeholder="Enter your Address" class="form-control input-sm"></textarea> 
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Property In</label>
              <div class="col-sm-8">
              <input type="text" class="form-control input-sm" id="input" placeholder="Enter City">
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Possession By</label>
              <div class="col-sm-8">
              <select class="form-control input-sm" id="possession">
                  <option>Ready to Move</option>
                  <option>1 Month</option>
                  <option>3 Month</option>
                  <option>6 Month</option>
                <option>1 Year</option>
                <option>Any</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Property Price</label>
              <div class="col-sm-8">
              <div class="input-group">
              <span class="input-group-addon">₹</span>
              <input type="number" class="form-control input-sm" id="input" placeholder="Enter Property Price">
              </div>
              </div>
            </div>
            <div id="dvFinalized">
              <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Down Payment</label>
              <div class="col-sm-8">
              <div class="input-group">
              <span class="input-group-addon">₹</span>
              <input type="number" class="form-control input-sm" id="input" placeholder="Enter Down Payment Amount">
              </div>
              </div>
              </div>
            </div>
          </div>
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Loan Amount</label>
              <div class="col-sm-8">
              <div class="input-group">
              <span class="input-group-addon">₹</span>
              <input type="number" class="form-control input-sm" name="HomeLoanAmount" id="HomeLoanAmount" placeholder="Enter Loan Amount"/>
              </div>
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Tenure</label>
              <!--<div class="col-sm-4">
              <input type="number" class="form-control input-sm" name="HomeLoanTenure" id="HomeLoanTenure">
              </div>-->
              <div class="range-slider col-sm-6">
              <input class="range-slider__range" name="HomeLoanTenure" id="HomeLoanTenure" type="range" value="10" min="5" max="30"/>
              <span class="range-slider__value"></span> Year
              </div>
              <div class="col-sm-2">
              <button type="button" class="btn btn-success btn-xs" onclick="javascript:CheckEMI()"/>Check EMI</button>
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-4 control-label">Your EMI</label>
              <div class="col-sm-5">
              <div class="input-group">
              <span class="input-group-addon">₹</span>
              <input type="number" class="form-control input-sm" name="HomeLoanEMI20" disabled id="HomeLoanEMI20"/ style="font-weight:Bold; font-size:20px;">
              </div>
              </div>
              <label for="input" class="col-sm-3 control-label" style="align:center">Per Month (@ 9.5%)</label>
            </div>
            <script language="javascript">
              function CheckEMI()
              {
                var val1 = parseInt(document.getElementById("HomeLoanAmount").value);
                var val2 = parseInt(document.getElementById("HomeLoanTenure").value);
                var r = 9.5/(12*100); // to calculate rate percentage..
                var ansD = document.getElementById("HomeLoanEMI20");
                ansD.value = ((val1 * r * Math.pow((1+r),val2*12))/(Math.pow((1+r),val2*12)-1)).toFixed(0);
              }
            </script>

            <script type="text/javascript">
            var rangeSlider = function(){
              var slider = $('.range-slider'),
                range = $('.range-slider__range'),
                value = $('.range-slider__value');
    
            slider.each(function(){

              value.each(function(){
                var value = $(this).prev().attr('value');
                $(this).html(value);
              });

              range.on('input', function(){
                $(this).next(value).html(this.value);
              });
            });
            };

            rangeSlider();
            </script>
        </fieldset>
    <fieldset>
            <legend style="text-align:center; font-size:15px; font-weight:bold;">Professional Detail</legend>
      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Nature of occupation</label>
        <div class="col-sm-8">
        <select class="form-control input-sm" id="purpose">
              <option value="" disabled selected>Select Nature of occupation</option>
                <option>Salaried</option>
                <option>Self Employed</option>
                <option>Self Employed Professional</option>
                <option>Retired</option>
              </select>
        </div>
      </div>
            <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Working With</label>
        <div class="col-sm-8">
        <input type="text" class="form-control input-sm" id="input" placeholder="Enter Company Name">
        </div>
      </div>
      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Monthly Income</label>
        <div class="col-sm-8">
        <div class="input-group">
            <span class="input-group-addon">₹</span>
            <input type="text" class="form-control input-sm" id="idLoanAmount" name="LoanAmount" placeholder="Enter Your Monthly Income">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Monthly Liabilities</label>
        <div class="col-sm-8">
        <div class="input-group">
            <span class="input-group-addon">₹</span>
            <input type="text" class="form-control input-sm" id="idLoanAmount" name="LoanAmount" placeholder="Enter Your Monthly Liabilities">
            </div>
        </div>  
      </div>
        </fieldset>
        <p>
            <button id="SaveAccount" type="button" class="btn btn-primary submit" data-toggle="modal" data-target="#submitbutton">Submit</button>

  <!-- Modal -->
  <div class="modal fade" id="submitbutton" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
      <img src="https://s28.postimg.org/n1msg47n1/logo.png" class="img-rounded">
      <h4>Thanks for choosing us.</h4>
      <p> We try to be as responsive as possible. We'll get back to you soon.</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" href="#" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        </p>
    
    </form>

    </div>
    </div>
</div>
</div>



</body>
</html>

<script>
  
  

(function($) {
    $.fn.formToWizard = function( options, cmdParam1 ) {
        // Stop when selector found nothing!
        if (this.length == 0) return this;

        if( typeof options !== 'string' ) {
            options = $.extend({
                submitButton:       '',
                showProgress:       true,
                showStepNo:         true,
                validateBeforeNext: null,
                select:             null,
                progress:           null,
                nextBtnName:        'Next >',
                prevBtnName:        '< Back',
                buttonTag:          'a',
                nextBtnClass:       'btn next',
                prevBtnClass:       'btn prev'
            }, options);
        }

        var element = this
            , steps = $( element ).find( "fieldset" )
            , count = steps.size()
            , submmitButtonName = "#" + options.submitButton
            , commands = null;


        if( typeof options !== 'string' ) {
            //assign options to current/selected form (element)
            $( element ).data( 'options', options );

            /**************** Validate Options ********************/
            if( typeof( options.validateBeforeNext ) !== "function" )
                options.validateBeforeNext = function() { return true; };

            if( options.showProgress && typeof(options.progress) !== "function") {
                if( options.showStepNo )
                    $(element).before("<ul id='steps' class='steps'></ul>");
                else
                    $(element).before("<ul id='steps' class='steps breadcrumb'></ul>");
            }
            /************** End Validate Options ******************/


            steps.each(function(i) {
                $(this).wrap('<div id="step' + i + '" class="stepDetails"></div>');
                $(this).append('<p id="step' + i + 'commands" class="commands"></p>');

                if( options.showProgress && typeof(options.progress) !== "function") {
                    if( options.showStepNo )
                        $("#steps").append("<li id='stepDesc" + i + "'>Step " + (i + 1) + "<span>" + $(this).find("legend").html() + "</span></li>");
                    else
                        $("#steps").append("<li id='stepDesc" + i + "'>" + $(this).find("legend").html() + "</li>");
                }

                if (i == 0) {
                    createNextButton(i);
                    selectStep(i);
                }
                else if (i == count - 1) {
                    $("#step" + i).hide();
                    createPrevButton(i);
                    // move submit button to the last step
                    $(submmitButtonName).addClass('next').detach().appendTo("#step" + i + "commands");
                }
                else {
                    $("#step" + i).hide();
                    createPrevButton(i);
                    createNextButton(i);
                }
            });

        } else if( typeof options === 'string' ) {
            var cmd = options;

            initCommands();

            if( typeof commands[ cmd ] === 'function' ) {
                commands[ cmd ]( cmdParam1 );
            } else {
                throw cmd + ' is invalid command!';
            }
        }


        /******************** Command Methods ********************/
        function initCommands() {
            //restore options object from form element
            options = $( element ).data( 'options' );

            commands = {
                GotoStep: function( stepNo ) {
                    var stepName = "step" + (--stepNo);

                    if( $( '#' + stepName )[ 0 ] === undefined ) {
                        throw 'Step No ' + stepNo + ' not found!';
                    }

                    if( $( '#' + stepName ).css( 'display' ) === 'none' ) {
                        $( element ).find( '.stepDetails' ).hide();
                        $( '#' + stepName ).show();
                        selectStep( stepNo );
                    }
                },
                NextStep: function() {
                    $( '.stepDetails:visible' ).find( 'a.next' ).click();
                },
                PreviousStep: function() {
                    $( '.stepDetails:visible' ).find( 'a.prev' ).click();
                }
            };
        }
        /******************** End Command Methods ********************/


        /******************** Private Methods ********************/
        function createPrevButton(i) {
            var stepName = 'step' + i;
            $('#' + stepName + 'commands').append(
                '<' + options.buttonTag + ' href="#" id="' + stepName + 'Prev" class="' + options.prevBtnClass + '">' +
                options.prevBtnName +
                '</' + options.buttonTag + '>'
            );

            $("#" + stepName + "Prev").bind("click", function(e) {
                $("#" + stepName).hide();
                $("#step" + (i - 1)).show();
                selectStep(i - 1);
                return false;
            });
        }

        function createNextButton(i) {
            var stepName = 'step' + i;
            $('#' + stepName + 'commands').append(
                '<' + options.buttonTag + ' href="#" id="' + stepName + 'Next" class="' + options.nextBtnClass + '">' +
                options.nextBtnName +
                '</' + options.buttonTag + '>');

            $("#" + stepName + "Next").bind( "click", function(e) {
                if( options.validateBeforeNext(element, $("#" + stepName)) === true ) {
                    $("#" + stepName).hide();
                    $("#step" + (i + 1)).show();
                    //if (i + 2 == count)
                    selectStep(i + 1);
                }

                return false;
            });
        }

        function selectStep(i) {
            if ( typeof(options.progress) === "function" ) {
                options.progress(i, count);
            } else if( options.showProgress ) {
                $("#steps li").removeClass("current");
                $("#stepDesc" + i).addClass("current");
            }

            if( options.select ) {
                options.select(element, $('#step'+i));
            }
        }
        /******************** End Private Methods ********************/

        return this;

    }
})(jQuery);


</script>




<!--loan calcu by shyam-->
<!--<div class="container">
   


<script language="JavaScript">
<!--
function showpay() {
 if ((document.calc.loan.value == null || document.calc.loan.value.length == 0) ||
     (document.calc.months.value == null || document.calc.months.value.length == 0)
||
     (document.calc.rate.value == null || document.calc.rate.value.length == 0))
 { document.calc.pay.value = "Incomplete data";
 }
 else
 {
 var princ = document.calc.loan.value;
 var term  = document.calc.months.value;
 var intr   = document.calc.rate.value / 1200;
 document.calc.pay.value = princ * intr / (1 - (Math.pow(1/(1 + intr), term)));
 }

// payment = principle * monthly interest/(1 - (1/(1+MonthlyInterest)*Months))

}

// -->
<!--</script>

The results of this loan payment calculator are for comparison purposes only.
They will be a close approximation of actual loan
repayments if available at the terms entered, from a financial institution. This
is being
provided for you to plan your next loan application. To use, enter values
for the
Loan Amount, Number of Months for Loan, and the Interest Rate (e.g.
7.25), and
click the Calculate button. Clicking the Reset button will clear entered
values.
<p>
<center>
<form name=calc method=POST>
<table width=60% border=0>
<tr><th bgcolor="#aaaaaa" width=50%><font color=blue>Description</font></th>
<th bgcolor="#aaaaaa" width=50%><font color=blue>Data Entry</font></th></tr>
<tr><td bgcolor="#eeeee">Loan Amount</td><td bgcolor="#aaeeaa" align=right><input
type=text name=loan
size=10></td></tr>
<tr><td bgcolor="#eeeee">Loan Length in Months</td><td bgcolor="#aaeeaa"
align=right><input type=text
name=months size=10></td></tr>
<tr><td bgcolor="#eeeee">Interest Rate</td><td bgcolor="#aaeeaa" align=right><input
type=text name=rate
size=10></td></tr>
<tr><td bgcolor="#eeeee">Monthly Payment</td><td bgcolor="#eeaaaa"
align=right><em>Calculated</em> <input
type=text name=pay size=10></td></tr>
<tr><td  bgcolor="#aaeeaa"align=center><input type=button onClick='showpay()'
value=Calculate></td><td bgcolor="#eeeeaa" align=center><input type=reset
value=Reset></td></tr>
</table>
</form>
<font size=1>Enter only numeric values (no commas), using decimal points
where needed.<br>
Non-numeric values will cause errors.</font>
</center>
</div>-->



<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
