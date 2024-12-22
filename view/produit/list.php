<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f9fafa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 2rem;
        }

        .add-product {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .add-product:hover {
            background-color: #357abd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 14px;
        }

        table th, table td {
            padding: 14px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f4f6f9;
            color: #444;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f2f4f8;
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
            background-color: #dc3545;
        }

        .action-links .delete:hover {
            background-color: #a71d2a;
        }

        .action-links .update {
            background-color: #28a745;
        }

        .action-links .update:hover {
            background-color: #1c6d31;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Produits</h1>
        <a href="?controller=produit&&action=add" class="add-product">+ Ajouter un produit</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($p = pg_fetch_assoc($produits)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($p['id']) ?></td>
                        <td><?= htmlspecialchars($p['libelle']) ?></td>
                        <td><?=$p['qt'] ?></td>
                        <td><?= $p['pu'] ?> €</td>
                        <td><?= $p['idcat'] ?></td>
                        <td>
                            <div class="action-links">
                                <a href="?controller=produit&&action=delete&id=<?= htmlspecialchars($p['id']) ?>" class="delete">Supprimer</a>
                                <a href="?controller=produit&&action=edit&id=<?= htmlspecialchars($p['id']) ?>" class="update">Modifier</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
