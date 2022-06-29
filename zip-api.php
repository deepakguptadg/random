<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bihar-ZipCode-Api</title>
</head>
<body>
    <input type="text" id="text">
    <button onclick="submit()">submit</button>

    <table id="table_data">

    </table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function submit(){
        var text = jQuery('#text').val();
        $.ajax({
            url: 'https://api.postalpincode.in/pincode/' + text,
            type: 'GET',
            success: function(response){
                console.log(response[0]['PostOffice'][0]);
                console.log(response[0]['PostOffice'][0]['Block']);
                console.log(response[0]['PostOffice'][0]['Name']);
                console.log(response[0]['PostOffice'][0]['District']);
                console.log(response[0]['PostOffice'][0]['State']);
                console.log(response[0]['PostOffice'][0]['DeliveryStatus']);
            }
        });
    }
</script>
</body>
</html>