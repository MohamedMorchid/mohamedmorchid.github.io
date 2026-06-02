<?
$page= 'publications';
include 'header.php';
?>
	<!-- content starts -->
	<div id="content-outer">
		<div id="content-wrapper" class="container_16">

		<!-- main -->
		<div id="main" class="grid_8">

			<!-- <h2>Publications</h2> -->

			<p>
				<a href="#journal" style="color: #3366FF;">Journaux Internationaux  (<? echo getNumberOfPapers("internationalJournal") ?>)</a><br/>
				<a href="#book" style="color: #3366FF;">Chapitres de Livre (<? echo getNumberOfPapers("bookChapter") ?>)</a><br/>
				<a href="#international" style="color: #3366FF;">Conf&eacute;rences Internationales (<? echo getNumberOfPapers("internationalConference") ?>)</a><br/>
				<a href="#national" style="color: #3366FF;">Conf&eacute;rences Nationales (<? echo getNumberOfPapers("frenchConference") ?>)</a><br/>
				<a href="#internationalWorking" style="color: #3366FF;">Conf&eacute;rences de Campagnes (<? echo getNumberOfPapers("workingNotes") ?>)</a><br/>
                <a href="#presentations" style="color: #3366FF;">Presentations et Invitations (<? echo getNumberOfPapers("presentations_talks") ?>)</a><br/>
	 			<a href="#thesis" style="color: #3366FF;">Th&egrave;se de doctorat et HDR (<? echo getNumberOfPapers("nationalThesis") ?>)</a><br/>
				<!-- <a href="publications_per_year.php" style="color: #3366FF;">By Year</a><br/> -->
			</p>
<!--
			<p>
			<i>Co authors:</i> <a href="http://lia.univ-avignon.fr/fileadmin/documents/Users/Intranet/chercheurs/linares/index.html" target="_blank"><font color="000000">Georges Linar&egrave;s</font></a> (<? echo getNumberOfPapers("Georges Linar&egrave;s") -2?>), <a href="http://lia.univ-avignon.fr/chercheurs/dufour" target="_blank"><font color="000000">Richard Dufour</font></a> (<? echo getNumberOfPapers("Richard Dufour") -1 ?>), <a href="http://www.informatik.uni-trier.de/~ley/pers/hd/b/Bouallegue:Mohamed.html" target="_blank"><font color="000000">Mohamed Bouallegue</font></a> (<? echo getNumberOfPapers("Mohamed Bouallegue") ?>), <a href="https://www.researchgate.net/profile/Renato_De_Mori" target="_blank"><font color="000000">Renato De Mori</font></a> (<? echo getNumberOfPapers("Renato De Mori") ?>). 

<a href="http://lia.univ-avignon.fr/personnel/matrouf-driss"><font color="000000">Driss Matrouf</font></a> (<? echo getNumberOfPapers("Driss Matrouf") ?>), <a href="http://lia.univ-avignon.fr/user/48"><font color="000000">Marc El-B&egrave;ze</font></a> (<? echo getNumberOfPapers("Marc El") ?>), <a href="http://lia.univ-avignon.fr/chercheurs/torres/"><font color="000000">Juan-Manuel Torres-Moreno</font></a> (<? echo getNumberOfPapers("Juan-Manuel Torres-Moreno") ?>).
			</p>-->
			
			<!-- INTERNATIONALE JOURNAL ... -->

			<h4><b><a name="journal" class="lienInterne">Journaux Internationaux</a></b></h4><!--  ( <? echo getNumberOfPapers("internationalJournal") ?> )</a></b></h4> -->

            <!-- 2020 -->

		<p><strong>2021</strong></p>

            <ul class="publication">
                <li class="jl">
                        <p><internationalJournal/>
                            <strong><a href="https://doi.org/10.1007/s10772-020-09708-9" target="_blank"><span TITLE="Abstract: Recurrent neural networks have encountered a wide success in different domains due to their high capability to code short- and long-term dependencies between basic features of a sequence. Different RNN units have been proposed to well manage the term dependencies with an efficient algorithm that requires few basic operations to reduce the processing time needed to learn the model. Among these units, the Internal Memory Gate (IMG) have produce efficient accuracies faster than LSTM and GRU during a SLU task. This paper presents the Bidirectional Internal Memory Gate Recurrent Neural Network (BIMG) that codes short- and long-term dependencies in forward and backward directions. Indeed, the BIMG is composed with IMG cells made of an unique gate managing short- and long-term dependencies by combining the advantages of the LSTM, GRU (short- and long-term dependencies) and the Leaky Unit (LU) (fast learning). The effectiveness and the robustness of the proposed BIMG-RNN is evaluated during a theme identification task of telephone conversations. The experiments show that BIMG reaches better accuracies than BGRU and BLSTM with a gain of $1.1$ and a gain of $2.1$ with IMG model. Moreover, BIMG requires less processing time than BGRU and BLSTM with a gain of $12\%$ and $35\%$ respectively.">Bidirectional Internal Memory Gate Recurrent Neural Networks for Spoken Language Understanding</span></a></strong><br />

                            <b><font color="000000">Mohamed Morchid</font></b><br />
                            Publi&eacute; dans : <i><a href="https://www.springer.com/journal/10772" target="_blank"><font color="4C9900"><b>International Journal of Speech Technology</b></font></a></i>
                            <br/>Editions : Springer - DOI : <a href="https://doi.org/10.1007/s10772-020-09708-9" target="_blank">10.1007/s10772-020-09708-9</a>
                            <br/><i>Impact factor: <b>1.220</b></i>
                        </p>
                </li>
            </ul>

        <p><strong>2020</strong></p>
            <ul class="publication">
                <li class="jl">
                        <p><internationalJournal/>
                            <strong><a href="https://doi.org/10.1109/TASLP.2019.2950596" target="_blank"><span TITLE="Abstract: Machine learning (ML) and deep learning with deep neural networks (DNN), have drastically improved the performances of modern systems on numerous spoken language under- standing (SLU) related tasks. Since most of current researches focus on new neural architectures to enhance the performances in realistic conditions, few recent works investigated the use of different algebras with neural networks (NN), to better represent the nature of the data being processed. To this extent, quaternion-valued neural networks (QNN) have shown better performances, and an important reduction of the number of neural parameters compared to traditional real-valued neural networks, when deal- ing with multidimensional signal. Nonetheless, the use of QNNs is strictly limited to quaternion input or output features. This paper introduces a new unsupervised method based on a hybrid auto-encoder (AE) called real-to-quaternion auto-encoder (R2H), to extract a quaternion-valued input signal from any real-valued data, to be processed by QNNs. The experiments performed to identify the most related theme of a given telephone conversation from a customer care service (CCS), demonstrate that the R2H approach outperforms all the previously established models, either real- or quaternion-valued ones, in term of accuracy and with up to four times fewer neural parameters.">Real to H-space Autoencoders for Theme Identification in Telephone Conversations</span></a></strong><br />
                            Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b>, Xavier Bost, Georges Linar&egrave;s et Renato De Mori<br />
                            Publi&eacute; dans : <i><a href="http://www.signalprocessingsociety.org/publications/periodicals/taslp/" target="_blank"><font color="4C9900"><b>IEEE/ACM Transactions on Audio, Speech, and Language Processing</b></font></a></i>
                            <br/>Editions : IEEE - DOI : <a href="https://doi.org/10.1109/TASLP.2019.2950596" target="_blank">10.1109/TASLP.2019.2950596</a> 
                            <br/><i>Impact factor: <b>3.531</b></i>
                        </p>
                </li>
                 <li class="jl">
                        <p><internationalJournal/>
                            <strong><a href="https://link.springer.com/epdf/10.1007/s10462-019-09752-1?author_access_token=JW4ayib6BMkqI3I5rL--hve4RwlQNchNByi7wbcMAY5Ze2zR7pN_LRA0JTaJ4LqvwcoaEr0IJa402mYX4WXJpxSdFYn0razpDddIgVxT3BJ2_Cd8BHktDfkXA2-CRVoDlS435UmMEfom3PABQ0EZkg%3D%3D" target="_blank"><span TITLE="Abstract: Quaternion neural networks have recently received an increasing interest due to noticeable improvements over real-valued neural networks on real world tasks such as image, speech and signal processing. The extension of quaternion numbers to neural architectures reached state-of-the-art performances with a reduction of the number of neural parameters. This survey provides a review of past and recent research on quaternion neural networks and their applications in different domains. The paper details methods, algorithms and applications for each quaternion-valued neural networks proposed.">A Survey of Quaternion Neural Networks</span></a></strong><br />

                            Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
                            Publi&eacute; dans : <i><a href="https://link.springer.com/journal/10462" target="_blank"><font color="4C9900"><b>Artificial Intelligence Review</b></font></a></i>
                            <br/>Editions : Springer - DOI : <a href="https://doi.org/10.1007/s10462-019-09752-1" target="_blank">10.1007/s10462-019-09752-1</a>
                            <br/><i>Impact factor: <b>5.095</b></i>
                        </p>
                </li>

            </ul>
    
            <!-- 2019 -->

			<p><strong>2019</strong></p>

            <ul class="publication">

                <li class="jl">
                        <p><internationalJournal/>
                            <strong><a href="https://link.springer.com/epdf/10.1007/s11265-018-1388-1?author_access_token=NdDMZtT9cOiy92tOFciz7ve4RwlQNchNByi7wbcMAY5qL4OL1c1fj7AmcOoDN7ykXNRyEMM_aT28HL1AyRTFpWKmsQzrBx2GvShxlUNVwf-8yQDi4iGEdM8htk2tjDDXbXIqwSH3eU0fe2rkWj9BHg%3D%3D" target="_blank"><span TITLE="Abstract: Natural Language Processing (NLP) applications have difficulties in dealing with automatically transcribed spokendocuments recorded in noisy conditions, due to high Word Error Rates (WER), or in dealing with textual documents fromthe Internet, such as forums or micro-blogs, due to misspelled or truncated words, bad grammatical form. . . To improvethe robustness against document errors, hitherto-proposed methods map these noisy documents in a latent space such asLatent Dirichlet Allocation (LDA), supervised LDA and author-topic (AT) models. In comparison to LDA, the AT modelconsiders not only the document content (words), but also the class related to the document. In addition to these high-levelrepresentation models, an original compact representation, called c-vector, has recently been introduced avoid the trickychoice of the number of latent topics in these topic-based representations. The main drawback in the c-vector space buildingprocess is the number of sub-tasks required. Recently, we proposed both improving the performance of this c-vector compactrepresentation of spoken documents and reducing the number of needed sub-tasks, using an original framework in a robustlow dimensional space of features from a set of AT models called “Latent Topic-based Subspace” (LTS). This paper goesfurther by comparing the original LTS-based representation with the c-vector technique as well as with the state-of-the-artcompression approach based on neural networks Encoder-Decoder (Autoencoder) and classification methods called deepneural networks (DNN) and long short-term memory (LSTM), on two classification tasks using noisy documents taking theform of speech conversations but also with textual documents from the 20-Newsgroups corpus. Results show that the originalLTS representation outperforms the best previous compact representations with a substantial gain of more than 2.1 and 3.3points in terms of correctly labeled documents compared to c-vector and Autoencoder neural networks respectively. Anoptimization algorithm of the scoring model parameters is then proposed to improve both the robustness and the performanceof the proposed LTS-based approach. Finally, an automatic clustering approach based on the radial proximity betweendocuments classes is introduced and shows promising performances">Latent Topic-based Subspace for Natural Language Processing</span></a></strong><br />

                            <b><font color="000000">Mohamed Morchid</font></b>, Pierre-Michel Bousquet, Waad Ben Kheder et Killian Janod<br />
                            Publi&eacute; dans : <i><a href="https://link.springer.com/journal/11265" target="_blank"><font color="4C9900"><b>Journal of Signal Processing Systems</b></font></a></i>
                            <br/>Editions : Springer - DOI : <a href="https://doi.org/10.1007/s11265-018-1388-1" target="_blank">10.1007/s11265-018-1388-1</a> 
                            <br/><i>Impact factor: <b>1.088</b></i>
                        </p>
            </li>
    
            </ul>
            <!-- 2018 -->

			<p><strong>2018</strong></p>

<ul class="publication">
<li class="jl">
			<p><internationalJournal/>
				<strong><a href="https://doi.org/10.1016/j.neucom.2018.05.081" target="_blank"><span TITLE="Abstract: Recurrent Neural Networks (RNN) receive an important interest from Artificial Intelligence researches (AI) this last decade due to their high capability to learn complex internal structures to expose relevant information. However, RNNs fail to reveal long-term dependencies and new RNN with gates have been proposed to address this drawback such as Long Short-Term Memory (LSTM). This RNN-based model requires 4 gates to learn both short and long-term dependencies for a given sequence of basic elements. Recently, a new family of RNN called “Gated Recurrent Unit” has been introduced. The GRU contains few gates (reset and update gates) but is based on gates grouping without taking into account the latent relations between short and long-term dependencies. The GRU term dependencies management through hidden units is therefore similar for all hidden neurons. Moreover, the learning of gated RNNs requires a large amount of data and, despite the advent of GPU cards that allow the model to be learned quicker, the processing time is quite costly. This paper proposes a new RNN called “Parsimonious Memory Unit” (PMU) based on the strong assumption that short and long-term dependencies are related and that the role of each hidden neuron has to be different to better handle term dependencies. Experiments conduced on both a small (short-term) spoken dialogues data set from the DECODA project, a large (long-term) textual document corpus from the 20-Newsgroups and a language modeling task, show that the proposed PMU-RNN reaches similar, even better performances (efficiency) with less processing time (improve portability) with a gain of 50%. Moreover, the experiments on the gates’ activity show that the proposed PMU manages better term dependencies than the GRU-RNN model.">Parsimonious Memory Unit for Recurrent Neural Networks with Application to Natural Language Processing</span></a></strong><br />

				<b><font color="000000">Mohamed Morchid</font></b><br />
				Publi&eacute; dans : <i><a href="https://www.journals.elsevier.com/neurocomputing" target="_blank"><font color="4C9900"><b>Neurocomputing</b></font></a></i>
                <br/>Editions : Elsevier - DOI : <a href="https://doi.org/10.1016/j.neucom.2018.05.081" target="_blank">10.1016/j.neucom.2018.05.081</a>
				<br/><i>Impact factor: <b>4.072</b></i>
			</4.072
</li>
    
</ul>
            
			
			<!-- 2017 -->

			<p><strong>2017</strong></p>

<ul class="publication">
<li class="jl">
			<p><internationalJournal/>
				<strong><a href="https://doi.org/10.1109/TASLP.2017.2718843" target="_blank"><span TITLE="Abstract: The automatic transcription process of spoken document results in several word errors, especially when very noisy conditions are encountered. Document representations based on neural embedding frameworks have recently shown significant improvements in different Spoken and Natural Language Understanding tasks such as denoising and filtering. Nonetheless, these methods mainly need clean representations, failing to properly remove noise contained in noisy representations. This paper proposes to study the impact of residual noise contained into automatic transcripts of spoken dialogues in highly abstract spaces from deep neural networks. The paper makes the assumption that the noise learned from "clean" manual transcripts of spoken documents moves down dramatically the performance of theme identification systems in noisy conditions. The proposed deep neural network takes, as input and output, highly imperfect transcripts from spoken dialogues to improve the robustness of the document representation in a noisy environment. Results obtained on the DECODA theme classification task of dialogues reach an accuracy of  82% with a significant gain of about 5%.">Denoised Bottleneck Features from Deep Autoencoders for Telephone Conversation Analysis</span></a></strong><br />

				Killian Janod, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Renato De Mori<br />
				Publi&eacute; dans : <i><a href="http://www.signalprocessingsociety.org/publications/periodicals/taslp/" target="_blank"><font color="4C9900"><b>IEEE/ACM Transactions on Audio, Speech, and Language Processing</b></font></a></i>
                <br/>Editions : IEEE - DOI : <a href="https://doi.org/10.1109/TASLP.2017.2718843" target="_blank">10.1109/TASLP.2017.2718843</a> 
				<br/><i>Impact factor: <b>3.531</b></i>
			</p>
