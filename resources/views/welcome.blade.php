@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h2 class="text-center">Pokedex</h2>
                </div>
                <div class="panel-body">
                    <form action="backend" method="post">
                        <div class="form-group">
                            <label>Enter a pokemon's national pokedex number:</label>
                            <input type="number" name="poke_id" class="form-control" required="required" v-model="poke_id" @keydown.enter.prevent="submitId">
                        </div>
                    </form>
                    <img :src="poke_img" class="poke-box" @click="getInfo">
                    <div class="name-box" v-show="poke_info">
                        <h2 class="text-center initializer" @click="revealInfo">@{{ poke_info.name | capitalize }}</h2>
                    </div>
                    <div class="info-box" v-show="show_info">
                        <h2 class="text-center"><strong>Abilities</strong></h2>
                        <ul class="list-group">
                            <li class="list-group-item text-center" v-for="abilities in poke_info.abilities">
                                @{{ abilities.ability.name | uppercase }}
                            </li>
                        </ul>
                        <h2 class="text-center"><strong>Moves</strong></h2>
                        <ul class="list-group">
                            <li class="list-group-item text-center" v-for="moves in poke_info.moves">
                                @{{ moves.move.name | uppercase }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<!-- Pokemon bg music -->
<!-- <audio src="/music/pokemon_theme_song.ogg" autoplay>
    <p>If you are reading this, it is because your browser does not support the audio element.</p>
    <embed src="/music/pokemon_theme_song.ogg" width="180" height="90" hidden="true" />
</audio> -->
@endsection