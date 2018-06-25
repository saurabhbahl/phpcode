<!DOCTYPE html>
<html lang="en">
<head>

</head>

<?php if (isset($message)) {?>
      <div class="alert alert-warning">
          <h3 class="text-black"><?=$message?></span></h3>
      </div>

  <?php }?>    
<br><br><br>
<link rel="manifest" href="<?=asset_url() ?>distribution/manifest.json">



<style type="text/css">
.form-group {
    margin-bottom: 30px;
}
.error{top: 30px !important;
    color: red !important;
    font-size: 12px !important;}
 </style>
 
 <body> 
    <section class="content animated fadeInUp" style="background-color:rgba(255, 255, 255, 1.0)">


            <div class="col-md-offset-1 col-md-10 ">
                <!--  Button Starts -->
                <div class="wizard-container">
                    <p id="gStartTd" style="color:rgba(0, 0, 0, 1.0);font-size:30px;font-weight:thin;">Welcome to Dashboard</p>
                <input style="background-color: rgba(255, 255, 255, 1.0) ;color:rgba(0, 0, 0, 1.0);font-size:30px;font-weight:thin; "  type="text" name="f_name" value="<?php echo (isset($user->f_name))? $user->f_name:''?>"><br>

                <!-- progress bar begins -->
                <!--<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-local_products"><i class="fa fa-info mr-1"></i></button>-->
                <div class="progress" style="background-color:rgba(0, 0, 0, 0.00)" >
                    <div style="background-color:rgba(242,242,242, 1.0);color:rgba(0, 0, 0, 1.0);font-size:17px;font-weight:thin; "class="progress-bar" role="progressbar"  aria-valuenow="<?= $progress ?>" aria-valuemin="0" aria-valuemax="100" style="width:20%">Your Business Plan is
                        <span><?= $progress ?> %  Complete <?php echo $is_localproduct; ?></span>
                    </div>
                </div>
            </div>  
            <!-- progress bar ends -->
            
            <!-- help button begins -->
            <div>
        	 <button class="btn btn-info btn-xs" class="fa fa-info"
        	 type="button" class="ISHide" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false"
                aria-controls="collapseExample1"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Help!</button>
            		<div class="collapse" id="collapseExample1">
            			<p>Dahsbard is an interactive snap shot of the progress of your business plan,once you start making entries 
            			in the different modules,values will appear in the relevant dashboard features.Use the sliders to review yearly growth scenarios,your financial reports
            			are updated imdediatly,and ready for printing once you click on "Save".</p>
            			</p>
            		    <h1>Now what?</h1>
            			<ol>
            			   <li>Click <strong>"Close"</strong> and go to the "Planning Module" to start
            			   brainstorming your ideas and write your Business Narrative.</li>
            			</ol>
            			<hr>
            			<button type="button" class="btn btn-success btn-xs" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false"
            			 aria-controls="collapseExample1">
            				<span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Close</button>
            			<div class="collapse" id="collapseExample1"> </div>
            		<hr>
                </div>
                <!-- /help button ends -->
            </div>
 
 
        <!-- row  -->
            <div class="row">
                
                <!-- local product revenue begins -->
                    <div class="col-md-6 col-sm-6">
                        <div class="wrimagecard wrimagecard-topimage">
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.0) ">
                                <center><i class="fa fa-line-chart fa-5x" style="color:#3C8DBC"></i></center>
                                <center><h3><strong>Local Products Revenue</strong><br/><small></small></h3></center>
                                <div class="offer-content">
                                    <h3 class="lead">
                                        <span class="info-box-text" style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;">Net Income</span>
                                        <span class="info-box-number"  style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;"><?php echo $cur . ' ' . number_format($cogproductyear1, 0, '.', ','); ?></span>                                        
                                    </h3>
                                    
                               
                                    
                                    
                                </div>    
                                <!-- Bar Chart Starts-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="chart-responsive">
                                            <canvas id="product_canvas" height="150" width="266" style="width: 133px; height: 155px;"></canvas>
                                        </div><!-- ./chart-responsive -->
                                    </div><!-- /.col -->
                                    
                                    <!-- range slider begins -->
                                    <div class="col-sm-12 RangeSelectorProduct">
               
                                        <div style="padding: 15px;">
                                            <h4 class="range-value"><span class="ServiceIncomeProduct">0</span>%</h4>
                                    
                                            <input id="ex13" type="range" min="0" max="100" value="50" class="RangeSelectorProduct" style="margin-top: 25px;" data-show-value="true"/>
                                            <!--<center><h1><strong>Operating Expenses Increases</strong><br/><small>Use the sliders to set a % increase per year</small></h1></center>-->
                                      
                                            <br>
                                          <center><h3><strong>Local Products Revenue</strong><br/><small>Use the slider to set a % increase per year</small></h3></center>
                                            
                                            
                                            <!--  Button Starts -->
                                            <ul class="list-unstyled list-inline pull-right">
                                                <li>
                                                    <button type="button" id="saveproduct" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div><!-- range slider begins -->
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.col -->
                  <!-- local product revenue ends -->
                    
                    
                <!-- import  product revenue begins -->
                    <div class="col-md-6 col-sm-6">
                        <div class="wrimagecard wrimagecard-topimage">
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.0) ">
                                <center><i class="fa fa-bar-chart fa-5x" style="color:#3C8DBC"></i></center>
                                <center><h3><strong>Import Products Revenue</strong><br/><small></small></h3></center>
                                <div class="offer-content">
                                    <h3 class="lead">
                                        <span class="info-box-text"  style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;">Net Income</span>
                                        <span class="info-box-number" style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;"><?php echo $cur . ' ' . number_format($cogimportyear1, 0, '.', ','); ?></span>      
                                    </h3>
                                </div>               
                                <!-- Bar Chart Starts-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="chart-responsive">
                                            <canvas id="import_canvas" height="150" width="266" style="width: 133px; height: 155px;"></canvas>
                                        </div><!-- ./chart-responsive -->
                                    </div><!-- /.col -->
                                    
                                   <!-- range slider begins -->
                                   <div class="col-sm-12 RangeSelectorImpProduct">
                                        <div style="padding: 15px;">
                                            <h4 class="range-value"><span class="ServiceIncomeImpProduct">0</span>%</h4>
                                            <input id="ex14" type="range" min="0" max="100" value="50" class="RangeSelectorImpProduct" style="margin-top: 25px;"/>
                                             <!--<center><h1><strong>Operating Expenses Increases</strong><br/><small>Use the sliders to set a % increase per year</small></h1></center>-->
                                            <br>
                                              <center><h3><strong>Import Products Revenue</strong><br/><small>Use the slider to set a % increase per year</small></h3></center>
                                            
                                                <ul class="list-unstyled list-inline pull-right">
                                                    <li>
                                                    <button type="button" id="saveimpproduct" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div><!-- range slider ends -->
                                </div>  <!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.col -->
                <!-- import  product revenue ends -->
                    
                    
                <!-- service revenue starts -->
                    <div class="col-md-6 col-sm-6">
                        <div class="wrimagecard wrimagecard-topimage">
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.0) ">
                                <center><i class="fa fa-area-chart fa-5x" style="color:#3C8DBC"></i></center>
                                <center><h3><strong>Services Revenue</strong><br/><small></small></h3></center>
                                <div class="offer-content">
                                    <h3 class="lead">
                                        <span class="info-box-text" style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;">Net Income</span>
                                        <span class="info-box-number" style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;"><?php echo $cur . ' ' . number_format($serviceyear, 0, '.', ','); ?></span>      
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="chart-responsive">
                                            <canvas id="service_canvas" height="150" width="266" style="width: 133px; height: 155px;"></canvas>
                                        </div><!-- ./chart-responsive -->
                                    </div><!-- /.col -->
                                    
                                    <!-- range slider begins -->
                                    <div class="col-sm-12 RangeSelectorServices">
                                        <div style="padding: 15px;">
                                            <h4 class="range-value"><span class="ServiceIncomeService">0</span>%</h4>
                                            <input id="ex15" type="range" min="0" max="100" value="50" class="RangeSelectorServices" style="margin-top: 25px;"/>
                                          <!--<center><h1><strong>Operating Expenses Increases</strong><br/><small>Use the sliders to set a % increase per year</small></h1></center>-->
                                            <br>
                                             <center><h3><strong>Service Revenue</strong><br/><small>Use the slider to set a % increase per year</small></h3></center>
                                            
                                            <ul class="list-unstyled list-inline pull-right">
                                                <li>
                                                    <button type="button" id="saveservice" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                                </li>
                                            </ul> <!-- /.Buttone Ends -->
                                        </div>
                                    </div><!-- range slider ends -->
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.col -->
                     <!-- service revenue ends -->
                    
                     <!-- online revenue  begins -->
                    <div class="col-md-6 col-sm-6">
                        <div class="wrimagecard wrimagecard-topimage">
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.0) ">
                                <center><i class="fa fa-globe fa-5x" style="color:#3C8DBC"></i></center>
                                <center><h3><strong>Online Revenue</strong><br/><small></small></h3></center>
                                <div class="offer-content">
                                    <h3 class="lead">
                                        <span class="info-box-text" style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;">Net Income</span>
                                        <span class="info-box-number"  style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;"><?php echo $cur . ' ' . number_format($annual_revenue_yearly1, 0, '.', ','); ?></span>                                        
                                    </h3>
                                </div>    
                                <!-- Bar Chart Starts-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="chart-responsive">
                                            <canvas id="revenue_canvas" height="150" width="266" style="width: 133px; height: 155px;"></canvas>
                                        </div><!-- ./chart-responsive -->
                                    </div><!-- /.col -->
                                      
                                    <!-- range slider begins -->
                                    <div class="col-sm-12 RangeSelectorRevenue">
                                        <div style="padding: 15px;">
                                            <h4 class="range-value"><span class="ServiceIncomeRevenue">0</span>%</h4>
                                            <input id="ex16" type="range" min="0" max="100" value="50" class="RangeSelectorRevenue" style="margin-top: 25px;" data-show-value="true"/>
                                            <!--<center><h1><strong>Operating Expenses Increases</strong><br/><small>Use the sliders to set a % increase per year</small></h1></center>-->
                                            <br>
                                            <center><h3><strong>Online Revenue</strong><br/><small>Use the slider to set a % increase per year</small></h3></center>
                                            
                                            <!--  Button Starts -->
                                            <ul class="list-unstyled list-inline pull-right">
                                                <li>
                                                    <button type="button" id="saverevenue" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                                </li>
                                            </ul> <!-- /.Buttone Ends -->
                                        </div>
                                    </div>   <!-- range slider begins -->
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
             </div><!-- /.row -->
            <!-- service revenue ends -->
                    
            
            <!-- Row  begins -->
            <div class="row">
                
                <!-- opersting expenses pie chart begins -->
                <div class="col-md-offset-1 col-md-10 ">
                    
                    <div class="col-md-6 col-sm-12">
                    <div class="wrimagecard wrimagecard-topimage">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(0, 0, 0, 0.0)">
                            <center><i class="fa fa-money fa-5x" style="color:#3C8DBC"> </i></center> 
                            <center><h3><strong>Operating Expenses</strong><br/><small></small></h3></center>
                            
                             <!-- chart-responsive begins-->
                            <div class="chart-responsive">
                                <canvas id="expenses_canvas" height="250" width="266" style="width: 33px; height: 55px;"></canvas>
                            </div><!-- ./chart-responsive ends-->
                            
                            <!-- operating esxpenses row begins -->
                                <div class="row">
                                    <br/>
                                    <center><h3><strong>Operating Expenses Summary</strong><br/><small></small></h3></center>
                                    
                                    <!-- table expenses begins -->
                                        <div class="table-responsive">
                                        <table id="table2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Account</th>
                                                    <th>Year 1</th>
                                                    <th>Year 2</th>
                                                    <th>Year 3</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $total_year1= 0;
                                                $total_year2= 0;
                                                $total_year3= 0;
                                                  if(!empty($list)) {
                                                      foreach ($expense_summary as $summary) { ?>
                                                        <tr id="<?php echo $summary['purpose'];?>" onclick="update_expenses('<?php echo $summary['purpose'];?>')">
                                                          <td><?php echo 'Total '. $summary['purpose']; ?></td>
                                                          <td><?php echo $currency.number_format($summary['weekly_cost'], 0, '.' , ','); ?></td>
                                                          <td><?php echo $currency.number_format($summary['monthly_cost'], 0, '.' , ','); ?></td>
                                                          <td><?php echo $currency.number_format($summary['quarterly_cost'], 0, '.' , ','); ?></td>
                                                          <?php
                                                          if($summary['purpose']=='Marketing')
                                                              $cost_increase = number_format((float) $cost_increase_percentage[0]['marketing']/100, 0, '.' , ',');
                                                          elseif($summary['purpose']=='Public-Relations')
                                                              $cost_increase =number_format((float) $cost_increase_percentage[0]['pr']/100, 0, '.' , ',');
                                                          elseif($summary['purpose']=='Other')
                                                                $cost_increase = number_format((float) $cost_increase_percentage[0]['other']/100, 0, '.' , ',');
                                                          elseif($summary['purpose']=='Administration')
                                                            $cost_increase = number_format((float) $cost_increase_percentage[0]['ac']/100, 0, '.' , ',');
                                                          else
                                                            $cost_increase = 1;
                                                            $year1= $summary['yearly_cost'];
                                                            $year2 = intval($year1)*$cost_increase + intval($year1);
                                                            $year3 = intval($year2)*$cost_increase + intval($year2);
                                                            $total_year1 = $total_year1 + $year1;
                                                            $total_year2 = $total_year2 + $year2;
                                                            $total_year3 = $total_year3 + $year3;
                                                            if (is_nan($total_w)){
                                                              $total_w = 0;
                                                            }else{
                                                              $total_w += $summary['weekly_cost'];
                                                            }
                                                            if (is_nan($total_m)){
                                                              $total_m = 0;
                                                            }else{
                                                              $total_m += $summary['monthly_cost'];
                                                            }
                                                            if (is_nan($total_q)){
                                                              $total_q = 0;
                                                            }else{
                                                              $total_q += $summary['quarterly_cost'];
                                                            }
                                                          ?>
                                                          <td id="<?php echo $summary['purpose'];?>_year1" data-val="<?php echo $year1; ?>"><?php echo $currency.number_format($year1, 0, '.' , ','); ?></td>
                                                          <td id="<?php echo $summary['purpose'];?>_year2" data-val="<?php echo $year2; ?>"><?php echo $currency.number_format($year2, 0, '.' , ','); ?></td>
                                                          <td id="<?php echo $summary['purpose'];?>_year3" data-val="<?php echo $year3; ?>"><?php echo $currency.number_format($year3, 0, '.' , ','); ?></td>
                                                        </tr>
                                                    <?php }
                                                  }?>
                                                <tr style="background-color: #d3d3d3;" onclick="update_expenses('loadchart')">
                                                  <td><b>Total:</b></td>
                                                  
                                                  <td id="total_y1" data-val="<?php echo $total_year1; ?>"><b><?php echo $currency.number_format($total_year1, 0, '.' , ','); ?></b></td>
                                                  <td id="total_y2" data-val="<?php echo $total_year2; ?>"><b><?php echo $currency.number_format($total_year2, 0, '.' , ','); ?></b></td>
                                                  <td id="total_y3" data-val="<?php echo $total_year3; ?>"><b><?php echo $currency.number_format($total_year3, 0, '.' , ','); ?></b></td>
                                                </tr>
                                            </tbody>
                                        </table><!-- table expenses ends -->
                                    </div>
                                </div>
                             </div>   
                        </div> 
                    </div>  <!-- col  ends -->
                    <!-- opersting expenses ends -->
                    
                    <!-- opersting expenses bar chart begins -->
                    <div class="col-md-6 col-sm-12">
                    <div class="wrimagecard wrimagecard-topimage">
                        <div class="wrimagecard-topimage_header" style="background-color: rgba(0, 00, 00, 0.0)">
                            <center><i class="fa fa-bar-chart fa-5x" style="color:#3C8DBC"> </i></center>
                            <center><h3><strong>Operating Expenses Year 1-3</strong><br/><small></small></h3></center>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12" >
                                        
                                        <!-- row begins-->
                                        <div class="row">
                                            
                                        <!-- chart-responsive begins-->
                                            <div class="chart-responsive" class="col-md-12 col-sm-12" id="chart-container">
                                                <canvas id="expenses_bar_canvas"  width="300" height="200" ></canvas>
                                            </div>  <!-- ./chart-responsive ends-->
                                            
                                        </div>  <!-- ./ row ends-->
                                        
                                        
                                         <!-- opersting expenses  begins -->
                                        <div class="row">
                                            <br/><br/> <br/><br/>
          
                                             <!-- range sliders  begins-->
                                            <div class="col-md-12 col-sm-12 RangeSelectorExpenses">
                                                <div>
                                                    <h4><span class="ServiceIncomePers" id="m_perc"><?php echo $cost_increase_percentage[0]['marketing'] ?></span>%<span style="float:right; font-size:12px;">Marketing</span></h4>
                                                    <input id="ex8" type="range" min="0" max="100" value="<?php echo $cost_increase_percentage[0]['marketing'] ?>" class="RangeSelectorExpenses"style="background-color: rgba(0, 0, 0, 0.)" style="margin-top: 0px;"/>
                                                </div>       
                                                <div >
                                                    <h4  ><span class="ServiceIncomePers" id="p_perc"><?php echo $cost_increase_percentage[0]['pr'] ?></span>%<span style="float:right; font-size:12px;">Public Relations</span></h4>
                                                    <input id="ex9" type="range" min="0" max="100" value="<?php echo $cost_increase_percentage[0]['pr'] ?>" class="RangeSelectorExpenses"style="background-color: rgba(0, 00, 0, 0.0)" style="margin-top: 0px;"/>
                                                </div>
                                                <div >
                                                    <h4 ><span class="ServiceIncomePers" id="a_perc"><?php echo $cost_increase_percentage[0]['ac'] ?></span>%<span style="float:right; font-size:12px;">Administration</span></h4>
                                                    <input id="ex10" type="range" min="0" max="100" value="<?php echo $cost_increase_percentage[0]['ac'] ?>" class="RangeSelectorExpenses" style="background-color: rgba(0, 0, 0, 0.0)"style="margin-top: 0px;"/>
                                                </div>
                                                <div>
                                                    <h4><span class="ServiceIncomePers" id="o_perc"><?php echo $cost_increase_percentage[0]['other'] ?></span>%<span style="float:right; font-size:12px;">Other</span></h4>
                                                    <input id="ex11" type="range" min="0" max="100" value="<?php echo $cost_increase_percentage[0]['other'] ?>" class="RangeSelectorExpenses"style="background-color: rgba(0, 00, 0, 0.0)" style="margin-top: 0px; margin-bottom: 10px;"/>
                                                </div>
                                            </div><br><br>
                                            <!-- /.range sliders ends-->
                                        
                                        </div>      
                                             <center><h3><strong>Operating Expenses Increases</strong><br/><small>Use the sliders to set a % increase per year</small></h3></center>
                                            
                                        
                                        <br/>
                                        <ul class="list-unstyled list-inline pull-right">
                                            <li>
                                                <button type="button" id="save_expenses" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                            </li>
                                        </ul> <!-- /.Buttone Ends -->
                                    </div><!-- /.Row -->
                                </div><!-- /.Box-body -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div>   <!-- /operating expenses bar chart ends -->
            </div>   <!-- operating expenses row ends -->
            
            
        <!-- people row begins-->
            <div class="row">
                
            <!-- people row begins-->
                <div class="col-md-offset-1 col-md-10 ">
                    <div class="col-md-6 col-sm-12">
                        <div class="wrimagecard wrimagecard-topimage">
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.0) ">
                                <center><i class="fa fa-group fa-5x" style="color:#3C8DBC"></i></center>
                                <center><h3><strong>People Expenses</strong><br/><small></small></h3></center>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                          <!-- Bar Chart Starts-->
                                            <div class="chart-responsive">
                                                <canvas id="people_canvas" height="20%" width="100%"></canvas>
                                            </div><!-- ./Bar Chart-responsive -->
                                            
                                        </div><!-- /.col -->
                                    </div><!-- /.Row -->
                                    <div class="col-md-12" id="one_time_cost">
                                        <div class="table-responsive"> <br/>
                                            <center><h3><strong>People Expenses Summary</strong><br/><small></small></h3></center>
                                            <table id="tablepeoplesummary" class="table table-striped table-bordered">
                                                <colgroup>
                                                    <col width="10%">
                                                    <col width="10%">
                                                    <col width="10%">
                                                    <col width="10%">
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Year 1</th>
                                                        <th>Year 2</th>
                                                        <th>Year 3</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="background-color: #d3d3d3;">
                                                        <th style="text-align: right;">Total</th>
                                                        <th class="SumYTotal1">0</th>
                                                        <th class="SumYTotal2">0</th>
                                                        <th class="SumYTotal3">0</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- /.Box-body -->
                            </div><!-- /.Row Ends-->
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="wrimagecard wrimagecard-topimage">      
                            <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 00, 0, 0.0) ">
                                <center><i class="fa fa-bar-chart fa-5x" style="color:#3C8DBC"></i></center>
                                <center><h3><strong>Payroll Expenses Year 1-3</strong><br/><small></small></h3></center> 
                                <div class="offer-content">
                                    <h3 class="lead">
                                         <!--<span class="info-box-text" style="color:rgba(0, 0, 0, 1.0);font-size:12px;font-weight:thin;">Services Net Income</span>
                                        <span class="info-box-number" style="color:rgba(0, 0, 0, 1.0);font-size:30px;font-weight:thin;"><?php echo $cur . ' ' . number_format($serviceyear, 0, '.', ','); ?></span>  -->    
                                </div>        <!-- Bar Chart Starts-->
                                <div class="row">     
                                    <div class="chart-responsive">
                                        <canvas id="ChartDisplay" height="50" width="300" style="width: 133px; height: 155px;"></canvas>
                                    </div><!-- ./chart-responsive -->
                                    <div class="col-sm-12 people_RangeSelectorInput">
                                        <div style="padding: 15px;">
                
                                            <h4 class="range-value"><span class="ServiceIncomePerson">0</span>%</h4>
                
                                            <input id="ex15" type="range" min="0" max="100" value="50" class="people_RangeSelectorInput" style="margin-top: 25px;"/>
                
                                             <center><h3><strong>Payroll Yearly Increase</strong><br/><small>Use the slider to set a % increase per year</small></h3></center>
                                            
                                            <br>
                                            <!--  Button Starts -->
                                            <ul class="list-unstyled list-inline pull-right">
                                                <li>
                                                    <button type="button" id="save_people" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                                </li>
                                            </ul> <!-- /.Buttone Ends -->
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- people row ends-->
            
            <!-- Key ratio row begins-->
            <div class="row">
                <!-- Key ratio row begins-->
                <div class="col-md-offset-1 col-md-10 ">
                    <div class="col-md-12 col-sm-12">
                        <div class="wrimagecard wrimagecard-topimage">
                            <a href="#">
                                <div class="wrimagecard-topimage_header" style="background-color: rgba(0, 0, 0, 0.0)">
                                <center><i class="fa fa-key fa-5x" style="color:#3C8DBC" > </i></center> 
                                <center><h3><strong>Key Ratios</strong><br/><small>What are your key business indicators?</small></h3></center>
                              
                               <!-- Key ratio body begins-->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <!-- Key ratio table begins-->
                                                <div class="table-responsive">
                                                    <table id="table-key_ratios_0" class="table table-striped table-condensed">
                                                        <thead>
                                                        <tr class="warning">
                                                            <th width="10%">Account</th>
                                                            <th width="20%">Year 1</th>
                                                            <th width="20%">Year 2</th>
                                                            <th width="20%">Year 3</th>
                                                        </tr>
                                                        </thead>
                                                        <tr class="success">
                                                        <td><strong>Profitability Ratios</strong></td>
                                                        <td colspan="3">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Gross Profit Percentage</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                            $gross_profit = 'key_ratios_gross_profit_' . $i;
                                                            ?>
                                                            <td id="key_ratios_gross_profit_<?php echo $i; ?>"><?php echo number_format($$gross_profit, 2, '.', ','); ?> %</td>
                                                        <?php } ?>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Net Profit Percentage</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                            $net_profit = 'key_ratios_net_profit_' . $i;
                                                            ?>
                                                            <td id="key_ratios_net_profit_<?php echo $i; ?>"><?php echo number_format($$net_profit, 2, '.', ','); ?> %</td>
                                                        <?php } ?>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Employement Costs</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                            $employement_cost = 'key_ratios_employement_costs_' . $i;
                                                            ?>
                                                            <td id="key_ratios_employement_costs_<?php echo $i; ?>"><?php echo number_format($$employement_cost, 2, '.', ','); ?> %</td>
                                                        <?php } ?>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Operating Expenses</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                            $operating_expense = 'key_ratios_operating_expenses_' . $i;
                                                            ?>
                                                            <td id="key_ratios_operating_expenses_<?php echo $i; ?>"><?php echo number_format($$operating_expense, 2, '.', ','); ?> %</td>
                                                        <?php } ?>
                                                        </tr>
                                                    </table>
                                                    <table id="table-key_ratios_1" class="table table-striped table-condensed">
                                                        <thead>
                                                        <tr class="warning">
                                                            <th width="10%">Account</th>
                                                            <th width="20%">Year 1</th>
                                                            <th width="20%">Year 2</th>
                                                            <th width="20%">Year 3</th>
                                                        </tr>
                                                        </thead>
                                                        <tr class="success">
                                                        <td width="20%"><strong>Balance Sheet Ratios</strong></td>
                                                        <td colspan="3">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Earnings per share</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                         $earn_share = 'key_ratios_earn_share_' . $i; 
                                                         ?>
                                                            <td id="key_ratios_earn_share_<?php echo $i; ?>"><?php echo $cur . ' ' . number_format($$earn_share, 2, '.', ','); ?></td>
                                                        <?php } ?>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Working Capital Ratio</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                        $work_cap = 'key_ratios_work_cap_' . $i;
                                                        ?>
                                                            <td id="key_ratios_work_cap_<?php echo $i; ?>"><?php echo number_format($$work_cap, 2, '.', ','); ?></td>
                                                        <?php } ?>
                                                        </tr>
                                                        <tr>
                                                        <td width="20%">Debtors Turnover</td>
                                                        <?php for ($i = 1; $i <= 3; $i++) {
                                                         $debtors_turn = 'key_ratios_debtors_turn_' . $i;
                                                        ?>
                                                            <td id="key_ratios_debtors_turn_<?php echo $i; ?>"><?php echo number_format($$debtors_turn, 2, '.', ','); ?></td>
                                                        <?php } ?>
                                                        </tr>
                                                    </table> <!-- Key ratio table ends-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                     <!--<div class="wrimagecard-topimage_title">
                                        <h4>
                                        <div class="pull-right badge" id="WrNavigation"></div></h4>
                                    </div>-->
                                </a>
                              </div>
                            </div>

                     <!-- break even begins-->
                         <div class="col-md-12 col-sm-12">
                          <div class="wrimagecard wrimagecard-topimage">
                              <a href="#">
                             <div class="wrimagecard-topimage_header" style="background-color: rgba(242, 242, 242, 1.0)">
                                <center><i class="fa fa-area-chart fa-5x" style="color:#3C8DBC"></i></center>
                                   <center><h3><strong>Breakeven Analysis</strong><br/><small>Who much income is required to keep your business operating?</small></h3></center>
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            
                                            <!-- ./chart-responsive begins -->
                                                <div class="chart-responsive">
                                                    <canvas id="breakeven_canvas" height="50%" width="100%"></canvas>
                                                </div><!-- ./chart-responsive ends-->
                                                
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div>
                                    <!--<div class="wrimagecard-topimage_title">
                                    <h4>
                                    <div class="pull-right badge" id="WrNavigation"></div></h4>
                                </div>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>    <br><br>  

