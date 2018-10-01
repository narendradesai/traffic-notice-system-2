<!DOCTYPE html>
<html>
<head>
    <title>PDF HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {background-color:#ffffff;background-repeat:no-repeat;background-position:top left;background-attachment:fixed;}
        h1{font-family:Arial, sans-serif;color:#000000;background-color:#ffffff;}
        p {text-align:justify;font-family:Verdana, sans-serif;font-size:10px;font-style:normal;font-weight:normal;color:#000000;background-color:#ffffff;}
    </style>
    
</head>
<body>
    <?php
        $data = json_decode(file_get_contents("php://input"));
        ?>
    <div id="DivIdToPrint">
                <div ng-model="printme">
                 <center>
                    <h3 style="line-height: 0px;margin-top:-1px;">OFFICE OF THE DEPUTY SUPERINTENDENT OF POLICE (TRAFFIC)</h3>
                    <h5 style="line-height: 0px;">Traffic Police Headquaters, Old IPHB Complex,</h5>
                    <h5 style="line-height: 0px;">Altinho, Panaji-Goa 403001. Phone No: 0832-2426580.</h5>
					<h4>NOTICE UNDER SECTION 133 OF MOTOR VEHICLES ACT, 1988</h4>
                    
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
               

                <div style="padding-left: 30px;padding-right: 30px;">
                    <div style="margin-top:-15px;">
                    To,
                    <br>{{nov}}<br>{{aov}}
                    <!-- <p id="addressOfViolator">{{aov}}</p> -->
                   </div>
                
                    <span style="margin-top:10px;"><br>Dear Sir /Madam,</span><br>
                    <p style="margin-top:2px;font-size='10';text-align: justify; text-justify: inter-word;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Vehicle No. <u><span ng-bind="vrn"></span></u> and Vehical Type <u><span ng-bind="tov"></span></u> stands  registered in your name in the records of the Transport Department. It has been reported that the driver of this vehicle has committed offence mentioned below on <u><span >{{ dof |  date:"dd/MM/yyyy 'at' h:mma'.'" }}</span></u>  at <u><span ng-bind="poo"></span></u>. In respect of which there is videographic/photographic evidence.</p>
                    
                    
                    <p style="font-size='10';text-align: justify; text-justify: inter-word;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp By virtue of powers conferred upon u/s 133, M.V. Act, 1988, this notice is being issued to you to provide information regarding the name, address and driving license number of the person who was driving the vehicle owned by you when the below mentioned offence is alleged to have been committed <b>within 7 days</b> from the date of receipt of this notice.</p>
                    
                    <p style="font-size='10';text-align: justify; text-justify: inter-word;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The owner/driver should contact the Notice Branch at Traffic Headquarters, Altinho-Panaji/District Police Headquaters, South Goa at Margao  with relevant documents as well as  vehicle on a working day. If you wish to compound the traffic offence, you may remit the below mentioned compounding amount at Notice Branch. <b>Failure to comply with the direction of this notice within 7 days, would result in submitting the Notice in the Court</b> with the addition of Section 187, M.V. Act, 1988, which provides punishment with <b>imprisonment for a term which may extend to 3 months, or with fine which may extend to Rs:500/- or with both;</b> in addition to the punishment provided for violation of traffic law/regulation. </p>
                
                    <div style="font-size='9';padding-left: 10px;">
                        <p style="font-size='9';"> <b style="font-size='9';"> SECTION/DESCRIPTION: &nbsp</b><span ng-if="offence1text" >{{offence1text}}</span><span ng-if="offence2text">, {{offence2text}}</span><span ng-if="offence3text">, {{offence3text}}</span><span ng-if="offence4text">, {{offence4text}} </span><span ng-if="otherOffence">, {{otherOffence}} </span>.</p>
                        <p style="font-size='9';"> <b> COMPOUNDING AMOUNT:  Rs. {{tooasol1v*1 + tooasol2v*1 + tooasol3v*1 + tooasol4v*1 + otherOffenceAmount.amount*1}}/-</b></p>
                          <b style="font-size='9';">Note :</b> 
                        <!-- <p ng-if="otherOffenceAmount==NULL" > <b> COMPOUNDING AMOUNT:  Rs. {{tooasol1v*1 + tooasol2v*1 + tooasol3v*1 + tooasol4v*1}}/-</b></p> -->
                    </div>
                    
                
 
                <div style="right: 70px;position: absolute;line-height: 50%;margin-top:-10px;">
                 <center>
                 <strong>
                    <p style="font-size='4';">I/C NOTICE BRANCH</p>
                    <p style="font-size='4';">For DY. SUPDT. OF POLICE (TRAFFIC H.Q.)</p>
                    <p style="font-size='4';">ALTINHO-PANAJI</p>
                    
                    </strong>
                </center>
                </div>
                  
                  </div>
                     
                </div>
           <i><br><BR><BR><br>-------<img src="img/cut.png" width="10" height="10">-------------------------<img src="img/cut.png" width="10" height="10">-----------------------<img src="img/cut.png" width="10" height="10">--------------------------------<img src="img/cut.png" width="10" height="10">-------------------<img src="img/cut.png" width="10" height="10">--------- </i>     
<div style="background-color:#AAAAAA">
<center><b>Traffic Sentinel Notice Acknowledgement</b></center>
 <br> Signature of Receiver <span style="float:right;">Signature of Beat PC/Police</span><br> <br> 
Name of Receiver <span style="float:right;">Name/Buckle No of Beat PC/Police</span><br>
 <b>Notice No.<span id="serial_no1" ng-bind="srno"></span> dated <?php echo date("d-m-Y");?></b>&nbsp;Issued to {{nov}}&nbsp;{{aov}} &nbsp;duly severed to above named person and<br>				
Re-Submitted to DYSP Traffic Althino Panjim  
<br>Submitted
<br><br><br> 
(In charge Police Station)
</div> 
            </div> 
            
            <!--Notice print ends-->

    
</body>
</html>
