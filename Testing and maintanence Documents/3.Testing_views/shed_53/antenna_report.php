<html>
<head>
<title>CodeIgniter Select Demo</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

</head>

<body>
<div id="main">

<div id="show_form">
<h2>CodeIgniter Select By ID And Date</h2>
<?php
echo form_open('shed_53/select_by_date');
echo form_label('Select By Date : ');
$data = array(
'type' => 'timestamp',
'name' => 'time_stamp',
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
</div>
</body>
</html>