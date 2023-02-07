	<?php
	// Obtenez les 4 produits récemment ajoutés 
	$stmt = $pdo->prepare('SELECT * FROM produits ORDER BY date_ajou DESC LIMIT 4');
	$stmt->execute();
	$recently_added_produits = $stmt->fetchAll(PDO::FETCH_ASSOC);?>	
	<?=template_header('Home')?>
	<div class="featured">
	    <h2>Téléphone</h2>
	    <p>Accessoires Téléphone</p>
	</div>
	<div class="recentlyadded content-wrapper">
	    <h2>produits recemment ajoutés</h2>
	    <div class="produits" width="100%"><table style="margin: auto;"><tr>
	        <?php foreach ($recently_added_produits as $produit): ?>
	        <td><a href="index.php?page=produit&id=<?=$produit['id']?>" class="produit">            <img src="imgs/<?=$produit['img']?>" width="150" height="150" alt="<?=$produit['nom']?>"><br>
	            <span class="name"><?=$produit['nom']?></span><br>
	            <span class="price">
	                FCFA;<?=$produit['prix']?>
	                <?php if ($produit['prix_Réel'] > 0): ?>
	                <span class="prix_Réel">FCFA;<?=$produit['prix_Réel']?></span>                <?php endif; ?>
	            </span>
	        </a></td>
	        <?php endforeach; ?>
	               </tr></table>
	    </div></div> </main>
	        <footer>
			<?php
			$year = date('Y');
			?>
	            <div class="content-wrapper">
	<p>&copy;  <?=$year;?>, Système de panier d'achats</p>
	            </div>
	        </footer>

	<?=include_once('java.php');?>
	

	