</li>
</ul>
			<!-- 2016 -->

			<p><strong>2016</strong></p>

<ul class="publication">
<li class="jl">
			<p><internationalJournal/>
				<strong><a href="https://doi.org/10.1016/j.csl.2015.12.001" target="_blank"><span TITLE="Abstract: A review is proposed of the impact of word representations and classification methods in the task of theme identification of telephone conversation services having highly imperfect automatic transcriptions. We firstly compare two word-based representations using the classical Term Frequency-Inverse Document Frequency with Gini purity criteria (TF-IDF-Gini) method and the latent Dirichlet allocation (LDA) approach.
We then introduce a classification method that takes advantage of the LDA topic space representation, highlighted as the best word representation.
To do so, two assumptions about topic representation led us to choose a Gaussian Process (GP) based method. Its performance is compared with a classical Support Vector Machine (SVM) classification method. Experiments showed that the GP approach is a better solution to deal with the multiple theme complexity of a dialogue, no matter the conditions studied (manual or automatic transcriptions). 
In order to better understand results obtained using different word representation methods and classification approaches, we then discuss the impact of discriminative and non-discriminative words extracted by both word representations methods in terms of transcription accuracy. Finally, we propose a novel study that evaluates the impact of the Word Error Rate (WER) in the LDA topic space learning process as well as during the theme identification task. This original qualitative study points out that selecting a small subset of words having the lowest WER (instead of using all the words) allows the system to better classify automatic transcriptions with an absolute gain of 0.9 point, in comparison to the best performance achieved on this dialogue classification task (precision of 83.3%)">Impact of Word Error Rate on Theme Identification Task of Highly Imperfect Human-human Conversations</span></a></strong><br />

				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				Publi&eacute; dans : <i><a href="http://www.journals.elsevier.com/computer-speech-and-language/" target="_blank"><font color="4C9900"><b>Computer Speech and Language</b></font></a></i>
                <br/>Editions : Elsevier - DOI : <a href="https://doi.org/10.1016/j.csl.2015.12.001" target="_blank">10.1016/j.csl.2015.12.001</a>
				<br/><i>Impact factor: <b>1.753</b></i>
			</p>
</li>

<li class="jl">
			<p><internationalJournal/>
				<strong><a href="../articles/ijcla2016resume_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The number of documents available into Internet moves each day up. For this reason, processing this amount of information effectively and expressibly becomes a major concern for companies and scientists. Methods that represent a textual document by a topic representation are widely used in Information Retrieval (IR) to process big data such as Wikipedia ../articles.
One of the main difficulty in using topic model on huge data collection is related to the material ressources (CPU time and memory) required for model estimate. To deal with this issue, we propose to build topic spaces from summarized documents. In this paper, we present a study of topic space representation in the context of big data. The topic space representation behavior is analyzed on different languages. Experiments show that topic spaces estimated from summaries are as relevant as those estimated from the complete documents. The real advantage of such an approach is the processing time gain: we showed that the processing time can be drastically reduced using summarized documents (more than 60\% in general). This study finally points out the differences between thematic representations of documents depending on the targeted languages such as English or latin languages.">Automatic Summarization Approaches to Speed up Topic Model Learning Process</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Juan-Manuel Torres-Moreno, Richard Dufour, Javier Ramirez-Rodriguez et Georges Linar&egrave;s<br />
				Publi&eacute; dans : <i><a href="http://www.ijcla.bahripublications.com" target="_blank"><font color="4C9900"><b>International Journal of Computational Linguistics and Applications</b></font></a></i>
				<br/>Editions : Bahari
			</p>
</li>
</ul>
			
			<!-- 2015 -->

			<p><strong>2015</strong></p>

<ul class="publication">
<li class="jl">
			<p><internationalJournal/>
				<strong><a href="https://doi.org/10.1109/TASLP.2015.2431854" target="_blank"><span TITLE="Abstract: Mapping text documents in an LDA-based topic-space is a classical way to extract high-level representation of text documents. Unfortunately, LDA is highly sensitive to hyper-parameters related to the number of classes, or word and topic distribution, and there is no systematic way to pre-estimate optimal configurations. Moreover, various hyper-parameter configurations offer complementary views on the document.  

In this paper, we propose a method based on a two-step process that, first, expands the representation space by using a set of topic spaces and, second, compacts the representation space by removing poorly relevant dimensions. These two steps are based respectively on multi-view LDA-based representation spaces and factor-analysis models.
This model provides a view-independent representation of documents while extracting complementary information from a massive multi-view representation.

Experiments are conducted on the DECODA conversation corpus and the Reuters-21578 textual dataset. Results show the efficiency of the proposed multi-view compact representation paradigm. The proposed categorization system reaches an accuracy of 86.5% with automatic transcriptions of conversations from DECODA corpus and a Macro-F1 of 80% during a classification task of the well-known Reuters-21578 corpus, with a significant gain compared to the baseline (best single topic space configuration), as well as methods and document representations previously studied.">Compact Multiview Representation of Documents based on the Total Variability Space</span></a></strong><br />

				<b><font color="000000">Mohamed Morchid</font></b>, Mohamed Bouallegue, Richard Dufour, Georges Linar&egrave;s, Driss Matrouf et Renato De Mori<br />
				Publi&eacute; dans : <i><a href="http://www.signalprocessingsociety.org/publications/periodicals/taslp/" target="_blank"><font color="4C9900"><b>IEEE/ACM Transactions on Audio, Speech, and Language Processing</b></font></a></i>
                <br/>Editions : IEEE - DOI : <a href="https://doi.org/10.1109/TASLP.2015.2431854" target="_blank">10.1109/TASLP.2015.2431854</a> 
				<br/><i>Impact factor: <b>3.531</b></i>
			</p>
</li>
</ul>

			<!-- 2014 -->

			<p><strong>2014</strong></p>

<ul class="publication">
<li class="jl">
			<p>
				<internationalJournal/>
				<strong><a href="https://reader.elsevier.com/reader/sd/pii/S0167865514001767?token=C1888964E9BADD2700D9F1C294551462E79129DEC99B6D2C346AA288C3A2AD27E611B73C8BD4388DB13B92BCCB7D3CE8" target="_blank"><span TITLE="Abstract: Social Networks become a major actor in massive information propagation. In the context of the Twitter platform, its popularity is due in part to the capability of relaying messages (i.e. tweets) posted by users. This particular mechanism, called retweet, allows users to massively share tweets they consider as potentially interesting for others. In this paper, we propose to study the behavior of tweets that have been massively retweeted in a short period of time. We first analyze specific tweet features through a Principal Component Analysis (PCA) to better understand the behavior of highly forwarded tweets as opposed to those retweeted only a few times. Finally, we propose to automatically detect the massively retweeted messages. The qualitative study is used to select the features allowing the best classification performance. We show that the selection of only the most correlated features, leads to the best classification accuracy (F-measure of 65.7%), with a gain of about 2.4 points in comparison to the use of the complete set of features.">Feature Selection using Principal Component Analysis for Massive Retweet Detection</span></a></strong><br />

				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Pierre-Michel Bousquet, Georges Linar&egrave;s et Juan-Manuel Torres-Moreno<br />
				Publi&eacute; dans : <i><a href="http://www.journals.elsevier.com/pattern-recognition-letters/" target="_blank"><font color="4C9900"><b>Pattern Recognition Letters</b></font></a></i>
                <br/>Editions : Elsevier - DOI : <a href="https://doi.org/10.1016/j.patrec.2014.05.020" target="_blank">10.1016/j.patrec.2014.05.020</a>
				<br/><i>Impact factor: <b>1.586</b></i>
			</p><br/>
</li>
</ul>

			<!-- BOOK CHAPTERS ... -->

			<h4><b><a name="book" class="lienInterne">Chapitres de Livre</a></b></h4><!--  ( <? echo getNumberOfPapers("bookChapter") ?> )</a></b></h4> -->

			
			<!-- 2015 -->

			<p><strong>2015</strong></p>

<ul class="publication">
<li class="books">
			<p><bookChapter/>
				<strong><a href="https://doi.org/10.1007/978-3-319-19291-8_21" target="_blank"><span TITLE="Abstract: The paper describes a research about the possibility of integrating different types of word and semantic features for automatically identifying themes of real-life telephone conversations in a customer care service. Features are all the words of the application vocabulary, the probabilities obtained with Latent Dirichelet Allocation (LDA) of selected discriminative words and semantic features obtained with a limited human supervision of words and patterns expressing entities and relations of the application ontology. A Deep Neural Network (DNN) is proposed for integrating these features. Experimental results on manual and automatic conversation transcriptions are presented showing the effective contribution of the integration. The results show how to automatically select a large subset of the test corpus with high precision and recall, making it possible to automatically obtain theme mention proportions in different time periods.">Integration of Word and Semantic Features for Theme Identification in Telephone Conversations</span></a></strong><br />
				Yannick Est&egrave;ve, Mohamed Bouallegue, Carole Lailler, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s, Driss Matrouf et Renato De Mori<br />
				<i><a href="http://link.springer.com/book/10.1007/978-3-319-19291-8" target="_blank"><font color="4C9900"><b>Natural Language Dialog Systems and Intelligent Assistants</b></font></a></i>
<br/>Geunbae Lee, G., Kook Kim, H., Jeong, M., Kim, J.-H. (Eds.)
                <br/>Editions Springer - DOI : <a href="https://doi.org/10.1007/978-3-319-19291-8_21" target="_blank">10.1007/978-3-319-19291-8_21</a>
			</p>
</li>
</ul>


			<!-- INTERNATIONALE CONFERENCES ... -->

			<br>
			<h4><b><a name="international" class="lienInterne">Conf&eacute;rences Internationales</a></b></h4><!--  ( <? echo getNumberOfPapers("internationalConference") ?> )</a></b></h4> -->

        

        <!-- 2025 INTER -->

		<p><strong>2025</strong></p>

		<ul class="publication"> 
            
			<li class="gr">
				<p><internationalConference/>
				<strong><a href="../articles/ictai2025_raf_nicolas_andre.pdf" target="_blank"><span TITLE="Abstract: One of the persistent challenges in designing neural network models—particularly in the field of natural language processing (NLP)—is managing the large number of learnable
parameters, which often leads to increased computational costs
and a greater risk of overfitting. In this paper, we propose a novel
approach to address this issue by leveraging Rational Activation
Functions (RAFs), including both previously proposed variants
and a new class of non-linear RAFs with learnable parameters.
These functions are designed to enhance the representational
power of neural networks while significantly reducing their architectural complexity. We demonstrate that RAFs can effectively
emulate the behavior of deeper feed-forward neural networks,
thereby enabling a reduction in the number of hidden layers
required for a given task. This reduction translates into a lower
total number of learnable parameters without compromising
performance. Our method is evaluated on two fronts: first,
through a series of function approximation experiments that
highlight the expressiveness of RAFs; and second, on real-
world NLP tasks involving text classification in noisy, spoken
dialogue environments and an image classification task. The
results confirm that networks incorporating RAFs maintain high
accuracy while benefiting from increased efficiency and robustness. This work suggests that RAF-based architectures offer a
promising direction for building lightweight, high-performance
models, particularly in resource-constrained or real-time NLP
applications.">Exponential-Based Rational Activations Functions
</span></a></strong><br />
                Nicolas André et <b><font color="000000">Mohamed Morchid</font></b><br/>
				<i><a href="https://easyconferences.eu/ictai2025/" target="_blank"><font color="4C9900"><b>IEEE ICTAI 2025</b></font></a><br /></i>03-05 Novembre 2025, Athènes, (Grèce)
				</p>
			</li>
			
            <li class="us">
                <p><internationalConference/>
                    <strong><a href="../articles/embs2025_nicolas_andre.pdf" target="_blank"><span TITLE="Abstract: Quaternion Neural Networks (QNNs) extend traditional deep learning models by operating in the
                    four-dimensional
quaternion sub-space, offering a compact and naturally expressive framework for representing multidimensional data. At the
heart of neural networks lies the activation function, which introduces non-linearity into the forward process. Due to quaternion
algebra, activation functions known as ”split” activation functions
are predominantly used, as they act on each hypercomplex
component independently. In this paper, we introduce for the
first time two new activation functions based on the Rational
Activation Function (RAF), a class of learnable activation functions characterized by their trainable parameters. Specifically, we
propose one variant where the learnable parameters are shared
across all hypercomplex components, and another activation
function where each component has its own distinct set of
learnable parameters. These new Quaternion Rational Activation
Functions (QRAF) are evaluated across different neural architectures and tasks, including natural language processing and
image processing and show promising reults.">Quaternion Rational Activations Functions</span></a></strong><br />
                    Nicolas André et <b><font color="000000">Mohamed Morchid</font></b><br/>
                    <i><a href="https://neuro.embs.org/2025/" target="_blank"><font color="4C9900"><b>IEEE EMBS 2025</b></font></a><br /></i>
     11-14 Novembre 2025, San-Diego, (Etats-Unis)
			     </p>
            </li>
            
        </ul>
                    
        <!-- 2020 INTER -->

		<p><strong>2020</strong></p>

		<ul class="publication"> 
            
			<li class="china">
				<p><internationalConference/>
				<strong><a href="../articles/interspeech2020_xinchi_qiu.pdf" target="_blank"><span TITLE="Abstract: Despite the significant progress in automatic speech recognition (ASR), distant ASR remains challenging due to noise and reverberation. A common approach to mitigate this issue consists of equipping the recording devices with multiple microphones that capture the acoustic scene from different perspectives. These multi-channel audio recordings contain specific internal relations between each signal. In this paper, we propose to capture these inter- and intra- structural dependencies with quaternion neural networks, which can jointly process multiple signals as whole quaternion entities. The quaternion algebra replaces the standard dot product with the Hamilton one, thus offering a simple and elegant way to model dependencies between elements. The quaternion layers are then coupled with a recurrent neural network, which can learn long-term dependencies in the time domain. We show that a quaternion long-short term memory neural network (QLSTM), trained on the concatenated multi-channel speech signals, outperforms equivalent real-valued LSTM on two different tasks of multi-channel distant speech recognition.">Quaternion Neural Networks for Multi-channel Distant Speech Recognition
