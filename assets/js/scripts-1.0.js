function SaveData(updateKey = 0) {
    var form = document.getElementById('data-form')

    if (form.checkValidity()) {
        var formData = new FormData(form)
        formData.append('updateKey', updateKey)

        function fetch_data() {
            $.ajax({
                url: 'method/save-data.php',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    var response = JSON.parse(data)
                    if (response.status === 'success') {
                        var result = response.message
                    } else {
                        var result = response.message
                    }
                    alert(result)
                    document.getElementById('form-box').style.display = 'none';
                }
            })
        }
        fetch_data()
    } else {
        result = 'Please Filled out All * marked Fields.'
        alert(result)
    }
}


function AddNewUser(updateKey = 0) {

    function fetch_data() {
        $.ajax({
            url: 'method/form.php',
            method: 'POST',
            data: {
                updateKey: updateKey
            },
            success: function(data) {
                $('#form-box').html(data)
                document.getElementById('form-box').style.display = 'flex';
            }
        })
    }
    fetch_data()
}