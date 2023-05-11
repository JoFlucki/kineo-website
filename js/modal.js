function hideModal() {
    console.log("hideModal()");
    var modal = document.getElementById("modal");
    modal.classList.add('hidden');
    document.body.style = "overflow-y : visible";
}

function showModal() {
    console.log("showModal()");
    var modal = document.getElementById("modal");
    modal.classList.remove('hidden');
}

var intervalId = setInterval(function () {
    //alert("Interval reached every 5s")
}, 5000);

var displayModal = true;
