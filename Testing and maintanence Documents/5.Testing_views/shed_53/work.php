  
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>COSC260 Week 4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="COSC592 project">
  <meta name="keywords" content="cosc592,project, HTML, CSS, responsive design">
  <meta name="author" content="Swarna">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style1.css">
   
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css"/>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-1.12.0.js"></script>-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    
      
  <!-- START WRAPPER -->
  <div id="wrapper">
    <!-- START NAV -->
    <nav id="nav" class="column">
         <img src="<?php echo base_url('css/img/ck.jpg'); ?>"  width="180" height="180" alt="chook logo" title="UNE" />
     <a href="shed_52/index_52"><span>Shed_52</span></a>
      <a href="shed_53/index_53"><span>Shed_53</span></a>
     <a href="shed_54/index_54"><span>Shed_54</span></a>
      
    </nav>
    <!-- END NAV -->
    <!-- START COL_MID -->
    <section id="col_mid" class="column">
      <header>
        <h1>Chook Information</h1>
      </header>
      <!-- START UNIT INFO -->
      <article id="unit_info">
      
        <!-- START TOPICS -->
      <div id="mainpage">
      <div id="threecolumns">
        <div class="col1">
          <div>
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Anttenna Report</a></h2>                    
                 
<?php
                    
        //TODO:open index class from Shed_53 controller
//echo form_open('api/Api_53/index_get');                   
        //TODO: create lable and name it for Date
//echo form_label('Select By Date : ');
        //TODO:create array for lable type , name and placeholder for inside lable

//  $data = array(
//'type' => 'date',
//'name' => 'date',
//'placeholder' => 'd/m/y'
//);                    
    //select date in lable
