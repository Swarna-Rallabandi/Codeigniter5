
<html>
    <head>
        <title>Codeigniter</title>
        <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/css/style.css">
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
<div id="main">

<div id="show_form">
<h2>CodeIgniter Select By Date</h2>
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
echo form_submit('submit', 'Show Record');
echo form_close();

?>
<div class="message">
<?php
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

</div>
</div>

</div>
</body>
</html>