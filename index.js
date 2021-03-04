//Login---------------------------------------------------------
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//Google prevention--------------------------------------------
//Prevent google warning about information being entered again when refreshing
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

//Pop up warning if a customer wants to access selling or basket but hasnt logged in
function LoginError(){
    alert("This feature requires you to log in!")
}
