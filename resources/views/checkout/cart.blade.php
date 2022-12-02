@extends('layouts.app')

@section('content')
<x-checkout.products :items="$items" :subtotal="$subtotal" />
@endsection