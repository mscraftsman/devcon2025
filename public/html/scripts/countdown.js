// Set the target date and time
const targetDate = new Date("2025-07-24T09:00:00+04:00");

function updateCountdown() {
    const now = new Date(); // Get the current local time
    const timeDiff = targetDate - now; // Difference in milliseconds

    if (timeDiff <= 0) {
        // If the countdown is over, set everything to zero
        document.getElementById("days").textContent = "0";
        document.getElementById("hours").textContent = "0";
        document.getElementById("minutes").textContent = "0";
        document.getElementById("seconds").textContent = "0";
        return;
    }

    // Calculate time components
    const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    // Update the countdown display
    document.getElementById("days").textContent = days;
    document.getElementById("hours").textContent = hours;
    document.getElementById("minutes").textContent = minutes;
    document.getElementById("seconds").textContent = seconds;
}

// Update the countdown every second
setInterval(updateCountdown, 1000);

// Run the countdown once immediately to avoid a 1-second delay
updateCountdown();