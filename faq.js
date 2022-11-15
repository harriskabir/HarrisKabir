const accordion = document.getElementsByClassName("content-box");

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
        this.classList.toggle('active')
    })
}

function createAlert() {
    alert("Coming soon, still in early stages of my career at the moment!")
}