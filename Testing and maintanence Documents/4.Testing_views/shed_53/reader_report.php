
<?php
    
if (isset($result_display)) {
echo "<p><u>Result</u></p>";
if ($result_display == 'No record found !') {
echo $result_display;
} else {
echo "<table class='result_table'>";
echo '<tr><th>reader_name</th><th>time_stamp</th><tr/>';
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->reader_name . '</td>' . '<td class="j_date">' . $value->time_stamp . '</td>' .  '<tr/>';
}
echo '</table>';
}
}
    
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
echo '<caption>Reader Table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">reader_name</th><th>time_stamp</th><tr/>';
foreach ($show_table as $value) {
echo "<tr>" . "<td class='e_id'>" . $value->reader_name . "</td>" . "<td>" . $value->time_stamp . "</td>" . "<tr/>";
}
echo '</table>';
}
echo "</div>";
}
?>

