<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>

<style type="text/css">
#tabs ul {
padding: 0px;
margin: 0px;
margin-left: 10px;
list-style-type: none;
}

#tabs ul li {
display: inline-block;
clear: none;
#float: left;
height: 24px;
}

#tabs ul li a {
position: relative;
margin-top: 16px;
display: block;
margin-left: 6px;
line-height: 24px;
padding-left: 10px;
background: #f6f6f6;
z-index: 9999;
border: 1px solid #ccc;
border-bottom: 1px;
-moz-border-radius-topleft: 4px;
border-top-left-radius: 4px;
-moz-border-radius-topright: 4px;
border-top-right-radius: 4px;
width: 130px;
color: #000000;
text-decoration: none;
font-weight: bold;
}

#tabs ul li a:hover {
text-decoration: underline;
}

#tabs #Content_Area {
padding: 0 15px;
clear:both;
overflow:hidden;
line-height:19px;
position: relative;
top: 20px;
z-index: 5;
height: 150px;
overflow: hidden;
}

p { padding-left: 15px; }
</style>

<script type="text/javascript">
function tab(tab) {
    document.getElementById('Ip').style.display = 'none';
    document.getElementById('DHCP').style.display = 'none';
    document.getElementById('DNS').style.display = 'none';
    document.getElementById('Filtrage').style.display = 'none';
    
    document.getElementById('li_Ip').setAttribute("class", "");
    document.getElementById('li_DHCP').setAttribute("class", "");
    document.getElementById('li_DNS').setAttribute("class", "");
    document.getElementById('li_Filtrage').setAttribute("class", "");
    
    document.getElementById(tab).style.display = 'block';
    document.getElementById('li_'+tab).setAttribute("class", "active");
}
</script>

</head>

<body>

    <center>
        <div id="tabs">
        <ul>
        <li id="li_Ip" onclick="tab('Ip')"><a>IP</a></li>
        <li id="li_DHCP" onclick="tab('DHCP')"><a>DHCP</a></li>
        <li id="li_DNS" onclick="tab('DNS')"><a>DNS</a></li>
        <li id="li_Filtrage" onclick="tab('Filtrage')"><a>Filtrage</a></li>
        </ul>
            <div id="Content_Area">

                <div id="Ip">
                <p>This is the text for Ip</p>
                </div>

                <div id="DHCP" style="display: none;">
                <p>This is the text for DHCP.</p>
                </div>

                <div id="DNS" style="display: none;">
                <p>This is the text for DNS.</p>
                </div>

                <div id="Filtrage" style="display: none;">
                <p>This is the text for Filtrage.</p>
                </div>

            </div>
        </div>
        </center>
</body>
</html>