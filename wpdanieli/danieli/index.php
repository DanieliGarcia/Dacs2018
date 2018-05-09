
 
<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: purple;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<?php

	//if(have_posts()) : while (have_posts()) : the_post();
		//the_title();
			//the_content();
		//endwhile;
	//endif

	
	$diretorio = get_template_directory_uri();

	echo "<image src='$diretorio/gin.jpg'>";
	query_posts('cat=1&tag=livro_wordpress&author=18showpost=3');
	comment_form();

   if(have_posts()){
       while (have_posts()){
       	   the_post();
       	   the_title();
       	   the_content();
       	   
    	   $comments = get_comments(array(
            'post_id' => $postid,
            'status' => 'approve' //Change this to the type of comments to be displayed
           ));
           wp_list_comments(array(
	            'per_page' => 10, //Allow comment pagination
	            'reverse_top_level' => false //Show the latest comments at the top of the list
	       ), $comments);
       }
   }
?>

<?php
   if(have_posts()){
       while (have_posts()){
       	   the_post();
       	   the_title();
       	   the_content();
       	   
    	   $comments = get_comments(array(
            'post_id' => $postid,
            'status' => 'approve' //Change this to the type of comments to be displayed
           ));
           wp_list_comments(array(
	            'per_page' => 10, //Allow comment pagination
	            'reverse_top_level' => false //Show the latest comments at the top of the list
	       ), $comments);
       }
   }
?>
<div class="flex-container">
<header>
  <h1>Ginástica Ritmica Desportiva</h1>
</header>

<nav class="nav">
<ul>
  <li><a href="#">Joinville</a></li>
  <li><a href="#">Toledo</a></li>
  <li><a href="#">São Paulo</a></li>
  <h2>Cadastre-se aqui</h2>
        <form method="POST" action="saveginasta.php">
        	<label>Nome:</label>
        	<input type="text" name="nome"/><br>
        	<label>Endereco:</label>
        	<input type="text" name="endereco"/><br>
        	<input type="submit" name="Enviar"/>
		

        </form>
  
</ul>
</nav>

<article class="article">
  <h1>Joinville</h1>
  <p>Joinville é considerada a capital da dança em Santa Catarina. </p>
  
</article>

</div>
<footer>Copyright &copy; Danieli.com</footer>



</body>
</html>

