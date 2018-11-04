<?php
$res = $bdd->query('SELECT * FROM news');
while ($data = $res->fetch()) {
    ?>
    <p>
        <strong>Test</strong> : <?php echo $data['titre']; ?>
    </p>
    <?php
}
$res->closeCursor();
?>