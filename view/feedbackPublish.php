<?php
/**
 * Created by PhpStorm.
 * User: MAHESALINGAM_MI-ESIG
 * Date: 08.10.2018
 * Time: 15:18
 */

include_once('header.php');

$feedbackId = $_GET['id'];

include_once('../model/feedback_model.php');
//include_once('../model/foodintolerance_model.php');
$detailfeedback = fctfeedbackList($feedbackId);
//$listeIntolerances = fctFoodintoleranceList();

?>

<div class="row">

    <div class="container center col-5">

        <div class="fform">

            <h3>Publier un avis</h3>
            <form class="cf1" method="post" action="../controller/feedback_controller.php">
                <input type="hidden" name="action" value="feedbackPublish"/>

                <input type="text" name="feedbackName" size=50 placeholder="Nom de la personne"
                       value="<?= $detailfeedback[0]['FULL_NAME'] ?>" required autofocus disabled/><br/>
                <input type="text" name="feedbackTitle" size=50 placeholder="Nom de l'avis"
                       value="<?= $detailfeedback[0]['TITLE'] ?>" required autofocus disabled/><br/>
                <input type="text" name="feedbackNote" size=50 placeholder="Note de l'avis"
                       value="<?= $detailfeedback[0]['NOTE'] ?>" required autofocus disabled/><br/>
                <input type="text" name="feedbackMessage" size=50 placeholder="Message de l'avis"
                       value="<?= $detailfeedback[0]['MESSAGE'] ?>" required autofocus disabled/><br/>
                <input type="text" name="feedbackEmail" size=50 placeholder="Email de la personne"
                       value="<?= $detailfeedback[0]['EMAIL'] ?>" required autofocus disabled/><br/>


                <select name ="feedbackValue"><option value ="1">Publié</option> <option value ="0">Dépublié</option></select><br/>

                <input type="hidden" name="feedbackId" value=<?= $feedbackId ?> />

                <button type="submit">Publier</button>

            </form>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
