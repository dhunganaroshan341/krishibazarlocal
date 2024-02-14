<?php
function imageUpload($image) {
    // Check if file was uploaded without errors
    if ($image['error'] === UPLOAD_ERR_OK) {
        // Generate a unique identifier
        $uniqueIdentifier = uniqid();

        // Retrieve the original filename
        $originalFileName = pathinfo($image['name'], PATHINFO_FILENAME);

        // Retrieve the file extension
        $fileExtension = pathinfo($image['name'], PATHINFO_EXTENSION);

        // Construct the new filename using a combination of the unique identifier and original filename
        $fileName = $uniqueIdentifier . '_' . $originalFileName . '.' . $fileExtension;

        // Construct the destination file path
        $destinationFilePath = '../../public/images/products/' . $fileName;

        // Move the file to the desired location
        if (move_uploaded_file($image['tmp_name'], $destinationFilePath)) {
            // File was successfully uploaded
            return $fileName; // Return the filename
        } else {
            // Failed to move the file
            return false;
        }
    } else {
        // Error occurred during file upload
        return false;
    }
}
