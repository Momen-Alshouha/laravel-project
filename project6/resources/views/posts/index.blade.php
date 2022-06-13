
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>All Questions</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Create Post</a>
            <table class="table table-bordered">
                <thead>
                    <th width="80px"> Question</th>
                 
                  
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    
                    <td>{{ $post->title }}</td>
                  
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn "style='background:#FFB452;color'>View Post</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
