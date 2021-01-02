<?php 

    require 'konek.php';
    $sql = "SELECT * FROM desa";
    $result = $conn->query($sql);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title> </title>
 </head>
 <style type="text/css">
  html, body {
     height:100%;
}
        .text-input-wrapper {
          border:1px solid;
          background-color:white;
          padding:1px 6px 1px 1px;
          display:inline-block;
        }
 
        .text-input-wrapper input {
          border:none;
          background:none;
          outline:none;
          padding:0 0;
          margin:0 0;
          font:inherit;
        }
 
        .text-input-wrapper span {
          cursor:pointer;
          color:blue;
          font-weight:bold;
          visibility:hidden;
        }
        .footer{
          width: 100%;
          background-color: #484848;
          color: #fff;
          text-align: right;
          bottom: 0px;
        }
        #container{
         min-height: 100%;
         position: relative;
        }
    </style>

 <body>
   <div id="container">
    <header style="background-color: #484848; color: white; padding: 20px; font-family: cursive;">Data Cepat Penduduk Desa Sungai Bawang
    <form  style="float: right; ">cari data
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="masukkan NIK">
    </form>
    </header>
        <table border="1px solid" id="myTable" style="border-style: none; width: 100%; text-align: center; margin-top: 20px; padding-bottom: 20px;"> 
                <tr bgcolor="#00FF66">
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                </tr>

                <?php 
                     while($row = $result->fetch_assoc()) {
   
                 ?>
                <tr>
                    
                    <td style="background-color: white">
                        <?php 
                        echo $row['nik']
                     ?> 
                     </td>

                     <td style="background-color: white">
                        <?php 
                        echo $row['nama']
                     ?> 
                     </td>

                     <td style="background-color: white">
                        <?php 
                        echo $row['jenis_kelamin']
                     ?> 
                     </td>

                     <td style="background-color: white">
                        <?php 
                        echo $row['alamat']
                     ?> 
                     </td>
                
                     <td style="border-style: none;">
                        <form action='data/delete.php' method="POST">
                        <input type="hidden" name="nik" value="<?php echo $row['nik']; ?>">
                        <button type="submit" name="submit" value="Delete" onclick="return confirm('Yakin Ingin Menghapus Data?');" style="background-color: red">
                            <img src="haps.png" width="50px">
                        </button>
                        </form>
                       
                        <form action='data/edit.php' method="POST">
                        <input type="hidden" name="nik" value="<?php echo $row['nik']; ?>">
                        <button type="submit" name="submit" value="Edit" style="background-color: lightgreen">
                          <img src="recycle.png" width="50px;">
                        </button>
                        </form>

                     </td>

                </tr>
                    <?php  
                }
                    ?>
        </table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>
    <div class="footer">
      <br>
      <img src="kuansing.png" style="border-radius: 0% 0% 40% 40%; width: 20px;">
      <span style="padding-right: 20px">PemDes Sungai Bawang</span>
      <p>Created by<a href="https://www.instagram.com/lauren_aji11" style="color: aqua; text-decoration: none; padding: 20px">Lauren_Aji</a></p>
    </div>
 </body>
</html>