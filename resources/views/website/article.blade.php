<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<div class="container">
    <h1 class="title ularge fw-medium">Hi, I'm <span class="highlight">{{ Auth::user()->name }}</span> 👋
    </h1>
    <h1>Article</h1>
    <div class="d-flex gap-2 justify-content-between">
        <div>
            <a href="{{ route('home') }}" class="btn btn-primary" type="button">Home Page</a>
            <a href="{{ route('category') }}" class="btn btn-Secondary" type="button">Category</a>
        </div>
        
        <a href="{{ route('article.create') }}" class="btn btn-success" type="button">Create Article</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Title</th>
                <th>Read Time</th>
                <th>Difficulty</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $key => $article)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->readtime }}</td>
                <td>{{ $article->difficulty }}</td>
                <td>{{ Str::limit($article->content, 50) }}</td> 
                <td>
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $article->id }}">
                        Delete
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $article->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this article post?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!-- Delete form -->
                                    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>                
            </tr>
            @endforeach
        </tbody>        
    </table>
</div>

