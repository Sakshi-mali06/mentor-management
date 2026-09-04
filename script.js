function checkForm() {

    var name = document.getElementById("mentorName").value;
    var id = document.getElementById("employeeId").value;
    var department = document.getElementById("department").value;
    var mentee = document.getElementById("mentee").value;
    var photo = document.getElementById("photo").value;


    if (name == "") {

        alert("Mentor Name is required");

        return false;
    }


    if (id == "") {

        alert("Employee ID is required");

        return false;
    }


    if (department == "") {

        alert("Please select Department");

        return false;
    }


    if (mentee == "" || mentee <= 0) {

        alert("Mentee allowed must be positive");

        return false;
    }


    if (photo != "") {

        if (!photo.endsWith(".jpg") && !photo.endsWith(".png")) {

            alert("Photo must be JPG or PNG");

            return false;
        }
    }


    return true;
}