//echo form_input($data);           
//echo "<div class='error_msg'>";
//if (isset($date_error_message)) {
//echo $date_error_message;
//}
//echo "</div>";
//echo "<br />";
//                   echo form_close();

                     ?> 
                  <input type="date" value="2017-05-13"  id="ShowantennaDate"  />
                  </br>
                </br>
                    <button type='button' name='Show Record' id='Showantenna'>Show Record</button>
          <div id="order_table">  
       <table id='result_table' class="table table-bordered">  
           <thead>
                          <tr>  
                               <th width="5%">antenna_name</th>  
                               <th width="30%">leaves</th>  
                               <th width="43%">enters</th>  
                          </tr>  
           </thead>
           <tbody>    
     </tbody>
    </table>  
    
          <div id="spinner">
   <span><i class="fa fa-refresh fa-spin fa-3x"></i></span>
     </div>
          </div>  
                 </div>
            </div>
          </div>         
        </div>      
            <div class="col2">
          <div>
            <div class="ftbox1"></div>
           
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Reader Report</a></h2>                    
 
                  <input type="date" value="2017-05-13"  id="ShowreaderDate"  />
                  </br>
                </br>
                    <button type='button' name='Show Record' id='reader'>Show Record</button>
          <div id="order_table">  
       <table id='result_table_reader' class="table table-bordered">  
           <thead>
                          <tr>  
                               <th width="5%">reader_name</th>  
                               <th width="30%">leaves</th>  
                               <th width="43%">enters</th>  
                          </tr>  
           </thead>
           <tbody>    
     </tbody>
    </table>  
      <div id="spinner_reader">
   <span><i class="fa fa-refresh fa-spin fa-3x"></i></span>
     </div>
                </div>  
                 </div>
            </div>
          </div>         
        </div> 
     
            <div class="col3">
          <div>
            <div class="ftbox1"></div>
             <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Active Animal Report</a></h2>                    
                 

          <div id="order_table">  
       <table id='result_table_epc' class="table table-bordered">  
           <thead>
                          <tr>  
                               <th width="5%">epc</th>  
                               <th width="30%">leaves</th>  
                               <th width="43%">enters</th>  
                          </tr>  
           </thead>
           <tbody>   
               
     </tbody>
    </table> 
             <div id="spinner_epc">
   <span><i class="fa fa-refresh fa-spin fa-3x"></i></span>
     </div>
    
                </div>  
                 </div>
            </div>
          </div>         
        </div> 
     
     </div>  
     
 </div>   
     
    </article>
      </section>
    </div>
    
    
   <script type= 'text/javascript'>
       
       $(document).ready(function() {
                     
           
           
           $('#spinner').show();
            $('#Showantenna').click(function () {
                var selectedValue = $(this).val();
                
                 var ddl = $('#result_table tbody');
                ddl.empty();
                
              $('#spinner').show();
                
                var selectedDate = '2017-05-13';
                if($('#ShowantennaDate').val() !== ''){
                    selectedDate = $('#ShowantennaDate').val();
                }
                
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/api/Api_53/index_get?date=" + selectedDate,                                            success: function (result) {
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO RECORDS FOUND')
                              ).appendTo('#result_table tbody');
                        }
                        else {
                            var foundevents = result['result_display'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO RECORDS FOUND')
                                   ).appendTo('#result_table tbody');
                            }
                            else{
                                $.each(foundevents, function (i, item) {
                                var row = '<tr>';
                                row += '<td>' + item.antenna_name + '</td>';
                                row += '<td>' +  item.leaves + '</td>';
                                row += '<td>' + item.enters+ '</td>';
                                row += '</tr>';
                            
                                ddl.append(row);
                                });
                                
                        }}
                           $('#spinner').hide();   
                    }
                     
                      
                });
                
            });
          var selectedValue = $(this).val();
                
                 var ddl = $('#result_table tbody');
                ddl.empty();
                
              $('#spinner').show();
                
                var selectedDate = '2017-05-13';
                if($('#ShowantennaDate').val() !== ''){
                    selectedDate = $('#ShowantennaDate').val();
                }
            $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/api/Api_53/index_get?date=" + selectedDate,                                            success: function (result) {
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO RECORDS FOUND')
                              ).appendTo('#result_table tbody');
                        }
                        else {
                            var foundevents = result['result_display'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO RECORDS FOUND')
                                   ).appendTo('#result_table tbody');
                            }
                            else{
                                $.each(foundevents, function (i, item) {
                                var row = '<tr>';
                                row += '<td>' + item.antenna_name + '</td>';
                                row += '<td>' +  item.leaves + '</td>';
                                row += '<td>' + item.enters+ '</td>';
                                row += '</tr>';
                            
                                ddl.append(row);
                                });
                                
                        }}
                           $('#spinner').hide();   
                    }
                     
                      
                });
                        
             
        }); 
        $(document).ready(function() {
                       
           $('#reader').click(function () {
                var selectedValue = $(this).val();
                
                 var ddl = $('#result_table_reader tbody');
                ddl.empty();
                
            
                 $('#spinner_reader').show();
                var selectedDate = '2017-05-13';
                if($('#ShowreaderDate').val() !== ''){
                    selectedDate = $('#ShowreaderDate').val();
                }
                
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/reader?date=" + selectedDate,                                            success: function (result) {
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO RECORDS FOUND')
                              ).appendTo('#result_table_reader tbody');
                        }
                        else {
                            var foundevents = result['result_display'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO RECORDS FOUND')
                                   ).appendTo('#result_table_reader tbody');
                            }
                            else{
                                $.each(foundevents, function (i, item) {
                                var row = '<tr>';
                                row += '<td>' + item.reader_name + '</td>';
                                row += '<td>' +  item.leaves + '</td>';
                                row += '<td>' + item.enters+ '</td>';
                                row += '</tr>';
                            
                                ddl.append(row);
                                });
                        }}
                              $('#spinner_reader').hide();  
                    }
                    
                });
            });
         
            
              var selectedValue = $(this).val();
                
                 var ddl = $('#result_table_reader tbody');
                ddl.empty();
                
            
                 $('#spinner_reader').show();
                var selectedDate = '2017-05-13';
                if($('#ShowreaderDate').val() !== ''){
                    selectedDate = $('#ShowreaderDate').val();
                }
                
                
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/reader?date=" + selectedDate,                                            success: function (result) {
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO RECORDS FOUND')
                              ).appendTo('#result_table_reader tbody');
                        }
                        else {
                            var foundevents = result['result_display'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO RECORDS FOUND')
                                   ).appendTo('#result_table_reader tbody');
                            }
                            else{
                                $.each(foundevents, function (i, item) {
                                var row = '<tr>';
                                row += '<td>' + item.reader_name + '</td>';
                                row += '<td>' +  item.leaves + '</td>';
                                row += '<td>' + item.enters+ '</td>';
                                row += '</tr>';
                            
                                ddl.append(row);
                                });
                        }}
                              $('#spinner_reader').hide();  
                    }
                    
                });
            });
          
       
       
        $(document).ready(function() {
                 var ddl = $('#result_table_epc tbody');
                
                
            
                 $('#spinner_epc').show();
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/epc",                                            success: function (result) {
                       
                       
                                $.each(result, function (i, item) {
                                var row = '<tr>';
                                row += '<td>' + item.epc + '</td>';
                                row += '<td>' +  item.leaves + '</td>';
                                row += '<td>' + item.enters+ '</td>';
                                row += '</tr>';
                            
                                ddl.append(row);
                                });
                        
                              $('#spinner_epc').hide();  
                    }
                    
                });
         });
          
        </script>
    
    
    </body>
</html>