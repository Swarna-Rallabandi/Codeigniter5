
      
          <h3>Chook_Times Table</h3><br />
          
          <div class="table-responsive">
          <table class="table table-bordered">
              <tr>
                  <th>Begin</th>
                  <th>End</th>
                  <th>EID</th>
                  <th>AntName</th>
                  <th>EventID</th>
                  <th>Interval</th>
                  
              <?php 
              if($chook_times->num_rows() >0){
                  foreach($chook_times->result() as $row)
                  {
                      ?>
              <tr>
                  <td><?php echo $row->Begin; ?></td>
                  <td><?php echo $row->End; ?></td>
                  <td><?php echo $row->EID; ?></td>
                  <td><?php echo $row->AntName; ?></td>
                  <td><?php echo $row->EventID; ?></td>
                  <td><?php echo $row->Interval; ?></td>
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
      
   