<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>IUP Box</title>

<style type="text/css">
    
a.tooltip em {
    display:none;
}
a.tooltip:hover {
    border: 0; 
    position: relative; 
    z-index: 500; 
    text-decoration:none;
}
a.tooltip:hover em {
    font-style: normal; 
    display: block; 
    position: absolute; 
    top: 20px; 
    left: -10px; 
    padding: 5px; 
    color: #000; 
    border: 1px solid #bbb; 
    background: #ffc; 
    width:170px;
}
a.tooltip:hover em span {
    position: absolute; 
    top: -7px; 
    left: 15px;
    height: 7px; 
    width: 11px; 
    background: transparent url(infobulletop05.gif); 
    margin:0; 
    padding: 0; 
    border: 0;
}
    
#tabs ul {
padding: 0px;
margin: 0px;
margin-left: 10px;
list-style-type: none;
}

#tabs ul li {
display: inline-block;
clear: none;
height: 24px;
}

#tabs ul li a {
position: relative;
margin-top: 16px;
display: block;
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
clear:both;
overflow:hidden;
position: relative;
top: 10px;
height: 450px;
width: 750px;
overflow: hidden;
border: 3px solid #ccc;
}

p { padding-left: 15px; }
</style>

<script type="text/javascript">
function tab(tab) {
    document.getElementById('Ip').style.display = 'none';
    document.getElementById('DHCP').style.display = 'none';
    document.getElementById('DNS').style.display = 'none';
    document.getElementById('Filtrage').style.display = 'none';
    document.getElementById('Debit').style.display = 'none';
    
    document.getElementById('li_Ip').setAttribute("class", "");
    document.getElementById('li_DHCP').setAttribute("class", "");
    document.getElementById('li_DNS').setAttribute("class", "");
    document.getElementById('li_Filtrage').setAttribute("class", "");
    document.getElementById('li_Debit').setAttribute("class", "");
    
    document.getElementById(tab).style.display = 'block';
    document.getElementById('li_'+tab).setAttribute("class", "active");
}
</script>

</head>

<body>
        <center>
        <h1>IUP Box</h1>
        </center>
    
        <center>
            <div id="tabs">
            <ul>
            <li id="li_Ip" onclick="tab('Ip')">
                <a class="tooltip">IP (Tâche S1)<em><span></span>Tâche r&eacute;alis&eacute;e lors du premier semestre</em></a>
                </li>
            <li id="li_DHCP" onclick="tab('DHCP')"><a class="tooltip">DHCP (Exemple)<em><span></span>Exemple de contenu pour la configuration du serveur DHCP</em></a>
                </li>
            <li id="li_DNS" onclick="tab('DNS')"><a class="tooltip">Email<em><span></span>Configuration du serveur Email</em></a>
                </li>
            <li id="li_Filtrage" onclick="tab('Filtrage')"><a class="tooltip">Filtrage<em><span></span>Configuration des param&egrave;tres de filtrage</em></a></li>
                <li id="li_Debit" onclick="tab('Debit')"><a class="tooltip">D&eacute;bit<em><span></span>Calcul du d&eacute;bit de la connexion</em></a></li>
            </ul>
                <div id="Content_Area">

                    <div id="Ip">
                        <p align="left">
                            <ul align="left" style="list-style-type:disc">
                                <li><font size="5">Finaliser l’interface web du client</font></li>
                                    <ul><br>
                                        <li><font size="5"><i>&middot; Rendre accessible à tout public</i></font></li>
                                    </ul>
                                <br>
                                <li><font size="5">Créer deux profiles d’utilisateurs</font></li>
                                    <ul>
                                        <br>
                                        <li><font size="5"><i>&middot; D&eacute;butant  et Expert</i></font></li>
                                    </ul>   
                                <br>
                                <li><font size="5">Mettre en place une documentation pour les clients afin qu’ils comprennent l’utilité de chaque service proposé.</font></li>
                            </ul>
                        </p>
                    </div>

                    <div id="DHCP" style="display: none;">
                        <p align="justify">
                            <b>Dynamic Host Configuration Protocol</b><br><br>
