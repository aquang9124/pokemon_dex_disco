<template>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default" v-for="abilities in poke_info.abilities">
            <div class="panel-heading">
                <h4 class="panel-title text-center">
                    <a data-toggle="collapse" data-parent="#accordion" :href="collapseElement">
                        @{{ abilities.ability.name | uppercase }}
                    </a>
                </h4>
            </div>
            <div class="panel-collapse collapse in">
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['poke_perm'],
        
        data() {
            return {
                poke_abilities: ""
            };
        },

        created() {
            this.$http.get('http://pokeapi.co/api/v2/ability/' + this.poke_perm).then(function(res) {
                console.log(res);
                console.log(this.poke_perm)
            });
        },
    };
</script>