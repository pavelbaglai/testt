<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251;">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />


<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />


<script type="text/javascript">
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("test").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { 
        xmlhttp = new XMLHttpRequest();
    } else { 
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) 
        {
            if (xmlhttp.status == 200) 
            {
                
                document.getElementById("test").innerHTML = xmlhttp.responseText; 
            } else 
            {
                
                alert('Невозможно подключится к базе'); 
            }
        } else 
        {
            
            document.getElementById("test").innerHTML = 'Загрузка...';
        }
    }
    
    xmlhttp.open("GET","getuserotkuda.php?q="+encodeURIComponent(str),true);

    xmlhttp.send();
}
</script>





<table>
<tr><td>

<div style="position:absolute; z-index:5; top:90; left:40">
      <h2>Откуда</h2><br>
<form>
<input class='search' type="text" maxlength='20' onblur="if(this.value==''){this.value='Откуда';}" onclick="if(this.value=='Откуда'){this.value='';}" value="Откуда" onkeyup="showHint(this.value)" >
</form>
</div>
      <div style="position:absolute; z-index:1; top:144; left:40" id="test"></div>



</td></tr>

</table>



</body>
</html>