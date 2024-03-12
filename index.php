<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    
    <a href="#" class="apiBtn">Click here</a>

    <script>

            function renderUsers(data)
            {
                // qui renderizzo come voglio i dati restituiti dal server
                document.write("{")
                document.write("<br>")
                document.write("\"status\": "+data.status )
                document.write(",<br>")
                document.write( "\"message\": "+data.message )      
                document.write(",<br>")            
                document.write("\"payload\": ")
                data.payload.forEach(user => document.write(user.name+", ")) 
                document.write("<br>")
                document.write("}")
                
                            
            }

            document.querySelector('.apiBtn').addEventListener('click',
            function(){
                fetch('users.php')
                .then(response => response.json())
                
                .then(data => renderUsers(data)) 
                .catch(error => console.error('Error:', error))
            }
            )
        </script>

</body>
</html>
