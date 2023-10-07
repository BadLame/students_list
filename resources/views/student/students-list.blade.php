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
          <th class="text-center">ID</th>
          <th class="text-center">{{ __('Name') }}</th>
          <th class="text-center">{{ __('Surname') }}</th>
          <th class="text-center">{{ __('Created At') }}</th>
          <th class="text-center">{{ __('Updated At') }}</th>
        </tr>
          <?php /** @var App\Models\Student $student */ ?>
        @foreach($students as $student)
          <tr>
            <td class="text-center">{{ $student->id }}</td>
            <td class="text-center">{{ $student->name }}</td>
            <td class="text-center">{{ $student->surname }}</td>
            <td class="text-center">{{ $student->created_at }}</td>
            <td class="text-center">{{ $student->updated_at }}</td>
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
