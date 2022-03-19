window.addEventListener("load", function() {
    setTimeout(
        function open(event) {
            document.querySelector(".popup").style.display = "block";
        },
        100
    )
});


document.querySelector("#close").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
});

// function changeClass() {
//     document.getElementById('outsidebg').className = "popup_outside_white";
//     document.getElementById('faded').className = "";
// }