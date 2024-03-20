<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Barre de Recherche HTML</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .search-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        #affiche {
            margin-top: 20px;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="search-container">
        
            <label for="depart">Départ:</label>
            <input type="text" id="depart"  placeholder="Saisir le lieu de départ...">

            <label for="arrivee">Arrivée:</label>
            <input type="text" id="arrivee" placeholder="Saisir le lieu d'arrivée...">

            <button onclick="recharcher()" type="submit">Rechercher</button>

    </div>
    <div id="affiche">
        
    </div>
</body>
</html>
