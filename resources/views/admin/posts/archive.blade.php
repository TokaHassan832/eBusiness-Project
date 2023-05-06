@extends('admin.layouts.master')

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Archived Posts</strong>
                    </div>
                    <div class="card-body">

                        <x-flash-message/>
                        @unless(count($posts)==0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">title</th>
                                    <th scope="col">excerpt</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{!! $post->excerpt !!}</td>
                                        <td>
                                            <a href="{{ route('posts.restore',$post->id) }}" style="color:lightgreen" class="px-2">Restore</a>
                                            <form action="{{ route('posts.forceDestroy',$post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" style="color: red" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <p class="px-4">No Posts Found..</p>
                                @endunless
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
@endsection


