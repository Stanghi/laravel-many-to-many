@extends('layouts.app')

@section('title')
    | Admin Types
@endsection

@section('content')
    <div class="container">

        <div class="d-flex align-items-center justify-content-between">
            <h1 class="my-5">Types</h1>
        </div>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Add a new type...">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Projects count</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>
                            <form action="{{ route('admin.types.update', $type) }}">
                                @csrf
                                @method('PATCH')
                                <input class="border-0" type="text" name="name" value="{{ $type->name }}">
                            </form>
                        </td>
                        <td>{{ count($type->projects) }}</td>
                        <td class="d-flex">
                            <button type="submit" class="btn btn-outline-primary me-3">Update</button>
                            @include('admin.partials.form-delete', [
                                'route' => 'types',
                                'message' => "Confermi l'eliminatione di $type->name ?",
                                'entity' => $type,
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