</span></a></strong><br />
                Xinchi Qiu, Titouan Parcollet, Mirco Ravanelli, Nicholas Lane et <b><font color="000000">Mohamed Morchid</font></b><br />
				<i><a href="http://www.interspeech2020.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2020</b></font></a><br /></i>25-29 Octobre 2020, Shangai, (China)
				</p>
			</li>
			
            <li class="sp">
                <p><internationalConference/>
                    <strong><a href="../articles/icassp2020_titouan_parcollet.pdf" target="_blank"><span TITLE="Abstract: Modern end-to-end (E2E) Automatic Speech Recognition (ASR) systems rely on Deep Neural Networks (DNN) that are mostly trained on handcrafted and pre-computed acoustic features such as Mel-filter-banks or Mel-frequency cepstral coefficients. Nonetheless, and despite worse performances, E2E ASR models processing raw waveforms are an active research field due to the lossless nature of the input signal. In this paper, we propose the E2E-SincNet, a novel fully E2E ASR model that goes from the raw waveform to the text transcripts by merging two recent and powerful paradigms: SincNet and the joint CTC-attention training scheme. The conducted experiments on two different speech recognition tasks show that our approach outperforms previously investigated E2E systems relying either on the raw waveform or pre-computed acoustic features, with a reported top-of-the-line Word Error Rate (WER) of 4.7% on the Wall Street Journal (WSJ) dataset.">E2E-SINCNET: Toward fully End-to-End Speech Recognition</span></a></strong><br />
                    Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
                    <i><a href="https://2020.ieeeicassp.org" target="_blank"><font color="4C9900"><b>IEEE ICASSP 2020</b></font></a><br /></i>
     4-8 Mai 2020, Barcelone, (Espagne)
			     </p>
            </li>
            
            <li class="sp">
                <p><internationalConference/>
                    <strong><a href="../articles/icassp2020_paul_gautier_noe.pdf" target="_blank"><span TITLE="Abstract: Convolutional Neural Networks (CNN) have been used in Automatic Speech Recognition (ASR) to learn representations directly from the raw signal instead of hand-crafted acoustic features, providing a richer and lossless input signal. Recent researches propose to inject prior acoustic knowledge to the first convolutional layer by integrating the shape of the impulse responses to increase both the interpretability of the learnt acoustic model, and its performances. We propose to combine the complex Gabor filter with complex-valued deep neural networks to replace usual CNN weights kernels, to fully take advantage of its optimal time-frequency resolution in the complex domain. The conducted experiments on the TIMIT phoneme recognition task shows that the proposed approach reaches top-of-the-line performances while remaining interpretable.">CGCNN: Complex Gabor Convolutional Neural Network on Raw Speech</span></a></strong><br />
                    Paul-Gauthier No&eacute;, Titouan Parcollet et <b><font color="000000">Mohamed Morchid</font></b><br />
                    <i><a href="https://2020.ieeeicassp.org" target="_blank"><font color="4C9900"><b>IEEE ICASSP 2020</b></font></a><br /></i>
     4-8 Mai 2020, Barcelone, (Espagne)
			     </p>
            </li>
        </ul>
            
            
        <!-- 2019 INTER -->

		<p><strong>2019</strong></p>

		<ul class="publication">    
            
            <li class="austria">
				<p><internationalConference/>
				<strong><a href="../articles/interspeech2019_titouan_parcolletGan.pdf" target="_blank"><span TITLE="Anstract: Deep learning is at the core of recent spoken language understanding (SLU) related tasks. More precisely, deep neu- ral networks (DNNs) drastically increased the performances of SLU systems, and numerous architectures have been proposed. In the real-life context of theme identification of telephone con- versations, it is common to hold both a human, manual (TRS) and an automatically transcribed (ASR) versions of the conver- sations. Nonetheless, and due to production constraints, only the ASR transcripts are considered to build automatic classi- fiers. TRS transcripts are only used to measure the performances of ASR systems. Moreover, the recent performances in term of classification accuracy, obtained by DNN related sys- tems are close to the performances reached by humans, and it becomes difficult to further increase the performances by only considering the ASR transcripts. This paper proposes to distillates the TRS knowledge available during the training phase within the ASR representation, by using a new generative adver- sarial network called M2H-GAN to generate a TRS-like version of an ASR document, to improve the theme identification per- formances.">M2H-GAN: A GAN-based Mapping from Machine to Human Transcripts for Speech Understanding</span></a></strong><br />
                Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b>, Xavier Bost et Georges Linar&egrave;s<br />
				<i><a href="http://www.interspeech2019.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2019</b></font></a><br /></i>15-19 Septembre 2019, Graz, (Autriche)
				</p>
			</li>
            
            <li class="austria">
				<p><internationalConference/>
				<strong><a href="../articles/interspeech2019_titouan_parcolletR2H.pdf" target="_blank"><span TITLE="Anstract: 
Deep neural networks (DNNs) and more precisely recurrent neural networks (RNNs) are at the core of modern automatic speech recognition systems, due to their efficiency to process input sequences. Recently, it has been shown that different input representations, based on multidimensional algebras, such as complex and quaternion numbers, are able to bring to neural networks a more natural, compressive and powerful representation of the input signal by outperforming common real-valued NNs. Indeed, quaternion-valued neural networks (QNNs) better learn both internal dependencies, such as the relation between the Mel-filter-bank value of a specific time frame and its time derivatives, and global dependencies, describing the relations that exist between time frames. Nonetheless, QNNs are limited to quaternion-valued input signals, and it is difficult to benefit from this powerful representation with real-valued input data. This paper proposes to tackle this weakness by introducing a real-to-quaternion encoder that allows QNNs to process any one dimensional input features, such as traditional Mel-filter-banks for automatic speech recognition.">Real to H-space Encoder for Speech Recognition</span></a></strong><br />
			Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s et Renato De Mori<br />
            <i><a href="http://www.interspeech2019.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2019</b></font></a><br /></i>15-19 Septembre 2019, Graz, (Autriche)
				</p>
			</li>
            
            <li class="uk">
                <p><internationalConference/>
                    <strong><a href="../articles/icassp2019_QBLSTM_parcollet.pdf" target="_blank"><span TITLE="Abstract: Recurrent neural networks (RNN) are at the core of modern automatic speech recognition (ASR) systems. In particular, long-short term memory (LSTM) recurrent neural networks have achieved state-of-the-art results in many speech recognition tasks, due to their efficient representation of long and short term dependencies in sequences of inter-dependent features. Nonetheless, internal dependencies within the element composing multidimensional features are weakly considered by traditional real-valued representations. We propose a novel quaternion long-short term memory (QLSTM) recurrent neural network that takes into account both the external relations between the features composing a sequence, and these internal latent structural dependencies with the quaternion algebra. QLSTMs are compared to LSTMs during a memory copy-task and a realistic application of speech recognition on the Wall Street Journal (WSJ) dataset. QLSTM reaches better performances during the two experiments with up to $2.8$ times less learning parameters, leading to a more expressive representation of the information.">Bidirectional Quaternion Long Short-Term Memory Recurrent Neural Networks for Speech Recognition</span></a></strong><br />
                    Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s et Renato De Mori<br />
                    <i><a href="https://2019.ieeeicassp.org" target="_blank"><font color="4C9900"><b>IEEE ICASSP 2019</b></font></a><br /></i>
     12-17 Mai 2019, Brighton, (GB)
			     </p>
            </li>
            
            <li class="uk">
                <p><internationalConference/>
                    <strong><a href="../articles/icassp2019_QcnnImage_parcollet.pdf" target="_blank"><span TITLE="Abstract: Convolutional neural networks (CNN) have recently achieved state-of-the-art results in various applications. In the case of image recognition, an ideal model has to learn independently of the training data, both local dependencies between the three components (R,G,B) of a pixel, and the global relations describing edges or shapes, making it efficient with small or heterogeneous datasets. Quaternion-valued convolutional neural networks (QCNN) solved this problematic by introducing multidimensional algebra to CNN. This paper proposes to explore the fundamental reason of the success of QCNN over CNN, by investigating the impact of the Hamilton product on a color image reconstruction task performed from a gray-scale only training. By learning independently both internal and external relations and with less parameters than real valued convolutional encoder-decoder (CAE), quaternion convolutional encoder-decoders (QCAE) perfectly reconstructed unseen color images while CAE produced worst and gray-scale versions.">Quaternion Convolutional Neural Networks for Heterogeneous Image Processing</span></a></strong><br />
                    Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
                    <i><a href="https://2019.ieeeicassp.org" target="_blank"><font color="4C9900"><b>IEEE ICASSP 2019</b></font></a><br /></i>
     12-17 Mai 2019, Brighton, (GB)
			     </p>
            </li>
            
            
            <li class="us">
                <p><internationalConference/>
                    <strong><a href="https://arxiv.org/pdf/1806.04418.pdf" target="_blank"><span TITLE="Abstract: Recurrent neural networks (RNNs) are powerful architectures to model sequential data, due to their capability to learn short and long-term dependencies between the basic elements of a sequence.  Nonetheless, popular tasks such as speech or images recognition, involve multi-dimensional input features that are characterized by strong internal dependencies between the dimensions of the input vector. We propose a novel quaternion recurrent neural network (QRNN), alongside with a quaternion long-short term memory neural network (QLSTM), that take into account both the external relations and these  internal  structural  dependencies with the quaternion algebra. Similarly to capsules, quaternions allow the QRNN to code internal dependencies by composing and processing multidimensional features as single entities, while the recurrent operation reveals correlations between the elements composing the sequence.  We show that both QRNN and QLSTM achieve better performances than RNN and LSTM in a realistic application of automatic speech recognition. Finally, we show that QRNN and QLSTM reduce by a maximum factor of 3.3x the number of free parameters needed, compared to real-valued RNNs and LSTMs to reach better results, leading to a more compact representation of the relevant information.">Quaternion Recurrent Neural Networks</span></a></strong><br />
                    Titouan Parcollet, Mirco Ravanelli, <b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s, Chiheb Trabelsi, Renato De Mori et Yoshua Bengio<br />
                    <i><a href="https://iclr.cc/Conferences/2019" target="_blank"><font color="4C9900"><b>ICLR 2019</b></font></a><br /></i>
     6-9 Mai 2019, Nouvelle-Orl&eacute;ans, (Etats-Unis)
			     </p>
            </li>
            </ul>
            
        <!-- 2018 INTER -->

		<p><strong>2018</strong></p>

		<ul class="publication">    
            
            <li class="ca">
                <p><internationalConference/>
                    <strong><a href="../articles/nips_irasl2018_parcollet.pdf" target="_blank"><span TITLE="Abstract: Neural network architectures are at the core of powerful automatic speech recognition systems (ASR). However, while recent researches focus on novel model architectures, the acoustic input features remain almost unchanged. Traditional ASR systems rely on multidimensional acoustic features such as the Mel filter bank energies alongside with the first, and second order derivatives to characterize time-frames that compose the signal sequence. Considering that these components describe three different views of the same element, neural networks have to learn both the internal relations that exist within these features, and external or global dependencies that exist between the time-frames. Quaternion-valued neural networks (QNN), recently received an important interest from researchers to process and learn such relations in multidimensional spaces. Indeed, quaternion numbers and QNNs have shown their efficiency to process multidimensional inputs as entities, to encode internal dependencies, and to solve many tasks with up to four times less learning parameters than real-valued models. We propose to investigate modern quaternion-valued models such as convolutional and recurrent quaternion neural networks in the context of speech recognition with the TIMIT dataset. The experiments show that QNNs always outperform real-valued equivalent models with way less free parameters, leading to a more efficient, compact, and expressive representation of the relevant information.">Speech Recognition with Quaternion Neural Networks</span></a></strong><br />
                    Titouan Parcollet, Mirco Ravanelli, <b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s et Renato De Mori<br />
                    <i><a href="https://irasl.gitlab.io" target="_blank"><font color="4C9900"><b>IRASL@NIPS 2018</b></font></a><br /></i>
     8 Decembre 2018, Montr&eacute;al, (Canada)
			     </p>
            </li>
            
            <li class="gr">
                <p><internationalConference/>
                    <strong><a href="../articles/slt2018_parcollet.pdf" target="_blank"><span TITLE="Abstract: Quaternion convolutional neural networks (QCNN) are pow- erful architectures to learn and model external dependencies that exist between neighbor features of an input vector, and internal latent dependencies within the feature. This paper proposes to evaluate the effectiveness of the QCNN on a real- istic theme identification task of spoken telephone conversa- tions between agents and customers from the call center of the Paris transportation system (RATP). We show that QCNNs are more suitable than real-valued CNN to process multidi- mensional data and to code internal dependencies. Indeed, real-valued CNNs deal with both internal and external rela- tions at the same level since components of an entity are pro- cessed independently. Experimental evidence is provided that the proposed QCNN architecture always outperforms real- valued equivalent CNN models in the theme identification task of the DECODA corpus. It is also shown that QCNN ac- curacy results are the best achieved so far on this task, while reducing by a factor of 4 the number of model parameters.">Quaternion Convolutional Neural Networks for Theme Identification of Telephone Conversations</span></a></strong><br />
                    Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s et Renato De Mori<br />
                    <i><a href="http://www.slt2018.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2018</b></font></a><br /></i>
     18-21 Decembre 2018, Ath&egrave;nes, (Gr&egrave;ce)
			     </p>
            </li>
            
			<li class="india">
				<p><internationalConference/>
				<strong><a href="../articles/interspeech2018_titouan_parcollet.pdf" target="_blank"><span TITLE="Anstract: Recently, the connectionist temporal classification (CTC) model coupled with recurrent (RNN) or convolutional neural networks (CNN), made it easier to train speech recognition systems in an end-to-end fashion. However in real-valued mod- els, time frame components such as mel-filter-bank energies and the cepstral coefficients obtained from them, together with their first and second order derivatives, are processed as individual elements, while a natural alternative is to process such components as composed entities. We propose to group such elements in the form of quaternions and to process these quaternions us- ing the established quaternion algebra. Quaternion numbers and quaternion neural networks have shown their efficiency to process multidimensional inputs as entities, to encode internal de- pendencies, and to solve many tasks with less learning parameters than real-valued models. This paper proposes to integrate multiple feature views in quaternion-valued convolutional neural network (QCNN), to be used for sequence-to-sequence mapping with the CTC model. Promising results are reported using simple QCNNs in phoneme recognition experiments with the TIMIT corpus. More precisely, QCNNs obtain a lower phoneme error rate (PER) with less learning parameters than a competing model based on real-valued CNNs.">Quaternion Convolutional Neural Networks for End-to-End Automatic Speech Recognition</span></a></strong><br />
			Titouan Parcollet, Ying Zhang, <b><font color="000000">Mohamed Morchid</font></b>, Chiheb Trabelsi, Georges Linar&egrave;s, Renato De Mori et Yoshua Bengio<br />
				<i><a href="http://www.interspeech2018.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2018</b></font></a><br /></i>2-6 Septembre 2018, Hyderabad, (Inde)
				</p>
			</li>

		</ul>
            
		<!-- 2017 INTER -->

		<p><strong>2017</strong></p>

		<ul class="publication">    
            
<li class="jp">
			<p><internationalConference/>
				<strong><a href="../articles/asru2017_titouan_parcollet.pdf" target="_blank"><span TITLE="Anstract: Deep Neural Networks (DNN) received a great interest from researchers due to their capability to construct robust abstract representations of heterogeneous documents in a latent subspace. Nonetheless, mere real-valued deep neural networks require an appropriate adaptation, such as the convolution process, to capture latent relations between input features. Moreover, real-valued deep neural networks reveal little in way of document internal dependencies, by only considering words or topics contained in the document as an isolate basic element. Quaternion-valued multi-layer perceptrons (QMLP), and autoencoders (QAE) have been introduced to capture such latent dependencies, alongside to represent multidimensional data. Nonetheless, a three-layered neural network does not benefit from the high abstraction capability of DNNs. The paper proposes first to extend the hyper-complex algebra to deep neural networks (QDNN) and, then, introduces pre-trained deep quaternion neural networks (QDNN-AE) with dedicated quaternion encoder-decoders (QAE). The experiments conduced on a theme identification task of spoken dialogues from the DECODA data set show, inter alia, that the QDNN-AE reaches a promising gain of 2.2% compared to the standard real-valued DNN-AE.">Deep Quaternion Neural Networks for Spoken Language Understanding</span></a></strong><br />
			Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="https://asru2017.org/default.asp" target="_blank"><font color="4C9900"><b>IEEE ASRU 2017</b></font></a><br /></i>16-20 Decembre 2017, Okinawa, (Japon)
			</p>
