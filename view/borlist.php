<?php
include "page/header.php";

$list = \controller\DataObject::getProp('borList');
?>

<main>
    <section>
        <h2>Ide jön boraim listája</h2>

        <table>

            <?php foreach ($list as $oneRow): ?>

            <tr>
                <td><?=$oneRow->getBorId()?></td>
                <td><?=$oneRow->getBorNev()?></td>
                <td><?=$oneRow->getBorTipus()?></td>
                <td><?=$oneRow->getBorPalackozva()?></td>
            </tr>

            <?php endforeach; ?>

        </table>


    </section>
</main>

<?php
include "page/footer.php";
?>
