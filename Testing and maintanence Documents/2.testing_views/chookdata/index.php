
      
          <h3>ChookData Table</h3><br />
          
          <div class="table-responsive">
          <table class="table table-bordered">
              <tr>
                  <th>r_id</th>
                  <th>animal_id</th>
                  <th>val1</th>
                  <th>val2</th>
                  <th>yard</th>
                  <th>rssi</th>
                  <th>ts</th>
                  <th>reader</th>
                  <th>message</th>
                  <th>val3</th>
                  <th>action</th>
              </tr>
              <?php 
              if($fetch_data->num_rows() >0){
                  foreach($fetch_data->result() as $row)
                  {
                      ?>
              <tr>
                  <td><?php echo $row->r_id; ?></td>
                  <td><?php echo $row->animal_id; ?></td>
                  <td><?php echo $row->val1; ?></td>
                  <td><?php echo $row->val2; ?></td>
                  <td><?php echo $row->yard; ?></td>
                  <td><?php echo $row->rssi; ?></td>
                  <td><?php echo $row->ts; ?></td>
                  <td><?php echo $row->reader; ?></td>
                  <td><?php echo $row->message; ?></td>
                  <td><?php echo $row->val3; ?></td>
                  <td><?php echo $row->action; ?></td> 
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
      
   