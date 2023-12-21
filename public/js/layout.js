const dropdownMenuButton = document.querySelector("#dropdown-menu-button");
const menuDropdown = document.querySelector("#menu-dropdown");
const trigger = document.querySelector("#trigger");
const notificationBell = document.getElementById("notification-bell");

// On a click of the menu
dropdownMenuButton.addEventListener("click", function () {
    // Change menu's state (Display the menu)
    changeDropdownMenuState();
    // Add an event for an outside click
    window.addEventListener("click", onClickAway);
});

function changeDropdownMenuState() {
    // Toggle visibility of the dropdown menu
    menuDropdown.classList.toggle("hidden");
}

const onClickAway = (e) => {
    // If dropdown menu is not the target
    if (e.target != trigger) {
        // Change the menu's state
        changeDropdownMenuState();
        // Remove the 'away click' listener
        window.removeEventListener("click", onClickAway);
    }
};

notificationBell.addEventListener("click", () => {
    alert("Newsletter is coming soon. Please check back later!");
});
