<?php
include('Partiel/header.php');

echo "<title>Instruments à Cordes pincées</title>";
?>
<br>
<div class="container">
    <p>Il existe 3 catégorie d'Instruments à cordes :
    <ol class="instruments">
        <li class="new-font">Les cordes pincées, dont nous allons aborder le sujet sur cette page</li>
        <li class="new-font">Les cordes frappées</li>
        <li class="new-font">Les cordes frottées</li>
    </ol>
    </p>
</div>
<br>
<caption>
    <p class="text-center caption bg-black">Les cordes pincées</p>
</caption>
<table class="table container">
    <thead>
        <!--tr = Lignes-->
        <tr class="table-dark text-center tableau">
            <!--th = Header-->
            <th scope="col">Instruments</th>
            <th scope="col">Type d'instrument</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
            <!--td = Cellule-->
            <td class="table-dark text-center tableau">Mvett</td>
            <td class="table-dark text-center tableau">Instrument sur baton (cithare)</td>
            <td class="text-center"><img src="Images/Mvet.png" alt="Mvett à 4 calebasses"></td>
        </tr>
        <tr class="text-center">
            <td class="table-dark text-center tableau">Valiha(cithare)</td>
            <td class="table-dark text-center tableau"> Instrument Tubulaire</td>
            <td class="text-center"><img src="Images/Valiha.png" alt="Valiha"></td>
        </tr>
        <tr class="text-center">
            <td class="table-dark text-center tableau">Balalaïka(luth)</td>
            <td class="table-dark text-center tableau">luth à manche long</td>
            <td class="text-center"><img src="Images/Balalaïka.png" alt="Balalaïka(luth)"></td>
        </tr>
        <tr class="text-center">
            <td class="table-dark text-center tableau">Guitare(luth)</td>
            <!--colspan="2" = fusion de 2 colonne-->
            <td colspan="2" class="text-center"><img src="Images/guitares.png" alt="Guitare"></td>
        </tr>
    </tbody>
</table>

<div class="fixed">
    <?php include('Partiel/footer.php') ?>
</div>