<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #3DA7EE;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #3DA7EE;
  color: #fff;




}
</style>
<style> 
input[type=button], input[type=submit], input[type=reset], 
button[type=submit] {
  background-color: #3DA7EE;
  border: none;
  color: white;
  padding: 10px 45px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<br>
<br>
<br>
<br>
<br>
<center><h2>Import Excel File into MySQLI Database using PHP <br> 
            By fordev22.com</h2></center>
    
    <div class="outer-container">
        <form action="f_save.php" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div><center>
                <label>Choose Excel
                    File</label> 

                    
                    <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                    


                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
                </center>
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
$conn = mysqli_connect("localhost","root","","ex_c");
    $sqlSelect = "SELECT * FROM tbl_info";
    $result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
   <center>  
    <table >
        
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>other</th>

            </tr>
        
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        
        <tr>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['description']; ?></td>
            <td><?php  echo $row['other']; ?></td>
        </tr>
<?php
    }
?>
        
    </table></center>   
<?php 
} 
?>