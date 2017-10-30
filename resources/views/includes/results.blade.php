@extends('layouts.app')

@section('content')

    <div>
        @include('includes.search')
    </div>
    <div class="container">
        <div class="col-sm-8 col-sm-push-2">
        
        <table class="table table-bordered table-hover" >

            @if($books->count())
                <thead>
                    <th>Name</th>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->book_name }}</td>
                    </tr>
                    @endforeach
                </tbody>

                @else
                <tr>
                    <td colspan="3">Result not found.</td>
                </tr>
                @endif

            </table>

        <div class="col-sm-10 col-sm-push-1">
            {{ $books->links() }}
        
        </div>
        </div>
    </div>
@stop