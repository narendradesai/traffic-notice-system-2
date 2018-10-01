<!DOCTYPE html>
<head>
    <title>Notice Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="library/sweetalert2-master/dist/sweetalert2.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/ui-bootstrap.js"></script>
    <script src = "js/bootstrap3-typeahead.min.js"></script>
    <script src = "js/awardofmerit.js"></script>
    <script src="library/sweetalert2-master/dist/sweetalert2.min.js"></script>

    <style type="text/css">
        @import url("css/bootstrap-glyphicons.css");
        
    </style>
</head>


<body>
    <div class="container">
        <div class="well" style="background-color:cadetblue" ng-app="new_entry_form" ng-controller="submit-form">
            

            <form class="form-horizontal" ng-submit="submission()">
                <div class="page-header">
                    <center>
                    <h3>OFFICE OF THE DEPUTY SUPERITENDENT OF POLICE H.Q. (TRAFFIC)</h3>
                    <h4>Traffic Police Headquaters, Old IPHB Complex</h4>
                    <h4>Altinho, Panaji-Goa 403001. Phone No: 0832-2426580.</h4>
					<h4><strong>LATEST NEW VERSION AS ON 07 FEB 2018</strong></h4>
                    </center>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Enter Notice Details</h2>
                        </div>
                        <div class="col-sm-4" style="margin-top: 20px;">
                            <!-- To autocomplete search field begins -->
                            <div class="input-group add-on col-sm-6">
                                <input class="typeahead form-control" ng-model="search_serial" style="margin:0px auto;width:300px;" placeholder="Search VehicleNo/SerialNo/NameOfViolator" type="text">
                                    
                                <div class="input-group-btn" >
									<div style="height: 34px;width: 34px;background-color: aliceblue;padding: 8px;"  ng-click ="populateData()" >Go</div>
                                </div>
                            </div>
                            
                                  
                            <!--Autocomplete search field ends-->
                        </div>

                        <!--This PRINT button is activated when Form is autofield or when you serch and loads the form-->
                        <!-- since this button is of type sybmit it will automatically call submission(), and when print button is loaded only when submit buttin ischanged to updated. this will always call update_form.php -->
                        <div class="col-sm-2" >
                            <div class="input-group-btn" style="display:{{valueDisplay}}">
                                    <button class="print-button" type="submit" ><span class="print-icon">Print</span></button>
                            </div>
                        </div>
                        <!--PRINT button ends-->
                    </div>
                </div>

                
                    <!--Panel1 Offence Details Begins -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Offence Details</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="srno">Serial/Outward No.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="srno" ng-model="srno" placeholder="Serial Numb" readonly="readonly">
                                    </div>
                                    <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                               
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="noo">Name Of Officer</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="noo" ng-model="noo" placeholder="Name Of Officer">
                                    </div>
                                    <!-- get records button and modal, which will download records of officers -->
                                    <div style="
                                    color: white;
                                    background-color: #4CAF50;
                                    text-align: center;
                                    display: inline-block;
                                    padding: 7px;
                                    border-radius: 6%;"
                                    class="btn" data-toggle="modal" data-target="#myModal">Get Records</div>
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="close" data-dismiss="modal">X</div>
                                                    <h3 id="myModalLabel">Enter Date</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label class="control-label col-sm-3" for="fromDate">From</label>
                                                            <div class="col-sm-8">
                                                                <input  id="fromDate" type="date" ng-model="fromDate" class="form-control date ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label class="control-label col-sm-3" for="toDate">To</label>
                                                            <div class="col-sm-8">
                                                                <input  id="toDate" type="date" ng-model="toDate" class="form-control date ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="btn  btn-info" data-dismiss="modal" ng-click="getOfficerRecords()">Get Data</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal ends -->
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="rank">Points</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rank" ng-model="rank" placeholder="Points" required="required">
                                    </div>
									<span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="dof">Date & Time of Offence</label>
                                        <div class="col-sm-7 input-group" style="padding-left: 15px; position: relative;">
                                            <input type='datetime-local'  class="form-control date" id="dof" ng-model="dof" placeholder="Date of offence" required>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                        <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="poo">Place of Offence</label>
                                    <div class="col-sm-8">
                                        
                                        <input type="text" class="form-control " id="poo" ng-model="poo" placeholder="Place of Offence" required>
                                        
                                    </div>
                                    <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="vrn">Vehicle Reg No.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="vrn" ng-model="vrn" required >
                                    </div>
                                    <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="tov">Type of Vehicle</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tov" ng-model="tov" placeholder="Type of Vehicle" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="col-sm-3 control-label" for="tooasol1">1.Type of Offence and Section of Law</label>
                                    <div class="col-sm-8 selectContainer">
                                        <select name="language" class="form-control" id="tooasol1" ng-model="tooasol1" required="required" >
                                            <option value=""></option>
                                            <option value="Riding w/o M.D.L">3 of MV ACT - Riding/Driving w/o M.D.L</option>
											<option value="Carrying passengers other than at Bus Stop">117 of MV ACT - Collecting passengers other than at Bus Stop</option>
                                            <option value="Red Light Jumping">119 of MV ACT - Red Light Jumping</option>
                                            <option value="No Parking">119(1) of MV ACT - Parking In No Parking Zone</option>
                                            <option value="No Entry">119(2) of MV ACT - No Entry</option>
                                            <option value="Dangerous Parking">122 of MV ACT  - Dangerous Parking/Obstructive Parking</option>
                                             <option value="Obstructive to other Traffic">122 of MV ACT  - Obstructive to other Traffic</option>
                                            <option value="Without rear mirror">125(2) of MV ACT - Without rear mirror</option>
                                            <option value="Carrying Excess Pillion/Rider">128 of MV ACT - Carrying Excess Pillion/Rider</option>
                                            <option value="Riding W/O helmet">129 of MV ACT - Riding W/O helmet</option>
                                            <option value="Violation of Govt. Notification">177 of MV ACT- Violation of Govt. Notification</option>
                                            <option value="Disobedience of Orders">179 of MV ACT - Disobedience of Orders</option>
                                            <option value="Overspeed Driving/Riding">183 of MV ACT - Overspeed Driving/Riding</option>
                                            <option value="Driving Dangerously">184 of MV ACT - Driving Dangerously</option>
                                            <option value="Using Mobile while Driving">21X(25) R/W 184 of MV ACT - Using Mobile while Driving</option>
                                            <option value="Overtaking">RR 6 of MV Rule- Overtaking</option>
                                            <option value="Vehical Parked on Zebra Crossing">RR 8 of MV Rule - Vehical Parked on Zebra/Pedastrian Crossing</option>
                                            <option value="Unauthorized Parking">RR 15 of MV Rule - Unauthorized Parking/Parking on Foothpath</option>
                                            <option value="Lane Cutting">RR 18  of MV Rule- Lane Cutting</option>
                                            <option value="W/O No.Plate">CR 50 of MV Rule- W/O No.Plate</option>
                                            <option value="Improper no. Plate">CR 51 of MV Rule- Improper no. Plate</option>
                                            <option value="Tinted Glass">CR 100X(2) of MV Rule - Tinted Glass</option>
                                            <option value="Driving Without Seat Belt">CR 138X(3) of MV Rule - Driving Without Seat Belt</option>
                                            <option value="Carrying Passenger in Cabin"> Carrying Passenger in Cabin</option>
                                          <option value="Carrying Passengers in goods carriage">Rule 21(10) of CMVR, Carrying Passengers in goods carriage</option>
                                            <option value="Delayed Journey">21(20) of CMVR, Delayed Journey</option>
                                            <option value="Open Door">123 of MV ACT, Open Door</option>
                                            <option value="Right of Pedistrian">RR 8 of MV Rule Right of Pedistrian</option>
                                            <option value="Violating of Traffic Signal">Sec 119 of MV Rule  Violating of Traffic Signal</option>
                                            <option value="Without Tarpoline">177 of MV Act Without Tarpoline</option>
                                            <option value="Without Uniform">177 of MV ACT, Without Uniform</option>
                                            <option value="Wrong turn">119 of MV Act Wrong turn</option>
                                        </select>
                                    </div>
                                    <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="col-sm-3 control-label" for="tooasol2">2.Type of Offence and Section of Law</label>
                                    <div class="col-sm-8 selectContainer">
                                        <select name="language" class="form-control" id="tooasol2" ng-model="tooasol2" >
                                            <option value=""></option>
                                            <option value="Riding w/o M.D.L">3 of MV ACT - Riding/Driving w/o M.D.L</option>
                                   <option value="Carrying passengers other than at Bus Stop">117 of MV ACT - Collecting passengers other than at Bus Stop</option>
                                            <option value="Red Light Jumping">119 of MV ACT - Red Light Jumping</option>
                                            <option value="No Parking">119(1) of MV ACT - Parking In No Parking Zone</option>
                                            <option value="No Entry">119(2) of MV ACT - No Entry</option>
                                            <option value="Dangerous Parking">122 of MV ACT  - Dangerous Parking/Obstructive Parking</option>
                                             <option value="Obstructive to other Traffic">122 of MV ACT  - Obstructive to other Traffic</option>
                                            <option value="Without rear mirror">125(2) of MV ACT - Without rear mirror</option>
                                            <option value="Carrying Excess Pillion/Rider">128 of MV ACT - Carrying Excess Pillion/Rider</option>
                                            <option value="Riding W/O helmet">129 of MV ACT - Riding W/O helmet</option>
                                            <option value="Violation of Govt. Notification">177 of MV ACT- Violation of Govt. Notification</option>
                                            <option value="Disobedience of Orders">179 of MV ACT - Disobedience of Orders</option>
                                            <option value="Overspeed Driving/Riding">183 of MV ACT - Overspeed Driving/Riding</option>
                                            <option value="Driving Dangerously">184 of MV ACT - Driving Dangerously</option>
                                            <option value="Using Mobile while Driving">21X(25) R/W 184 of MV ACT - Using Mobile while Driving</option>
                                            <option value="Overtaking">RR 6 of MV Rule- Overtaking</option>
                                            <option value="Vehical Parked on Zebra Crossing">RR 8 of MV Rule - Vehical Parked on Zebra/Pedastrian Crossing</option>
                                            <option value="Unauthorized Parking">RR 15 of MV Rule - Unauthorized Parking/Parking on Foothpath</option>
                                            <option value="Lane Cutting">RR 18  of MV Rule- Lane Cutting</option>
                                            <option value="W/O No.Plate">CR 50 of MV Rule- W/O No.Plate</option>
                                            <option value="Improper no. Plate">CR 51 of MV Rule- Improper no. Plate</option>
                                            <option value="Tinted Glass">CR 100X(2) of MV Rule - Tinted Glass</option>
                                            <option value="Driving Without Seat Belt">CR 138X(3) of MV Rule - Driving Without Seat Belt</option>
                                            <option value="Carrying Passenger in Cabin"> Carrying Passenger in Cabin</option>
                                            <option value="Carrying Passengers in goods carriage">Rule 21(10) of CMVR, Carrying Passengers in goods carriage</option>
                                            <option value="Delayed Journey">21(20) of CMVR, Delayed Journey</option>
                                            <option value="Open Door">123 of MV ACT, Open Door</option>
                                            <option value="Right of Pedistrian">RR 8 of MV Rule Right of Pedistrian</option>
                                            <option value="Violating of Traffic Signal">Sec 119 of MV Rule  Violating of Traffic Signal</option>
                                            <option value="Without Tarpoline">177 of MV Act Without Tarpoline</option>
                                            <option value="Without Uniform">177 of MV ACT, Without Uniform</option>
                                            <option value="Wrong turn">119 of MV Act Wrong turn</option>
                                        </select>
                                    </div>
                                </div>


                                


                            </div>
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="col-sm-3 control-label" for="tooasol3">3.Type of Offence and Section of Law</label>
                                    <div class="col-sm-8 selectContainer">
                                        <select name="language" class="form-control" id="tooasol3" ng-model="tooasol3" >
                                            <option value=""></option>
                                            <option value="Riding w/o M.D.L">3 of MV ACT - Riding/Driving w/o M.D.L</option>
                                   <option value="Carrying passengers other than at Bus Stop">117 of MV ACT - Collecting passengers other than at Bus Stop</option>
                                            <option value="Red Light Jumping">119 of MV ACT - Red Light Jumping</option>
                                            <option value="No Parking">119(1) of MV ACT - Parking In No Parking Zone</option>
                                            <option value="No Entry">119(2) of MV ACT - No Entry</option>
                                            <option value="Dangerous Parking">122 of MV ACT  - Dangerous Parking/Obstructive Parking</option>
                                             <option value="Obstructive to other Traffic">122 of MV ACT  - Obstructive to other Traffic</option>
                                            <option value="Without rear mirror">125(2) of MV ACT - Without rear mirror</option>
                                            <option value="Carrying Excess Pillion/Rider">128 of MV ACT - Carrying Excess Pillion/Rider</option>
                                            <option value="Riding W/O helmet">129 of MV ACT - Riding W/O helmet</option>
                                            <option value="Violation of Govt. Notification">177 of MV ACT- Violation of Govt. Notification</option>
                                            <option value="Disobedience of Orders">179 of MV ACT - Disobedience of Orders</option>
                                            <option value="Overspeed Driving/Riding">183 of MV ACT - Overspeed Driving/Riding</option>
                                            <option value="Driving Dangerously">184 of MV ACT - Driving Dangerously</option>
                                            <option value="Using Mobile while Driving">21X(25) R/W 184 of MV ACT - Using Mobile while Driving</option>
                                            <option value="Overtaking">RR 6 of MV Rule- Overtaking</option>
                                            <option value="Vehical Parked on Zebra Crossing">RR 8 of MV Rule - Vehical Parked on Zebra/Pedastrian Crossing</option>
                                            <option value="Unauthorized Parking">RR 15 of MV Rule - Unauthorized Parking/Parking on Foothpath</option>
                                            <option value="Lane Cutting">RR 18  of MV Rule- Lane Cutting</option>
                                            <option value="W/O No.Plate">CR 50 of MV Rule- W/O No.Plate</option>
                                            <option value="Improper no. Plate">CR 51 of MV Rule- Improper no. Plate</option>
                                            <option value="Tinted Glass">CR 100X(2) of MV Rule - Tinted Glass</option>
                                            <option value="Driving Without Seat Belt">CR 138X(3) of MV Rule - Driving Without Seat Belt</option>
                                            <option value="Carrying Passenger in Cabin"> Carrying Passenger in Cabin</option>
                                            <option value="Carrying Passengers in goods carriage">Rule 21(10) of CMVR, Carrying Passengers in goods carriage</option>
                                            <option value="Delayed Journey">21(20) of CMVR, Delayed Journey</option>
                                            <option value="Open Door">123 of MV ACT, Open Door</option>
                                            <option value="Right of Pedistrian">RR 8 of MV Rule Right of Pedistrian</option>
                                            <option value="Violating of Traffic Signal">Sec 119 of MV Rule  Violating of Traffic Signal</option>
                                            <option value="Without Tarpoline">177 of MV Act Without Tarpoline</option>
                                            <option value="Without Uniform">177 of MV ACT, Without Uniform</option>
                                            <option value="Wrong turn">119 of MV Act Wrong turn</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="col-sm-3 control-label" for="tooasol4">4.Type of Offence and Section of Law</label>
                                    <div class="col-sm-8 selectContainer">
                                        <select name="language" class="form-control" id="tooasol4" ng-model="tooasol4" >
                                            <option value=""></option>
                                            <option value="Riding w/o M.D.L">3 of MV ACT - Riding/Driving w/o M.D.L</option>
                                   <option value="Carrying passengers other than at Bus Stop">117 of MV ACT - Collecting passengers other than at Bus Stop</option>
                                            <option value="Red Light Jumping">119 of MV ACT - Red Light Jumping</option>
                                            <option value="No Parking">119(1) of MV ACT - Parking In No Parking Zone</option>
                                            <option value="No Entry">119(2) of MV ACT - No Entry</option>
                                            <option value="Dangerous Parking">122 of MV ACT  - Dangerous Parking/Obstructive Parking</option>
                                             <option value="Obstructive to other Traffic">122 of MV ACT  - d</option>
                                            <option value="Without rear mirror">125(2) of MV ACT - Without rear mirror</option>
                                            <option value="Carrying Excess Pillion/Rider">128 of MV ACT - Carrying Excess Pillion/Rider</option>
                                            <option value="Riding W/O helmet">129 of MV ACT - Riding W/O helmet</option>
                                            <option value="Violation of Govt. Notification">177 of MV ACT- Violation of Govt. Notification</option>
                                            <option value="Disobedience of Orders">179 of MV ACT - Disobedience of Orders</option>
                                            <option value="Overspeed Driving/Riding">183 of MV ACT - Overspeed Driving/Riding</option>
                                            <option value="Driving Dangerously">184 of MV ACT - Driving Dangerously</option>
                                            <option value="Using Mobile while Driving">21X(25) R/W 184 of MV ACT - Using Mobile while Driving</option>
                                            <option value="Overtaking">RR 6 of MV Rule- Overtaking</option>
                                            <option value="Vehical Parked on Zebra Crossing">RR 8 of MV Rule - Vehical Parked on Zebra/Pedastrian Crossing</option>
                                            <option value="Unauthorized Parking">RR 15 of MV Rule - Unauthorized Parking/Parking on Foothpath</option>
                                            <option value="Lane Cutting">RR 18  of MV Rule- Lane Cutting</option>
                                            <option value="W/O No.Plate">CR 50 of MV Rule- W/O No.Plate</option>
                                            <option value="Improper no. Plate">CR 51 of MV Rule- Improper no. Plate</option>
                                            <option value="Tinted Glass">CR 100X(2) of MV Rule - Tinted Glass</option>
                                            <option value="Driving Without Seat Belt">CR 138X(3) of MV Rule - Driving Without Seat Belt</option>
                                            <option value="Carrying Passenger in Cabin"> Carrying Passenger in Cabin</option>
                                            <option value="Carrying Passengers in goods carriage">Rule 21(10) of CMVR, Carrying Passengers in goods carriage</option>
                                            <option value="Delayed Journey">21(20) of CMVR, Delayed Journey</option>
                                            <option value="Open Door">123 of MV ACT, Open Door</option>
                                            <option value="Right of Pedistrian">RR 8 of MV Rule Right of Pedistrian</option>
                                            <option value="Violating of Traffic Signal">Sec 119 of MV Rule  Violating of Traffic Signal</option>
                                            <option value="Without Tarpoline">177 of MV Act Without Tarpoline</option>
                                            <option value="Without Uniform">177 of MV ACT, Without Uniform</option>
                                            <option value="Wrong turn">119 of MV Act Wrong turn</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- other offence and other offence amount, other offence amount will be displayed only if other offence is present. otheroffenceAmmount.amount is made object because scope was not available outside ng-if tag -->
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="col-sm-3 control-label" for="otherOffence">Other offence</label>
                                    <div class="col-sm-8 selectContainer">
                                        <input type='text' class="form-control date input-lg" id="otherOffence" ng-model="otherOffence">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6" ng-if="otherOffence">
                                        <label class="col-sm-3 control-label" for="otherOffenceAmount">Amount for "other offence" Rs.</label>
                                        <div class="col-sm-8 selectContainer">
                                            <input type='number' class="form-control date input-lg" id="otherOffenceAmount" ng-model="otherOffenceAmount.amount">
                                        </div>
                                </div>
                            </div>

                                
                        </div>
                    </div>
                    <!--Panel1 offence details ends-->

                    <!--Panel2 Receipt Details Begins-->
                    <div class="panel panel-default">
                        <div class="panel-heading">Receipt Details</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="dorois">Date of receipt of Information Slip</label>
                                        <div class="col-sm-8 input-group" style="padding-left: 15px; position: relative;">
                                            <input type='date'  class="form-control date input-lg" id="dorois" ng-model="dorois" value="2017-03-03" required >
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>  
                                        <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>  
                                </div>        
                                
                            
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="dodovnttc">Date of Dispatch of Vehicle No to Traffic Cell</label>
                                        <div class="col-sm-8 input-group" style="padding-left: 15px; position: relative;">
                                            <input type='date'  class="form-control date input-lg" id="dodovnttc" ng-model="dodovnttc" >
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="control-label col-sm-2" for="doronaaftc">Date of receipt of Name and Address from Traffic Cell</label>
                                    <div class="col-sm-9 input-group" style="padding-left: 15px; position: relative;">
                                        <input type='date'  class="form-control date input-lg" id="doronaaftc" ng-model="doronaaftc" >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                    </div>
                            </div>        
                        </div>
                    </div>
                    <!--Panel2 Receipt Details ends-->

                    <!--Panel3 Violater's-->
                    <div class="panel panel-default">
                        <div class="panel-heading">Violater's Details</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="nov">Name of Violator</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nov" placeholder="Enter Name of Violator" ng-model="nov" required>
                                    </div>
                                    <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="aov">Address of Violator</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="aov" placeholder="Enter Address of Violator" ng-model="aov" required >
                                    </div>
                                    <span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                            </div>
                            

                            <div class="row">
                                
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="wn">User Id</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="wn" placeholder="Enter User ID" ng-model="wn" required="required">
                                    </div>
									<span class="col-sm-1" style="color: #EF5F5F;padding-left: 0px;font-size: 25px;">*</span>
                                </div>
                                
                                 <div class="form-group col-sm-6">
                                    <label  class="control-label col-sm-3" for="unit">Police Station</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="unit" ng-model="unit" Value=" PS" >
                                    </div>
                                </div>

                                <!--div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="dodontps">Date of Dispatch of Notice to PS</label>
                                        <div class="col-sm-8 input-group" style="padding-left: 15px; position: relative;">
                                            <input type='date'  class="form-control date" id="dodontps" ng-model="dodontps" >
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                </div-->
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="dorosn">Date of receipt of Served Notice</label>
                                        <div class="col-sm-8 input-group" style="padding-left: 15px; position: relative;">
                                            <input type='date'  class="form-control date" id="dorosn" ng-model="dorosn" >
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="cbn">Challan Book Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="cbn" placeholder="Enter Challan Book Number" ng-model="cbn">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="cn">Challan Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="cn" placeholder="Enter Challan Number" ng-model="cn" >
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="mdln">MDL No</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="mdln" placeholder="Enter MDL Number" ng-model="mdln" >
                                    </div>
                                </div>
                                
                            </div>            
                            
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="ca">Composition Amount</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ca" value="Rs. " ng-model="ca" >
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="control-label col-sm-3" for="ccn">Court Case Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ccn" placeholder="Enter Court Case Number" ng-model="ccn" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="dodtcd">Date of Dispatch to Court Disposal</label>
                                    <div class="col-sm-9 input-group" style="padding-left: 15px; position: relative;">
                                        <input type='date'  class="form-control date" id="dodtcd" ng-model="dodtcd" >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-5">        
                            <div class="col-sm-offset-10 col-sm-2">
                                <button type="submit" id="form-submit"  class="btn btn-default">{{updateFlag}}</button>
                            </div>
                        </div>
                        <div class="form-group col-sm-5">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </div>
                    <!--Panel3 Violatores details ends-->
            </form>
            
                
            
            
            <!--This div contains Notice to be printed , which is kept hidden so that it is loaded in the background
            It will get printed once form is submitted-->
            <div id="DivIdToPrint" style="display:none" >
                <div ng-model="printme">
               <center>
                    <h3 style="line-height: 0px;margin-top:-1px;">OFFICE OF THE DEPUTY SUPERINTENDENT OF POLICE (TRAFFIC)</h3>
                    <h5 style="line-height: 0px;">Traffic Police Headquaters, Old IPHB Complex,</h5>
                    <h5 style="line-height: 0px;">Altinho, Panaji-Goa 403001. Phone No: 0832-2426580.</h5>
					<h4 style="line-height: 0px;">NOTICE UNDER SECTION 133 OF MOTOR VEHICLES ACT, 1988</h4>
                    
                    <img src="images/traffic_logo.png" style="height: 100px;"></img>
                     </center>
                  <div style="position: absolute;right: 90px;top: 100px;">
                        <p>Notice No.:<span id="serial_no" ng-bind="srno"></span></p>
                        
                        <!-- <p>Dated : <span >{{ dorois | date:"dd/MM//yyyy" }}</span></p> -->
                        
                       
                        <p>Dated :  <?php echo date("d-m-Y")  ?> 
                        
                         <br><br>{{unit}}
                        </p>
                    </div>
                    <div style="position: absolute;left: 30px;top: 105px;">
                        <span ng-bind="wn"></span> 
                        
                    </div>
               

                <div style="padding-left: 30px;padding-right: 0px;">
                   <div style="margin-top:-15px;">
                    To,
                    <br>{{nov}}<br>{{aov}}
                    <!-- <p id="addressOfViolator">{{aov}}</p> -->
                   </div>
                
                    <span style="margin-top:10px;"><br>Dear Sir /Madam,</span><br>
                    <p style="margin-top:2px;font-size='10';text-align: justify; text-justify: inter-word;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Vehicle No. <u><span ng-bind="vrn"></span></u> and Vehicle Type <u><span ng-bind="tov"></span></u> stands  registered in your name in the records of the Transport Department. It has been reported that the driver of this vehicle has committed offence mentioned below on <u><span >{{ dof |  date:"dd/MM/yyyy 'at' h:mma'.'" }}</span></u>  at <u><span ng-bind="poo"></span></u>. In respect of which there is videographic/photographic evidence.</p>
                    
                    
                    <p style="font-size='10';text-align: justify; text-justify: inter-word;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp By virtue of powers conferred upon u/s 133, M.V. Act, 1988, this notice is being issued to you to provide information regarding the name, address and driving license number of the person who was driving the vehicle owned by you when the below mentioned offence is alleged to have been committed <b>within 7 days</b> from the date of receipt of this notice.</p>
                    
                    <p style="font-size='10';text-align: justify; text-justify: inter-word;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The owner/driver should contact the Notice Branch at Traffic Headquarters, Altinho-Panaji/District Police Headquaters, South Goa at Margao  with relevant documents as well as  vehicle on a working day. If you wish to compound the traffic offence, you may remit the below mentioned compounding amount at Notice Branch. <b>Failure to comply with the direction of this notice within 7 days, would result in submitting the Notice in the Court</b> with the addition of Section 187, M.V. Act, 1988, which provides punishment with <b>imprisonment for a term which may extend to 3 months, or with fine which may extend to Rs:500/- or with both;</b> in addition to the punishment provided for violation of traffic law/regulation. </p>
                
                    <div style="font-size='9';padding-left: 10px;">
                        <p style="font-size='9';line-height: 16px;"> <b style="font-size='9';"> SECTION/DESCRIPTION: &nbsp;</b><span ng-if="offence1text" >{{offence1text}}</span><span ng-if="offence2text">, {{offence2text}}</span><span ng-if="offence3text">, {{offence3text}}</span><span ng-if="offence4text">, {{offence4text}} </span><span ng-if="otherOffence">, {{otherOffence}} </span>.</p>
                        <p style="font-size='9';line-height: 0px;"> <b> COMPOUNDING AMOUNT:  Rs. {{tooasol1v*1 + tooasol2v*1 + tooasol3v*1 + tooasol4v*1 + otherOffenceAmount.amount*1}}/-</b></p>
                        <!-- <p ng-if="otherOffenceAmount==NULL" > <b> COMPOUNDING AMOUNT:  Rs. {{tooasol1v*1 + tooasol2v*1 + tooasol3v*1 + tooasol4v*1}}/-</b></p> -->
                    </div>
                    
                
				<!-- Aaron do changes in this part -->
                <div style="right: 15px;position: absolute;line-height: 50%;margin-top:-10px;">
                 <center>
				 <img src="images/sp1.png" style="height: 85px; max-width: 180px; width: auto;"></img>

                 <strong>
			<br><br>
                    <p style="font-size='4';line-height: 0px;margin-top: -10px;">I/C NOTICE BRANCH</p>
                    <p style="font-size='4';line-height: 0px;">For DY. SUPDT. OF POLICE (TRAFFIC H.Q.)</p>
                    <p style="font-size='4';line-height: 0px;">ALTINHO-PANAJI</p>
                   
                    </strong>
                </center>
                </div>
				<!-- Aaron do changes in this part -->
                  
                  </div>
                     
                </div>
                         
