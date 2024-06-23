<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="button" name="add" onclick="addtablerow()" value="Add Row">
	<table id="test">
		
	</table>
	<script type="text/javascript">
		function addtablerow()
		{
			var tb=document.getElementById("test");

			var tr=tb.insertRow();

			var cell=tr.insertCell();
			var cell1=tr.insertCell(1);

			cell.innerHTML="<input type=\"text\" value=\"myfirstcell\">";
			cell1.innerHTML="<input type=\"button\" value=\"Delete\"  onclick=\"deleterow(btn)\">";
		}

		function deleterow(btn)
		{
			var i=btn.parentNode.parentNode.rowIndex;

			document.getElementById("test")deleterow(i);
		}
	</script>

</body>
</html>