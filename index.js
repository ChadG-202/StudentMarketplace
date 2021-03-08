//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

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

function soldError(){
    alert("Sorry, this product has been sold!")
}

function InBasketError(){
    alert("Sorry, this item is already in your basket!")
}

function WrongPasswordError(){
    alert("Wrong Password!")
}

//Get list item id---------------------------------------------
function reply_click(clicked_id)
{
    window.location.href="recentlyViewedAdd.php?uid="+clicked_id;
}

function delete_click(clicked_id)
{
    window.location.href="basketDelete.php?uid="+clicked_id;
}