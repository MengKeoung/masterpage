<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h1>create Article</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('article.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="readtime" class="form-label">Read Time</label>
                                    <input type="text" class="form-control" id="readtime" name="readtime" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="difficulty" class="form-label">Difficulty</label>
                                    <input type="number" class="form-control" id="difficulty" name="difficulty"
                                        required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <input type="text" class="form-control" id="content" name="content" required>
                            </div>
                            <!-- categories checkboxes -->
                            <div class="mb-3">
                                <label for="categories" class="form-label">categories</label>
                                <div>
                                    @foreach ($categories as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="category_ids[]"
                                                value="{{ $category->id }}" id="category_{{ $category->id }}">
                                            <label class="form-check-label" for="category_{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <a href="{{ route('article') }}" class="btn btn-secondary me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
