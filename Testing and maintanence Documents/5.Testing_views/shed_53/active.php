<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Ajax PHP MySQL Date Range Search using jQuery DatePicker</h2>  
                <h3 align="center">Order Data</h3><br />  
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">antenna_name</th>  
                               <th width="30%">leaves</th>  
                               <th width="43%">enters</th>  
                              
                          </tr>  
                     <?php  
                          if (isset($result_display)) {
         foreach ($result_display as $row)  
         {  
                         
                     ?>  
                          <tr>  
                               <td><?php echo $row["antenna_name"]; ?></td>  
                               <td><?php echo $row["leaves"]; ?></td>  
                               <td><?php echo $row["enters"]; ?></td>  
                               
                          </tr>  
                     <?php  
                     }  
                               }
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                    
                    $.getJSON({ 
                           type: "GET",
                           crossDomain: true,
                           dataType: "jsonp",
                           url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/index_get",
                           success: function(data)
                           {        
                             alert("workings");
                           }
});  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>




 
    

<!--
//            //Load Events table for selected draw
//        $('#SubClassId').change(function() {
//
//            var $selectedSubClass = $(this).val();
//            var $selectedEvent = $('#FixtureId').val();
//
//            var ddl = $('#tbl tbody');
//            ddl.empty();
//
//            $('#spinner').show();
//
//            $.ajax({
//                url: 'https://ncha.icompete.net/Results/GetLiveResults',
//                type: "POST",
//                data: { fixtureId: $selectedEvent, subClassId: $selectedSubClass },
//                error: function(xhr, ajaxOptions, thrownError) {
//                    // alert(xhr.status);
//                    // alert(thrownError);
//                },
//                success: function(result) {
//                    var ddl = $('#tbl tbody');
//                    ddl.empty();
//                    var $countr = 1;
//                    if (!jQuery.isEmptyObject(result)) {
//                        $.each(result, function (i, d) {
//
//                            var row = '<tr>';
//                                row += '<td>' + d.DrawNo + '</td>';
//                                row += '<td>' + d.Rider + '</td>';
//                                row += '<td>' + d.Horse + '</td>';
//                            if (d.Score === null) {
//                                row += '<td></td>';
//                            } else {
//                                row += '<td>' + ((d.Score === -3) ? "SCR" : d.Score) + '</td>';
//                            }
//                                
//                                row += '</tr>';
//                                $countr++;
//                            
//                                ddl.append(row);
//                           
//                        });
//                    }
//
//                    $('#spinner').hide();
//                }
//            });
//
//        });
           
           
//           
//               $('#ShowantennaDate').change(function () {
//                var selectedValue = $(this).val();
//                alert('HERE');
//                 $.ajax({ 
//                       type: "GET",
//                       crossDomain: true,
//                       dataType: "jsonp",
//                       url: "http://turing.une.edu.au/~srallaba/CodeIgniter5/api/Api_53/index_get?date=06/03/2017",                 
//                       success: function (result) {
//                        //reload the search results
//                        if (jQuery.isEmptyObject(result)) {
//                            var $tr = $('<tr>').append(
//                               $('<td colspan="4">').text('NO EVENTS FOUND')
//                               ).appendTo('#result_table');
//                        }
//                        else {
//                            var foundevents = JSON.parse(result);
//
//                            $.each(foundevents, function (i, item) {
//                                var $tr = $('<tr>').append(
//                                    $('<td>').text(item.antenna_name),
//                                    $('<td>').text(item.leaves),
//                                    $('<td>').text(item.enters)   
//                                    ).appendTo('#result_table');
//                                });
//                        }
//                    }
//                });
//            });
           -->
    

