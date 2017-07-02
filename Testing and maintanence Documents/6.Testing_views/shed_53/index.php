
<html>
    <head>
        <title>Codeigniter</title>
        
    
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    </head>
<body class="header-fixed header-fixed-space">
    <div class="container">
    <div id="show_form">
<nav class="navbar navbar-inverse">
    
    <div class="navbar-header">                 
        
        </div>
        <div id="navbar">
        <ul class="nav navbar-nav">
            
            //horizantal navgation page linking
            <li><a href="<?php echo base_url(); ?>index.php/shed_53/index">shed_53</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/shed_52/index">shed_52</a></li>
            </ul>
        </div>
    
</nav>
    
  
        
<h2>Antenna Report</h2>
           
<?php
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
          echo "<br />";   
          echo "<br />";   
    ?>

    
    <h2>Reader Report</h2>
           
<?php
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
echo form_submit('submit', 'Show Record');
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
        echo "<br />";   
          echo "<br />";   
    ?>

 
 
        <h2>Active animal Report</h2>
           
<?php
       // echo form_open('Shed_53/epc_get');
       // echo form_close();
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
echo '<caption>epc table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">epc</th><th>Leaves</th></th><th>Enters</th><tr/>';
foreach ($show_table as $value) {
echo '<tr>' . '<td class="e_id">' . $value->epc . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}

}
   echo "<br />";   
          echo "<br />";   
?>
     
 </div>
</div>

</body>
</html>