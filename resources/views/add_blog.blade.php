<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body class="my-3 py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 60px">
                <h1 class="text-center">Add Blog Post</h1>
                <a href="{{ route('blog') }}" class="btn btn-success">All Blog</a>
                <form action="{{ route('store.blog') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Blog Title</label>
                        <input type="text" class="form-control" name="name" placeholder="write your blog title">
                    </div>

                    <div class="form-group">
                        <label for="">Blog Desc</label>
                        <textarea class="form-control" id="summernote" name="desc"></textarea>
                        <input class="btn btn-info" type="submit" value="Add Blog">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write Blog Post..',
                tabsize: 2,
                height: 100
            });
        });
    </script>
</body>

</html>