</li>
			<li class="sweden">
				<p><internationalConference/>
				<strong><a href="../articles/interspeech2017_mohamed_morchid.pdf" target="_blank"><span TITLE="Anstract: Long Short-Term Memory (LSTM) Recurrent Neural Networks (RNN) require 4 gates to learn short- and long-term dependencies for a given sequence of basic elements. Recently, “Gated Recurrent Unit” (GRU) has been introduced and requires fewer gates than LSTM (reset and update gates), to code short- and long-term dependencies and reaches equivalent performances than LSTM, with less processing time during the learning. The “Leaky integration Unit” (LU) is a GRU with a single gate (update) that codes mostly long-term dependencies quicker than LSTM or GRU (small number of operations for learning). This paper proposes a novel RNN that takes advantage of LSTM, GRU (short- and long-term dependencies) and the LU (fast learning) called “Internal Memory Gate” (IMG). The effectiveness and the robustness of the proposed IMG-RNN is evaluated during a classification task of a small corpus of spoken dialogues from the DECODA project that allows us to evaluate the capability of each RNN to code short-term dependencies. The experiments show that IMG-RNNs reach better accu- racies with a gain of 0.4 points compared to LSTM- and GRU-RNNs and 0.7 points compared to the LU- RNN. Moreover, IMG-RNN requires less processing time than GRU or LSTM with a gain of 19% and 50% respectively.">Internal Memory Gate for Recurrent Neural Networks with Application to Spoken Language Understanding</span></a></strong><br />
			<b><font color="000000">Mohamed Morchid</font></b><br />
				<i><a href="http://www.interspeech2017.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2017</b></font></a><br /></i>20-24 Aout 2017, Stockholm, (Su&egrave;de)
				</p>
			</li>

			<li class="sweden">
				<p><internationalConference/>
				<strong><a href="../articles/interspeech2017_titouan_parcollet.pdf" target="_blank"><span TITLE="Anstract: In the last decades, encoder-decoders or autoencoders (AE) have received a great interest from researchers due to their capability to construct robust representations of documents in a low dimensional subspace. Nonetheless, autoencoders reveal little in way of spoken document internal structure by only considering words or topics contained in the document as an isolate basic element, and tend to overfit with small corpus of documents. Therefore, Quaternion Multi-layer Perceptrons (QMLP) have been introduced to capture such internal latent dependencies, whereas denoising autoencoders (DAE) are composed with different stochastic noises to better process small set of documents. This pa- per presents a novel autoencoder based on both hitherto-proposed DAE (to manage small corpus) and the QMLP (to consider internal latent structures) called “Quaternion denoising encoder-decoder” (QDAE). Moreover, the paper defines an original angular Gaussian noise adapted to the specificity of hyper-complex algebra. The experiments, conduced on a theme identification task of spoken dialogues from the DECODA framework, show that the QDAE obtains the promising gains of 3% and 1.5% compared to the standard real valued denoising autoencoder and the QMLP respectively.">Quaternion Denoising Encoder-Decoder for Theme Identification of Telephone Conversations</span></a></strong><br />
			Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://www.interspeech2017.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2017</b></font></a><br /></i>20-24 Aout 2017, Stockholm, (Su&egrave;de)
				</p>
			</li>

		</ul>
			<!-- 2016 INTER -->

            <p><strong>2016</strong></p>

            <ul class="publication">    
            
            <li class="us">
                <p><internationalConference/>
                    <strong><a href="../articles/slt2016_parcollet.pdf" target="_blank"><span TITLE="Abstract: ">Quaternion Neural Networks for Spoken Language Understanding</span></a></strong><br />
                    Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b>, Pierre-Michel Bousquet, Richard Dufour, Georges Linar&egrave;s et Renato De Mori<br />
                    <i><a href="http://www.slt2016.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2016</b></font></a><br /></i>
     13-16 Decembre 2016, San Diego, (Etats-Unis)
			     </p>
            </li>

            <li class="us">
                <p><internationalConference/>
                    <strong><a href="../articles/slt2016_bouaziz_plstm.pdf" target="_blank"><span TITLE="Abstract: ">Parallel Long Short-Term Memory for Multi-Stream Classification</span></a></strong><br />
                    Mohamed Bouaziz, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Renato De Mori<br />
                    <i><a href="http://www.slt2016.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2016</b></font></a><br /></i>
     13-16 Decembre 2016, San Diego, (Etats-Unis)
			     </p>
            </li>

             <li class="us">
			     <p><internationalConference/>
                    <strong><a href="../articles/slt2016_janod.pdf" target="_blank"><span TITLE="Abstract: ">A Log-Linear Weighting Approach in the Word2Vec Space for Spoken Language Understanding</span></a></strong><br />
                    Killian Janod, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
                    <i><a href="http://www.slt2016.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2016</b></font></a><br /></i>
     13-16 Decembre 2016, San Diego, (Etats-Unis)
			     </p>
            </li>
                
            <li class="us">
                <p><internationalConference/>
                    <strong><a href="../articles/slt2016_bouaziz_svm.pdf" target="_blank"><span TITLE="Abstract: ">Improving Multi-Stream Classification by Mapping Sequence-Embedding in a High Dimensional Space</span></a></strong><br />
                    Mohamed Bouaziz, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
                    <i><a href="http://www.slt2016.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2016</b></font></a><br /></i>
     13-16 Decembre 2016, San Diego, (Etats-Unis)
			     </p>
            </li>
			
            <li class="us">
                <p><internationalConference/>
                    <strong><a href="../articles/slt2016_dufour.pdf" target="_blank"><span TITLE="Abstract: ">Tracking Dialog States using an Author-Topic based Representation</span></a></strong><br />
                    Richard Dufour, <b><font color="000000">Mohamed Morchid</font></b> et Titouan Parcollet<br />
                    <i><a href="http://www.slt2016.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2016</b></font></a><br /></i>
     13-16 Decembre 2016, San Diego, (Etats-Unis)
			     </p>
            </li>
                                
			<li class="us">
			
			<p><internationalConference/>
				<strong><a href="../articles/interspeech2016_mohamed_morchid.pdf" target="_blank"><span TITLE="Anstract: Performance of spoken language understanding applications declines when spoken documents are automatically transcribed in noisy conditions. To improve the robustness to transcription errors, recent solutions propose to map these automatic transcriptions in a latent space, such as Latent Dirichlet Alloca- tion (LDA), supervised LDA and author-topic (AT) models. An original compact representation, called c-vector, has recently been introduced to walk around the tricky choice of the number of latent topics. Moreover, c-vectors increase the robustness of document classification by compacting different LDA representations of a same speech document in a reduced space. The main drawback of this method is the number of sub-tasks needed to build the c-vector space. This paper proposes to both improve this c-vector representation and reduce the number of needed sub-tasks, using an original framework in a robust low dimensional space from a set of AT models called “Latent Topic-based Subspace” (LTS), by considering not only the dialogue content (words), but also the class related to the document. Experiments, conducted on the DECODA corpus, show that the original LTS representation outperforms the best previous c-vector compact representation, with a substantial gain of more than 2.5% in terms of correctly labeled conversations.">Spoken Language Understanding in a Latent Topic-based Subspace</span></a></strong><br />
			<b><font color="000000">Mohamed Morchid</font></b>, Mohamed Bouaziz, Waad Ben Kheder, Killian Janod, Pierre-Michel Bousquet, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="http://www.interspeech2016.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2016</b></font></a><br /></i>8-12 Septembre 2016, San Fransisco, (Etats-Unis)
			</p>
</li>

			<li class="us">
			
			<p><internationalConference/>
				<strong><a href="../articles/interspeech2016_killian_janod.pdf" target="_blank"><span TITLE="Anstract: The automatic transcription process of spoken document results in several word errors, especially when very noisy conditions are encountered. Document representations based on neural embedding frameworks have recently shown significant improvements in different Spoken and Natural Language Understanding tasks such as denoising and filtering. Nonetheless, these methods mainly need clean representations, failing to properly remove noise contained in noisy representations. This paper proposes to study the impact of residual noise contained into automatic transcripts of spoken dialogues in highly abstract spaces from deep neural networks. The paper makes the assumption that the noise learned from “clean” manual transcripts of spoken documents moves down dramatically the performance of theme identification systems in noisy conditions. The proposed deep neural network takes, as input and output, highly imperfect transcripts from spoken dialogues to improve the robustness of the document representation in a noisy environment. Results obtained on the DECODA theme classifica- tion task of dialogues reach an accuracy of more than 83% with a significant gain of about 6%.">Deep Stacked Autoencoders for Spoken Language Understanding</span></a></strong><br />
			Killian Janod, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Renato De Mori<br />
				<i><a href="http://www.interspeech2016.org" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2016</b></font></a><br /></i>8-12 Septembre 2016, San Fransisco, (Etats-Unis)
			</p>
</li>
</ul>

			<!-- 2015 INTER -->

			<p><strong>2015</strong></p>

<ul class="publication">

<li class="us">
			<p><internationalConference/>
				<strong><a href="../articles/asru2015_mohamed_morchid.pdf" target="_blank"><span TITLE="Anstract: This paper presents a method for speech analytics that integrates topic-space based representation into a feed-forward artificial neural network (FFANN), working as a document classifier. The proposed method consists in configuring the FFANN's topology and in initializing the weights according to a previously estimated topic-space. Setup based on thematic priors is expected to improve the efficiency of the FFANN's weight optimization process, while speeding-up the training process and improving the classification accuracy.
This method is evaluated on a spoken dialogue categorization task which is composed of customer-agent dialogues from the call-centre of Paris Public Transportation Company. Results show the interest of the proposed setup method, with a gain of more than 4 points in terms of classification accuracy, compared to the baseline. Moreover, experiments highlight that performance is weakly dependent to FFANN's topology with the LDA-based configuration, in comparison to classical empirical setup.">Topic-Space based Setup of a Neural Network for Theme Identification of Highly Imperfect Transcriptions</span></a></strong><br />
			<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="http://www.asru2015.org/default.asp" target="_blank"><font color="4C9900"><b>IEEE ASRU 2015</b></font></a><br /></i>13-17 Decembre 2015, Scottsdale, (Etats-Unis)
			</p>
</li>

<li class="fr">
			<p><internationalConference/>
				<strong><a href="../articles/isprs2015_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Social Networks became a major actor in information propagation. Using the Twitter popular platform, mobile users post or relay messages from different locations. The tweet content, meaning and location, show how an event-such as the bursty one ”JeSuisCharlie”, happened in France in Janvier 2015, is comprehended in different countries. This research aims at clustering the tweets according to the co-occurrence of their terms, including the country, and forecasting the probable country of a non-located tweet, knowing its content. First, we present the process of collecting a large quantity of data from the Twitter website. We finally have a set of 2,189 located tweets about “Charlie”, from the 7th to the 14th of Janvier. We describe an original method adapted from the Author-Topic (AT) model based on the Latent Dirichlet Allocation (LDA) method. We define an homogeneous space containing both lexical content (words) and spatial information (country). During a training process on a part of the sample, we provide a set of clusters (topics) based on statistical relations between lexical and spatial terms. During a clustering task, we evaluate the method effectiveness on the rest of the sample that reaches up to 95% of good assignment. It shows that our model is pertinent to foresee tweet location after a learning process.">A Topic Modeling based Representation to Detect Tweet Locations</span></a></strong><br />
			<b><font color="000000">Mohamed Morchid</font></b>, Didier Josselin, Yonathan Portilla, Richard Dufour, Eitan Altman et Georges Linar&egrave;s<br />
				<i><a href="http://www.isprs-geospatialweek2015.org/" target="_blank"><font color="4C9900"><b>ISPRS GW 2015</b></font></a><br /></i>28 Septembre-2 Octobre 2015, Montpellier (France)
			</p>
</li>


<li class="de">
                      <p>
                      <internationalConference/>
				<strong><a href="../articles/interspeech2015_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: In the context of noisy environments, Automatic Speech Recognition (ASR) systems usually produce poor transcription quality which also negatively impact performance of speech analytics. Various methods have then been proposed to compensate the bad effect of ASR errors, mainly by projecting transcribed words in an abstract space. In this paper, we seek to identify themes from dialogues of telephone conversation services using latent topic-spaces estimated from a latent Dirichlet allocation (LDA). As an outcome, a document can be represented with a vector containing probabilities to be associated to each topic estimated with LDA. This vector should nonetheless be normalized to condition document representations. We propose to compare the original LDA vector representation (without normalization) with two normalization approaches, the Eigen Factor Radial (EFR) and the Feature Warping (FW) methods, already successfully applied in speaker recognition field, but never compared and evaluated in the context of a speech analytic task. Results show the interest of these normalization techniques for theme identification tasks using automatic transcriptions The EFR normalization approach allows a gain of 3.67 and 3.06 points respectively in comparison to the absence of normalization and to the FW normalization technique.">A Comparison of Normalization Techniques Applied to Latent Space Representations for Speech Analytics</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Driss Matrouf<br />
				<i><a href="http://interspeech2015.org/" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2015</b></font></a><br /></i>
 6-10 Septembre 2015, Dreseden (Allamagne)

			</p>
</li>

<li class="fr">
			<p><internationalConference/>
				<strong><a href="../articles/spatialStatistics2015_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Social Networks became a major actor in information propagation. Using the Twitter popular platform, mobile users post or relay messages from different locations. The tweet content, meaning and location show how an event ‑such as the bursty event “JeSuisCharlie” happened in France in Janvier 2015‑ is comprehended in different countries.
This research aims at:
- clustering the tweets according to the co-occurrence of their terms, including the country, that provides the “flavour” of the tweet;
- forecasting the probable country of a non located tweet, knowing its content.
First, we present the process of collecting a large amount of data from the Twitter website. We finally have a set of 2600 located tweets about “Charlie”, from the 7th to the 14th in Janvier. The worldwide tweets sample quality is estimated regarding the locations mapped on QGIS and the statistical representativeness.
Secondly, we describe an original method adapted from the Author-Topic (AT) model based on the latent Dirichlet allocation method (LDA). We define a homogeneous space containing both lexical content (words) and spatial information (country). During a training process on a part of the sample, we provide a set of clusters (topics) based on statistical relations between lexical and spatial terms. During a clustering task, we evaluate the method effectiveness on the rest of the sample, that reaches 83% of good assignment.">An Author-Topic based Approach to Cluster Tweets and Mine their Location</span></a></strong><br />
			<b><font color="000000">Mohamed Morchid</font></b>, Yonathan Portilla, Didier Josselin, Richard Dufour, Eitan Altman, Marc El-Beze, Jean-Val&egrave;re Cossu, Georges Linar&egrave;s, Alexandre Reiffers-Masson<br />
				<i><a href="http://www.spatialstatisticsconference.com/" target="_blank"><font color="4C9900"><b>SPATIAL STATISTICS 2015</b></font></a><br /></i>9-12 Juin 2015, Avignon (France)
			</p>
</li>

<li class="eg">
			<p><internationalConference/>
				<strong><a href="../articles/cicling2015tm_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Speech analytics suffer from poor automatic transcription quality. To tackle this difficulty, a solution consists in mapping transcriptions into a space of hidden topics. This abstract representation allows to work around drawbacks of the ASR process. The well-known and commonly used one is the topic-based representation from a Latent Dirichlet Allocation (LDA). 
During the LDA learning process, distribution of words into each topic is estimated automatically. Nonetheless, in the context of a classification task, LDA model does not take into account the targeted classes. 
The supervised Latent Dirichlet Allocation (sLDA) model overcomes this weakness by considering the class, as a response, as well as the document content itself.
In this paper, we propose to compare these two classical topic-based representations of a dialogue (LDA and sLDA), with a new one based not only on the dialogue content itself (words), but also on the theme related to the dialogue. This original Author-topic Latent Variables (ATLV) representation is based on the Author-topic (AT) model. The effectiveness of the proposed ATLV representation is evaluated on a classification task from automatic dialogue transcriptions of the Paris Transportation customer service call. Experiments confirmed that this ATLV approach outperforms by far the LDA and sLDA approaches, with a substantial gain of respectively 7.3 and 5.8 points in terms of correctly labeled conversations.">Latent Topic Model based Representations for a Robust Theme Identification of Highly Imperfect Automatic Transcriptions</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Youssef Hamadi<br />
				<i><a href="http://www.cicling.org/2015/" target="_blank"><font color="4C9900"><b>CICLING 2015</b></font></a><br /></i>14-20 Avril 2015, Caire (Egypte)
			</p>