</section>
     
                      
<div id="modalConfirmYesNo" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 id="lblTitleConfirmYesNo" class="modal-title">User Confirmation</h4>
            </div>
            <div class="modal-body">
                <p id="lblMsgConfirmYesNo"></p>

            </div>
            <div class="modal-footer">
                <button id="btnYesConfirmYesNo"
                type="button"  class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Yes</button>
                <button id="btnNoConfirmYesNo"
                type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal Dynamic -->
                                    
                                
<!-- Feature 1 Modal-Start-->
<div  class="modal fade"  tabindex="-1" role="dialog" data-toggle="modal-onload" data-progress-bar=""data-duration="10000" id="modal_user_dashboard">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <!--<h1 class="modal-title">My Plan</h1>-->
                    <br/>
                       <div class="info-box" >
                            <span class="info-box-icon bg-aqua"><i class="fa fa-tachometer"></i></span>
                                <div class="info-box-content">
                                    <div class"row">
                                    <h1>"The Dashboard" </h1>
                                   <p> <strong>What is Dashboard?</strong></p>
                              </div>
                              <span class="info-box-number"><p id="total_renumeration_year1"></p><small></small></span>
                            </div><!-- /.info-box-content -->
                        </div><!-- /.info-box -->
                    <div class="modal-body">
                    <!--Content Starts Here-->     
            		    <div class="col-md-12">
    	                    <div class="row" style="border:none; background:white; height:300px;">
    		               
    		                        <div class="col-xs-12">  
    			                            <p>Dashboard is as not only indication of how far you have reached in completing your Business Plan, 
    			                            it is also a usefuj tool to review the results, and by moveing the sliders on each section you can change your projections instantly.</p>
    			         
    			                             <ol>
                                                <li>Revenue</li>
                                                <li>Expenses</li>
                                                <li>Payroll </li>
                                                <li>Key Ratios</li>
                                                <li>Breakeven Analysis</li>
                                             
                                            </ol>
    			 
    			                             <p>For example, move any slider to change the percentage value, this will change the calculations for the entire plan, and all financial reports are updated accordingly.
    			                     </div>
	                                </div>
	                            </div>
                                  <div class="modal-footer">
                                    <hr>
                                   	<h4 style="color:rgba(60, 141, 188, 1.0);font-size:12px;font-weight:thin;">Note:When you "Close" this information will no longer appear! </h4>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->    
                    <!-- Feature 4 Modal-End-->       
                </div>
      </div>
 
    
<!-- Scripts starts -->
<script src="<?= base_url(); ?>assets/plugins/carhartl-jquery-cookie-92b7715/jquery.cookie.js"></script>
<script src="<?= base_url(); ?>assets/js/user_dashboard.js"></script>


<script type="text/javascript">
var cur = '<?php echo $cur; ?>';


<?php
if ($currency == "AUD" || $currency == "USD") {
    $cur_unicode = '\u0024';
} elseif ($currency == "INR") {
    $cur_unicode = '\u20B9';
} elseif ($currency == "EUR") {
    $cur_unicode = '\u20ac';
} else {
    $cur_unicode = '\u0024';
}
?>
var cur = '<?php echo $cur_unicode; ?>';
</script>



</body>
</html>