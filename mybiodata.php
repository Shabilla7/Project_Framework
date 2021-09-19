<!DOCTYPE html>
<html>
<head>
    <title>My Biodata</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
        body{
            background-image: url('R.PNG');
            background-size: 1700px auto;
        }
        .card{
                border-radius: 10px;
                background-color : #f6eabe;
				box-shadow: 0 2px 4px 2px;
				max-width: 550px;
                height: 850px;
				margin: auto;
				text-align: center;
				font-family : cursive;
                font-size : 17px;
			}
		.column{
				display: flex;
				margin: 5px;
				padding-right: 5px;
	    }
        h1{
            text-align : center;
            font-family : cursive;
        }
    </style>
</head>
    
<body>
    <?php
        $nama = "Salsabilla";
        $nim = 192520035;
        $alamat = "Desa Karanganom, Butuh, Purworejo";
        $email = "salsabillapsti@gmail.com";
        $minat = "Programming";
        
    ?>
     <br><h1>My Biodata</h1>
	<div class="card">          
        <br><img src="S.jpg" style="width: 320px">
		<p><b>======================</b></p>
        <p>Nama : <?php echo $nama; ?></p>
        <p>NIM : <?php echo $nim; ?></p>
        <p>Alamat : <?php echo $alamat; ?></p>
        <p>Email : <?php echo $email; ?></p>
        <p>Minat : <?php echo $minat; ?></p>        
</body>
</html>
