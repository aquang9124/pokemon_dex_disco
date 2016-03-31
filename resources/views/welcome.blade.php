@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">What's That Pokemon?</h2>
                </div>
                <div class="panel-body">
                    <form action="backend" method="post">
                        <div class="form-group">
                            <label>Enter a pokemon's national pokedex number:</label>
                            <input type="number" name="poke_id" class="form-control" required="required" v-model="poke_id" @keydown.enter.prevent="submitId">
                        </div>
                    </form>
                    <img :src="poke_img" class="poke-box" @click="showInfo">
                    <div class="info-box" v-show="poke_info">
                        <p>@{{ poke_info.name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection