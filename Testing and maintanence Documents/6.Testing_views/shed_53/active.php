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
echo '<tr><th>epc</th><th>count</th><tr/>';
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->epc . '</td>' . '<td class="j_date">' . $value->time_stamp . '</td>' .  '<tr/>';
}
echo '</table>';
}
}