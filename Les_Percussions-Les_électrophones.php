<?php
include('Partiel/header.php');

echo "<title>Instruments à Percussions - Les électrophones</title>";
?>
<br>
<caption>
    <p class="text-center caption bg-black">Les électrophones</p>
</caption>
<table class="table container">
    <thead>
        <!--tr = Lignes-->
        <tr class="table-dark text-center tableau">
            <!--th = Header-->
            <th scope="col">Instruments</th>
            <th scope="col">Images</th>
        </tr>
    </thead>

    <tr>
        <!--td = Cellule-->
        <td class="table-dark text-center tableau">Piano électrique</td>
        <td class="text-center"><img src="Images/Piano électrique.png" alt="Piano électrique"></td>
    </tr>
    <tr>
        <td class="table-dark text-center tableau">Synthétiseur</td>
        <td class="text-center"><img src="Images/Synthé.png" alt="Synthétiseur"></td>
    </tr>
    <tr>
        <td class="table-dark text-center tableau">Boite à rythme</td>
        <td class="text-center"><img src="Images/Boite à rythme.png" alt="Boite à rythme"></td>
    </tr>
    <tr>
        <td class="table-dark text-center tableau">Orgue électronique</td>
        <td class="text-center"><img src="Images/Orgue-elec.png" alt="Orgue électronique"></td>
    </tr>
</table>

<div class="fixed">
    <?php include('Partiel/footer.php') ?>
</div>