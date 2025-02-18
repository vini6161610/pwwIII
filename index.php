<?php 
include './header.php';
?>
<?php 
class Pokemon {
public $nome; //Atribute | Property
public $poder;
public $foto;
}
$pokemon1 = new Pokemon(); // create instance
$pokemon1->nome = 'Pikachu';
$pokemon1->poder = 'Poder Eletrizante';
$pokemon1->foto = 'https://img.pokemondb.net/artwork/large/pikachu.jpg';

$pokemon2 = new Pokemon(); // create instance
$pokemon2->nome = 'Charizard';
$pokemon2->poder = 'Poder de Fogo Ardente';
$pokemon2->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png';

$pokemon3 = new Pokemon(); // create instance
$pokemon3->nome = 'Squirtle';
$pokemon3->poder = 'Poder Mágico';
$pokemon3->foto = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLocjkhXmzVwNYEuU7ecTgdP_bwD7ouz6u-A&s';

$pokemon4 = new Pokemon(); // create instance
$pokemon4->nome = 'Bulbasaur';
$pokemon4->poder = 'Poder Vegetal';
$pokemon4->foto = 'https://img.pokemondb.net/artwork/large/bulbasaur.jpg';

$pokemon5 = new Pokemon(); // create instance
$pokemon5->nome = 'Jigglypuff';
$pokemon5->poder = 'Canto Hipnótico';
$pokemon5->foto = 'https://img.pokemondb.net/artwork/large/jigglypuff.jpg';

$pokemon6 = new Pokemon(); // create instance
$pokemon6->nome = 'Eevee';
$pokemon6->poder = 'Poder de Evolução';
$pokemon6->foto = 'https://img.pokemondb.net/artwork/large/eevee.jpg';

$pokemon7 = new Pokemon(); // create instance
$pokemon7->nome = 'Meowth';
$pokemon7->poder = 'Poder de Roubalheira';
$pokemon7->foto = 'https://img.pokemondb.net/artwork/large/meowth.jpg';

$pokemon8 = new Pokemon(); // create instance
$pokemon8->nome = 'Snorlax';
$pokemon8->poder = 'Poder de Sono Profundo';
$pokemon8->foto = 'https://img.pokemondb.net/artwork/large/snorlax.jpg';

$pokemon9 = new Pokemon(); // create instance
$pokemon9->nome = 'Lucario';
$pokemon9->poder = 'Poder Aura';
$pokemon9->foto = 'https://img.pokemondb.net/artwork/large/lucario.jpg';

$pokemon10 = new Pokemon(); // create instance
$pokemon10->nome = 'Mewtwo';
$pokemon10->poder = 'Poder Psíquico';
$pokemon10->foto = 'https://img.pokemondb.net/artwork/large/mewtwo.jpg';

$pokemon11 = new Pokemon(); // create instance
$pokemon11->nome = 'Gengar';
$pokemon11->poder = 'Poder Fantasmagórico';
$pokemon11->foto = 'https://img.pokemondb.net/artwork/large/gengar.jpg';

$pokemon12 = new Pokemon(); // create instance
$pokemon12->nome = 'Blastoise';
$pokemon12->poder = 'Poder Hidráulico';
$pokemon12->foto = 'https://img.pokemondb.net/artwork/large/blastoise.jpg';

$pokemon13 = new Pokemon(); // create instance
$pokemon13->nome = 'Arcanine';
$pokemon13->poder = 'Poder Fogo Intenso';
$pokemon13->foto =null;

$pokemons = [
$pokemon1,
$pokemon2,
$pokemon3,
$pokemon4,
$pokemon5,
$pokemon6,
$pokemon7,
$pokemon8,
$pokemon9,
$pokemon10,
$pokemon11,
$pokemon12,
$pokemon13
];
?>
  <div class="container">
    <div class="row">
      <?php 
    
       foreach ($pokemons as $index => $pokemon) {      ?>
       <!-- pikachu -->
       <div class="col-12 col-lg-3 p-3">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo  $pokemon->foto ? $pokemon->foto: 'https://www.buritama.sp.leg.br/imagens/parlamentares-2013-2016/sem-foto.jpg/image';?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php  echo $pokemon->nome;?></h5>
            <p class="card-text"><?php echo $pokemon->poder;?></p>
            <a href="pikachu.php" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
      <?php } ?>
 
     
    
    </div>
  </div>
    
  <?php
  include './footer.php'
  ?>