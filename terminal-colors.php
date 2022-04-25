<?php
const EOL           = "\n"; //on rentre dans une constante le retour à la ligne on l'appellle EOL qui signifie End Of Line

const RESET         = "\033[0m";

const BLACK         = "\33[30m";
const RED           = "\33[31m";
const GREEN         = "\33[32m";
const YELLOW        = "\33[33m";
const BLUE          = "\33[34m";
const MAGENTA       = "\33[35m";
const CYAN          = "\33[36m";
const WHITE         = "\33[37m";

const BLACK_BG      = "\33[40m";
const RED_BG        = "\33[41m";
const GREEN_BG      = "\33[42m";
const YELLOW_BG     = "\33[43m";
const BLUE_BG       = "\33[44m";
const MAGENTA_BG    = "\33[45m";
const CYAN_BG       = "\33[46m";
const WHITE_BG      = "\33[47m";

// le symbole dollar permet de déclarer ma variable
// pour utiliser une variable dans une fonction qui n'est pas déclarer dans la fonction, il faut ajouter le mot "global" devant ex : global $maVar;
// le point permet la concaténation
// "\n"; il s'agit d'un retour chariot (retour à la ligne)

function red($text){
return RED . $text . RESET . EOL;
}

// echo RED ("Hello\n");

function green($text){return GREEN.$text.RESET;}
function yellow($text){return YELLOW.$text.RESET;}
function blue($text){return BLUE.$text.RESET;}
function magenta($text){return MAGENTA.$text.RESET;}
function cyan($text){return CYAN.$text.RESET;}
function white($text){return WHITE.$text.RESET;}

function blackBG($text){return BLACK_BG.$text.RESET;}
function redBG($text){return RED_BG.$text.RESET;}
function greenBG($text){return GREEN_BG.$text.RESET;}
function yellowBG($text){return YELLOW_BG.$text.RESET;}
function blueBG($texte){return BLUE_BG.$texte.RESET.EOL;}
function magentaBG($texte){return MAGENTA_BG.$texte.RESET.EOL;}
function cyanBG($texte){return CYAN_BG.$texte. RESET.EOL;}
function whiteBG($texte){return WHITE_BG.$texte.RESET.EOL;}

// echo yellow("Hello") . EOL;

// echo cyanBG("Hello");