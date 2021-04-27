<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
	 <style type="text/css">
	 	body{
	 		background-color: grey;
	 	}
	 	h2{
	 		 font-size: 40px;
            font-family:fantasy;
            font-style: italic;
            -webkit-text-stroke: 1px black;
            color: white;
            text-shadow:
            3px 3px 0 #000,
            -1px -1px 0 #000,  
            1px -1px 0 #000,
            1px 1px 0 #000,
            1px 1px 0 #000; 
            border-style: solid;
            border-color: black;
            background-color: red;  
            padding: 30px 35px;
        	text-align:center;
        }
        .border{
        	font-family:fantasy;
            font-style: italic;
        	text-align:center;
        	border-style: solid;
            border-color: black;
            background-color: white;

        }  
	 </style>
</head>
<body>
	  <!-- form untuk mendapat input data -->
        <form method="POST" action="simpankontak.php">
            <table align="center"  >
	            <tr align="center">
	            	<td><h2>KONTAK</h2></td>
	            </tr>    
	            <tr>
		            <td>
		        <div class="border">    
		            <table cellspacing="10">
			            <tr>
			            	<td>NAMA</td>
			            	<td><input type="text" name="nama"></td>
			            </tr>
			            <tr>
			            	<td>JENIS KELAMIN</td>
			            	<td>
			                <input type="radio" name="jenis_kelamin" value="L">Laki laki
			                <input type="radio" name="jenis_kelamin" value="P">Perempuan
			                </td>
			            </tr> 
			            <tr>
			                <td>EMAIL</td>
			                <td><input type="text" name="email"></td>
			            </tr>
			            <tr>
			                <td>ALAMAT</td><td><input type="text" name="alamat"></td>
			            </tr>
			            <tr>
			                <td>KOTA</td>
			                <td><input type="text" name="kota"></td>
			            </tr>
			            <tr>
			                <td>PESAN</td>
			                <td><input type="text" name="pesan"></td>
			            </tr>
			            <tr>
			                <td colspan="2"><button type="submit" value="simpan">SIMPAN
			            </tr>
	           		</table>
	        	</div>
	            	</td>
            	</tr>
            </table>
        </form>
</body>
</html>