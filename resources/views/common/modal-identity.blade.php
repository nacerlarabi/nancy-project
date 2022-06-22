<!-- début modal 1 identité-->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center bg-primary" >
                <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <h3 class="mb-3">Civilité</h3>
                <div class="md-form mb-3">
                    <input type="radio" name="gender" value="male" required><label> Monsieur</label>
                    <input type="radio" name="gender" value="female"> <label> Madame</label>
                </div>
                <div class="md-form mb-3">
                    <input type="radio" name="status" value="student" required> <label> Etudiant</label>
                    <input type="radio" name="status" value="high-school-student"> <label> Lycéen</label>
                    <input type="radio" name="status" value="other"> <label> Autre</label>
                </div>

                <div class="md-form mb-3">
                    <input type="text" id="first-name" placeholder="Votre prénom" class="form-control validate" required>
                </div>

                <div class="md-form mb-3">
                    <input type="text" id="last-name" placeholder="Votre nom" class="form-control validate" required>
                </div>

                <div class="md-form mb-3">
                    <input type="date" id="birthdate" placeholder="Votre date de naissance" class="form-control validate" required>
                </div>
                <div class="md-form mb-3">
                    <input type="text" id="nationality" placeholder="Votre nationalité" class="form-control validate" required>
                </div>

                <div class="text-center mb-3">
                    <button id="modal1-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a data-toggle="modal" data-dismiss="modal" data-target="#modal2">Soumettre et passer à l'étape suivante </a></button>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small grey-text d-flex justify-content-end">Étape 1/7</p>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- fin modal 1 identité-->