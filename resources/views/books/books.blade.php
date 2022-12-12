@extends('layouts.master')

@push('styles')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@endpush

@section('content')
<div class="row">
    <form action="{{ route("books.index") }}" method="post">
        @csrf
        <input type="text" id="myInput" name="search" placeholder="Search for names..">
        <input type="submit" value="search">
    </form>
    <table>
        <tr>
            <th>#</th>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Book Cover</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @forelse($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->unique_id }}</td>
            <td>{{ $book->book_name }}</td>
            <td>
                <img src={{ asset($book->book_cover) }} alt="{{ $book->book_cover }}">
            </td>
            <td>
                @if($book->is_available == true)
                Available
                @else
                Not Available
                @endif
            </td>
            <td>
                @if($book->is_available == true)
                    <a href="{{ route('book.issue', $book->id) }}" class="btn btn-primary">Issue</a>
                @else
                --
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">No records found.</td>
        </tr>
        @endforelse

    </table>
</div>
<!-- end row -->


<!-- end row -->


<!-- end row -->
@endsection

@push('scripts')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endpush
