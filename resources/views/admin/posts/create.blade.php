@extends('layouts.master')
@section('content')
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" required></x-form.input>
            <x-form.input name="thumbnail" type="file" required></x-form.input>
            <x-form.input name="slug" required></x-form.input>
            <x-form.input name="excerpt" required></x-form.input>
            <x-form.input name="body" required></x-form.input>

            <x-form.field>

                <x-form.label name="category"></x-form.label>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"></x-form.error>

            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
@endsection()
