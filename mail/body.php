<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 12/04/2017
 * Time: 14:42
 */
?>

<div style="position: relative; padding-left: 15px; padding-right: 15px; float: left">
    <table cellspacing="0">
        <thead>
        <tr>
            <th colspan="2" style="text-align: left; border-bottom: 1px solid #eef1f5">
                <p style="font-size: 16px; font-family: sans-serif">Contacto efectuado atravéz do site para recrutamento:</p>
            </th>
        </tr>
        </thead>

        <tbody>
        <p>Nome: <?= $model->name ?></p>
        <p>Email: <?= $model->email ?></p>
        <p>Contacto: <?= $model->contact ?></p>
        <p>Motivação: <?= $model->motivation ?></p>
        </tbody>

    </table>
</div>
