<?
require_once '../vendor/autoload.php';

$quote = new \RandomQuotes\RandomQuotes();

$q = $quote->generate();
?>

<figure style="margin: 10% auto; padding: 20px; width: 25%; background: whitesmoke">
    <blockquote>
        <p><?= $q['quoteText'] ?></p>
    </blockquote>
    <figcaption>— <?= $q['quoteAuthor'] ?></cite></figcaption>
</figure>