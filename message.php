<?php include('include/admin/header.php');?>
    <section>
        <div class="container">
            <div class="row">
                <?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Clients Messages</h2>
                        
          
                            <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
                    <table cellpadding="1" cellspacing="1" id="resultTable">
                        <thead>
                            <tr>
                                <th  style="border-left: 1px solid #C1DAD7"> ID </th>
                                <th> Image</th>
                                <th> Name </th>
                                <th> Contact No.</th>
                                <th> Subject </th>
                                <th> Message </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            include('db.php');
                            $result = mysql_query("SELECT * FROM message ORDER BY message_id DESC");
                            while($row = mysql_fetch_array($result))
                                {
                                    echo '<tr class="record">';
                                    echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['message_id'].'</td>';
                                    echo '<td><a rel="facebox" href="magnifymessage.php?message_id='.$row['message_id'].'"><img src="reservation/img/products/'.$row['image'].'" width="80" height="50"></a></td>';
                                    echo '<td><div align="right">'.$row['name'].'</div></td>';
                                    echo '<td><div align="right">'.$row['contact'].'</div></td>';
                                    echo '<td><div align="right">'.$row['subject'].'</div></td>';
                                    echo '<td><div align="right">'.$row['message'].'</div></td>';
                                    echo '<td><div align="center"><a href="status.php?id='.$row['message_id'].'" " title="Click To Read">'.$row['status'].'</a></div></td>';
                                    echo '</tr>';
                                }
?> 
                        </tbody>
                    </table>
              </section>
<?php include('include/admin/footer.php'); ?>