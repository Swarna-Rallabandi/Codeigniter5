
      
          <h3>Chook_Times_02 Table</h3><br />
          
          <div class="table-responsive">
          <table class="table table-bordered">
              <tr>
                  <th>begin1</th>
                  <th>end1</th>
                  <th>eid</th>
                  <th>antname</th>
                  <th>eventid</th>
                  <th>interval1</th>
              </tr>
              <?php 
              if($chook_times_02->num_rows() >0){
                  foreach($chook_times_02->result() as $row)
                  {
                      ?>
              <tr>
                  <td><?php echo $row->begin1; ?></td>
                  <td><?php echo $row->end1; ?></td>
                  <td><?php echo $row->eid; ?></td>
                  <td><?php echo $row->antname; ?></td>
                  <td><?php echo $row->eventid; ?></td>
                  <td><?php echo $row->interval1; ?></td>
              </tr>
              <?php
                  }                  
              }
              else
              {
                  ?>
              <tr>
              <td colspan="3">No Data Found</td>
              </tr>
              <?php
              }
              ?>
              
              </table>
          </div>
      
   