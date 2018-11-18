<?php include('include/admin/header.php');?>
    <section>
        <div class="container">
            <div class="row">
                <?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Party Request</h2>
                        
          
                            <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
                    <table cellpadding="1" cellspacing="1" id="resultTable">
                        <thead>
                            <tr>
                                <th  style="border-left: 1px solid #C1DAD7"> ID </th>
                                <th> Name </th>
                                <th> Contact No.</th>
                                <th> Party Theme </th>
                                <th> Party Type </th>
                                <th> Plan </th>
                                <th> Venue </th>
                                <th> Date Needed </th>
                                <th> Time Needed </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            include('db.php');
                            $result = mysql_query("SELECT * FROM customized_party ORDER BY party_id DESC");
                            while($row = mysql_fetch_array($result))
                                {
                                    echo '<tr class="record">';
                                    echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['party_id'].'</td>';
                                    
                                    echo '<td><div align="right">'.$row['name'].'</div></td>';
                                    echo '<td><div align="right">'.$row['contact'].'</div></td>';
                                    echo '<td><div align="right">'.$row['theme'].'</div></td>';
                                    echo '<td><div align="right">'.$row['type'].'</div></td>';
                                    echo '<td><div align="right">'.$row['description'].'</div></td>';
                                    echo '<td><div align="right">'.$row['venue'].'</div></td>';
                                    echo '<td><div align="right">'.$row['dateneeded'].'</div></td>';
                                    echo '<td><div align="right">'.$row['timeneeded'].'</div></td>';
                
                                    echo '<td> <a href="deliver2.php?id='.$row['party_id'].'"><div align="right">'.$row['status'].'</a></div></td>';
                                    echo '</tr>';
                                }
?> 
                        </tbody>
                    </table>
              </section>
<?php include('include/admin/footer.php'); ?>