Dynamic Host Configuration Protocol (DHCP) est un protocole réseau dont le rôle est d’assurer la configuration automatique des paramètres IP d’une station, notamment en lui affectant automatiquement une adresse IP et un masque de sous-réseau. DHCP peut aussi configurer l’adresse de la passerelle par défaut, des serveurs de noms DNS et des serveurs de noms NBNS (connus sous le nom de serveurs WINS sur les réseaux de la société Microsoft).
                        </p>
                        <p align="justify">
La conception initiale d’IP supposait la préconfiguration de chaque ordinateur connecté au réseau avec les paramètres TCP/IP adéquats : c’est l’adressage statique (nommée également IP fixe). Sur des réseaux de grandes dimensions ou étendues, où des modifications interviennent souvent, l’adressage statique engendre une lourde charge de maintenance et des risques d’erreurs. En outre, les adresses assignées ne peuvent être utilisées si l’ordinateur qui détient cette charge n’est pas en service : un cas typique où ceci pose problème est celui des fournisseurs d’accès à internet (FAI ou ISP en anglais), qui ont en général plus de clients que d’adresses IP à leur disposition, mais dont les clients ne sont jamais tous connectés en même temps.
                        </p>
                        <p align="justify">
DHCP apporte une solution à ces trois inconvénients :

seuls les ordinateurs en service utilisent une adresse de l’espace d’adressage ;
toute modification des paramètres (adresse de la passerelle, des serveurs de noms) est répercutée sur les stations lors du redémarrage ;
la modification de ces paramètres est centralisée sur les serveurs DHCP.
Le protocole a été présenté pour la première fois en octobre 1993 et est défini par la RFC 1531, modifiée et complétée par les RFC 1534, RFC 2131 et RFC 2132.

Ce protocole peut fonctionner avec IPv4 ; il fonctionne aussi avec IPv6 et il est alors appelé DHCPv6. Toutefois, en IPv6, les adresses peuvent être autoconfigurées sans DHCP.
                        </p>
                    </div>

                    <div id="DNS" style="display: none;">
                        <p align="justify">
                            <ul align="left" style="list-style-type:disc">
                                <li><font size="5">&middot; Mettre en place d’un serveur email</font></li><br><br>
                                <li><font size="5">&middot; Donner la possibilité aux clients de créer leurs propres adresses avec un mot de passe</font></li><br><br><br>
                                <li><font size="5">&middot; Permettre aux clients de récupérer leurs mots de passe dans le cas d'un oubli</font></li><br><br><br>
                                <li><font size="5">&middot; Permettre aux clients de créer des alias email</font></li>
                            </ul>
                            <img src="mail.jpg" />
                        </p>
                    </div>

                    <div id="Filtrage" style="display: none;">
                    
                        <p align="justify">
                            <ul align="left" style="list-style-type:disc">
                                <li><font size="5">&middot; Mettre en œuvre d’un Firewall</font></li><br><br>
                                <li><font size="5">&middot; Mettre en oeuvre un ensemble de règles de filtrage sous iptables</font></li><br><br>
                                <li><font size="5">&middot; Comprendre la syntaxe iptables</font></li><br><br>
                                <li><font size="5">&middot; Organiser l’ordre des règles</font></li><br><br>
                            </ul>
                            <br><br><br>
                            <img src="filtrage.png" />
                        </p>
                    </div>

                    <div id="Debit" style="display: none;">
                        <p align="justify">
                            <ul align="left" style="list-style-type:disc">
                                <li><font size="5">Créer un outil en php pour mesurer le débit de la ligne ADSL en utilisant :</font></li>
                                    <ul>
                                        <li><font size="5"><i>&middot; Ping</i></font></li><br>
                                        <li><font size="5"><i>&middot; FTP</i></font></li><br>
                                        <li><font size="5"><i>&middot; SSH</i></font></li>
                                    </ul>
                            </ul>
                        </p>
                        <p align="justify">
                            <center>
                                <img src="graphs.php" />
                                <br>
                                Graphiques réalis&eacute;s avec <a href="http://jpgraph.net" target="_blank">http://jpgraph.net</a>.
                            </center>
                        </p>
                    </div>
                </div>
            </div>
        </center>
        <br>
    <p align="right">Web pages realized by ®anonymous 2016</p>
</body>
</html>