</li>

</ul>
			<!-- 2014 INTER -->

			<p><strong>2014</strong></p>
<ul class="publication">
<li class="us">

			<p><internationalConference/>
				<strong><a href="../articles/slt2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Performance of Automatic Speech Recognition (ASR) systems drops dramatically when transcribing conversations recorded in noisy conditions. Speech analytics suffer from this poor automatic transcription quality. To tackle this difficulty, a solution consists in mapping transcriptions into a space of hidden topics. This abstract representation allows to substantiate the drawbacks of the ASR process. The well-known and commonly used one is the topic-based representation from a Latent Dirichlet Allocation (LDA). Several studies demonstrate the effectiveness and reliability of this high-level representation. 
During the LDA learning process, distribution of words into each topic is estimated automatically. Nonetheless, in the context of a classification task, no consideration is made for the targeted classes. 
Thus, if the targeted application is to find out the main theme related to a dialogue, this information should be taken into consideration. 
In this paper, we propose to compare a classical topic-based representation of a dialogue, with a new one based not only on the dialogue content itself (words), but also on the theme related to the dialogue. This representation is called an author-topic model. 
The effectiveness of the proposed representation is evaluated on a classification task from automatic dialogue transcriptions between an agent and a customer of the Paris Transportation Company. Experiments confirmed that this author-topic model approach outperforms by far the classical topic representation, with a substantial gain of more than 7% in terms of correctly labeled conversations.">Author-Topic based Representation of Call-Center Conversations</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Mohamed Bouallegue et Georges Linar&egrave;s<br />
				<i><a href="http://www.slt2014.org" target="_blank"><font color="4C9900"><b>IEEE SLT 2014</b></font></a><br /></i>
 7-10 Decembre 2014, South Lake Tahoe (Etats-Unis)
			</p>
</li>

<li class="us">
			<p>
<internationalConference/>
<strong><a href="../articles/crowdmm2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Validating user tags helps to refine them, making them more useful for finding images. In the case of interpretation-sensitive tags, however, automatic (i.e., pixel-based) approaches cannot be expected to deliver optimal results. Instead, human input is the key. This paper studies how crowdsourcing-based approaches to image tag validation can achieve parsimony in their use of human input from the crowd, in the form of votes collected from workers on a crowdsourcing platform.
Experiments in the domain of social fashion images are carried out using the dataset published by the Crowdsourcing Task of the Mediaeval 2013 Multimedia Benchmark.
Experimental results reveal that when a larger number of crowd-contributed votes are available, it is difficult to beat a majority vote. However, additional information sources, i.e., crowdworker history and visual image features, allow us to maintain similar validation performance while making use of less crowd-contributed input.
Further, investing in 'expensive' experts who collaborate to create definitions of interpretation-sensitive concepts does not necessarily pay off. Instead, experts can cause interpretations of concepts to drift away from conventional wisdom. 
In short, validation of interpretation-sensitive user tags for social images is possible, with 'just a little help from the crowd'.">Getting by with a Little Help from the Crowd: Practical Approaches to Social Image Labeling</span></a></strong><br />
				Babak Loni, Jonathon Hare, Mihai Georgescu, Michael Riegler, Xiaofei Zhu, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Martha	Larson<br/>
				<i><a href="http://www.crowdmm.org" target="_blank"><font color="4C9900"><b>ACM CrowdMM 2014</b></font></a></i><br />
 3-7 Novembre 2014, Orlando (Etats-Unis)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>

<li class="qa">
			<p>
<internationalConference/>
<strong><a href="../articles/emnlp2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Various studies highlighted that topic-based approaches allow a powerful spoken content representation of documents. Nonetheless, these documents Mai content more that one main theme, and their automatic transcription inevitably contains errors. 
In this study, we propose an original and promising framework based on a compact representation of a textual document, to solve issues related to topic space granularity. Firstly, various topic spaces are estimated with different numbers of classes from a Latent Dirichlet Allocation.
Then, this multiple topic space representation is compacted into an elementary segment, called c-vector, originally developed in the context of speaker recognition. 
Experiments are conducted on the DECODA corpus of conversations. Results show the effectiveness of the proposed multi-view compact representation paradigm. Our identification system reaches an accuracy of 85%, with a significant gain of 9 points compared to the baseline (best single topic space configuration).">An I-vector Based Approach to Compact Multi-Granularity Topic Spaces Representation of Textual Documents</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Mohamed Bouallegue, Richard Dufour, Georges Linar&egrave;s, Driss Matrouf et Renato De Mori<br/>
				<i><a href="http://emnlp2014.org/papers.html" target="_blank"><font color="4C9900"><b>EMNLP 2014</b></font></a></i><br />
 25-29 Octobre 2014, Doha (Qatar)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>

<li class="ta">

			<p>
<internationalConference/>
<strong><a href="../articles/ismir2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Most of modern advertises contain a song to illustrate the commercial message. Techniques for choosing the most appropriate song to relate it to a commercial, are mainly manual. Thus, a persone alone could not be able to listen and chose the best music among millions. The need of an automatic system to select the most relevant and appropriate song to a commercial and to its message, comes up more and more critical. Moreover, the economic impact in the good or bad chose of a song is significant.
This paper describes the LIA music recommendation system for advertises using both textual and acoustic features. This system provide a song suitable to a given query and was evaluated during MediaEval 2013 Soundtrack task.
The aim of this task, is to predict the most suitable soundtrack from a list of candidate songs, given a TV commercial. The organizers provide a development dataset including multimedia features. The initial assumption of the proposed system is that commercials which sell the same type of product, also share the same music rhythm.
A two-fold system is proposed to provide a music for a commercial: find commercials with close subjects in order to determine the mean rhythm of this subset, and then extract from the candidate songs the music which better correspond to this mean rhythm.">A Combined Thematic and Acoustic Approach for a Music Recommendation Service for TV Commercials</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br/>
				<i><a href="http://www.terasoft.com.tw/conf/ismir2014/AcceptedPapers.html" target="_blank"><font color="4C9900"><b>ISMIR 2014</b></font></a><br /></i>
 27-31 Octobre 2014, Taipei (Taiwan)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>

<li class="sg">
                         <p>
<internationalConference/>
				<strong><a href="../articles/interspeech2014ac_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: This paper describes a research on topic identification in a real-world customer service telephone conversations between an agent and a customer.
Separate hidden spaces are considered for agents, customers and the combination of them. The purpose is to separate semantic constituents from the speaker types and their possible relations.  Probabilities of hidden topic features are then used by separate Gaussian classifiers to compute theme probabilities for each speaker type. A simple strategy, that does not require any additional parameter estimation, is introduced to classify themes with confidence indicators for each theme hypothesis. Experimental results on a real-life application show that the use of features from speaker type specific hidden spaces capture useful semantic contents with significantly superior performance with respect to independent word-based features or a single set of features. Experimental results also show that the proposed strategy makes it possible to perform surveys on collections of conversations by automatically selecting processed samples with high theme identification accuracy.">Theme Identification in Human-Human Conversations with Features from Specific Speaker Type Hidden Spaces</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Mohamed Bouallegue, Georges Linar&egrave;s et Renato De Mori<br />
				<i><a href="http://www.interspeech2014.org/public.php?page=home.html" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2014</b></font></a><br /></i>
 14-18 Septembre 2014, Max Atria (Singapour)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
<li class="sg">
                      <p>
                      <internationalConference/>
				<strong><a href="../articles/interspeech2014ivectors_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The performance of Automatic Speech Recognition (ASR) systems drops dramatically when used in noisy environments. Speech analytics suffer from this poor quality of automatic transcriptions.
In this paper, we seek to identify themes from dialogues of telephone conversation services using multiple topic-spaces estimated with a Latent Dirichlet Allocation (LDA) approach. 
This technique consists in estimating several topic models by varying the hyper-parameter alpha that offer different views of the document. Unfortunately, such a multi-model approach also introduces additional variabilities due to the model diversity. We propose to extract the useful information from the full model-set by using an i-vector based approach, previously developed in the context of speaker recognition.
Experiments are conducted on the DECODA corpus, that contains records from the call center of the Paris Transportation Company. Results show the effectiveness of the proposed representation paradigm, our identification system reaching an accuracy of 84.7%, with a gain of 3.3 points compared to the baseline.">I-vector Based Representation of Highly Imperfect Automatic Transcriptions</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Mohamed Bouallegue, Richard Dufour, Georges Linar&egrave;s, Driss Matrouf et Renato De Mori<br />
				<i><a href="http://www.interspeech2014.org/public.php?page=home.html" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2014</b></font></a><br /></i>
 14-18 Septembre 2014, Max Atria (Singapour)

			</p>
</li>
<li class="sg">

                         <p>
<internationalConference/>
				<strong><a href="../articles/interspeech2014sgmm_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Although Automatic Speech Recognition (ASR) systems can reach a high level of performance, noisy environments negatively impact transcription accuracy. The main objective of this paper is to identify themes from dialogues of telephone conversation services. To do so, multiple topic-spaces are estimated with a Latent Dirichlet Allocation (LDA) approach. Multiple views of a document can then be represented with several topic models. Nonetheless, the model diversity due to this multi-model approach introduces additional variabilities.
We propose an approach that maps dialogues into a common homogenous subspace in order to reduce this multi-span representation variability. This method, previously introduced in the context of speaker recognition, is named Gaussian Mixture Model subspace. This original representation for text classification is compared with the direct application of the multiple topic-model representation. Experiments are conducted on dialogues from the call center of the Paris Transportation Company. Results show the effectiveness of the proposed representation paradigm, our identification system reaching an accuracy of 78.2%, with a gain of 10.8 points compared to previous works with dialogue clustering concerns.">Subspace Gaussian Mixture Models for Dialogues Classification</span></a></strong><br />
				Mohamed Bouallegue, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Driss Matrouf, Georges Linar&egrave;s et Renato De Mori<br />
				<i><a href="http://www.interspeech2014.org/public.php?page=home.html" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2014</b></font></a><br /></i>
 14-18 Septembre 2014, Max Atria (Singapour)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
<li class="sg">

                         <p>
<internationalConference/>
				<strong><a href="../articles/interspeech2014filtrage_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The main objective of this paper is to identify themes from dialogues of telephone conversations in a real-life customer care service. In this task, the word semantic variability contained in these conversations Mai impact the classification performance by retaining the noise in their vectorial representation. In this article, we propose an original method to compensate this semantic variability using the Factor Analysis (FA) paradigm, initially designed for speech processing tasks to compensate the acoustic variability, mainly in Speaker Verification (SV) and Automatic Speech Recognition (ASR). In our proposal, we used the FA paradigm to  estimate the semantic variability as an additive component located in a subspace of low dimension (with respect to the super-vector space). This additive semantic variability is estimated in Factor Analysis model space. From this estimation, a specific vector transformation is obtained and is applied to vectors of dialogue representation. Experiments are reported using a corpus collected in the call center of the Paris Transportation Service. Results show the effectiveness of the proposed representation paradigm with a theme identification accuracy of 80.0%, showing a significant improvement with respect to previous results on the same corpus.">Factor Analysis based Semantic Variability Compensation for Automatic Conversation Representation</span></a></strong><br />
				Mohamed Bouallegue, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Driss Matrouf, Georges Linar&egrave;s et Renato De Mori<br />
				<i><a href="http://www.interspeech2014.org/public.php?page=home.html" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2014</b></font></a><br /></i>
 14-18 Septembre 2014, Max Atria (Singapour)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
<li class="cr">

			<p>
<internationalConference/>
				<strong><a href="../articles/tsd2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract:">Sumacc Project's Corpus: A Topic-based Query Extention Approach to Retrieve Multimedia Documents</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Usman Niaz, Francis Bouvier, Cl&eacute;ment de Groc, Claude de Loupy, Georges Linar&egrave;s, Bernard Merialdo et Bertrand Peralta<br />
				<i><a href="http://www.tsdconference.org/tsd2014/" target="_blank"><font color="4C9900"><b>ISCA TSD 2014</b></font></a><br /></i>
 8-12 Septembre 2014, Brno (R&eacute;publique Th&egrave;que)
			</p>

</li>
<li class="il">

			<p>
<internationalConference/>
				<strong><a href="../articles/lrec2014wer_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract:Although the current transcription systems could achieve high recognition performance, they still have a lot of difficulties to transcribe speech in very noisy environments. The transcription quality has a direct impact on classification tasks using text features. In this paper, we propose to identify themes of telephone conversation services with the classical Term Frequency-Inverse Document Frequency using Gini purity criteria (TF-IDF-Gini) method and with a Latent Dirichlet Allocation (LDA) approach. These approaches are coupled with a Support Vector Machine (SVM) classification to resolve theme identification problem. Results show the effectiveness of the proposed LDA-based method compared to the classical TF-IDF-Gini approach in the context of highly imperfect automatic transcriptions. Finally, we discuss the impact of discriminative and non-discriminative words extracted by both methods in terms of transcription accuracy."> A Lda-Based Topic Classification Approach from Highly Imperfect Automatic Transcriptions
</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="http://lrec2014.lrec-conf.org/en/" target="_blank"><font color="4C9900"><b>LREC 2014</b></font></a><br /></i>
 26-31 Mai 2014, Reykjavik (Islande)
			</p>
           
</li>
<li class="il">

                        <p>
<internationalConference/>
				<strong><a href="../articles/lrec2014buzz_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract:The prediction of bursty events on the Internet is a challenging task. Difficulties are due to the diversity of information sources, the size of the Internet, dynamics of popularity, user behaviors... On the other hand, Twitter is a structured and limited space. In this paper, we present a new method for predicting bursty events using content-related indices. Prediction is performed by a neural network that combines three features in order to predict the number of retweets of a tweet on the Twitter platform.
The indices are related to popularity, expressivity and singularity. Popularity index is based on the analysis of RSS streams. Expressivity uses a dictionary that contains words annotated in terms of expressivity load. Singularity represents outlying topic association estimated via a Latent Dirichlet Allocation (LDA) model.  
Experiments demonstrate the effectiveness of the proposal with a 72% F-measure prediction score for the tweets that have been forwarded at least 60 times."> Characterizing and Predicting Bursty Events: The Buzz case study on Twitter</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s et Richard Dufour<br />
				<i><a href="http://lrec2014.lrec-conf.org/en/" target="_blank"><font color="4C9900"><b>LREC 2014</b></font></a><br /></i>
 26-31 Mai 2014, Reykjavik (Islande)
			</p>

</li>
<li class="it">

			<p>
<internationalConference/>
				<strong><a href="../articles/icassp2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract:In this paper, we study the impact of dialogue representations and classification methods in the task of theme identification of telephone conversation services having highly imperfect automatic transcriptions. Two dialogue representations are firstly compared: the classical Term Frequency-Inverse Document Frequency with Gini purity criteria (TF-IDF-Gini) method and the Latent Dirichlet Allocation (LDA) approach.
We then propose to study an original classification method that takes advantage of the LDA topic space representation, highlighted as the best dialogue representation.
To do so, two assumptions about topic representation led us to choose a Gaussian process (GP) based method. This approach is compared with a Support Vector Machine (SVM) classification method. Results show that the GP approach
is a better solution to deal with the multiple theme complexity of a dialogue, no matter the conditions studied (manual or automatic transcriptions). We finally discuss the impact of the topic space reduction on the classification accuracy.">Improving Dialogue Classification using a Topic Space Representation and a Gaussian Classifier based on the Decision Rule</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Pierre-Michel Bousquet, Mohamed Bouallegue, Georges Linar&egrave;s et Renato De Mori<br />
				<i><a href="http://www.icassp2014.org/home.html" target="_blank"><font color="4C9900"><b>IEEE ICASSP 2014</b></font></a><br /></i>
 4-9 Mai 2014, Florence (Italie)
			</p>

