<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Gacha System</title>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
</head>  
<body>  

<h1>Gacha System</h1>  
<button id="draw-button">Draw Item</button>  

<div id="result"></div>  

<script>  
    $(document).ready(function () {  
        $('#draw-button').on('click', function () {  
            $.ajax({  
                url: '{{ route("job_info.draw") }}',  
                type: 'POST',  
                data: {  
                    _token: '{{ csrf_token() }}'  
                },  
                success: function (data) {  
                    $('#result').html('<h2>' + data.name + '</h2><img src="' + data.image_url + '" alt="' + data.name + '"><p>Rarity: ' + data.rarity + '</p>');  
                }  
            });  
        });  
    });  
</script>  

</body>  
</html>