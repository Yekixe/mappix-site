<h2>Contact</h2>

<form method="post">
    <label>Nom</label>
    <input name="nom" required>
    <label>Message<label>
    <textarea name="message" required></textearea>
    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER["REQUEST-METHOD"] === "POST") {
    echo "<p>Merci " . htmlspecialchars($_POST["nom"]);
}
?>zfzefezf