<template>

    <form @submit="formSubmit" id="add-comment" class="add-comment  custom-form" name="rangeCalc">

        <input type="hidden" v-model="appEcole">

        <fieldset>
            <div class="review-score-form fl-wrap">
                <div class="review-range-container">

                    <div class="review-range-item">
                        <div class="range-slider-title">glisser le score</div>
                        <div class="range-slider-wrap ">
                            <input type="text" class="rate-range" data-min="1" data-max="5" v-model="score" data-step="1" value="1">

                        </div>
                    </div>

                </div>
                <div class="review-total">
                    <span><input type="text" name="score"   data-form="AVG({scoreFrom})" value="0"></span>
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
        <ul>
            <li>{{output}}</li>
        </ul>

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
                score:'5',
                appEcole: '',
                output: ''
            };
        },

        methods: {
            scoreRange(){

            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post(myUrl, {
                    name: this.name,
                    email: this.email,
                    avis: this.avis,
                    score: this.score,
                    appEcole: ecoleId,
                })
                    .then(function (response) {
                        currentObj.output = response.data.success;
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
            }
        }
    }
</script>
