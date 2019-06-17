<?php 	
        require'header1.php';
        require'DB.php';

        $sql_m="SELECT  SUM(total) AS m_total, date_format(date, '%Y-%m') AS m FROM bill GROUP BY m;";
        $rs_m = mysqli_query($con,$sql_m);
 ?>
 <br>



 <div id="page-wrapper">
        <div class="graphs">
           <div class="xs tabls">
            <div class="bs-example4" data-example-id="contextual-table">
                <h2 type="" class=" btn-primary btn-lg btn-block insert" data-toggle="modal" ><center><h2 class=" fontlaos"><b>ລາຍໄດ້ປະຈຳເດືອນ</b></h2></center></button>
            </div>
          </div>
        </div>
      </div>




 <div class="table-reponsive">
        <table class="table table-bodered">
            <tr>
                <th width="10%"><h3 class="fontlaos"><b>ປິ - ເດືອນ</b></h3></th>
                <th width="15%"><h3></h3></th>
                <th width="15%"><h3 class="fontlaos"><b>ລາຍໄດ້ </b></h3></th>
            </tr>


        <?php while ($row_m = mysqli_fetch_array($rs_m)) {?>
            <tr class="b s">
              	<td colspan="2"><h4><?php echo $row_m['m']; ?></h4></td>
                  <td><h4><?php echo number_format($row_m['m_total']); ?> kip</h4></td>
            </tr>
                  <?php 
                    $m = $row_m['m'];
                    $sql_d = "SELECT sum(total) AS d_total ,date_format(date, '%d/%m/%Y ') AS m FROM bill WHERE DATE(date) BETWEEN '$m-01 00:00:00' AND '$m-31 23:59:59' GROUP BY m";
                    $rs_d = mysqli_query($con,$sql_d);
                    while ($row_d =  mysqli_fetch_array($rs_d)) {   
                  ?>
                    <tr class="s">
                        <td><?php echo $row_d['m']; ?></td>
                        <td><?php echo number_format($row_d['d_total']); ?> kip</td>
                        <td></td>
                    </tr>

                  <?php } ?>
        <?php } ?>

        </table>

    </div>

  
 
            <script type="text/javascript">
              $("#parent").addClass("active");
              $("#sale").addClass("active");
            </script>
            <script type="text/javascript">
    $(document).ready(function(){
      $("#search").keyup(function(){
        var val = $(this).val().toLowerCase();
        $(".s").hide();
        $(".s").each(function(){
          var text = $(this).text().toLowerCase();
          if (text.indexOf(val) != -1) {
            $(this).show();
          }
        })
      });
    });
  </script>
 <?php require'footer1.php'; ?>