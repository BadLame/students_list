<?php
/**
 * @var App\Models\Student $student
 */
?>

@extends('layouts.main')

@section('title', $student->full_name)

@section('content')
  <div class="container">
    <form method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $student->id }}">
      <div class="form-group">
        <label for="name">{{ __('Name') }}</label>
        <input
          class="form-control"
          id="name"
          name="name"
          aria-describedby="name"
          placeholder="{{ __('Enter name') }}"
          value="{{ $student->name }}"
          autocomplete="off"
          required
        >
      </div>
      <div class="form-group">
        <label for="surname">{{ __('Surname') }}</label>
        <input
          class="form-control"
          id="surname"
          name="surname"
          placeholder="{{ __('Enter surname') }}"
          value="{{ $student->surname }}"
          autocomplete="off"
          required
        >
      </div>
      <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
  </div>
@endsection
