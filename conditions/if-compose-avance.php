<?php
/*****************************************/
/********** Conditions Avancées *********/
/*****************************************/
echo "CONDITIONS COMPOSEES AVANCEES <br><br><br>";

$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

echo "1.Est ce que c'est mon chat ? ";
echo "<br>";
echo "Mon chat est vivant, de couleur blanc et a les yeux Vert";
echo "<br>";
if($animal == "Chat" && $vivant && $couleur = "Blanc" && $yeux = "Vert"){
  echo "Oui";
}else{
  echo "Non";
}
echo "<br><br>";

//----------------------------------------
/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
$animal = "Serpent";
$vivant = false;
$couleur = "Blanc";
$yeux = "Vert";
echo "1.Est-ce que c'est un animal fait l'affaire ? ";
if($animal == "Serpent" && $vivant == false && $couleur = "Blanc" && $yeux = "Vert"){
    echo "Oui";
}else{
    echo "Non";
}
echo "<br>";
$animal = "Chien";
$vivant = true;
$couleur = "Marron";
$yeux = "Vert";
echo "Je veux un chien ou chat couleur marron avec des yeux verts ";
if($animal == "Chien" && $vivant == true && $couleur = "Marron" && $yeux = "Vert"){
    echo "Oui";
}else{
    echo "Non";
}
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Marron";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if( $animal == "Chat" && $vivant == true && $couleur = "Marron" && $yeux = "Vert" ){
  echo 'Oui';
}
else {
  echo 'Non';
}
echo "<br><br>";


// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "2.Est ce que c'est un de mes chat ? ";
$animal = "Chat";
$vivant = true;
$couleur = "Marron";
$yeux = "Violet";
if( $animal == "Chien" && $vivant == true && $couleur = "Marron" && $yeux = "Bleu" ){
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br>";
echo "Un de mes chat est vivant, a des yeux verts et est de couleur marron. Et l'autre est aussi vivant, de couleur Blanc et des yeux verts  ";
$animal = "Chat";
$vivant = true;
$couleur = "Marron";
$yeux = "Vert";
if( $animal == "Chat" && $vivant == true && $couleur = "Marron" && $yeux = "Vert"){
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if( $animal == "Chat" && $vivant == true && $couleur = "Blanc" && $yeux = "Vert" ){
  echo 'Oui';
}
else {
  echo 'Non';
}
echo "<br><br>";

//----------------------------------------
// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "3.Est ce que c'est un de mes animaux ? ";
$animal = "Chèvre";
$vivant = true;
$couleur = "Blanc";
$yeux = "Noir";
if( $animal == "Chèvre" && $vivant == false && $couleur = "Blanc" && $yeux = "Noir" ){
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br>";
echo "J'avais un chien de couleur noir avec des yeux bleus. J'ai un chat de couleur orange et des yeux bleus et un chien de couleur marron et des yeux bleus ";
echo "<br>";

$animal = "Chien";
$vivant = false;
$couleur = "Noir";
$yeux = "Bleus";

/** remplacer le chiffre 0 par les bonnes conditions **/
if( $animal == "Chien" && $vivant == false && $couleur = "Noir" && $yeux = "Bleus" ){
  echo 'Oui';
}
else {
  echo 'Non';
}
echo "<br><br>";
//----------------------------------------
