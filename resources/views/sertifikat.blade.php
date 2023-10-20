<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="icon" href="img/gurita.png">
	<title>Skillvull - Sertifikat</title>
</head>
<body>
	<div style="border: 10px solid #618597; width: 860px; padding: 10px;background-color: #618597;">
		<div style="width:800px; height:500px; padding:20px; text-align:center; border: 10px solid white;">
			<div style="width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #618597;background-color: white;">
				<span style="font-size:50px; font-weight:bold">Sertifikat Skillvull</span>
				<br><br>
				<span style="font-size:25px"><i>Ini adalah untuk menyatakan bahwa</i></span>
				<br><br>
				<span style="font-size:30px"><b>{{ auth()->user()->username }}</b></span><br/><br/>
				<span style="font-size:25px"><i>telah menyelesaikan materi</i></span> <br/><br/>
				<span style="font-size:30px">Skillvull</span> <br/><br/>
				<span style="font-size:20px">dengan peraihan nilai <b>{{ auth()->user()->soal->nilai }}</b></span> <br/><br/><br/><br/>
				<span style="font-size:25px"><i>Waktu menyelesaikan</i></span>
				<h2 style="font-weight: normal;-weight: none">{{ explode(' ',auth()->user()->soal->updated_at)[0] }}</h2>

			</div>
		</div>
	</div>

<script type="text/javascript">
	window.print();
</script>
</body>
</html>