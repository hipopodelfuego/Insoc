let date2 = new Date("2024-09-26T23:59:59");
updateCountdown()

function updateCountdown() {
    let date1 = new Date();

    // Différence absolue en millisecondes
    let timeDiff = Math.abs(date2.getTime() - date1.getTime()); 

    let diffDays = Math.floor(timeDiff / (1000 * 60 * 60 * 24)); // Jours
    let diffHours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); // Heures
    let diffMinutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60)); // Minutes
    let diffSeconds = Math.floor((timeDiff % (1000 * 60)) / 1000); // Secondes

    document.getElementById("countdown").innerHTML = diffMinutes.toString().padStart(2, '0') + ":" + diffSeconds.toString().padStart(2, '0');
}

setInterval(updateCountdown, 1000);