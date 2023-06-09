function handleClick(id, check) {
    // You can perform some client-side validation or other operations here

    // If you want to prevent the form from submitting and handle the logic asynchronously
    // without reloading the page, you can use AJAX to send the data to a PHP script.
    // Alternatively, if you want to submit the form and handle the logic in a separate PHP file,
    // you can remove the onclick attribute from the input element and let the form submit naturally.

    // Example using AJAX:
    // Send the data to a PHP script using AJAX
    // console.log(e)
    var ch = check.hasAttribute("checked");
    console.log(ch);


    let data = {
        id: id,
        check: ((!ch).toString()),
        // Add more key-value pairs as needed
    };

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "handle.php", true);
    xhr.setRequestHeader("Content-type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the server's response
            // console.log(xhr.responseText);
            location.reload();

        }
    };

    xhr.send(JSON.stringify(data));


// Return false to prevent the form from submitting
    return false;
}

function handleDelete(id) {
    let data = {
        id: id,
    };

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "app/delete.php", true);
    xhr.setRequestHeader("Content-type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the server's response
            // console.log(xhr.responseText);
            location.reload();

        }
    };

    xhr.send(JSON.stringify(data));


// Return false to prevent the form from submitting
    return false;
}