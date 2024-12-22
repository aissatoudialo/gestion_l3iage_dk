<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #495057;
        }

        .button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            padding: 8px 12px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            margin-right: 5px;
            color: white;
        }

        .actions .delete {
            background-color: #dc3545;
        }

        .actions .delete:hover {
            background-color: #a71d2a;
        }

        .actions .edit {
            background-color: #28a745;
        }

        .actions .edit:hover {
            background-color: #19692c;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Liste des Utilisateurs</h2>
    <a href="?controller=utilisateur&&action=add" class="button">+ Ajouter un Utilisateur</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($u = pg_fetch_assoc($utilisateurs)) { ?>
                <tr>
                    <td><?= $u['id'] ?></td>
                    <td><?= $u['nom'] ?></td>
                    <td><?= $u['prenom'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td><?= $u['password'] ?></td>
                    <td class="actions">
                        <a href="#" class="delete" onclick="confirmDelete(<?= $u['id'] ?>)">Supprimer</a>

                            <script>
                            function confirmDelete(id) {
                                if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
                                    
                                    window.location.href = "?controller=utilisateur&action=delete&id=" + id;
                                }
                            }
                            </script>
                        <a href="?controller=utilisateur&&action=edit&id=<?= $u['id'] ?>" class="edit">Modifier</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
