function generateButtons (a,z) {
    var i = a.charCodeAt(0), j = z.charCodeAt(0);
    var letter = '';

    for( ; i<=j; i++) {
        letter = String.fromCharCode(i).toUpperCase();
        document.getElementById("buttons").innerHTML += "<button value='" + letter + "' onclick='try_letter(\"" + letter + "\")' class='letter' id='"+letter+"'>" + letter + "</button>";
    }

}
function startGame() {
    generateButtons ('0', '9');

}

// Al cargar la ventana, cargamos la funcion startGame
window.onload = startGame();