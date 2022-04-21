"use strict";

const RESET = '\u001b[0m';

const BLACK     = '\u001b[30m';
const RED       = '\u001b[31m';
const GREEN     = '\u001b[32m';
const YELLOW    = '\u001b[33m';
const BLUE      = '\u001b[34m';
const MAGENTA   = '\u001b[35m';
const CYAN      = '\u001b[36m';
const WHITE     = '\u001b[37m';

const BLACK_BG     = '\u001b[40m';
const RED_BG       = '\u001b[41m';
const GREEN_BG     = '\u001b[42m';
const YELLOW_BG    = '\u001b[43m';
const BLUE_BG      = '\u001b[44m';
const MAGENTA_BG   = '\u001b[45m';
const CYAN_BG      = '\u001b[46m';
const WHITE_BG     = '\u001b[47m';

function red(text){
    return RED + text + RESET;
}

function green(text){
    return GREEN + text + RESET;
}

function yellow(text){
    return YELLOW + text + RESET;
}

function blue(text){
    return BLUE + text + RESET;
}

function cyan(text){
    return CYAN + text + RESET;
}

function magenta(text){
    return MAGENTA + text + RESET;
}

function white(text){
    return WHITE + text + RESET;
}

function black(text){
    return BLACK + text + RESET;
}

function redBG(text){
    return RED_BG + text + RESET;
}

function greenBG(text){
    return GREEN_BG + text + RESET;
}

function yellowBG(text){
    return YELLOW_BG + text + RESET;
}

function blueBG(text){
    return BLUE_BG + text + RESET;
}

function cyanBG(text){
    return CYAN_BG + text + RESET;
}

function magentaBG(text){
    return MAGENTA_BG + text + RESET;
}

function whiteBG(text){
    return WHITE_BG + text + RESET;
}

function blackBG(text){
    return BLACK_BG + text + RESET;
}

console.log(redBG('coucou'));
console.log(green('test'));



