@extends('layouts.home')
@section('title', $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords', $setting->keywords)
