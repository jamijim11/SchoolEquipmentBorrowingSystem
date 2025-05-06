@extends('layouts.user.index')


@section('content')

                    <form action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
               
@endsection