<i><br><br><br><br><br><br><br>-------<img src="img/cut.png" width="10" height="10">-------------------------<img src="img/cut.png" width="10" height="10">------------------ cut here and return back ----------------<img src="img/cut.png" width="10" height="10">------------------<img src="img/cut.png" width="10" height="10">--------- </i>     
<div style="background-color:#AAAAAA">
<center><b>Traffic Sentinel Notice Acknowledgement</b></center>
 <br>(Signature of Receiver) <span style="float:right;">(Signature of Beat PC/Police)</span><br> <br> 
(Name of Receiver) <span style="float:right;">(Name/Buckle No of Beat PC/Police)</span><br>
 <b><span ng-bind="wn"></span>, Notice No.<span id="serial_no1" ng-bind="srno"></span>, dated <?php echo date("d-m-Y");?>, Vehicle No. <span ng-bind="vrn"></span></b>, Issued to {{nov}}&nbsp;{{aov}}  &nbsp;duly severed to above named person and<br>				
Re-Submitted to DYSP Traffic Althino Panjim  
<br>Submitted
<br><br><br> 
(In charge Police Station)<br> 
{{unit}}
</div> 
           
            </div> 
          
            <!--Notice print ends-->

            <!--This button is to Backup all the records from databse-->
            <button id="backup-details" class=" btn btn-default" ng-click="backupDatabase()">Backup Database</button>


        </div>
        
    </div>

    <script trype="text/javascript">
        // this script is written because IE does not supports date inputtype
        if ( $('[type="date"]').prop('type') != 'date' ) {
            $('[type="date"]').datepicker();
        }
        
        //This script is for Autofill search button
        //typehead is the library used for displaying searched Serial number in table format
        $('input.typeahead').typeahead({
            source:  function (query, process) {
                return $.get('api/search_serial.php', { serial_n: query }, function (data) {
        		    //console.log(typeof(data),data);
        		    return process(data);
	            });
	        }
        });
    </script>    
</body>

</html>