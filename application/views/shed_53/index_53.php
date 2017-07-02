  
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- SHED_53 WEB PAGE  -->
<!DOCTYPE html>
<!-- START HTML -->
<html lang="en">
<!-- START HEAD -->  
<head>
<!-- TITLE FOR SHED_52 PAGE -->  
  <title>Shed_53 Hens Summary</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="COSC592 project">
  <meta name="keywords" content="cosc592,project, HTML, CSS, responsive design">
  <meta name="author" content="Swarna">
     <!-- LINKING CSS FILE -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style1.css">   
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css"/>
    <!-- LINKING JQUERY LIBRARY -->
    <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
    <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-1.12.0.js"></script>-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- END HEAD --> 
</head>
<!-- START BODY --> 
<body>        
  <!-- START WRAPPER -->
  <div id="wrapper">
    <!-- START NAV -->
    <nav id="nav" class="column">    
     <!-- load logo image -->  
    <img src="<?php echo base_url('css/img/hen2.png'); ?>"  width="180" height="180" alt="chook logo" title="UNE" />
   <!-- html pages for nav list --> 
    <ul id="shed_53_nav">
     <li><a href="<?php echo base_url('shed_52/index_52'); ?>"><span>Shed_52</span></a></li>
     <li><a href="<?php echo base_url('shed_53/index_53'); ?>"><span>Shed_53</span></a></li>      
    <li><a href="<?php echo base_url('shed_54/index_54'); ?>"><span>Shed_54</span></a></li>
    </ul>
       </nav>
   
    <!-- END NAV -->
    <!-- START COL_MID -->
    <section id="col_mid" class="column">
     <!-- MAIN HEADER FOR SHED_53 -->
       <header>
         <h1 id="shed_53">Shed_53 Hens Summary</h1>
       </header>
      <!-- START ARTICLE -->
    <article id="unit_info">      
        <!-- START MAINPAGE FOR DATA DISPLAY -->
      <div id="mainpage">
        <!-- START THREE COLUMNS FOR THREE DIFFERENT LABLES -->
       <div id="threecolumns">
        <!-- START COL1 FOR ANTENNA REPOET -->
        <div class="col1">
          <div>
           <div class="ftbox1"></div>
              <!-- START CONTENT FOR COL1 -->
            <div class="ftcontent">
              <div class="post">
                   <!-- HEADING FOR ANTENNA REPORT LABLE -->
                <h2><a href="#">Anttenna Report</a></h2>
                   <!-- input date lable for antenna record date selection  -->
                  <input type="date" value="2017-05-13"  id="ShowantennaDate"  />
                  </br>
                </br>
               <!-- button for  to click show record on the base of date selection-->  
    <button type='button' name='Show Record' id='Showantenna'>Show Record</button>
        <div id="order_table">  
             <!-- START ANTENNA TABLE-->
          <table id='result_table' class="table table-bordered"> 
              <!-- START ANTENNA TABLE HEAD-->
            <thead>
              <tr>  
                   <!-- antenna table column names-->
                   <th class="shed_53_th">antenna_name</th>  
                   <th class="shed_53_th">leaves</th>  
                   <th class="shed_53_th">enters</th>  
              </tr>
                <!-- END ANTENNA TABLE HEAD-->
           </thead>
               <!-- START ANTENNA TABLE BODY-->
           <tbody>    
                <!-- result table display here-->
                <!-- END ANTENNA TABLE BODY-->
     </tbody>
       <!-- END ANTENNA TABLE-->      
    </table>  
        <!-- SPINNER FOR ANTENNA TABLE-->    
    <div id="spinner">
   <span><i class="fa fa-refresh fa-spin fa-3x"></i></span>
     </div>
          </div>  
             </div>
            <!-- END CONTENT FOR COL1 -->
               </div>
                 </div>  
             <!-- END COL1-->
                   </div>     
              <!-- START COL2 -->
    <div class="col2">
        <div>
         <div class="ftbox1"></div>  
            <!-- START CONTENT FOR COL2 -->
            <div class="ftcontent">
              <div class="post">
                    <!-- HEADING FOR READER REPORT LABLE -->
                <h2><a href="#">Reader Report</a></h2>
                  <!-- input date lable for reader record date selection  -->
                  <input type="date" value="2017-05-13"  id="ShowreaderDate"  />
                   </br>
                    </br>
            <!-- button for  to click show record on the base of date selection-->
    <button type='button' name='Show Record' id='reader'>Show Record</button>
         <div id="order_table">  
             <!-- START READER TABLE-->
     <table id='result_table_reader' class="table table-bordered">  
         <!-- START READER TABLE HEAD-->
      <thead>
          <tr>  
              <!-- reader table column names-->
               <th class="shed_53_th">reader_name</th>  
               <th class="shed_53_th">leaves</th>  
               <th class="shed_53_th">enters</th>  
          </tr>  
           <!-- END READER TABLE HEAD-->
           </thead>
         <!-- START READER TABLE BODY-->
           <tbody>   
                <!-- result table display here-->
          <!-- END READER TABLE BODY-->
     </tbody>
         <!-- END READER TABLE-->   
    </table>  
              <!-- SPINNER FOR EPC TABLE-->
 <div id="spinner_reader">
   <span><i class="fa fa-refresh fa-spin fa-3x"></i></span>
     </div>
        </div>  
          </div>
         <!-- END CONTENT  -->
            </div>
             </div> 
        <!-- END COL2-->
               </div> 
     <!-- START COL3 -->
    <div class="col3">
          <div>
            <div class="ftbox1"></div>
              <!-- START CONTENT FOR COL3 -->
             <div class="ftcontent">
               <div class="post">
                    <!-- HEADING FOR ACTIVE ANIMAL REPORT LABLE -->
                 <h2><a href="#">Active Animal Report</a></h2>
                    <!-- START ACTIVE ANIMAL REPORT TABLE-->
    <div id="order_table">  
       <table id='result_table_epc' class="table table-bordered">  
           <!-- table header for epc table-->
           <thead>
              <tr>  
                   <!-- ACTIVE ANIMAL REPORT table column names-->
                   <th class="shed_53_th">epc</th>  
                   <th class="shed_53_th">leaves</th>  
                   <th class="shed_53_th">enters</th>  
              </tr>  
                <!-- END ANIMAL REPORT  TABLE HEAD-->
           </thead>
            <!-- START ANIMAL REPORT TABLE BODY-->
      <tbody> 
            <!-- result table display here-->
          <!-- END ANIMAL REPORT TABLE BODY-->
     </tbody>
            <!-- END ANIMAL REPORT  TABLE-->
    </table> 
         <!-- SPINNER FOR ANTENNA TABLE-->
<div id="spinner_epc">
   <span><i class="fa fa-refresh fa-spin fa-3x"></i></span>
     </div> 
        </div>  
            </div>
                  <!-- END CONTENT FOR COL3 -->
              </div>
                </div>   
         <!-- END COL3-->
                  </div>  
      <!-- END THREE COLUMNS-->
                    </div>  
    <!-- END MAIN PAGE-->
                      </div>   
     <!-- END ARTICLE --> 
</article>
<!-- END COL_MID -->
  </section>
<!-- END WRAPPER -->
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
                           url:
 "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/antenna_report?date=" + selectedDate,                                            success: function (result) {
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
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/antenna_report?date=" + selectedDate,   
                success: function (result) {
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
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/reader_report?date=" + selectedDate,                                            success: function (result) {
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
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/reader_report?date=" + selectedDate,                                            success: function (result) {
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
            var selectedValue = $(this).val();
            var ddl = $('#result_table_epc tbody');
                 $('#spinner_epc').show();
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/epc_report",                                            success: function (result) {
                       
                       var foundevents = result['result_display'];
                                $.each(foundevents, function (i, item) {
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
 <!-- END BODY-->
    </body>
 <!-- END HTML-->
</html>