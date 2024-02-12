
function confirmAction() {
    // Display a confirmation dialog
    var userConfirmed = confirm("Are you sure you want to proceed?");

    // Check the user's choice
    if (userConfirmed) {
        console.log("Confirmed");
        // You can perform the action here after confirmation
    } else {
        console.log("Canceled");
        // You can handle the cancellation or perform an action if canceled
    }
}

