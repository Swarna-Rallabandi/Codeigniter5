<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  
 
    <h4>Display Records From Database Using Codeigniter</h4>
    <table>
     <tr>
         //event_id,antenna_name,peak_rssi,epc,reader_name,tag_event
      <td><strong>Event Id</strong></td>
      <td><strong>Antenna Name</strong></td>
      <td><strong>Peak Rssi</strong></td>
      <td><strong>Epc</strong></td>
      <td><strong>Reader Name</strong></td>
       <td><strong>Tag Event</strong></td>
    </tr>
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->event_id;?></td>
         <td><?php echo $post->antenna_name;?></td>
         <td><?php echo $post->peak_rssi;?></td>
         <td><?php echo $post->epc;?></td>
         <td><?php echo $post->reader_name;?></td>
         <td><?php echo $post->tag_event;?></td>
      </tr>    
     <?php }?>  
   </table>
 
 
  </body>
</html>
