
<html>
<head>
<title>Chook data</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">  
   
    </head>
<body>
<!-- START PAGE SOURCE -->
    
<div id="wrap">
    <nav id="nav" class="column">
      <img src="" alt="Chook Data" title="Chook Data" />  
   
  <div id="menu">
    <ul>
            <li><a href="index.php/shed_52/index"><span>Shed_52</span></a></li>
        <li class="active"><a href="index.php/shed_53/index"><span>Shed_53</span></a></li>
      
      <li><a href="index.php/shed_54/index"><span>Shed_54</span></a></li>
    </ul>
  </div>
     </nav>

  <div id="contentwrap">       
    <div id="header"> </div>
    <div id="mainpage">
      <div id="threecolumns">
        <div class="col1">
          <div>
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Anttenna Report</a></h2>                
                <p>  
<?php
                    echo "<br />";
        //TODO:open index class from Shed_53 controller
echo form_open('Shed_53/index');
                   
        //TODO: create lable and name it for Date
echo form_label('Select By Date : ');
        //TODO:create array for lable type , name and placeholder for inside lable
$data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => 'yyyy-mm-dd'
);
    //select date in lable
echo form_input($data);
        //
echo "<div class='error_msg'>";
if (isset($date_error_message)) {
echo $date_error_message;
}
echo "</div>";
        echo "<br />";
echo form_submit('submit', 'Show Record');
echo form_close();

if (isset($result_display)) {
echo "<p><u>Result</u></p>";
if ($result_display == 'No record found !') {
echo $result_display;
} else {
echo "<table class='result_table'>";
echo '<tr><th>antenna_name</th><th>Leave</th><th>Enter</th><tr/>';
    //$total_sum=0;
    
 
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->antenna_name . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}
} 
    ?>
    </p>
                 </div>
            </div>
            <div class="ftbox2"></div>
          </div>
         
        </div>
        <div class="col2">
          <div>
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Active Animal Report</a></h2>
                
                <p> <?php
                    echo "<br />";
                    echo "<br />";
       // echo form_open('Shed_53/epc_get');
       // echo form_close();
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
//echo '<caption>epc table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">epc</th><th>Leaves</th></th><th>Enters</th><tr/>';
foreach ($show_table as $value) {
echo '<tr>' . '<td class="e_id">' . $value->epc . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}

}
  
?> </p>
                 </div>
            </div>
            <div class="ftbox2"></div>
          </div>
          
        </div>
          </div>
        <div class="col3">
          <div class="ftbox">
            <div></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Reader Report</a></h2>
               
                <p>          
<?php
                    echo "<br />";
echo form_open('Shed_53/reader_report');
echo form_label('Select By Date : ');
$data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($date_error_message2)) {
echo $date_error_message2;
}
echo "</div>";
        echo "<br />";
//echo form_submit('submit', 'Show Record');
                    echo "<button type='submit' name='Show Record' id='show'>Show Record</button>";
echo form_close();
    
        if (isset($result_display2)) {
echo "<p><u>Result</u></p>";
if ($result_display2 == 'No record found !') {
echo $result_display2;
} else {
echo "<table class='result_table'>";
echo '<tr><th>reader_name</th><th>Leaves</th><th>Enters</th><tr/>';
    
foreach ($result_display2 as $value) {
echo '<tr>' . '<td class="e_id">' . $value->reader_name . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}
}
          
    ?> </p>
                 </div>
            </div>
            <div class="ftbox2"></div>
          </div>
          
        </div>
      
      </div>
    </div>
  
  </div>
 
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
