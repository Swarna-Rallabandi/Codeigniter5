<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Codeigniter Datatable Example</title>
        <!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css"/>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        </head>
    <body>
           <?php  

                   
        //TODO: create lable and name it for Date
echo form_label('Select By Date : ');
        //TODO:create array for lable type , name and placeholder for inside lable
//$date = new DateTime('today');
//$date->sub(new DateInterval('P10D'));
//echo $date->format('Y-m-d') . "\n";
                   
                    $data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => '$date'
);
                 echo form_open('api/Api_53/index_get');
        
    //select date in lable
echo form_input($data);
                     echo "<br />";
                       echo "<br />";
                       echo "<button type='submit' name='Show Record' id='Showantenna'>Show Record</button>";    
        
           echo "<table id='result_table'>";
echo '<tr><th>antenna_name</th><th>Leave</th><th>Enter</th><tr/>';
        if (isset($result_display)) {
    foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->antenna_name . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
 echo '</table>';
    }
                   
         }
        
        
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
           
           
          </div>         
        </div> 
            <div class="col3">
          <div>
            <div class="ftbox1"></div>
            
          </div>         
        </div> 
     </div>  
 </div>   
        </article>
      </section>
    </div>
    
         ?>
        
         <script type= 'text/javascript'>
             /*
            $(document).ready(function () {
                $('#cd-grid').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/Shed_52/cd_list"
                    
                    
                });
            });
            */
               $(function () {
            $('#Showantenna').change(function () {
                var selectedValue = $(this).val();
                 $.getJSON({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/index_get",
                           
                    success: function (result) {
                        //reload the search results
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO EVENTS FOUND')
                               ).appendTo('#result_table');
                        }
                        else {

                            var foundevents = JSON.parse(result);

                            $.each(foundevents, function (i, item) {
                                var $tr = $('<tr>').append(
                                    $('<td>').text(item.antenna_name),
                                    $('<td>').text(item.leaves),
                                    $('<td>').text(item.enters)                                  
                                    
                                    ).appendTo('#result_table');
                                })
                           
                        }
                    }
                });
            });
        });
        </script>
        
        
         $('#Showreader').click(function () {
                var selectedValue = $(this).val();
                
                 var ddl = $('#result_tablereader tbody');
                ddl.empty();
                
                $('#spinner').show();
                
                var selectedDate = '2017-05-13';
                if($('#ShowareaderDate').val() !== ''){
                    selectedDate = $('#ShowareaderDate').val();
                }
                
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/api/Api_53/reader_get?date=" + selectedDate,                                            success: function (result) {
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO EVENTS FOUND')
                               ).appendTo('#result_tablereader tbody');
                        }
                        else {
                            var foundevents = result['result_displayreader'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO EVENTS FOUND')
                                   ).appendTo('#result_tablereader tbody');
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
                               $('#spinner').hide();
                    }
                });
            });
           
           
                $('#Showepc').change(function () {
                var selectedValue = $(this).val();
                
                 var ddl = $('#result_table tbody');
                ddl.empty();
                
                $('#spinner').show();
                
                var selectedDate = '2017-05-13';
                if($('#ShowareaderDate').val() !== ''){
                    selectedDate = $('#ShowareaderDate').val();
                }
                
                 $.ajax({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/api/Api_53/epc?date=" + selectedDate,                                            success: function (result) {
                        if (jQuery.isEmptyObject(result)) {
                            var $tr = $('<tr>').append(
                               $('<td colspan="4">').text('NO EVENTS FOUND')
                               ).appendTo('#result_table tbody');
                        }
                        else {
                            var foundevents = result['result_display'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO EVENTS FOUND')
                                   ).appendTo('#result_table tbody');
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
                               $('#spinner').hide();
                    }
                });
            });
           
       })
        
        $('#spinner').hide();
           
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
                               $('<td colspan="4">').text('NO EVENTS FOUND')
                               ).appendTo('#result_table tbody');
                        }
                        else {
                            var foundevents = result['result_display'];
                            if(foundevents === 'No record found !'){
                                  var $tr = $('<tr>').append(
                                   $('<td colspan="4">').text('NO EVENTS FOUND')
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
           
                       
             

              });
           
       
        </script>
    
    
    </body>
</html>
           </body>
</html>