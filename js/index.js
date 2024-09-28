let date2 = new Date("2024-09-30T23:59:59");
updateCountdown()

function updateCountdown() {
    let date1 = new Date();

    // Différence absolue en millisecondes
    let timeDiff = Math.abs(date2.getTime() - date1.getTime()); 

    let diffWeeks = Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 15)); // Semaines
    let diffDays = Math.floor(timeDiff / (1000 * 60 * 60 * 24)); // Jours
    let diffHours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); // Heures
    let diffMinutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60)); // Minutes
    let diffSeconds = Math.floor((timeDiff % (1000 * 60)) / 1000); // Secondes

    if(diffWeeks < 2){
        document.getElementById("electionsEnCours").classList.remove("disabled");
        document.getElementById("prochainesElections").classList.add("disabled");
        if(diffDays > 1){
            document.getElementById("countdown").innerHTML = diffDays + " jours";
        } else if (diffHours > 1) {
            document.getElementById("countdown").innerHTML = diffHours.toString().padStart(2, '0') + "h " + diffMinutes.toString().padStart(2, '0') + "m";
        } else {
            document.getElementById("countdown").innerHTML = diffMinutes.toString().padStart(2, '0') + "m " + diffSeconds.toString().padStart(2, '0') + "s";
        }
    } else {
        document.getElementById("electionsEnCours").classList.add("disabled");
        document.getElementById("prochainesElections").classList.remove("disabled");
    }
}

setInterval(updateCountdown, 1000);
