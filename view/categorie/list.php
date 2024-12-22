<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Catégories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .add-link {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .add-link:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f8f9fa;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }

        .action-links a {
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s ease;
        }

        .action-links .delete {
            background-color: #dc3545; /* Rouge */
        }

        .action-links .delete:hover {
            background-color: #a71d2a;
        }

        .action-links .edit {
            background-color: #28a745; /* Vert */
        }

        .action-links .edit:hover {
            background-color: #19692c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestion des Catégories</h1>
        <a class="add-link" href="?controller=categorie&&action=add">Ajouter une Catégorie</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($c = pg_fetch_assoc($categories)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($c['id']) ?></td>
                        <td><?= htmlspecialchars($c['libelle']) ?></td>
                        <td class="action-links">
                            <a href="?controller=categorie&&action=delete&&id=<?= htmlspecialchars($c['id']) ?>" class="delete">Supprimer</a>
                            <a href="?controller=categorie&&action=edit&&id=<?= htmlspecialchars($c['id']) ?>" class="edit">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