</li>
</ul>
			<!-- 2013 INTER -->

			<p><strong>2013</strong></p>

<ul class="publication">
<li class="jp">
			<p>
<internationalConference/>
				<strong><a href="../articles/pacling2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The amount of information exchanged over the Internet is continuously growing, taking the form of short text messages on microblogging platforms such as Twitter. Due to the limited size of these types of messages, their understanding Mai require to know the context of their occurrence. In this paper, we propose a higher-level representation of short text messages based on a thematic model obtained by a Latent Dirichlet Allocation (LDA). We propose to evaluate the effectiveness of this short text message representation by using it in the experimental setup of the INEX 2012 tweet  contextualization task. This topic-based representation allows to extend the message vocabulary by searching a set of thematically- related words. Results demonstrated the interest of this topic space based approach for the tweet contextualization task.">Thematic Representation of Short Text Messages with Latent Topics: Application in the Twitter context</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="http://pacling.nak.ics.keio.ac.jp/" target="_blank"><font color="4C9900"><b>PACLING 2013</b></font></a><br /></i>
 2-5 Septembre 2013, Tokyo (Japon)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>

</li>
<li class="fr">


                         <p>
<internationalConference/>
				<strong><a href="../articles/interspeech2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The paper introduces new features for describing possible focus variation in a human/human conversation. The application considered is a real-life telephone customer care service. The purpose is to hypothesize the dominant theme of conversations between a casual customer calling. Conversations are processed by an automatic speech recognition system that provides hypotheses used for extracting word frequency. Features are extracted in different, broadly defined and partially overlapped, time segments. Combinations of each feature in different segments are represented in a quaternion algebra framework. The advantage of the proposed approach is made evident by the statistically significant improvements in theme classification accuracy.">Theme Identification in Telephone Service Conversations using Quaternions of Speech Features</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Georges Linar&egrave;s, Marc El-B&egrave;ze et Renato De Mori<br />
				<i><a href="http://www.interspeech2013.org/" target="_blank"><font color="4C9900"><b>ISCA INTERSPEECH 2013</b></font></a><br /></i>
 25-29 Aout 2013, Lyon (France)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
<li class="fr">

			<p>
<internationalConference/>
				<strong><a href="../articles/wiamis2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: This article presents a method for automatic tagging of Youtube videos. The proposed method combines an automatic speech recognition (ASR) system, that extracts the spoken contents, and a keyword extraction component that aims at finding a small set of tags representing a video. In order to improve the robustness of the tagging system to the recognition errors, a video transcription is represented in a topic space obtained by a Latent Dirichlet Allocation (LDA), in which each dimension is automatically characterized by a list of weighted terms. Tags are extracted by 	combining the weighted word list of the best LDA classes. We evaluate this method by employing the user-provided tags of Youtube videos as reference and we investigate the impact of the topic model granularity. The obtained results demonstrate the interest of such model to improve the robustness of the tagging system.">A LDA-based Method for Automatic Tagging of Youtube Videos</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://wiamis2013.wp.mines-telecom.fr/" target="_blank"><font color="4C9900"><b>IEEE WIAMIS 2013</b></font></a><br /></i>
 3-5 Juillet 2013, Paris (France)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>

</li>
<li class="hu">

			<p>
<internationalConference/>
				<strong><a href="../articles/cbmi2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: We present a method to detect social events in a set of pictures from an image hosting service (Flickr). This method relies on the analysis of user-generated tags, by using statistical models trained on both a small set of manually annotated data and a large data set collected from the Internet. Social event modeling relies on multi-span topic model based on LDA (Latent Dirichlet Allocation). Experiments are conducted in the experimental setup of MediaEval’2011 evaluation campaign. The proposed system outperforms significantly the best system of this benchmark, reaching a F-measure score of about 71%.">Event Detection from Image Hosting Services by Slightly-Supervised Multi-Span Context Models</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="http://cbmi2013.mik.uni-pannon.hu/" target="_blank"><font color="4C9900"><b>IEEE CBMI 2013</b></font></a><br /></i>
 17-19 Juin 2013, Veszpr&eacute;m (Hongrie)

			</p>
</li>
</ul>

			<!-- NATIONALE ... -->

			<br>
			<h4><b><a name="national" class="lienInterne">Conf&eacute;rences Nationales</a></b></h4><!--  ( <? echo getNumberOfPapers("frenchConference") ?> )</a></h2> -->

            <!-- 2024 NAT -->
			<p><strong>2024</strong></p>

<ul class="publication">
    
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/coria2024_nicolas_andre.pdf" target="_blank"><span TITLE="Abstract: Les systèmes basés sur les réseaux de neurones avec système d’attention, tels que les “transformers”, ont atteint des performances prometteuses dans différentes tâches liées au traitement automatique du langage naturel dans des environements réels, tel que la compréhension du langage parlé (SLU). Ces modèles neuronaux basés sur les transformers comme BERT, sont très expressifs et efficaces pour la compréhension du langage parlé. Néanmoins, la tâche de détection de thèmes abordés dans des dialogues enregistrés dans des conditions difficiles (téléphone, dialogues enregistrés dans la rue, etc.) s’avère compliquée, car les sujets sont étroitement liés et l’ensemble de dialogues parlés employés pour la phase d’apprentissage est réduit. Cet article propose d’utiliser des modèles de langage basés sur les transformers dans le cadre de la compréhension de dialogues du centre d’appels RATP des données DECODA pour la détection de sujets dans des dialogues parlés bruités. L’article évalue également les performances des transformers pour la détection de sous-thèmes (mentions) portant sur chaque sujet. Les expériences menées montrent que l’utilisation des dépendances entre les mentions et leurs sujets associés améliore à la fois l’identification des thèmes et des mentions. De plus, les expériences soulignent que l’apprentissage des thèmes et des mentions ou sous-thèmes en parallèle permet au système SLU de révéler des dépendances cachées pour un meilleur traitement des appels téléphoniques émanant des clients de la RATP.">Transformers pour l’Identification de Th&egrave;mes et de Mentions dans des Conversations T&eacute;l&eacute;phoniques Bruit&eacute;es</span></a></strong><br />
				Nicolas André, Adrien Racamond et <b><font color="000000">Mohamed Morchid</font></b><br />

				<i><a href="https://coria.asso-aria.org/2024/" target="_blank"><font color="4C9900"><b>COnf&eacute;rence en Recherche d'Information et Applications (CORIA) 202	4</b></font></a></i><br />3-4 Avril 2024, La Rochelle (France)
			</p>
</li>
</ul>

            <!-- 2019 NAT -->
			<p><strong>2019</strong></p>

<ul class="publication">
    
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/coria2019_titouan_parcollet.pdf" target="_blank"><span TITLE="Abstract: Les réseaux de neurones convolutifs de quaternions (QCNN) forment un ensemble d’al- gorithmes particulièrement efficaces pour l’apprentissage et la modélisation des relations in- ternes et externes existantes entre les caractéristiques d’un vecteur de données. Ce travail pro- pose d’évaluer l’efficacité des QCNNs à travers une tâche réaliste d’identification automatique de thèmes contenus dans des conversations téléphoniques, impliquant des agents et des usagers du centre d’appel du service de transport de la ville de Paris (RATP). Il est ainsi démontré que les QCNNs sont plus performants que leurs homologues basés sur l’algèbre des nombres réels (CNN) pour le traitement de données multidimensionnelles, et pour coder les relations internes. En effet, les CNNs traitent, sans distinction, et au même niveau, les relations internes et externes, dû à la nature propre des représentations dans des espaces composés de nombres réels. Les expérimentations montrent que le QCNN surpasse de manière constante et pour l’en- semble des configurations le CNN durant la tâche d’identification de thèmes basée sur le corpus de dialogues parlés DECODA. De plus, cette hausse de précision est accompagnée d’une ré- duction significative du nombre de paramètres neuronaux composant le modèle par un facteur de quatre.">R&eacute;seaux de neurones convolutifs de quaternions pour l’identification de th&egrave;mes de conversations t&eacute;l&eacute;phoniques</span></a></strong><br />
				Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />

				<i><a href="https://coria-earia2019.projet.liris.cnrs.fr" target="_blank"><font color="4C9900"><b>COnf&eacute;rence en Recherche d'Information et Applications (CORIA) 2019</b></font></a></i><br />25-29 Mars 2019, Lyon (France)
			</p>
</li>
</ul>
            
            <!-- 2017 NAT -->
			<p><strong>2017</strong></p>

<ul class="publication">

    
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/coria2017_titouan_parcollet.pdf" target="_blank"><span TITLE="Abstract: Les algorithmes d’apprentissage automatique, comme les r&eacute;seaux de neurones (NN), ont permis d’atteindre des performances notables dans de nombreuses tâches li&eacute;es au traite- ment automatique du langage (TAL). En TAL les contenus sont g&eacute;n&eacute;ralement repr&eacute;sent&eacute;s dans des espaces lexicaux ou th&eacute;matiques. Les m&eacute;thodes de traitement des contenus - y compris celles bas&eacute;es sur des NN - op&egrave;rent donc dans des espaces où les relations statistiques entre les &eacute;l&eacute;- ments du document sont faiblement consid&eacute;r&eacute;es. Nous proposons de rem&eacute;dier à cette faiblesse en &eacute;tendant les r&eacute;seaux de neurones aux quaternions (QMLP) pour permettre une mod&eacute;lisation des d&eacute;pendances cach&eacute;es entres les donn&eacute;es. L’architecture propos&eacute;e est &eacute;valu&eacute;e lors d’une tache d’analyse de dialogue parl&eacute;s. Les r&eacute;sultats montrent que l’association du QMLP et d’une repr&eacute;sentation structur&eacute;e permet d’obtenir un gain en pr&eacute;cision de 2% et 3% comparativement aux MLPs et à (Morchid et al., 2013) respectivement. Nous montrons finalement que la vitesse de convergence du QMLP est sensiblement sup&eacute;rieure à celle du MLP.">R&eacute;seaux de neurones de quaternions pour le traitement du langage</span></a></strong><br />
				Titouan Parcollet, <b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />

				<i><a href="http://www3.lsis.org/coria2017/" target="_blank"><font color="4C9900"><b>COnf&eacute;rence en Recherche d'Information et Applications (CORIA) 2017</b></font></a></i><br />29-31 Mars 2017, Marseille (France)
			</p>
</li>
</ul>
            
            <!-- 2016 NAT -->
			<p><strong>2016</strong></p>

<ul class="publication">

<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/jep2016_bouaziz_lts.pdf" target="_blank"><span TITLE="Abstract:">Un Sous-espace Th&eacute;matique Latent pour la Compr&eacute;hension du Langage Parl&eacute;</span></a></strong><br />
                Mohamed Bouaziz, <b><font color="000000">Mohamed Morchid</font></b>, Pierre-Michel Bousquet, Richard Dufour, Killian Janod, Waad Ben Kheder et Georges Linar&egrave;s<br />
				<i><a href="https://jep-taln2016.limsi.fr/callJEP.php?lang=fr" target="_blank"><font color="4C9900"><b>Journ&eacute;es d’&eacute;tudes sur la Parole (JEP) 2016</b></font></a></i><br />4-8 Juillet 2016, Paris (France)
			</p>
</li> 
    
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/jep2016_janod.pdf" target="_blank"><span TITLE="Abstract:">Auto-encodeurs pour la compr&eacute;hension de documents parl&eacute;s</span></a></strong><br />
                Killian Janod, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Renato De Mori<br />
                <i><a href="https://www.canal-u.tv/video/limsi/auto_encodeurs_pour_la_comprehension_de_documents_parles.32405" target="_blank"><font color="006994"><b>Pr&eacute;sentation orale (vid&eacute;o)</b></font></a></i><br/>
                
                
				<i><a href="https://jep-taln2016.limsi.fr/callJEP.php?lang=fr" target="_blank"><font color="4C9900"><b>Journ&eacute;es d’&eacute;tudes sur la Parole (JEP) 2016</b></font></a></i><br />4-8 Juillet 2016, Paris (France)
			</p>
</li> 
    
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/jep2016_bouaziz_corpus.pdf" target="_blank"><span TITLE="Abstract:">Un Corpus de Flux TV Annot&eacute;s pour la Pr&eacute;diction de Genres </span></a></strong><br />
                Mohamed Bouaziz, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Prosper Correa<br />
				<i><a href="https://jep-taln2016.limsi.fr/callJEP.php?lang=fr" target="_blank"><font color="4C9900"><b>Journ&eacute;es d’&eacute;tudes sur la Parole (JEP) 2016</b></font></a></i><br />4-8 Juillet 2016, Paris (France)
			</p>
</li>    
    
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/coria2016_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Les m&eacute;thodes d'apprentissages profonds s'appuient de plus en plus sur des repr&eacute;sentations vectorielles continues des mots. Ces m&eacute;thodes, d&eacute;jà appliqu&eacute;es avec succ&egrave;s dans de nombreuses tâches de traitement automatique du langage naturel &eacute;crit et oral, sont capables de repr&eacute;senter des mots ainsi que les relations les liant. De mani&egrave;re g&eacute;n&eacute;rale, ces m&eacute;thodes utilisent des repr&eacute;sentations par ``sac-de-mots'' et traitent donc tous les mots d'un contexte de façon &eacute;gale. Cet article propose une m&eacute;thode originale qui s'appuie sur les mod&egrave;les de contextes continus en int&eacute;grant la position relative des mots dans un contexte. Les r&eacute;sultats montrent que l'information port&eacute;e par les contextes continus permet un gain jusqu'à 7 %  sur le test  qualitatif ``de relation s&eacute;mantique'' et permet d'obtenir des r&eacute;sultats pertinents pour une application concr&egrave;te (identification de th&egrave;mes de dialogues dand le cadre du projet DECODA), alors que des performances faibles sont obtenues sans l'information contextuelle.">R&eacute;seaux de Neurones pour la Repr&eacute;sentation de Contextes Continus des Mots</span></a></strong><br />
				Killian Janod, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />

				<i><a href="http://irit.fr/sdnri2016/" target="_blank"><font color="4C9900"><b>COnf&eacute;rence en Recherche d'Information et Applications (CORIA) 2016</b></font></a></i><br />9-11 Mars 2016, Toulouse (France)
			</p>
</li>
</ul>
            
			<!-- 2015 NAT -->
			<p><strong>2015</strong></p>

<ul class="publication">

<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/taln2105ffann_mohamed_morchid.pdf" target="_blank"><span TITLE="Les repr&eacute;sentations vectorielles continues des mots sont en plein essor et ont d&eacute;jà &eacute;t&eacute; appliqu&eacute;es avec succ&egrave;s à de nombreuses tâches en traitement automatique de la langue (TAL). Dans cet article, nous proposons d'int&eacute;grer l'information temporelle issue du contexte des mots au sein des architectures fond&eacute;es sur les sacs-de-mots continus ( continuous bag-of-words ou ( CBOW )) ou sur les Skip-Grams. Ces approches sont manipul&eacute;es au travers d'un r&eacute;seau de neurones, l'architecture CBOW cherchant alors à pr&eacute;dire un mot sachant son contexte, alors que l'architecture Skip-Gram pr&eacute;dit un contexte sachant un mot. Cependant, ces mod&egrave;les, au travers du r&eacute;seau de neurones, s'appuient sur des repr&eacute;sentations en sac-de-mots et ne tiennent pas compte, explicitement, de l'ordre des mots. En cons&eacute;quence, chaque mot a potentiellement la même influence dans le r&eacute;seau de neurones. Nous proposons alors une m&eacute;thode originale qui int&egrave;gre l'information temporelle des contextes des mots en utilisant leur position relative. Cette m&eacute;thode s'inspire des mod&egrave;les contextuels continus. L'information temporelle est trait&eacute;e comme coefficient de pond&eacute;ration, en entr&eacute;e du r&eacute;seau de neurones par le CBOW et dans la couche de sortie par le Skip-Gram. Les premi&egrave;res exp&eacute;riences ont &eacute;t&eacute; r&eacute;alis&eacute;es en utilisant un corpus de test mesurant la qualit&eacute; de la relation s&eacute;mantique-syntactique des mots. Les r&eacute;sultats pr&eacute;liminaires obtenus montrent l'apport du contexte des mots, avec des gains de 7 et 7,7 points respectivement avec l'architecture Skip-Gram et l'architecture CBOW.">Initialisation de R&eacute;seaux de Neurones à l'aide d'un Espace Th&eacute;matique</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />

				<i><a href="https://taln2015.greyc.fr/" target="_blank"><font color="4C9900"><b>Conf&eacute;rence sur le Traitement Automatique des Langues Naturelles (TALN) 2015</b></font></a></i><br />22-25 Juin 2015, Caen (France)
			</p>
