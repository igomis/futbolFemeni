@extends('layouts.equips')
@section('title', " Guia d'Equips" )
@section('content')
    <x-equip
        :nom="$equip->nom"
        :estadi="$equip->estadi->nom"
        :titols="$equip->titols"
        :escut="$equip->escut"
    />
@endsection

