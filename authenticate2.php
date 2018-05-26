<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Authenticate</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/3E543440-4EEE-1641-A3A9-1B44A4733E61/main.js" charset="UTF-8"></script><script language="JavaScript" type="text/javascript" src="https://kjur.github.io/jsrsasign/jsrsasign-all-min.js"></script>
<script language="JavaScript" type="text/javascript">
	
function doVerify() {

  var sMsg = "Loan sanction";
  var hSig = document.getElementById("sign").innerHTML;
  var pubKey = KEYUTIL.getKey(document.getElementById("pk").innerHTML);
  var isValid = pubKey.verify(sMsg, hSig);

  // display verification result
  if (isValid) {
    window.location.href ="swift_loan_tender.php";
  } else {
    document.getElementById("status").innerHTML="invalid";
  }

}

	</script>
<style>
body {
    background-color: rgb(166, 194, 122);
    padding: 2px;
    font-family: 'Raleway','Source Sans Pro', 'Arial';
}
label {
    display:block;
	font-size:27px;	
	float:left;
	margin-bottom:30px;
}
#username {
	
    padding:10px;
    width: 50%;
	float:right;
	margin-right:20px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}
p{
	margin-right:auto;
	margin-left:auto;
	font-size:27px;	
	text-align: center;
	font-family: 'Raleway','Source Sans Pro', 'Arial';

}
.in {
	clear:both;	
}
#button {
    margin: 2em 0;
    padding: 1em 4em;
    display:block;
	align-items: center;
    text-align: center;
	margin-left:auto;
	margin-right:auto;
	margin-top:100px;
    text-decoration: none;
	border-radius: 50px 50px;
	font-size:20px;
	
}

</style>
</head>
<body >

	<?php session_start();?>

	<p><b>Public key of User</b></p>
		<p id="pk"><?php  echo $_SESSION['public_key'] ;?></p>
		<p><b>Signature of User</b></p>
		<p id="sign"><?php  echo $_SESSION['sign'] ;?></p>
		<p id="status"></p>
	<button id="button" onclick="doVerify()">Authenticate</button>
</body>
</html>
		
		