<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Catégorie</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #ffffff; /* Arrière-plan blanc */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.8rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input[type="text"]:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 6px rgba(74, 144, 226, 0.4);
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            background: linear-gradient(to right, #4a90e2, #357abd);
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background: linear-gradient(to right, #357abd, #2d6aa6);
        }

        button[type="submit"]:active {
            transform: scale(0.98);
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-group input::placeholder {
            color: #aaa;
            font-style: italic;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            .form-container h2 {
                font-size: 1.6rem;
            }

            .form-group input[type="text"] {
                padding: 10px;
                font-size: 13px;
            }

            button[type="submit"] {
                font-size: 15px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Ajouter une Catégorie</h2>
        <form action="?controller=categorie&&action=save" method="POST">
            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input 
                    type="text" 
                    name="libelle" 
                    id="libelle" 
                    placeholder="Entrez le libellé" 
                    required
                >
            </div>

            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>