</li>

<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/taln2105w2v_mohamed_morchid.pdf" target="_blank"><span TITLE="Les repr&eacute;sentations vectorielles continues des mots sont en plein essor et ont d&eacute;jà &eacute;t&eacute; appliqu&eacute;es avec succ&egrave;s à de nombreuses tâches en traitement automatique de la langue (TAL). Dans cet article, nous proposons d'int&eacute;grer l'information temporelle issue du contexte des mots au sein des architectures fond&eacute;es sur les sacs-de-mots continus ( continuous bag-of-words ou ( CBOW )) ou sur les Skip-Grams. Ces approches sont manipul&eacute;es au travers d'un r&eacute;seau de neurones, l'architecture CBOW cherchant alors à pr&eacute;dire un mot sachant son contexte, alors que l'architecture Skip-Gram pr&eacute;dit un contexte sachant un mot. Cependant, ces mod&egrave;les, au travers du r&eacute;seau de neurones, s'appuient sur des repr&eacute;sentations en sac-de-mots et ne tiennent pas compte, explicitement, de l'ordre des mots. En cons&eacute;quence, chaque mot a potentiellement la même influence dans le r&eacute;seau de neurones. Nous proposons alors une m&eacute;thode originale qui int&egrave;gre l'information temporelle des contextes des mots en utilisant leur position relative. Cette m&eacute;thode s'inspire des mod&egrave;les contextuels continus. L'information temporelle est trait&eacute;e comme coefficient de pond&eacute;ration, en entr&eacute;e du r&eacute;seau de neurones par le CBOW et dans la couche de sortie par le Skip-Gram. Les premi&egrave;res exp&eacute;riences ont &eacute;t&eacute; r&eacute;alis&eacute;es en utilisant un corpus de test mesurant la qualit&eacute; de la relation s&eacute;mantique-syntactique des mots. Les r&eacute;sultats pr&eacute;liminaires obtenus montrent l'apport du contexte des mots, avec des gains de 7 et 7,7 points respectivement avec l'architecture Skip-Gram et l'architecture CBOW.">Apport de l'information temporelle des contextes pour la repr&eacute;sentation vectorielle continue des mots</span></a></strong><br />
				Killian Janod, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />

				<i><a href="https://taln2015.greyc.fr/" target="_blank"><font color="4C9900"><b>Conf&eacute;rence sur le Traitement Automatique des Langues Naturelles (TALN) 2015</b></font></a></i><br />22-25 Juin 2015, Caen (France)
			</p>
</li>

<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/taln2105annot_mohamed_morchid.pdf" target="_blank"><span TITLE="Les travaux pr&eacute;sent&eacute;s portent sur l’extraction automatique d’unit&eacute;s s&eacute;mantiques et l’&eacute;valuation de leur pertinence pour des conversations t&eacute;l&eacute;phoniques. Le corpus utilis&eacute; est le corpus DECODA. L’objectif de la tâche est de permettre l’&eacute;tiquetage automatique en th&egrave;me de chaque conversation. Compte tenu du caract&egrave;re spontan&eacute; de ce type de conversations et de la taille du corpus, nous proposons de recourir à une strat&eacute;gie semi-supervis&eacute;e fond&eacute;e sur la construc- tion d’une ontologie et d’un apprentissage actif simple : un annotateur humain analyse non seulement les listes d’unit&eacute;s s&eacute;mantiques candidates menant au th&egrave;me mais &eacute;tudie &eacute;galement une petite quantit&eacute; de conversations. La pertinence de la relation unissant les unit&eacute;s s&eacute;mantiques conserv&eacute;es, le sous-th&egrave;me issu de l’ontologie et le th&egrave;me annot&eacute; est &eacute;valu&eacute;e par un DNN, prenant en compte une repr&eacute;sentation vectorielle du document. L’int&eacute;gration des unit&eacute;s s&eacute;mantiques retenues dans le processus de classification en th&egrave;me am&eacute;liore les performances.">Utilisation d'annotations s&eacute;mantiques pour la validation automatique d'hypoth&egrave;ses dans des conversations t&eacute;l&eacute;phoniques<a></strong><br />
				Carole Lailler, Yannick Est&egrave;ve, Renato De Mori, Mohamed Bouallegue et <b><font color="000000">Mohamed Morchid</font></b><br />

				<i><a href="https://taln2015.greyc.fr/" target="_blank"><font color="4C9900"><b>Conf&eacute;rence sur le Traitement Automatique des Langues Naturelles (TALN) 2015</b></font></a></i><br />22-25 Juin 2015, Caen (France)
			</p>
</li>

</ul>

			<!-- 2014 NAT -->
			<p><strong>2014</strong></p>

<ul class="publication">
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/jep2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Les syst&egrave;mes de reconnaissance automatique de la parole (RAP) sont d&eacute;sormais tr&egrave;s performants. N&eacute;anmoins, la qualit&eacute; de transcription est fortement d&eacute;grad&eacute;e dans des environnements tr&egrave;s bruit&eacute;s, ce qui influe sur les performances des applications les utilisant, telles que les tâches de classification. Dans ce papier, nous proposons d'identifier les th&egrave;mes pr&eacute;sent dans des services vocaux  t&eacute;l&eacute;phoniques au moyen de l'approche classique à base de fr&eacute;quences de mots (TF-IDF avec le crit&egrave;re de puret&eacute; Gini) et au moyen de l'approche à base d'espaces de th&egrave;mes (LDA). Ces deux repr&eacute;sentations sont ensuite utilis&eacute;es dans un processus de classification utilisant les SVM afin de retrouver le th&egrave;me pr&eacute;sent dans la conversation. Enfin, nous proposons de discuter autour de la qualit&eacute;, en termes de taux d'erreur-mot, des mots identifi&eacute;s comme discriminants et non-discriminants par les m&eacute;thodes de repr&eacute;sentation des dialogues &eacute;tudi&eacute;es dans cet article.">Classification de transcriptions automatiques imparfaites : Doit-on adapter le calcul du taux d’erreur-mot ?</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Georges Linar&egrave;s et Renato De Mori<br />

				<i><a href="http://www-lium.univ-lemans.fr/jep2014/" target="_blank"><font color="4C9900"><b>Journ&eacute;es d’&eacute;tudes sur la Parole (JEP) 2014</b></font></a></i><br />23-27 Juin 2014, Le Mans (France)
			</p>
</li>
</ul>
			<!-- 2013 NAT -->

			<p><strong>2013</strong></p>
<ul class="publication">
<li class="sw">

			<p>
<frenchConference/>
				<strong><a href="../articles/coria2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The prediction of bursty events on the internet is a challenging task. Difficulties are due to the diversity of information sources, the size of the internet, dynamics of popularity, user behaviors... On the other hand, Twitter is a structured and limited space. In this paper, we present a bursty event prediction method applied to the Twitter plateform. The proposed method uses tweet contents to predict the retweet rate. Prediction system extracts 3 types of features, related respectively to popularity, saliance and expressivity. These descriptors constitute the input features of a multilayer perceptron that predicts the retweet rate. Our experiments are conducted on a test corpus composed by about 30,000 tweets. On this test set, the proposed system detects more than 72% of the tweets that have been forwarded at least 60 times.">Pr&eacute;diction des Buzz sur <i>Twitter</i></span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://coria.unine.ch/" target="_blank"><font color="4C9900"><b>COnf&eacute;rence en Recherche d'Information et Applications (CORIA) 2013</b></font></a></i><br />
				3-5 Avril 2013, Neuchatel (Suisse)
					<!-- <br />
					Acceptance rate: 33% -->
			</p>
</li>
<li class="fr">
			<p>
<frenchConference/>
				<strong><a href="../articles/egc2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: La quantit&eacute; d’information &eacute;chang&eacute;e sur Internet ne cesse de croître et prend de plus en plus souvent la forme de message courts (tweet, messagerie instantan&eacute;e, . . .). De part le peu d’informations v&eacute;hicul&eacute;es dans ces types de messages, il est n&eacute;cessaire de connaître leur contexte d’apparition afin de les rendre compr&eacute;hensibles par un lecteur. Nous pr&eacute;sentons dans ce papier une m&eacute;thode de contextualisation de messages courts utilisant une repr&eacute;sentation th&eacute;matique. Cette repr&eacute;sentation permet d’&eacute;tendre le vocabulaire du message par un ensemble de mots th&eacute;matiquement proches. Cette m&eacute;thode a &eacute;t&eacute; appliqu&eacute;e avec succ&egrave;s à la probl&eacute;matique de la contextualisation de tweets dans le cadre de la campagne d’&eacute;valuation INEX 2012 (CLEF 2012). Les r&eacute;sultats obtenus montrent l’apport de cette m&eacute;thode pour une meilleure compr&eacute;hension de messages courts.">Combinaison de Th&egrave;mes Latents pour la Contextualisation de Tweets</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="http://www.irit.fr/~Josiane.Mothe/EGCCM.htm" target="_blank"><font color="4C9900"><b>Conf&eacute;rence Francophone sur l'Extraction et la Gestion des Connaissances (EGC) 2013</b></font></a></i><br />
				28 Janvier 2013, Toulouse (France)
			</p>
</li>
</ul>

			<!-- 2012 NAT -->

			<p><strong>2012</strong></p>

<ul class="publication">
<li class="fr">

			<p>
<frenchConference/>
				<strong><a href="../articles/jep2012_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: This article presents a method for the automatic tagging of youtube videos. The proposed method combines an automatic speech recognition system, that extracts the spoken contents, and a keyword extraction system that aims at finding a small set of tags representing the video. In order to improve the robustness of the tagging system to the recognition errors, a video transcription is represented in a semantic space obtained by Latent Dirichlet Allocation (LDA), in which each dimension is automatically characterized by a list of weighted terms and chuncks. Our experiments demonstrate the interest of such a model to improve the robustness of the tagging system, especially when speech recognition (ASR) system produce highly errorneous transcript of spoken contents.">Extraction de mots-clefs dans des vid&eacute;os Web par Analyse Latente de Dirichlet</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://www.jeptaln2012.org/" target="_blank"><font color="4C9900"><b>Journ&eacute;es d’&eacute;tudes sur la Parole (JEP) 2012</b></font></a></i><br />
				4-8 Juin 2012, Grenoble (France)
				<!-- <br />
				Acceptance rate: 74% -->
			</p>

</li>
</ul>

<!-- INTERNATIONALE WORKSHOPS... -->

			<br>
			<h4><b><a name="internationalWorking" class="lienInterne">Conf&eacute;rences de Campagnes</a></b></h4><!--  ( <? echo getNumberOfPapers("workingNotes") ?> )</a></b></h4> -->

			<!-- 2014 INTER WORKSHOPS -->

			<p><strong>2014</strong></p>

<ul class="publication">
<li class="us">

			<p>
<workingNotes/>
			<strong><a href="../articles/iwslt2014_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: We present the LIA systems for the machine translation evaluation campaign of the International Workshop on Spoken Language Translation (IWSLT) 2014 for the English-to- Slovene and English-to-Polish translation tasks. The proposed approached aims at taking into account word context by mapping sentences into a latent Dirichlet alloca- tion (LDA) topic space and choosing into this space words that are thematically and grammatically close to mistranslated words. This original post-processing approach is compared with a factored translation system built with MOSES. While this original post-processing approach does not allow us to achieve better results than a state-of-the-art system, this should be an interesting way to explore, for example by adding this topic space information at an early stage in the translation process.">A Topic-based Approach for Post-processing Correction of Automatic Translations</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, St&eacute;phane Huet et Richard Dufour<br />
				<i><a href="http://workshop2014.iwslt.org/" target="_blank"><font color="4C9900"><b>IWSLT 2014</b></font></a></i><br />
				4-5 Decembre 2014, South Lake Tahoe (Etats-Unis)

			</p>
</li>
</ul>

			<!-- 2013 INTER WORKSHOPS -->

			<p><strong>2013</strong></p>

<ul class="publication">
<li class="sp">

			<p>
<workingNotes/>
			<strong><a href="../articles/mediaEvalCrowdSourcing2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: In this paper, we describe the LIA system proposed for the MediaEval 2013 Crowdsourcing for Social Multimedia task. The aim is to associate an accurate label to an image among multiple noisy labels collected from a crowdsourcing platform. In particular, the task participants have to predict two types of binary labels for each considered image. The first one mentions that an image is truly fashion-related or not, while the second label indicates that the fashion tag assigned to the image is related to the content of the image or not. The proposed system combines noisy crowdsourcing labels, image metadata and external resources.">LIA@MediaEval 2013 Crowdsourcing Task: Metadata or not Metadata? That is a Fashion Question</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Mohamed Bouallegue, Georges Linar&egrave;s et Driss Matrouf<br />
				<i><a href="http://www.multimediaeval.org/mediaeval2013/crowd2013/" target="_blank"><font color="4C9900"><b>MEDIAEVAL 2013</b></font></a></i><br />
				18-19 Octobre 2013, Barcelone (Espagne)

			</p>

</li>
<li class="sp">
			<p>
<workingNotes/>
			<strong><a href="../articles/mediaEvalMusicClef2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: In this paper, we describe the LIA system proposed for the MediaEval 2013 Soundtrack task. The aim is to predict the most suitable soundtrack from a list of candidate songs, given a TV commercial. The organizers provide a development dataset including multimedia features. The initial assumption of the proposed system is that commercials which sell the same type of product, also share the same music rhythm. A two-fold system is proposed to provide a music for a commercial: find commercials with close subjects in order to determine the mean rhythm of this subset, and then extract from the candidate songs the musics which better correspond to this mean rhythm.">LIA@MediaEval 2013 MusiClef Task: A Combined Thematic and Acoustic Approach</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour, Mohamed Bouallegue, Georges Linar&egrave;s et Driss Matrouf<br />
				<i><a href="http://www.multimediaeval.org/mediaeval2013/soundtrack2013/" target="_blank"><font color="4C9900"><b>MEDIAEVAL 2013</b></font></a></i><br />
				18-19 Octobre 2013, Barcelone (Espagne)

			</p>
</li>
<li class="sp">

			<p>
<workingNotes/>
			<strong><a href="../articles/mediaEvalSpokenWebSearch2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: In this paper, we describe the LIA system proposed for the MediaEval 2013 Crowdsourcing for Social Multimedia task. The aim is to associate an accurate label to an image among multiple noisy labels collected from a crowdsourcing platform. In particular, the task participants have to predict two types of binary labels for each considered image. The first one mentions that an image is truly fashion-related or not, while the second label indicates that the fashion tag assigned to the image is related to the content of the image or not. The proposed system combines noisy crowdsourcing labels, image metadata and external resources."> LIA@MediaEval 2013 Spoken Web Search Task: An I-Vector based Approach</span></a></strong><br />
				Mohamed Bouallegue, Gr&eacute;gory Senay, <b><font color="000000">Mohamed Morchid</font></b>, Driss Matrouf, Georges Linar&egrave;s et Richard Dufour<br />
				<i><a href="http://www.multimediaeval.org/mediaeval2013/sws2013/" target="_blank"><font color="4C9900"><b>MEDIAEVAL 2013</b></font></a></i><br />
				18-19 Octobre 2013, Barcelone (Espagne)

			</p>
