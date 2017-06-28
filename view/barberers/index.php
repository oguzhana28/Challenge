<h2>Uw rooster</h2>

    <table class="table">
        <tr>
            <th >Datum</th>
            <th >Start tijd</th>
            <th >Eind tijd</th>
            <th >Kapper/Kapster</th>
            <th >Klant naam</th>

            <th colspan="3">Actie</th>
            <th >Resultaat</th>
        </tr>

        <?php
        if ($planning == false) {
            echo '<tr><td colspan="9">Geen data aanwezig.</td></tr>';

        } else {

            foreach ($planning as $plan) { ?>
                <tr>
                    <td><?= $plan['student.name']; ?></td>
                    <td><?= $plan['company.name']; ?></td>
                    <td><?= $plan['company.city']; ?></td>
                    <td><?= $plan['exam_name']; ?></td>
                    <td><?= $plan['date']; ?> <?= $plan['time']; ?></td>
                    <td><span class="label <?= $plan['status.class']; ?>"><?= $plan['status.name']; ?></span></td>
                    <?php if($plan['status_id']<3) { ?>
                        <td><a href="<?= URL ?>planning/success/<?= $plan['id'] ?>">Geslaagd</a></td>
                        <td><a href="<?= URL ?>planning/fail/<?= $plan['id'] ?>">Gezakt</a></td>
                        <td><a href="<?= URL ?>planning/reschedule/<?= $plan['id'] ?>">Verzet</a></td>
                    <?php } else { ?>
                        <td></td>
                        <td></td>
                        <td></td>
                    <?php } ?>

                    <td><span class="label <?= $plan['result.class']; ?>"><?= $plan['result.name']; ?></span></td>

                </tr>
            <?php }
        } ?>

    </table>
    <a href="<?= URL ?>planning/create">Toevoegen</a>
</div>
