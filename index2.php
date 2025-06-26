<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function getDetails()
        {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","http://localhost/json/getDetails.php",false);
            xmlhttp.send();
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var result = xmlhttp.responseText;
            //to print the json file directly-alert(result);
            // to print the json file directly-document.getElementById("show").innerHTML = result;
            var o=JSON.parse(result);
           // check the length of json items- alert(o.length);
           var data="";
           for(var i=0;i<o.length;i++)
            {
                data+='<table>\
                <tr><th>model</th><td>'+o[i]["model"]+'</td><td rowspan=8><img src='+o[i]["image"]+' class=img></td></tr>\
                <tr><th>brand</th><td>'+o[i]["brandl"]+'</td></tr>\
                <tr><th>mrp</th><td>'+o[i]["mrp"]+'</td></tr>\
                <tr><th>price</th><td>'+o[i]["price"]+'</td></tr>\
                <tr><th>ram</th><td>'+o[i]["ram"]+'</td></tr>\
                <tr><th>storage</th><td>'+o[i]["storage"]+'</td></tr>\
                <tr><th>camera</th><td>'+o[i]["camera"]+'</td></tr>\
                <tr><th>isAvailable</th><td>'+o[i]["isAvailable"]+'</td></tr>\
                </table>\
                ';
            }
            document.getElementById("show").innerHTML = data;
        } // normal -alert("test");
        }
    </script>
</head>
<body onload="getDetails();">
    <h3>mobile gallery by json php mysql</h3>
    <div id="show">
</body>
</html>