</li>
<li class="sp">

			<p>
<workingNotes/>
				<strong><a href="../articles/clef2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: In this paper, we present the participation of the Computer Science Laboratory of Avignon (LIA) to RepLab 2013 edition. RepLab is an evaluation campaign for Online Reputation Management Systems. LIA has produced a important number of experiments for every tasks of the campaign: filtering, topic priority detection, Polarity for Reputation and topic detection. Our approaches rely on a large variety of machine learning methods. We have chosen to mainly exploit tweet contents. In several of our experiments we have also added selected metadata. A fewer number of our proposals have integrated external information by using provided links to Wikipedia and users homepage.">LIA@RepLab 2013</span></a></strong><br />
Jean-Val&egrave;re Cossu, Benjamin Bigot, Ludovic Bonnefoy, <b><font color="000000">Mohamed Morchid</font></b>, Xavier Bost, Gr&eacute;gory Senay, Richard Dufour, Vincent Bouvier, Juan-Manuel Torres-Moreno et Marc El-B&egrave;ze<br />
				<i><a href="http://www.limosine-project.eu/events/replab2013" target="_blank"><font color="4C9900"><b>An evaluation campaign for Online Reputation Management Systems (CLEF) 2013</b></font></a><br /></i>
 23-26 Septembre 2013, Valence (Espagne)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
<li class="fr">

			<p>
<workingNotes/>
				<strong><a href="../articles/deft2013_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: The 2013 D&eacute;fi de Fouille de Textes (DEFT) campaign is interested in two types of language analysis tasks, the document classification and the information extraction in the specialized domain of cuisine recipes. We present the systems that the LIA has used in DEFT 2013. Our systems show interesting results, even though the complexity of the proposed tasks.">Syst&egrave;mes du LIA à DEFT'13</span></a></strong><br />
				Xavier Bost, Ilaria Brunetti, Luis Adrian Cabrera-Diego, Jean-Val&egrave;re Cossu, Andr&eacute;a Linhares, <b><font color="000000">Mohamed Morchid</font></b>, Juan-Manuel Torres-Moreno, Marc El-B&egrave;ze et Richard Dufour<br />
				<i><a href="http://deft.limsi.fr/" target="_blank"><font color="4C9900"><b>D&eacute;fi Fouille de Texte (TALN/RECITAL/DEFT) 2013</b></font></a></i><br />
				17-21 Juin 2013, Sables d’Olonne (France)
			</p>
</li>
</ul>
			<!-- 2012 INTER WORKSHOPS -->

			<p><strong>2012</strong></p>

<ul class="publication">
<li class="it">
			<p>
<workingNotes/>
				<strong><a href="../articles/clef2012_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: In this paper, we present a method of tweet contextualization by using a semantic space to extend the tweet vocabulary. This method is evaluated on the tweet contextualization benchmark. Contextualization is build with the sentences from English Wikipedia. The context is obtained by querying a baseline system of summary. The query is made with words from a semantic space that is estimated via a latent dirichlet allocation (LDA) algorithm. Our experiment demonstrate the effectiveness of the proposal.">INEX 2012 Benchmark A Semantic Space for Tweet Contextualization</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://clef2012.org/index.php?page=Pages/proceedings.php" target="_blank"><font color="4C9900"><b>Workshop of the Initiative for the Evaluation of XML Retrieval (CLEF) 2012</b></font></a></i><br />
				17-20 Septembre 2012, Rome (Italie)
			</p>
</li>
</ul>

			<!-- 2011 INTER WORKSHOPS -->
			<p><strong>2011</strong></p>

<ul class="publication">
<li class="it">
			<p>
<workingNotes/>
			<strong><a href="../articles/mediaEval2011_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: This article presents two methods for the automatic detection of social events that were evaluated on the annotated set of pictures as part of the 2011 Mediaeval benchmark. The first method uses a set of web pages and a semantic space obtained by Latent Dirichelet Allocation (LDA) to classify pictures from Flickr. The second approach uses the query to extract a subset of pictures and classify this subset. Theses approches are compared in the experimental framework of Mediaeval 2011 Social Event Detection task.">Mediaeval Benchmark: Social Event Detection using LDA and External Resources</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://www.multimediaeval.org/mediaeval2011/" target="_blank"><font color="4C9900"><b>MEDIAEVAL 2011</b></font></a></i><br />
				1-2 Septembre 2011, Pise (Italie)

			</p>
</li>
</ul>
    
            <!-- PRESENTAIONS ... -->

			<br>
			<h4><b><a name="presentations" class="lienInterne">Presentations et Invitations</a></b></h4><!--  ( <? echo getNumberOfPapers("presentations_talks") ?> )</a></b></h4> -->

    		<!-- 2019 -->
    
            <p><strong>2019</strong></p>
            <ul class="publication">
                <li class="fr">
                        <p>
                <presentations_talks/>
                            <strong><a href="https://www.researchgate.net/publication/335397190_Artificial_Intelligence_A_Tale_of_Social_Responsibility?fbclid=IwAR3rdKVwUkL6yw6FgOAC2xPrH9XIhb12WX88u_CRjPsvsOq6jxphP9gYgP8" target="_blank"><span TITLE="Abstract: Conversely to the legislation that struggles to develop, regulate and supervise the use of artificial intelligence (AI), the civil society, that gradually realizes the fundamental issues and perspectives induced by this new technology, slowly starts to take responsibility and to mobilize. Social responsibility expresses itself through the emergence of new voluntary standards, that could integrate the concept of social good with the use of AI. More precisely, this paper proposes to develop three axes of tools for the social responsibility in AI, including stakeholder awareness, the integration of ethical and technical standards to induce good behaviors, and the incitement to a responsible AI.">Artificial Intelligence: A Tale of Social Responsibility</span></a></strong><br />Cécilia Darnault, Titouan Parcollet et <b><font color="000000">Mohamed Morchid</font></b><br />

                            <i><a href="https://lbnc.univ-avignon.fr/programme-humania-en-avignon/" target="_blank"><font color="4C9900"><b>Human IA 2019</b></font></a></i><br />26-28 Novembre 2019, Avignon (France)
                        </p>
                </li>
            </ul>
    
			<!-- 2015 -->
    
            <p><strong>2015</strong></p>
    
<ul class="publication">
<li class="fr">
			<p>
                <presentations_talks/>
				<strong><a href="../articles/journeeAIIA_mohamed_morchid.pdf" target="_blank"><span TITLE="Abstract: Bursty event prediction">Structuration des Flux TV : Etat de l’Art</span></a></strong><br />
				Mohamed Bouaziz, <b><font color="000000">Mohamed Morchid</font></b>, Richard Dufour et Georges Linar&egrave;s<br />
				<i><a href="https://www.weezevent.com/journee-commune-ia-et-ri" target="_blank"><font color="4C9900"><b>Journ&eacute;e commune AFIA - ARIA 2015 : Intelligence artificielle et Recherche d'Information</b></font></a><br /></i>
 1 D&eacute;cembre 2015, Paris (France)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
</ul>
    

    			<p><strong>2012</strong></p>
<ul class="publication">
<li class="br">
			<p>
                <presentations_talks/>
				<strong><a href="http://webscience.org.br/wiki/index.php/Main_Page" target="_blank"><span TITLE="Abstract: Bursty event prediction">Bursty Event Prediction by Content-based Approach</span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b> et Georges Linar&egrave;s<br />
				<i><a href="http://webscience.org.br/wiki/index.php/Main_Page" target="_blank"><font color="4C9900"><b>Third Workshop of the Brazilian Institute for Web Science Research 2012</b></font></a><br /></i>
 3-5 D&eacute;cembre 2012, Rio de Janeiro (Br&eacute;sil)
				<!-- <br />
				Acceptance rate: 67% -->
			</p>
</li>
</ul>
    
    
			<!-- THESES ... -->


			<br>
			<h4><b><a name="thesis" class="lienInterne"></a>Th&egrave;se de doctorat et HDR</b></h4><!--  ( <? echo getNumberOfPapers("nationalThesis") ?> )</a></b></h4> -->
			<p><strong>2019</strong></p>
			<ul class="publication">
			<li class="fr">

                 <p><nationalThesis/>
                    <strong><a href="https://tel.archives-ouvertes.fr/tel-02398814/document" target="_blank"><span TITLE="Abstract: This dissertation presents my recents efforts on both neural networks based methods and algorithms, and their applications on real-world tasks for Natural Language Processing (NLP). This document is organized following my different points of interest from hitherto proposed real-valued neural networks applied to challenging NLP related tasks, to novel complex-valued neural based architectures that seek to address the recent issues related to the learning process. The document presents my main achieve- ments and is organized as follow:Real-valued Neural Networks. Nowadays, NLP tasks employ massively Neural Net- works (NN) based algorithms to solve challenging real-world tasks and the document introduces novel NNs for considering multiple input streams of information during the learning process to better predict the desired output, studies the impact of noisy documents from an Automatic Speech Recognition (ASR) system on an encoder-decoder that extracts robust features from spoken documents. Quaternion-valued Neural Networks. Real-valued NN hardly handle inter- and intra-dependencies between input features during the learning. We propose novel Quaternion-valued neural networks (QNN) that consider inter-dependencies between the input features as well as the dependencies between basic elements composing a given feature. In this document we present a Quaternion-valued Convolutional Neural Network (QCNN) that consider alongside the convolution process (inter-dependencies) and the latent relations between basic elements of each feature (inter-dependencies), introduce the Quaternion-valued Recurrent Neural Network (QRNN) to encode multi-dimensional input sequences from speech signal. Ongoing works and futur directions. Real-valued and Quaternion-valued neural networks are difficult to learn since the amount of data required for learning is potentially large, even huge; moreover, these models are also employed to generate unseen information such as images or documents. Among these models, generative adversarial networks (GAN) have encountered a large success in different natural language processing (NLP) related tasks. Nonetheless, these models are unstable during the learning process. This part introduces novel parsimonious neural networks that better handle large corpora and consider the long-term dependencies, stuies the impact of manual transcripts on automatically transcripts of spoken docu- ments during a NLP task with GAN mapping approach.">Réseaux de Neurones pour le Traitement Automatique du Langage</span></a></strong><br />
                    <b><font color="000000">Mohamed Morchid</font></b><br />
                    <i><a href="https://tel.archives-ouvertes.fr/tel-02398814/document" target="_blank"><font color="4C9900"><b>Habilitation à Diriger des Recherches (HDR)</b></font></a></i><br />
                    26 Novembre 2019, Avignon (France)
                </p>
            </li>
            </ul>
    
            <p><strong>2014</strong></p>
			<ul class="publication">
            <li class="fr">
                    
                <p><nationalThesis/>
                    <strong><a href="https://tel.archives-ouvertes.fr/tel-01202157/document" target="_blank"><span TITLE="En recherche d’information, les documents sont le plus souvent considérés comme des ''sacs-de-mots''. Ce modèle ne tient pas compte de la structure temporelle du document et est sensible aux bruits qui peuvent altérer la forme lexicale. Ces bruits pouvent être produits par différentes sources : forme peu contrôlée de messages issus du Web, messages vocaux dont la transcription automatique contient des erreurs... Le travail présenté dans cette thèse s’intéresse au problème de la représentation de documents issus de sources bruitées. Dans un premier temps, nous comparons une représentation classique, utilisant la fréquence des mots, à une représentation de haut niveau s’appuyant sur un espace de thèmes. Le problème majeur d’une telle représentation est qu’elle est fondée sur un espace de thèmes dont les paramètres sont choisis empiriquement. Nous décrivons ensuite une représentation originale qui s’appuie sur des espaces multiples pour résoudre trois problèmes majeurs : la proximité des sujets traités dans le document, le choix difficile des paramètres du modèle de thèmes ainsi que la robustesse de la représentation. Partant de l’idée qu’une seule représentation des contenus ne peut pas capturer l’ensemble des informations utiles, nous proposons d’augmenter le nombre de vues sur un même document. Cette multiplication des vues est efficace mais elle a l’inconvénient d’être très volumineuse, redondante et de contenir une variabilité additionnelle liée à la diversité des vues. Nous proposons de traiter ces problèmes avec une méthode basée sur l’analyse factorielle pour fusionner les vues multiples et obtenir une nouvelle représentation robuste, de dimension réduite, ne contenant que la partie ''utile'' du document tout en réduisant les variabilités ''parasites''. Enfin, lors de l’élaboration des espaces de thèmes, le document reste considéré comme un ''sac-de-mots'' alors que plusieurs études montrent que la position d’un terme au sein du document est importante. Une représentation basée sur les quaternions, tenant compte de cette structure temporelle du document est finalement proposée.">Repr&eacute;sentations robustes de documents bruit&eacute;s dans des espaces homog&egrave;nes</span></a></strong><br />
                    <b><font color="000000">Mohamed Morchid</font></b><br />
                    <i><a href="https://tel.archives-ouvertes.fr/tel-01202157/document" target="_blank"><font color="4C9900"><b>Doctorat en Informatique</b></font></a></i><br />
                    25 Novembre 2014, Avignon (France)<br />
                    Direction : <a href="https://cv.archives-ouvertes.fr/georges-linares" target="_blank"><font color="000000">Georges Linar&egrave;s</font></a> et <a href="https://cv.archives-ouvertes.fr/richard-dufour" target="_blank"><font color="000000">Richard Dufour</font></a>
                </p>
                
			</li>
			</ul>
    
    
<!--
			<p><strong>2011</strong></p>
<ul class="publication">
<li class="fr">

			<p>
				<strong><a href="../articles/MasterThesis.pdf" target="_blank"><span TITLE="Abstract: Except the video is increasingly the media most often used by Internet users and more generally by consumers of new technologies. Thus we will address in this paper the automatic unsupervised videos that will create the buzz. To do this our body consist of the Wikipedia database and news from AFP. Corpus to extract these concepts, we use LDA. We will propose a method for automatic detection of unsupervised concept in a multimedia document. We will expose a method for detection of concept 'sensitive' can lead to a buzz. We will see the advantage of topics in the texttitling and the tags extraction.">Pr&eacute;diction du <i>buzz</i></span></a></strong><br />
				<b><font color="000000">Mohamed Morchid</font></b><br />
				<i><a href="../articles/MasterThesis_mohamed_morchid.pdf" target="_blank"><font color="4C9900"><b>Master Thesis</b></font></a></i><br />
				Juin 2011, Avignon (France)<br />
				Advisor: <a href="http://lia.univ-avignon.fr/fileadmin/documents/Users/Intranet/chercheurs/linares/index.html" target="_blank"><font color="000000">Georges Linar&egrave;s</font></a>
			</p>
</li>
</ul>
-->

</br>
			<p>
				<strong>Copyright note:</strong></br>The documents distributed in this page are provided as a means to ensure timely dissemination of scholarly and technical work on a noncommercial basis. Copyright and all rights therein are maintained by the authors or by other copyright holders, notwithstanding that the works are offered here electronically. It is understood that all persons copying this information will adhere to the terms and constraints invoked by each author's copyright. These works may not be distributed without the explicit permission of the copyright holder.
			</p>

			<!--<p>
				<strong>Avertissement :</strong> Les papiers (brouillons) disponibles sont sujets aux droits des &eacute;diteurs. 
			</p>-->

		<!-- main ends -->
<?
include 'footer.php';
?>
