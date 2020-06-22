@extends('layout')
 
@section('content')
    
        <section class="about section">
            <div class="section-inner">   
   
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Alias</th>
                        <th>Title</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td><img width="100" src="/storage/pages/{{ $page->image }}" /></td>
                        <td>{{ $page->alias }}</td>
                        <td>{{ $page->title }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('page.edit',$page->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </section>
      
@endsection