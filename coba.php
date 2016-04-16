<html>
<head>
<script language="javascript" type="text/javascript">

function PrintMeSubmitMe()
{
window.print();
SubmitMe();
}

function SubmitMe()
{
document.MyForm.submit();
}
</script>
</head>
<body>
<form name="MyForm" action="somepage.asp" method="post">
<input type="button" value="Submit - No Print" onclick="SubmitMe()"><br />
<input type="button" value="Submit - And Print" onclick="PrintMeSubmitMe(this)"><br />
</form>
</body>
</html>