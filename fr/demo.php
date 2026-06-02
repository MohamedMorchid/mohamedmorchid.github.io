<?
$page= 'demo';
include 'header.php';
$pathVideo='../archives/PowerpointAssistantDemo.wmv';
?>
	<!-- content starts -->
	<div id="content-outer">
		<div id="content-wrapper" class="container_16">

		<!-- main -->
		<div id="main" class="grid_8">

			<!-- <h2>Demos and Tools</h2> -->

			<p>
				<a href="#PowerPointAssistant" style="color: #3366FF;">Le Powerpoint Assistant</a><br/>
			</p>

            <h4><b><a name="PowerPointAssistant" class="lienInterne">Le Powerpoint Assistant</a></b></h4>
			<p>
			Durant mon séjour de recherche à Microsoft Research Cambridge, j'ai travaillé sur le projet <a href="http://research.microsoft.com/apps/video/default.aspx?id=211308" target="_blank">PowerPoint Assistant</a>. L'objectif de ce projet est de proposer un assistant qui "lit" le contenu des slides d'une présentation en cours de saisie. Ainsi, l'assistant PowerPoint fournie du contenu informartif de qualité pour aider l'utilisateur à saisir rapidement sa présentation. Les méthodlogies employées couvrent plusieurs domaines : Traitement du langage naturel (Dbpedia, etc.), apprentissage automatuqe (espace de thèmes LDA, etc.), etc.
<br>

                <div class="center">
                    <video width="600" height="480" controls>
                        <source src="../demos/ppa.mp4" type="video/mp4">
                    </video>
            </div>
            
			</p>
            
            <p>
            Si votre navigateur ne support pas l'affichage de cette vidéo, celle-ci est également disponible sur le site officiel de <a href="http://research.microsoft.com/apps/video/default.aspx?id=211308" target="_blank">Microsoft</a>.
            </p>


			

<!-- main ends -->
<?
include 'footer.php';
?>
