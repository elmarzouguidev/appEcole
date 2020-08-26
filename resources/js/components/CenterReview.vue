<template>

    <form @submit="formSubmit" id="add-comment" class="add-comment  custom-form" name="rangeCalc">

        <input type="hidden" v-model="appEcole">

        <fieldset>
            <div class="review-score-form fl-wrap">
                <div class="review-range-container">

                    <div class="review-range-item">
                        <div class="range-slider-title">glisser le score</div>
                        <div class="range-slider-wrap ">
                            <input type="text" class="rate-range" data-min="1" data-max="5" v-model="scoreFrom"
                                   name="scoreFrom" data-step="1">

                        </div>
                    </div>

                </div>
                <div class="review-total">
                    <span><input type="text" v-model="score" data-form="AVG({scoreFrom})" value="0"></span>
                    <strong>score</strong>
                </div>
            </div>
            <div class="list-single-main-item_content fl-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <label><i class="fal fa-user"></i></label>
                        <input v-model="name" type="text" placeholder="Votre nom *">

                    </div>
                    <div class="col-md-6">
                        <label><i class="fal fa-envelope"></i></label>
                        <input type="email" v-model="email" placeholder="E-mail Address* non publié">
                    </div>
                </div>
                <textarea v-model="avis" cols="40" rows="3" placeholder="Avis"></textarea>
                <div class="clearfix"></div>

                <div class="clearfix"></div>
                <button class="btn color2-bg float-btn">
                    envoyer
                    <i class="fal fa-paper-plane"></i>

                </button>

            </div>

        </fieldset>

        <div v-if="errors.length" class="dashboard-list-box mar-dash-list fl-wrap">
            <div v-for="error in errors" class="dashboard-list fl-wrap">
                <div class="dashboard-message">
                    <span class="new-dashboard-item"><i class="fal fa-times"></i></span>
                    <div class="dashboard-message-text">
                        <i class="far fa-check red-bg"></i>
                        <p>{{ error }}</p>
                    </div>
                </div>
            </div>
        </div>

    </form>
</template>

<script>
    export default {

        mounted() {
            // console.log('Component mounted.')
        },
        data() {
            return {
                name: '',
                email: '',
                avis: '',
                score: '5',
                scoreFrom: '',
                appEcole: '',
                output: '',
                errors: [],
            };
        },

        methods: {

            alertDisplay(msg) {
                // $swal function calls SweetAlert into the application with the specified configuration.
                this.$swal("succès", msg, 'success');

            },
            alertDisplayError() {
                this.$swal("error", 'un problème est survenu lors de l\'ajout', 'error')
            },
            chekForm() {
                if (this.name && this.email && this.avis) {
                    return true;
                }

                this.errors = [];

                if (!this.name) {
                    this.errors.push('le nom est requis .');
                }
                if (!this.email) {
                    this.errors.push('email adresse est requis .');
                }
                if (!this.avis) {
                    this.errors.push("l\'avis est requis .");
                }
            },
            formSubmit(e) {
                e.preventDefault();
                if (this.chekForm()) {

                    let currentObj = this;

                    axios.post(myUrl, {
                        name: this.name,
                        email: this.email,
                        avis: this.avis,
                        score: this.score,
                        appEcole: centerId,
                    })
                        .then(function (response) {
                            //currentObj.output = response.data.success;

                            currentObj.alertDisplay(response.data.success);
                        })
                        .catch(function (error) {
                            currentObj.alertDisplayError();
                        });
                }
                e.target.reset();

            }
        }
    }
</script>
