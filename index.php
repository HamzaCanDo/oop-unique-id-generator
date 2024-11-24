<?php
require_once 'UniqueIdGenerator.php';

$idGenerator = new UniqueIdGenerator();

$generatedId = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $generatedId = $idGenerator->generateId();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique ID Generator</title>
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 65vh;              
            margin: 0;                  
            background-color: #f4f4f4;  
            font-family: "Quicksand", sans-serif;
        }
        .container {
            text-align: center;        
        }
        h1, h2 {
            margin: 0;  
        }
    </style>
</head>
<body>

<div class="container">
    <h2>PHP OOP Unique ID Generator</h2>

    <?php if ($generatedId): ?>
        <p><h2>Generated ID:</h2> <h1><?php echo htmlspecialchars($generatedId); ?></h1></p>
    <?php endif; ?>

    <form method="POST">
        <button type="submit">Generate New ID</button>     
    </form>
</div>

</body>
</html>
