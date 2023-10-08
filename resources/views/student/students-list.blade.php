<?php
/**
 * @var Illuminate\Pagination\LengthAwarePaginator $paginator
 * @var Illuminate\Http\Resources\Json\AnonymousResourceCollection $students
 */
$curPage = $paginator->currentPage();
$previousPageUrl = $paginator->previousPageUrl();
$nextPageUrl = $paginator->nextPageUrl();
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
          <th class="text-center"></th>
        </tr>
        <?php /** @var App\Models\Student $student */ ?>
        @foreach($students as $student)
          <tr>
            <td class="text-center">{{ $student->id }}</td>
            <td class="text-center">{{ $student->name }}</td>
            <td class="text-center">{{ $student->surname }}</td>
            <td class="text-center">{{ $student->created_at_fmt }}</td>
            <td class="text-center">{{ $student->updated_at_fmt }}</td>
            <td class="text-center">
              <a href="{{ route('students.edit-show', ['student' => $student->id]) }}">{{ __('Edit') }}</a>
            </td>
          </tr>
        @endforeach
      </table>
      <nav class="d-flex justify-content-end">
        <ul class="pagination">
          <li class="page-item @if($paginator->onFirstPage()) disabled @endif">
            <a class="page-link" href="{{ $paginator->url(1) }}">{{ __('First') }}</a>
          </li>
          @if($paginator->previousPageUrl())
            <li class="page-item">
              <a class="page-link" tabindex="-1"
                 href="{{ $previousPageUrl }}">{{ $curPage - 1 }}</a>
            </li>
          @endif
          <li class="page-item @if($paginator->currentPage() == $curPage) disabled @endif">
            <a class="page-link" tabindex="-1"
               href="#">{{ $curPage }}</a>
          </li>
          @if($paginator->nextPageUrl())
            <li class="page-item">
              <a class="page-link" tabindex="-1"
                 href="{{ $nextPageUrl }}">{{ $curPage + 1 }}</a>
            </li>
          @endif
          <li class="page-item @if($paginator->onLastPage()) disabled @endif">
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ __('Last') }}</a>
          </li>
        </ul>
      </nav>
    @else
      <div class="text-center">
        <h3>{{__('No students in the list')}}</h3>
      </div>
    @endif
  </div>
@endsection
