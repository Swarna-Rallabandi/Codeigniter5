
<html>
    <head>
        <title>Codeigniter</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    </head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
    <div class="navbar-header">
        
        </div>
        <div id="navbar">
        <ul class="nav navbar-nav">
            
            <li><a href="<?php echo base_url(); ?>index.php/shed_53/index">shed_53</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/shed_52/index">shed_52</a></li>
            </ul>
        </div>
    </div>
</nav>
    
    <div class="container">
    <div id="show_form">
        
<h2>Antenna Report</h2>
           
<?php
echo form_open('Shed_53/index');
echo form_label('Select By Date : ');
$data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
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
echo '<tr><th>antenna_name</th><th>time_stamp</th><tr/>';
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->antenna_name . '</td>' . '<td class="j_date">' . $value->time_stamp . '</td>' .  '<tr/>';
}
echo '</table>';
}
}
?>

 
<?php
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
echo '<caption>antenna Table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">antenna_name</th><th>time_stamp</th><tr/>';
foreach ($show_table as $value) {
echo "<tr>" . "<td class='e_id'>" . $value->antenna_name . "</td>" . "<td>" . $value->time_stamp . "</td>" . "<tr/>";
}
echo '</table>';
}
echo "</div>";
}
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
if (isset($date_error_message)) {
echo $date_error_message;
}
echo "</div>";
        echo "<br />";
echo form_submit('submit', 'Show Record');
echo form_close();
        
 
?>

</div>
</div>
</div>
</body>
</html>