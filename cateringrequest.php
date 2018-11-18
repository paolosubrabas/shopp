<?php include('include/admin/header.php');?>
    <section>
        <div class="container">
            <div class="row">
                <?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Catering Request</h2>
                        
          
                            <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
                    <table cellpadding="1" cellspacing="1" id="resultTable">
                        <thead>
                            <tr>
                                <th  style="border-left: 1px solid #C1DAD7"> ID </th>
                                <th> Name </th>
                                <th> Contact No.</th>
                                <th> Catering Title </th>
                                <th> Food Choices </th>
                                <th> No. of PAX </th>
                                <th> Date Needed </th>
                                <th> Time Needed </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            include('db.php');
                            $result = mysql_query("SELECT * FROM customized_catering ORDER BY cat_id DESC");
                            while($row = mysql_fetch_array($result))
                                {
                                    echo '<tr class="record">';
                                    echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['cat_id'].'</td>';
                                    
                                    echo '<td><div align="right">'.$row['name'].'</div></td>';
                                    echo '<td><div align="right">'.$row['contact'].'</div></td>';
                                    echo '<td><div align="right">'.$row['title'].'</div></td>';
                                    echo '<td><div align="right">'.$row['description'].'</div></td>';
                                    echo '<td><div align="right">'.$row['PAX'].'</div></td>';
                                    echo '<td><div align="right">'.$row['dateneeded'].'</div></td>';
                                    echo '<td><div align="right">'.$row['timeneeded'].'</div></td>';
                
                                    echo '<td> <a href="deliver.php?id='.$row['cat_id'].'"><div align="right">'.$row['status'].'</a></div></td>';
                                    echo '</tr>';
                                }
?> 
                        </tbody>
                    </table>
              </section>
<?php include('include/admin/footer.php'); ?>