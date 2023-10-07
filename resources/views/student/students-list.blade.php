<?php
/**
 * @var Illuminate\Pagination\LengthAwarePaginator $paginator
 * @var Illuminate\Http\Resources\Json\AnonymousResourceCollection $students
 */
?>
@extends('layouts.main')

@section('title', __('Students'))

@section('content')
  <div class="container">
    @if($students->count())
      <table class="table table-bordered table-striped">
        <tr>
          <th>ID</th>
          <th>{{ __('Name') }}</th>
          <th>{{ __('Surname') }}</th>
          <th>{{ __('Created At') }}</th>
          <th>{{ __('Updated At') }}</th>
        </tr>
          <?php /** @var App\Models\Student $student */ ?>
        @foreach($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->created_at }}</td>
            <td>{{ $student->updated_at }}</td>
          </tr>
        @endforeach
      </table>
    @else
      <div class="align-content-center">
        <h3>{{__('No students in the list')}}</h3>
      </div>
    @endif
  </div>
@endsection
